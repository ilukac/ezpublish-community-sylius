<?php

namespace EzSylius\Sylius\CoreBundle\Controller;

use Sylius\Component\Cart\Event\CartItemEvent;
use Sylius\Component\Cart\Resolver\ItemResolvingException;
use Sylius\Component\Cart\SyliusCartEvents;
use Sylius\Component\Resource\Event\FlashEvent;
use Symfony\Component\EventDispatcher\GenericEvent;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sylius\Bundle\CartBundle\Controller\CartItemController as BaseCartItemController;

class CartItemController extends BaseCartItemController
{
    /**
     * Adds item to cart.
     * It uses the resolver service so you can populate the new item instance
     * with proper values based on current request.
     *
     * If it is ajax request returns JSON if not redirects to cart summary page
     *
     * @param Request $request
     *
     * @return Response
     */
    public function addAction(Request $request)
    {
        // todo task 4
        // override add action in way if it is AJAX request return JSON with proper data if not redirect to summary page
        // as it is default

        $cart = $this->getCurrentCart();
        $emptyItem = $this->createNew();

        $eventDispatcher = $this->getEventDispatcher();

        try {
            $item = $this->getResolver()->resolve($emptyItem, $request);
        } catch (ItemResolvingException $exception) {

            return new JsonResponse(
                array(
                    'errorMessage' => $exception->getMessage(),
                ),
                400
            );
        }

        $event = new CartItemEvent($cart, $item);
        $event->isFresh(true);

        // Update models
        $eventDispatcher->dispatch(SyliusCartEvents::ITEM_ADD_INITIALIZE, $event);
        $eventDispatcher->dispatch(SyliusCartEvents::CART_CHANGE, new GenericEvent($cart));
        $eventDispatcher->dispatch(SyliusCartEvents::CART_SAVE_INITIALIZE, $event);

        // Write flash message
        $eventDispatcher->dispatch(SyliusCartEvents::ITEM_ADD_COMPLETED, new FlashEvent());

        // if its ajax return json with informations
        if ($request->isXmlHttpRequest()) {
            return new JsonResponse(
                array(
                    'itemsCount' => $cart->getTotalQuantity(),
                    'cartTotal' => $this->get('sylius.templating.helper.currency')->convertAndFormatAmount(
                        $cart->getTotal()
                    ),
                )
            );
        }

        // else return redirect after add
        return $this->redirectAfterAdd($request);
    }

    /**
     * Redirect to specific URL or to cart.
     *
     * @param Request $request
     *
     * @return RedirectResponse
     */
    private function redirectAfterAdd(Request $request)
    {
        if ($request->query->has('_redirect_to')) {
            return $this->redirect($request->query->get('_redirect_to'));
        }

        return $this->redirectToCartSummary();
    }
}



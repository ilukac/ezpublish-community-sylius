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

        return new JsonResponse(array(
            'items' => null,
            'total' => null
        ));
    }
}

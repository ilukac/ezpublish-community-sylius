<?php

namespace EzSylius\Sylius\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Sylius\Component\Order\Model\Order;


class CheckoutController extends Controller
{
    public function thankYouAction()
    {
        $cartProvider = $this->get('sylius.cart_provider.default');

        /** @var Order $order */
        $order = $cartProvider->getCart();

        if (null == $order->getCompletedAt()) {

            throw new NotFoundHttpException('Order not found');
        }

        $cartProvider->abandonCart();

        return $this->render(
            'EzSyliusWebBundle:Frontend/Checkout/Step:thankYou.html.twig',
            array(
                'order' => $order,
            )
        );
    }
}

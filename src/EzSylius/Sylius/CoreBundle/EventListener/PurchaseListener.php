<?php

namespace EzSylius\Sylius\CoreBundle\EventListener;

use Sylius\Bundle\CoreBundle\Event\PurchaseCompleteEvent;
use Sylius\Component\Payment\Model\PaymentInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Sylius\Bundle\CoreBundle\EventListener\PurchaseListener as BasePurchaseListener;


class PurchaseListener extends BasePurchaseListener
{

    public function abandonCart(PurchaseCompleteEvent $event)
    {
        if (in_array(
            $event->getSubject()->getState(),
            array(
                PaymentInterface::STATE_PENDING,
                PaymentInterface::STATE_PROCESSING,
                PaymentInterface::STATE_COMPLETED,
            )
        )) {

            return;
        }

        $event->setResponse(
            new RedirectResponse(
                $this->router->generate($this->redirectTo)
            )
        );
    }

}

<?php

namespace EzSylius\Sylius\CoreBundle\Checkout;

use Sylius\Bundle\FlowBundle\Process\Builder\ProcessBuilderInterface;
use Sylius\Bundle\CoreBundle\Checkout\CheckoutProcessScenario as BaseCheckoutProcessScenario;

class CheckoutProcessScenario extends BaseCheckoutProcessScenario
{
    /**
     * {@inheritdoc}
     */
    public function build(ProcessBuilderInterface $builder)
    {
        $cart = $this->getCurrentCart();

        $builder
            ->add('security', 'sylius_checkout_security')
            ->add('addressing', 'sylius_checkout_addressing')
            ->add('shipping', 'sylius_checkout_shipping')
            ->add('payment', 'sylius_checkout_payment')
            ->add('finalize', 'sylius_checkout_finalize')
            ->add('purchase', 'sylius_checkout_purchase')
        ;

        $builder
            ->setDisplayRoute('sylius_checkout_display')
            ->setForwardRoute('sylius_checkout_forward')
            ->setRedirect('thank_you_page')
            ->validate(function () use ($cart) {
                return !$cart->isEmpty();
            })
        ;
    }
}

<?php

namespace EzSylius\Sylius\CoreBundle\Form\Type;

use Sylius\Bundle\CoreBundle\Form\Type\ShippingMethodType as BaseShippingMethodType;
use Symfony\Component\Form\FormBuilderInterface;

class ShippingMethodType extends BaseShippingMethodType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add(
                'taxCategory',
                null,
                array(
                    'label' => 'sylius.form.product.tax_category',
                )
            );
    }
}

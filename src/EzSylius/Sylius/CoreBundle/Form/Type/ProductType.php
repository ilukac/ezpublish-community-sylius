<?php

namespace EzSylius\Sylius\CoreBundle\Form\Type;

use Sylius\Bundle\CoreBundle\Form\Type\ProductType as BaseProductType;
use Symfony\Component\Form\FormBuilderInterface;

class ProductType extends BaseProductType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
            ->add(
                'bigProduct',
                'checkbox',
                array(
                    'label' => 'Big product',
                )
            );
    }
}

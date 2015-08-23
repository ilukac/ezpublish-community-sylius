<?php

namespace EzSylius\Sylius\CoreBundle\Entity;

use Sylius\Component\Core\Model\ShippingMethod as BaseShippingMethod;
use Sylius\Component\Taxation\Model\TaxableInterface;

class ShippingMethod extends BaseShippingMethod implements TaxableInterface
{
    private $taxCategory;

    /**
     * @return mixed
     */
    public function getTaxCategory()
    {
        return $this->taxCategory;
    }

    /**
     * @param mixed $taxCategory
     */
    public function setTaxCategory($taxCategory)
    {
        $this->taxCategory = $taxCategory;
    }
}
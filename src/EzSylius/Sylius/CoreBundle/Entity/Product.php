<?php

namespace EzSylius\Sylius\CoreBundle\Entity;

use Sylius\Component\Core\Model\Product as BaseProduct;

class Product extends BaseProduct
{
    /**
     * @var string
     */
    private $bigProduct;

    /**
     * @return string
     */
    public function getBigProduct()
    {
        return $this->bigProduct;
    }

    /**
     * @param string $bigProduct
     */
    public function setBigProduct($bigProduct)
    {
        $this->bigProduct = $bigProduct;
    }
}
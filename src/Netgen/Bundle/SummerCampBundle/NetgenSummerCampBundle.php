<?php

namespace Netgen\Bundle\SummerCampBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;

class NetgenSummerCampBundle extends Bundle
{
    /**
     * Builds the bundle
     *
     * @param \Symfony\Component\DependencyInjection\ContainerBuilder $container
     */
    public function build( ContainerBuilder $container )
    {
        parent::build( $container );
    }
    
    public function getParent() 
    {
        return "eZDemoBundle";
    }
}

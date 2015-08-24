<?php

namespace EzSylius\Sylius\WebBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Sylius web bundle override.
 */
class EzSyliusWebBundle extends Bundle
{
    public function getParent()
    {
        return 'SyliusWebBundle';
    }
}

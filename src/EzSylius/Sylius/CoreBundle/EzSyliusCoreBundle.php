<?php

namespace EzSylius\Sylius\CoreBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Sylius core bundle override.
 */
class EzSyliusCoreBundle extends Bundle
{
    public function getParent()
    {
        return 'SyliusCoreBundle';
    }
}

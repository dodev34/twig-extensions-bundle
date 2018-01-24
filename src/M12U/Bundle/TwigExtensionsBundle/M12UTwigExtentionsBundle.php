<?php

namespace M12U\Bundle\TwigExtensionsBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use M12U\Bundle\TwigExtensionsBundle\DependencyInjection\M12UTwigExtentionsExtension;

/**
 * Class M12UTwigExtentionsBundle
 * @package M12U\Bundle\TwigExtensionsBundle
 */
class M12UTwigExtentionsBundle extends Bundle
{
    /**
     * @inheritdoc
     */
    public function getContainerExtension()
    {
        return new M12UTwigExtentionsExtension();
    }
}

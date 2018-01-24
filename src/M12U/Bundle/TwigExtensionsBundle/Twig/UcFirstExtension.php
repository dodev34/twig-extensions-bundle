<?php

namespace M12U\Bundle\TwigExtensionsBundle\Twig;


/**
 * Class UcFirstExtension
 * @package M12U\Bundle\TwigExtensionsBundle\Twig
 */
class UcFirstExtension extends \Twig_Extension
{
    /**
     * @inheritdoc
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('ucfirst', [$this, 'ucFirstMethod'])
        ];
    }

    /**
     * @param string $srting
     *
     * @return string
     */
    public function ucFirstMethod($srting)
    {
        return ucfirst($srting);
    }
}
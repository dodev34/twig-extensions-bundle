<?php

namespace M12U\Bundle\TwigExtensionsBundle\Twig;


/**
 * Class UcWordsExtension
 * @package M12U\Bundle\TwigExtensionsBundle\Twig
 */
class UcWordsExtension extends \Twig_Extension
{
    /**
     * @inheritdoc
     */
    public function getFilters()
    {
        return [
            new \Twig_SimpleFilter('ucwords', [$this, 'ucWordsMethod'])
        ];
    }

    /**
     * @param string $srting
     * @param string $delimiters
     *
     * @return string
     */
    public function ucWordsMethod($srting, $delimiters = " \t\r\n\f\v")
    {
        return ucwords($srting, $delimiters);
    }
}
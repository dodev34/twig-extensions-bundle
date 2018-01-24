Installation
==

````

$ composer require m12u/twig-extensions-bundle

````

Configuration
===


In your  ````AppKernel.php````


````
class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = [
            // ...
            new M12U\Bundle\TwigExtensionsBundle\M12UTwigExtentionsBundle(),
            // ...
        ];
        
        // ...
    }
    
````

Extensions available
===

| Extension                | Filters             |Functions  |
| --------------           |---------------------| -----|
| ````UcWordsExtension```` | ````ucwords````     |  |
| ````UcFirstExtension```` | ````ucfirst````     |  |
# Twig

/**  
    Twig is not the name of a Composer package (it is a Flex alias).  
    Flex resolves that alias for Composer.  
    Flex installs a recipe for symfony/twig-bundle.  
    A recipe is a way for a library to automatically configure itself.  
*/

~~~sh
composer create-project symfony/skeleton flex

cd flex/
composer require twig
composer require profiler
composer require api

symfony server:start

http://localhost:8000
    # Welcome to Symfony
~~~

/**
    To uninstall a recipe:
*/

~~~sh
composer remove profiler
composer remove api
~~~
# Project

~~~sh
composer create-project symfony/skeleton flex
cd flex/
~~~

## Recipe

~~~sh
# Twig is not the name of a Composer package (it is a Flex alias).  
# Flex resolves that alias for Composer.  

# Flex installs a recipe for symfony/twig-bundle.  
# A recipe is a way for a library to automatically configure itself.  

composer require twig
composer require profiler
composer require api

composer remove api
composer remove vendor/package

symfony server:start
http://localhost:8000   # Welcome to Symfony
~~~
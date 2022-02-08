# Twig is not the name of a Composer package (it's a Flex alias).
# Flex resolves that alias for Composer

# Flex installs a recipe for symfony/twig-bundle
# A recipe is a way for a library to automatically configure itself.


composer create-project symfony/skeleton flex

cd flex/
composer require twig
composer require profiler
composer require api

cd public/
php -S localhost:8000


# To uninstall a recipe:
#
#   composer remove profiler
#   composer remove api
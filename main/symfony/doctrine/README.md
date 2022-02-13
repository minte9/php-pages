# Doctrine

~~~sh
composer create-project symfony/skeleton doctrine
cd doctrine/

# Install Doctrine support via the orm Symfony pack

composer require symfony/orm-pack
composer require --dev symfony/maker-bundle

symfony server:start
http://localhost:8000   # Welcome to Symfony
~~~
# Doctrine

~~~sh
composer create-project symfony/skeleton doctrine
cd doctrine/

# Install Doctrine support via the orm Symfony pack

composer require symfony/orm-pack
composer require --dev symfony/maker-bundle

symfony server:start
http://localhost:8000   # Welcome to Symfony


# Database

.env
DATABASE_URL="mysql://admin:password@127.0.0.1:3306/db_name?serverVersion=8.0.27"

php bin/console doctrine:database:create
    # Created database `db_name` for connection named default
~~~

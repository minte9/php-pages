## Project

~~~sh
composer create-project symfony/skeleton doctrine
cd doctrine/

# Install Doctrine support via the orm Symfony pack.

composer require symfony/orm-pack
composer require --dev symfony/maker-bundle

symfony server:start
http://localhost:8000   # Welcome to Symfony
~~~

## Database

~~~sh
# .env
DATABASE_URL="mysql://admin:password@127.0.0.1:3306/db_name?serverVersion=8.0.27"

php bin/console doctrine:database:create
    # Created database `db_name` for connection named default

php bin/console make:entity
    # created: src/Entity/Product.php
    # created: src/Repository/ProductRepository.php

php bin/console make:migration
    # Review the new migration "migrations/Version20220213125613.php"

php bin/console doctrine:migrations:migrate
    # Migrating up to DoctrineMigrations\Version20220213125613
    # Table product created

php bin/console make:entity
    # add descrition property to product entity

php bin/console make:migration
php bin/console doctrine:migrations:migrate
~~~

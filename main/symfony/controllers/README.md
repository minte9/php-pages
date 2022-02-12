# Controllers

~~~sh
    # To save time, you can install Symfony Maker.  
    # Then Symfony can generate a new controller class.  

composer create-project symfony/skeleton controllers
cd controllers/

composer require doctrine/annotations
composer require --dev symfony/maker-bundle

php bin/console make:controller MyController

    # created: src/Controller/MyController.php
    # created: templates/my/index.html.twig

symfony server:start
http://localhost:8000/my	
    
    # Welcome to your new controller
~~~
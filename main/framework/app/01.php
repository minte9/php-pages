<?php
/*
    app/01.php

    cd github/php-pages/main/framework/app/
    php -S localhost:8000

    http://localhost:8000/01.php?name=John  # Hello John
    http://localhost:8000/01.php            # Warning: Undefined array key "name" 
*/

ini_set("display_errors", 1);

$name = $_GET['name'];
printf("Hello %s", $name);  
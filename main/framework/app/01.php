<?php
/*
    app/01.php - HTTP Response

    http://localhost:8000/01.php?name=John
        Hello John

    http://localhost:8000/01.php
        Warning: Undefined array key "name" 
*/

ini_set("display_errors", 1);

$name = $_GET['name'];
printf("Hello %s", $name);  
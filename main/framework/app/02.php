<?php
/*
    app/02.php - Fix Warning
    
    http://localhost:8000/02.php
        Output: Hello World
*/

ini_set("display_errors", 1);

$name = $_GET['name'] ?? "Wolrd"; // Fix Warning
printf("Hello %s", $name);
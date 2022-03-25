<?php
/**
 * Fix Warning - index2.php
 * 
 * php -S localhost:8000
 * 
 * http://localhost/index.php 
 *      Warning: Undefined array key "name"
 * 
 * http://localhost:8000/index2.php?name=John
 *      Hello John
 * http://localhost:8000/index2.php
 *      Hello World
 */

ini_set("display_errors", 1);

$name = $_GET['name'] ?? "Wolrd"; // Fix Warning
printf("Hello %s", $name);
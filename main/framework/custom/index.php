<?php
/** 
 * index.php - HTTP Framework
 * 
 * We will create a HTTP Request / Response framework.
 * 
 * Following the MVC pattern is not the right goal
 * The main goal should be Separartions of Concerns
 * 
 * php -S localhost:8000
 * 
 * http://localhost/index.php?name=John
 *    Hello John
 */

ini_set("display_errors", 1);

$name = $_GET['name'];
printf("Hello %s", $name);
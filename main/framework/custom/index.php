<?php
/** 
 * HTTP Framework (Request/Response) - index.php
 * 
 * php -S localhost:8000
 * http://localhost/index.php?name=John
 *    Hello John
 */

ini_set("display_errors", 1);

$name = $_GET['name'];
printf("Hello %s", $name);
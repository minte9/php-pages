<?php

/**
 * list() 
 * 
 * It is not really a function, but a language construct
 * 
 * List doesn't work with strings
 * Often used with string explode()
 */

$USER = ["John", "34", "07288333"];
$date = '25/05/2012';

list($name, $age) = $USER;
list($day, $month, $year) = explode('/', $date);

print_r("$name is $age years old"); // John is 34 years old
print_r($month); // 05
<?php

/**
 * list() 
 * 
 * Not really a function, but a language construct
 * List doesn't work with strings, use explode()
 * 
 * Extract assign multiple variables ...
 * from key/value array
 */

$USER = ["John", "34", "07288333"];
$date = '25/05/2012';
$DATA = ['b'=>2, 'c'=>3];

list($name, $age) = $USER;
list($day, $month, $year) = explode('/', $date);

print_r("$name is $age years old"); // John is 34 years old
print_r($month); // 05

extract($DATA);
var_dump( $b == 2); // true
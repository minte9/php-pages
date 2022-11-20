<?php
/**
 * stdClass is the default PHP object
 * 
 * Has no properties, methods or parent
 * 
 * When you cast an array as Object, ...
 * you get an instance of stdClass
 */

$A = (object) array(); // OR
$A = new stdClass();

$B = (object) [1, 2];
$B->x = "3";
$B->y = "4";

print_r($B); // stdClass Object( 0=>1, 1=>2, x=>3, y=>4)
<?php
/**
 * Variable are passed by value (not by reference)
 */

$a =  1; 
$x =  $a; 
$y =& $a; // Look Here
$a =  2;

var_dump($x == 1); // true
var_dump($x != 2); // true
var_dump($y == 2); // true
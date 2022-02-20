<?php

/**
 * The name of the desired type is written ...
 * in parentheses before the variable.
 */

$A = array(1, 2, 3);
$B = (string) $A;

var_dump($A); // array(3) { ... }
var_dump($B); // string(5) "Array"

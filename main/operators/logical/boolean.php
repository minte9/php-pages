<?php

/**
 * AND &&
 * True if BOTH operands evaluate to true
 * 
 * OR ||
 * Evaluates to true if EITHER operands true
 * 
 * XOR
 * Evaluates to true if either operands true ...
 * but NOT BOTH
 * 
 * PHP will first convert any other value to a Boolean ...
 * and then perform the operation
 */

$a = 1; $a2 = null; $a3 = 'NULL';

var_dump(isset($a) && isset($a2)); // false
var_dump(isset($a) && isset($a3)); // true

var_dump(isset($a) || isset($a2)); // true
var_dump(isset($a) || isset($a3)); // true

$a = "1"; $b = "abc";

var_dump(is_numeric($a) XOR is_numeric($b)); // true
var_dump($a && $b); // true, automatic convertion to Boolean
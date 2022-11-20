<?php

/**
 * Check if value exists in arrray with isset
 */

$A = [1, 2];
$B = ['a'=>1, 'b'=>NULL];

var_dump( in_array(1, $A) ); // true
var_dump( isset($B['b']) ); // false
var_dump( isset(['a'=>1, 'b'=>NULL]['b']) ); // false
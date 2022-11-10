<?php

/**
 * Merge one or more arrays
 * 
 * If arrays have the same string keys ...
 * the later value for that key will be overwriten
 * 
 * If don't want to ovewrite use the + array union operator
 */

$A = array_merge((array) 'foo', [1, 2]);  
print_r($A); // foo, 1, 2 

# String Keys orverwritten

$B = array_merge(
    ['color'=> 'red', 1], // string keys
    ['a', 'color'=>'green']
); 
print_r($B); // [color] => green [0] => 1 [1] => a

# Numeric keys not overwritten

$B = array_merge(
    [1, 2], // numeric keys
    [3, 4]
); 
print_r($B); // [0] => 1 [1] => 2 [2] => 3 [3] => 4

# Union operator (+)

$A = ['color'=> 'red', 1];
$B = ['color'=>'green', 2, 3];
$C = $A + $B; 
print_r($C); // [color] => red [0] => 1 [1] => 3
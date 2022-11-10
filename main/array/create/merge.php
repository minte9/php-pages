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

$B = array_merge(
    ['color'=> 'red', 1], // string keys
    ['a', 'color'=>'green']
); 
print_r($B); // [color] => green [0] => 1 [1] => a

$B = array_merge(
    [1, 2], // numeric keys
    [3, 4]
); 
print_r($B); // [0] => 1 [1] => 2 [2] => 3 [3] => 4

$C = ['color'=> 'red', 1] +
     ['color'=>'green', 2, 3]
;
print_r($C); // [color] => red [0] => 1 [1] => 3
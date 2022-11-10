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
$B = array_merge(
    ['color'=> 'red', 1], // string keys
    ['a', 'color'=>'green']
); 
$C = array_merge(
    [1, 2], // numeric keys
    [3, 4]
); 
$D = ['color'=> 'red', 1] +
     ['color'=>'green', 2, 3]
;

echo 'A: ' . print_r($A, true); // foo, 1, 2 
echo 'B: ' . print_r($B, true); // [color] => green [0] => 1 [1] => a
echo 'C: ' . print_r($C, true); // [0] => 1 [1] => 2 [2] => 3 [3] => 4
echo 'D: ' . print_r($D, true); // [color] => red [0] => 1 [1] => 3
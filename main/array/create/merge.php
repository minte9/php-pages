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
$B = array_merge(['color'=> 'red', 1], ['a', 'color'=>'green']);
$C = ['a' => 'A', 1] + ['a' => 'B', 2, 3];

echo 'A: ' . print_r($A, true); // foo, 1, 2 
echo 'B: ' . print_r($B, true); // green, 1, a
echo 'C: ' . print_r($C, true); // A, 1, 3
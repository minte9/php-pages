<?php

/**
 * Array walk with / without reference
 */

$A = [1.5, 2.6, 3.7];
array_walk($A, fn($v) => $v = floor($v)); // 1.5, 2.6, 3.7
print_r($A); 
    
$A = [1.5, 2.6, 3.7];
array_walk($A, fn(&$v) => $v = floor($v)); // 1, 2, 3
print_r($A); 
    
// map
$A = [1.5, 2.6, 3.7];
$A = array_map('floor', $A); // 1, 2, 3
print_r($A); 
<?php
/**
 * Array walk with / without reference
 */

$A = [1.5, 2.6, 3.7];
array_walk($A, fn($v) => $v = floor($v));
print_r($A); 
    // 1.5, 2.6, 3.7
    
$A = [1.5, 2.6, 3.7];
array_walk($A, fn(&$v) => $v = floor($v));
print_r($A); 
    // 1, 2, 3

// map
$A = [1.5, 2.6, 3.7];
$A = array_map('floor', $A);
print_r($A); 
    // 1, 2, 3
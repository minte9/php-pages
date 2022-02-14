<?php

/**
 * Array walk with / without reference
 */

$arr = [1.5, 2.6, 3.7];
array_walk($arr, fn($v) => $v = floor($v));
print_r($arr); 
    // 1.5, 2.6, 3.7
    
$arr = [1.5, 2.6, 3.7];
array_walk($arr, fn(&$v) => $v = floor($v));
print_r($arr); 
    // 1, 2, 3

// map
$arr = [1.5, 2.6, 3.7];
$arr = array_map('floor', $arr);
print_r($arr); 
    // 1, 2, 3
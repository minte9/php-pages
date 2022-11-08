<?php

/**
 * Callbaks used with filter and map
 */

$arr = array(0, 3, 10);

$data1 = array_filter ($arr, function($x) { // isEven
    return $x % 2 == 0;
});  

$data2 = array_map(function ($x) { // square
    return $x*$x; 
}, $arr); 

print_r($data1); // [0, 100]
print_r($data2); // [0, 9, 100]
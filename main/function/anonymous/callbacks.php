<?php

$arr = array(0, 3, 10);
$data = array_filter ($arr, function($x) { // isEven
    return $x % 2 == 0;
});  
print_r($data); // [0, 100]

$arr = array(3, 10);
$data = array_map(function ($x) { // square
    return $x*$x; 
}, $arr); 
print_r($data); // [9, 100]
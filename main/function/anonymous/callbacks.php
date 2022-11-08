<?php

# Filter
$data = array(0, 3, 10);
$data = array_filter ($data, function($x) { // isEven
    return $x % 2 == 0;
});  

print_r($data); // [0, 100]


# Map
$data = array(3, 10);
$data = array_map(function ($x) { // square
    return $x*$x; 
}, $data); 

print_r($data); // [9, 100]
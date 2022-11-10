<?php

/**
 * Array_map() with function name
 * Array_map() with arrow function
 * Array_walk() needs reference (in function declaration)
 */

function cube($n) 
{
    return pow($n, 3);
}
$res1 = array_map('cube', [1, 2, 3]); 
$res2 = array_map(
    fn($x) => pow($x, 3), [1, 2, 3]
);
print_r($res1); // 1, 8, 27
print_r($res2); // 1, 8, 27

#

$arr = array(1,2,3,4);
function setDouble($value) // incorrect
{ 
    $value * 2;
}
array_walk($arr, 'setDouble');
print_r($arr); // 1 2 3 4

$arr = array(1,2,3,4);
function setDouble2(&$value) // reference - Look Here
{ 
    $value *= 2;
}
array_walk($arr, 'setDouble'); 
print_r($arr); // [2, 4, 6, 8]
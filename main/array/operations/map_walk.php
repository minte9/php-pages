<?php

/**
 * Array map with function name
 * Array map with arrow function
 * Array walk needs reference (in function declaration)
 */

# Map

function cube($n) 
{
    return pow($n, 3);
}
$A = array_map('cube', [1, 2, 3]); 
$B = array_map(
    fn($x) => pow($x, 3), [1, 2, 3]
);
print_r($A); // 1, 8, 27
print_r($B); // 1, 8, 27

# Walk

$A = [1, 2, 3];
$B = [1, 2, 3];
function setDouble($value) // incorrect (no reference)
{ 
    $value * 2;
}
array_walk($A, 'setDouble');
print_r($A); // 1 2 3

array_walk($B, fn(&$x) => $x *= 2); // reference - Look Here
print_r($B); // [2, 4, 6]
<?php

/**
 * Array map with function name
 * Array map with arrow function
 * Array walk needs reference (in function declaration)
 */

# Map

$A = [1, 2, 3];
$B = [1, 2, 3];

function cube($n) 
{
    return pow($n, 3);
}

$A = array_map('cube', $A); 
$B = array_map(fn($x) => pow($x, 3), $B);

print_r($A); // 1, 8, 27
print_r($B); // 1, 8, 27

# Walk

$C = [1, 2, 3];
$D = [1, 2, 3];

function setDouble($value)
{ 
    $value * 2;
}

array_walk($C, 'setDouble');
print_r($C); // 1 2 3

array_walk($D, fn(&$x) => $x *= 2); // with reference - Look Here
print_r($D); // 2, 4, 6
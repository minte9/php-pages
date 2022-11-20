<?php

/**
 * array_map, array_walk()
 * 
 * Array walk needs reference
 */

function cube($n) 
{
    return pow($n, 3);
}

$A = [1, 2, 3];
$B = [1, 2, 3];
$C = [1, 2, 3];
$D = [1, 2, 3];

$A = array_map('cube', $A); 
$B = array_map(fn($x) => pow($x, 3), $B);

array_walk($C, fn(&$x) => $x *= 2); // Look Here
array_walk($D, fn(&$x) => $x = pow($x, 3));

print_r($A); // 1 8 27
print_r($B); // 1 8 27
print_r($C); // 2 4 6
print_r($D); // 1 8 27
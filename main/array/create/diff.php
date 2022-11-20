<?php

/**
 * Diff returns ...
 * all values in an array not appearing in another
 * 
 * Intersect keeps ...
 * all the values of each element
 */

$A = [1, 2, 3];
$B = [1, 3, 4];

$C = array_diff($A, $B);
$D = array_intersect($A, $B);

print_r($C); // 2
print_r($D); // 1, 3
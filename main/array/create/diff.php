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

print_r( array_diff($A, $B) ); // 2
print_r( array_intersect($A, $B) ); // 1, 3
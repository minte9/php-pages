<?php

/**
 * array_slice(), array_splice()
 * 
 * Extract or remove a portion from array
 */

$A = [1, 2, 3, 4, 5];

print_r(array_slice($A, 2)); // 3, 4, 5
print_r(array_slice($A, 0, 2)); // 1, 2
print_r(array_slice($A, -2, 1)); // [0] => 4
print_r(array_slice($A, -2, 1, true)); // [3] => 4 (preserve keys)

$B = array(1, 2, 3, 4, 5);

print_r(array_splice($B, 2)); // [ 1, 2 ]
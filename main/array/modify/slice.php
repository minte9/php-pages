<?php

/**
 * array_slice()
 * 
 * Remove a portion with something else
 */

$A = [1, 2, 3, 4, 5];

print_r(array_slice($A, 2)); // 3, 4, 5
print_r(array_slice($A, 0, 2)); // 1, 2
print_r(array_slice($A, -2, 1)); // [0] => 4

// preserve keys
print_r(array_slice($A, -2, 1, true)); // [3] => 4
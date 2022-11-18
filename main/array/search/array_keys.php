<?php

/**
 * array_keys()
 * 
 * Has a search value option
 */

$A = ['a', 'b', 'a', 'c', 'a', '0', false];

print_r(array_keys($A));        // 0, 1, 2, 3, 4, 5, 6
print_r(array_keys($A, 'a'));   // 0, 2, 4
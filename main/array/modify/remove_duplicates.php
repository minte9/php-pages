<?php

/**
 * array_unique()
 * 
 * Removes duplicate values from an array
 */

$A = [1, 2, 'b'=>'green', 2];
print_r(array_unique($A)); // 1, 2, green
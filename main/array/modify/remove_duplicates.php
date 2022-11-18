<?php

/**
 * array_unique()
 * 
 * Removes duplicate values from an array
 */

$A = [1, 2, 'b'=>'green', 2];
$B = array_unique($A);

print_r($B); // 1, 2, green
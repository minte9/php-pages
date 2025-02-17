<?php

/**
 * array_pad()
 * 
 * Pad an array to the specified length
 */

$A = [1,2,3];
$B = array_pad($A, 6, 0); 

print_r($B); // 1, 2, 3, 0, 0, 0

echo str_pad(111, 6, 0); // 111000
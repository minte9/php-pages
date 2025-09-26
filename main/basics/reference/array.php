<?php
/**
 * Reference with foreach changes the array (use it with care).
 */

$A = [1, 2, 3, 4];

foreach ($A as &$val) { // Look Here
    $val *= 2;
}

print_r($A);  // [2, 4, 6, 8]
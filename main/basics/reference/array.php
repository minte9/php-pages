<?php

/**
 * &$value
 * 
 * Reference with foreach changes the array
 * Use it with care
 */

$A = [1, 2, 3, 4];

foreach ($A as &$val) { // Look Here
    $val *= 2;
}

var_dump($A === [2, 4, 6, 8]); // true
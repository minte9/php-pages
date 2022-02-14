<?php

/**
 * Reference with foreach changes the array.
 * It's better not to use it.
 */
$arr = array('1', '2', '3', '4');

foreach ($arr as &$val) {
    $val *= 2;
}

print_r($arr); // [2, 4, 6, 8]
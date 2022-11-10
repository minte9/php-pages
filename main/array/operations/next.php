<?php

/**
 * Reset, key, next, current ...
 * are used when working with array internal pointer
 */

$arr = [
    'a'=>1, 
    'b'=>2, 
    'c'=>3
];
reset($arr);

while (key($arr) !== NULL) {
    echo key($arr) . current($arr) . " "; // a1 b2 c3
    next($arr);
}
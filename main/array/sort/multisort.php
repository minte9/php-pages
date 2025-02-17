<?php

/**
 * array_multisort()
 * 
 * Sorting destroys all the keys and rearange elements
 */

$A = [3,2,1];
$B = [4,8,0];

array_multisort($A, $B);

print_r($A); // 1, 2, 3
print_r($B); // 0, 8, 4
 
$C = [
    ["10", 11, 100, 100, "a"],
    [1, 2, "2", 3, 1],
];

array_multisort(
    $C[0], SORT_ASC, SORT_STRING,
    $C[1], SORT_DESC, SORT_NUMERIC);

print_r($C);
    // ["10", 100, 100, 11, "a"]
    // [ 1, 3, "2", 2, 1 ]
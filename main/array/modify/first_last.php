<?php

/**
 * array_push()     add at the end
 * array_shift()    extract first
 * array_unshift()  add at beggining
 * arrau_pop()      extract last
 */

$A = [1, 2];
$B = [2, 3];
$C = [1, 2];
$D = [2, 4];

array_push($A, 3);
$A[] = 4; // faster
print_r($A); // 1,2,3,4

echo array_shift($B); // 2 (first)

array_unshift($C, 100);
print_r($C); // 100,1,2

echo array_pop($D); // 4
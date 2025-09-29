<?php
/**
 * Arrow functions provide a shorter syntax for one-line anonymous functions.
 * Arrow functions automatically inherit variables from the parent scope.
 */

$numbers = [1, 2, 3];

$squares = array_map(fn($x) => $x * $x, $numbers);
print_r($squares);  // 1, 4, 9

$evens = array_filter($numbers, fn($x) => $x % 2 == 0);
print_r($evens);  // 2
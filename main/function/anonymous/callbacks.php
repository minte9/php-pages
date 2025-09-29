<?php
/**
 * Closure are useful when using callbacks.
 * They're ofthen used in function like array_map, array_filter.
 */ 

$numbers = [1, 2, 3];

$squares = array_map(function($n) {
    return $n * $n;
}, $numbers);
print_r($squares);  // 1, 4, 9


$evens = array_filter($numbers, function($n) {
    return $n % 2 == 0;
});
print_r($evens);  // 2
 
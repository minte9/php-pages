<?php

$a = [1.5, 2.6, 3.7];
$a = array_map('floor', $a);
print_r($a); 
    // 1, 2, 3

$b = [1.5, 2.6, 3.7];
array_walk($b, function(&$v) { 
    $v = floor($v);
});
print_r($b); 
    // 1, 2, 3

$c = [1.5, 2.6, 3.7];
array_walk($c, fn($v) => $v = floor($v));
print_r($c); 
    // 1.5, 2.6, 3.7
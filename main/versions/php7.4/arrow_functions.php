<?php

/**
 * Arrow functions, less verbose code
 */

$data = [
    (object) ['id' => 1, 'name' => 'John'],
    (object) ['id' => 2, 'name' => 'Mark'],
];

$A = array_map(fn($v) => $v->id, $data);    // PHP > 7.4+
$B = array_map(function ($v) {              // PHP < 7.4 
    return $v->id;
}, $data);

print_r($A); // 1, 2
print_r($B); // 1, 2
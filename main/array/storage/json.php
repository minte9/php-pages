<?php

/**
 * Encode anaray, json representation
 */

$A = ['a'=>1, 'b'=>2, 'c'=>3];
$json_encoded = json_encode($A);
$json_decoded = json_decode($json_encoded);

print_r($json_encoded); // {"a":1,"b":2,"c":3}
print_r($json_decoded); // [a=>1, b=>2, c=>3]
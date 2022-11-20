<?php

/**
 * serialize, unserialize()
 * 
 * Storabale representation (string) for an array
 */

$data = ['name' => 'Smith', 'age' => 30];
$encoded = serialize($data);
$decoded = unserialize($encoded);

print_r($encoded); // a:2:{s:4:"name";s:5:"Smith";s:3:"age";i:30;}
print_r($decoded); // [name] => Smith [age] => 30
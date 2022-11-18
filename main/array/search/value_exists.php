<?php

/**
 * Check if value exists in arrray
 */

$A = ['a'=>1, 'b'=>2, 'c'=>3];
$B = ['a'=>NULL, 'b'=>2]; 

echo (in_array(1, $A) === true);
echo (isset($B['a']) === false);
echo (array_key_exists('a', $B) === true);
    // 111
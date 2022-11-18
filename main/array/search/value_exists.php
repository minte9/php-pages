<?php

/**
 * Check if value exists in arrray
 */

$A = ['a'=>1, 'b'=>2, 'c'=>NULL];

echo (in_array(1, $A) === true); // 1
echo (isset($C['a']) === false); // 1
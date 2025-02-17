<?php

/**
 * Identical operator
 */

$x1 = 'xn--google.com';
$x2 = 'google.com';

var_dump(stripos($x1, 'xn--') === 0); // true - Correct
var_dump(stripos($x2, 'xn--') == 0);  // true - Incorrect
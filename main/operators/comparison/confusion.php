<?php

/**
 * Comparition operator, prone to error
 */

$a = 10;
$b = 9;

var_dump($a == 10);     // true
var_dump(10 == $a);     // true, better

if ($b = 10) echo $b;   // 10 - Incorrect
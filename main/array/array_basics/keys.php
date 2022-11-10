<?php

/**
 * PHP automaticaly assign a number as key ...
 * Key > the greatest key
 * 
 * Array keys are case-sensitive, but type insensitive.
 */

$a = array (2 => 5);
$a[] = 'a'; // This will have a key of 3
echo $a[3]; // a

$b = array ('4' => 5, 'a' => 'b');
$b[] = 44; // This will have a key of 5
echo $b[5]; // 44

$c = array (
    'A' => 1,
    'a' => 2,
    '1' => 3,
    1 => 4,
    '01' => 5, // not equal with 1
);

var_dump($c); // [A=>1, a=>2, 1=>3, 01=>5]
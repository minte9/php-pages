<?php

/**
 * PHP automaticaly assign a number as key ...
 * The new key > the greatest key
 * 
 * Array keys are case-sensitive, but type insensitive
 */

$a = array(2 => 5);
$b = array('4' => 5, 'a' => 'b');

$a[] = 'a'; // key = 3
$b[] = 44;  // key = 5

echo $a[3] == 'a'; // 1 (true)
echo $b[5] == 44; // 1 (true)


$c = array (
    'A'  => 1,
    'a'  => 2,
    '1'  => 3, // equal with 1
     1   => 4,
    '01' => 5, // NOT equal with 1
);

print_r($c); // A=>1, a=>2, 1=>4, 01=>5
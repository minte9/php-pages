<?php

/**
 * isset() - determine if a variable is set and is not NULL
 * empty() - determine whether a variable is empty
 */

$a = 1;
$b = 0;
$c = "";
$d = null;

echo isset($a) ? 1 : 0; // 1
echo isset($b) ? 2 : 0; // 2
echo isset($c) ? 3 : 0; // 3
echo isset($d) ? 4 : 0; // 0

echo empty("")      ? 5 : 0; // 5
echo empty(0)       ? 6 : 0; // 6
echo empty("0")     ? 7 : 0; // 7
echo empty(NULL)    ? 8 : 0; // 8
echo empty(false)   ? 9 : 0; // 9
echo empty(array()) ? 1 : 0; // 1
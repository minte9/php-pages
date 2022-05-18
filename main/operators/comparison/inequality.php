<?php

/** 
 * Comparing strings
 */

$left = "ABC";
$right = "ABD";

echo (int) ($left > $right); // 0

    // because the letter D in $right is higher ...
    // than the corresponding letter C in $left

$left = 'apple';
$right = 'Apple';

echo (int) ($left > $right); // 1

    // because the ASCII value of the character a (97) is ...
    // than that of the character A (65)
<?php

/**
 * array_search()
 * 
 * The search returns boolean
 * Always use identical operator
 */

$A = [1,2,3,4];

echo (array_search(4, $A)); // 3
echo (array_search(5, $A) == 0) == true;    // 1 - Incorrect
echo (array_search(5, $A) === 0) === false; // 1 - Correct
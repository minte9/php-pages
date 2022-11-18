<?php

/**
 * array_search
 */

$A = [1,2,3,4];
echo array_search(4, $A); // 3

// wrong operator (==)
echo (array_search(5, $A) == 0) == true; // 1 - Incorrect

// correct operator (===)
echo (array_search(5, $A) === 0) === false; // 1 - Correct
<?php declare(strict_types=1);

/**
 * array_filter()
 */

$A = [1, 2, 3, 4, 5, 6];

function odd($var) : int
{
    return ($var & 1); // bits set in both
}

function isEven($var) : bool
{
    return ! ($var & 1); // bit 1 not set
}

print_r(array_filter($A, 'odd')); //  [1, 3. 5]
print_r(array_filter($A, 'isEven'));// [2, 4, 6]
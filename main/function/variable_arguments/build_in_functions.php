<?php

/**
 * PHP provides three built-in functions ...
 * to handle variable-length argument lists:
 * func_num_args(), func_get_arg(), func_get_args()
 *
 * Keep in mind that variable-length argument lists ...
 * are full of potential pitfalls.
 * 
 * While they are very powerful, ...
 * they do tend to make your code confusing.
 */

function myArray() 
{
    $arr = array(); $i = 0;

    if (func_num_args() == 0) {
        $arr[] = "Hello World";
    }

    if (func_num_args() > 0) {
        while($i < func_num_args()) {
            $arr[] = "Hello " . func_get_arg($i++);
        }
    }

    return $arr;
}

print_r(myArray()); // [Hello World]
print_r(myArray("John", "Mary")); // [Hello John, Hello Mary]
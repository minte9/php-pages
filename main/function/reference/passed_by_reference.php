<?php

/**
 * Function arguments passed by reference
 */

function findAndCount($str, $char, &$count) // Look Here
{
    for($i=0; $i<strlen($str); $i++) {
        if ($str[$i] == $char) $count++;
    }
}

findAndCount("abca", "a", $count);

echo $count; // output 2
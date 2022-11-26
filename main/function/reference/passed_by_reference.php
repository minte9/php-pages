<?php

/**
 * Function arguments, passed by reference
 */

function findAndCount($s, $char, &$j) // Look Here
{
    $i = 0;
    while($i < strlen($s)) {
        if ($s[$i] == $char) 
            $j++;
        $i++;
    }
}

findAndCount("abca", "a", $count);

echo $count; // 2
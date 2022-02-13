<?php

/**
 * With do/while the contents of the loop will be executed at least once.
 * Even if the condition never evaluates to true. 
 */

$i = 0;
$k = 0;

do {
    echo $i = $i + 1; // 1
} while ($i < 0); 

while ($k < 0) { 
    echo $k = $k + 1; // nothing
}
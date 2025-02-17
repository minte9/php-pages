<?php

/**
 * Even if the condition never evaluates to true ...
 * the content of the do / while is executed at least once.
 */

$i = 0;
$k = 0;

do {
    echo $i = $i + 1; // 1
} while ($i < 0); 

while ($k < 0) { 
    echo $k = $k + 1; // nothing
}
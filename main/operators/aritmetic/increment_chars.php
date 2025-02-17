<?php

/**
 * Arithmetics on chars follows Perl's convention
 */

$i = 'W';
for ($n=0; $n<6; $n++) {
    echo ++$i . " "; // X Y Z AA AB AC 
}
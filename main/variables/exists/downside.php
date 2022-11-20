<?php

/**
 * There are downsides of the way PHP handles variables.
 * There is no way to ensure that any one of them ...
 * will exist at any given point
 * 
 * isset() will return TRUE if a variable ...
 * exists and has a value other than NULL
 * 
 * empty() will returns TRUE if a variable ...
 * has a empty and zero value ("", 0, NULL)
 */

if(isset($a) && $a != "")
    echo 1;

if(!empty($a)) // better
    echo 1;
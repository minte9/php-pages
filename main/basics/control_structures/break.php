<?php

for ($i=0; $i<=10; $i++) {

    for ($j=0; $j<=10; $j++) {

        if ($j == 5) break 2; // Exist this loop and the next one
        
        echo $i; // 00000
    }
}

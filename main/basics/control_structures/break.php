<?php

for ($i=0; $i<=10; $i++) {

    for ($j=0; $j<=10; $j++) {

        echo $i; // 0000

        if (($j + $i) % 5 == 3) {

            break 2; // Exist this loop and the next one
        }
    }
}

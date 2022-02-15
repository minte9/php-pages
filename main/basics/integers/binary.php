<?php

echo 0b110100100;           // 420 - decimal
echo bindec(110100100);     // 420 - decimal
echo decoct(0b110100100);   // 644 - octal

echo 0644;
    // 6*8^2 + 4*8^1 + 4*8^0 =
    // 384 + 32 + 4 =
    // 420

echo 0b1010111100;          // 700
    // 001 010 111 100 
    // 00 are added to complete group of 3 bits
    // 001 010 111 100 (binary) = 1274 (octal)
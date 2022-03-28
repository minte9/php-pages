<?php // NumberChecker\Model\NumberModel.php

namespace NumberChecker\Model;

class NumberModel
{
    public function isEven($no)
    {
        return $no % 2 == 0;
    }
}
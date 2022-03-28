<?php // NumberChecker\Model\NumberModel.php

namespace NumberChecker\Model;

class NumberModel
{
    public function isEven($no)
    {
        if (null === $no) return false;
        return $no % 2 == 0;
    }
}

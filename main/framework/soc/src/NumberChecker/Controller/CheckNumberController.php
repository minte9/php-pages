<?php // src/NumberChecker/Controller/CheckNumberController.php

namespace NumberChecker\Controller;

use NumberChecker\Model\NumberModel;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckNumberController
{
    public function index (Request $request, $no)
    {
        $model = new NumberModel();
        if ($model->isEven($no)) {
            return new Response("The number is even");
        }
        return new Response("The number is odd of null");
    }
}
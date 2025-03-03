<?php

namespace Myproject\Logger;

use Myproject\Logger\LoggerInterface;

class ConsoleLogger implements LoggerInterface {
    public function log($msg) {
        echo "[Console] log message:" . $msg . PHP_EOL;
    }
 }
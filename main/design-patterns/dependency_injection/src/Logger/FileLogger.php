<?php

namespace Myproject\Logger;

use Myproject\Logger\LoggerInterface;

class FileLogger implements LoggerInterface {
   public function log($msg) {
       echo "[File] log message:" . $msg . PHP_EOL;
   }
}
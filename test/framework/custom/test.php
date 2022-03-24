<?php

/**
 * test.php - unit tests
 * 
 * cd ../test/framework/custom/
 * composer require --dev phpunit/phpunit
 * vendor/bin/phpunit test.php
 *      OK (1 test, 1 assertion)
 * 
 */

require __DIR__ . "/vendor/autoload.php";

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    public function test_Hello()
    {
        $_GET['name'] = "Fabian";

        ob_start(); // not naturaly and ugly
        include "hello.php";
        $content = ob_get_clean();

        $this->assertEquals("Hello Fabian", $content);
    }
}
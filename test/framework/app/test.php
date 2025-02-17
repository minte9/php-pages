<?php
/*
    test.php - Unit Tests

    cd ../test/framework/app/
    composer require --dev phpunit/phpunit

    vendor/bin/phpunit test.php
        OK (1 test, 1 assertion)

*/

require __DIR__ . "/vendor/autoload.php";

use PHPUnit\Framework\TestCase;

final class Test extends TestCase
{
    public function test_Hello()
    {
        ob_start(); // not naturaly and ugly

        $_GET['name'] = "Fabian";

        include "../../../main/framework/app/01.php";

        $content = ob_get_clean();
        $this->assertEquals("Hello Fabian", $content);
    }
}
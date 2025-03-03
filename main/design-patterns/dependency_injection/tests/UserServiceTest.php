<?php
/**
 * Dependency Injection with PHP-DI makes unit testing easier.
 * It allows us to use mock objects.
 * 
 * If we instantiate FileLogger or ConsoleLogger directly in UserService, 
 * it makes UnitTesting harder. Test will actually write logs to file or console.
 * 
 * With PHP-DI, we can pass mock object instead of a real logger.
 * 
 * Install PHPUnit via Composer:
 * composer require --dev phpunit/phpunit
 */


use PHPUnit\Framework\TestCase;
use Myproject\Logger\LoggerInterface;
use Myproject\UserService;

class UserServiceTest extends TestCase {

    public function testCreateUserLogsMessage() {

        // Step 1: Create a mock LoggerInterface
        $logger = $this->createMock(LoggerInterface::class);

        // Step 2: Expect the 'log' method to be called once 
        // with the expected message
        $logger->expects($this->once()) // Ensure it's called once
                   ->method('log')
                   ->with($this->equalTo("User Jon Doe created."));
                   
        // Step 3: Inject the mock object into UserService
        $service = new UserService($logger);

        // Step 4: Call the method
        $service->createUser("Jon Doe");

        // The test will pass if 'log' was called exactly once with the expected argument.
    }
}

/**
 * php vendor/bin/phpunit tests/UserServiceTest.php
 * 
 * Time: 00:00.006, Memory: 8.00 MB
 * OK (1 test, 1 assertion)
 */
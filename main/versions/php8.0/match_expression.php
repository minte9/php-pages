<?php

/**
 * Match expression
 * 
 * Match syntax improves the switch syntax in multiple ways:
 *      - returns value
 *      - multiple matching conditions allowed
 *      - implicit break
 *      - strict matching (value and type)
 */

class B 
{
    public String $request_method = 'GET';

    public function __construct(String $request_method) 
    {
        $result = match($request_method) { // Look Here
            'POST' => $this->handle_post(),
            'GET', 'HEAD' => $this->handle_get(),
            default => throw new \Exception('Unsupported'),
        };

        echo $result;
    }

    private function handle_post(): String
    {
        return 'This is POST';
    }

    private function handle_get(): String
    {
        return 'This is GET';
    }
}

try {
    new B('POST');  // This is POST
    new B('GET');   // This is GET
    new B('HEAD');  // This is GET
    new B('HTTP');
} catch(Exception $e) {
    echo $e->getMessage(); // Unsupported
}
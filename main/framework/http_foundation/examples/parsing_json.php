<?php
/*
    http_foundation/examples/parsing_json.php - Basic Usage Example

    In this example, we create a Request object from the global PHP variables, 
    which allows us to interact with the request data in an object-oriented way. 
    
    We then create a Response object, set its content, status code, and headers, 
    and finally send it back to the client.

    The HTTP Foundation component has many more features to handle cookies, sessions, 
    file uploads, and more, which can be very useful in real-world applications.

    http://localhost:8000/examples/parsing_json.php
        Output: {"error":"Invalid request format"}

    curl -X POST -H "Content-Type: application/json" -d '{"name": "Fabien"}' \
    http://localhost:8000/examples/parsing_json.php
        Output: {"message":"Hello, Fabien"}
*/

require_once __DIR__ . '/../vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

// Create a Request object from the global PHP variables
$request = Request::createFromGlobals();

// Check if the incoming request is a JSON request
if ($request->getContentType() === 'json' && $request->getContent()) {
    $data = json_decode($request->getContent(), true);

    // Perform some operations with $data, which is your request payload
    $name = $data['name'] ?? 'Unknown';

    // Now prepare a JSON response
    $response = new JsonResponse(['message' => "Hello, $name"]);
} else {
    // Handle non-JSON requests or inform about the wrong format
    $response = new JsonResponse(['error' => 'Invalid request format'], Response::HTTP_BAD_REQUEST);
}

// Send the response
$response->send();

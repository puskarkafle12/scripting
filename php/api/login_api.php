<?php

// Simulated user credentials
$valid_username = 'user';
$valid_password = 'password';

// Check if the request method is POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if both username and password are provided
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Retrieve username and password from the request
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Check if the provided username and password match the valid credentials
        if ($username === $valid_username && $password === $valid_password) {
            // Login successful
            $response = array(
                'status' => 'success',
                'message' => 'Login successful'
            );
            http_response_code(200); // Set HTTP status code to 200
        } else {
            // Invalid credentials
            $response = array(
                'status' => 'error',
                'message' => 'Invalid username or password'
            );
            http_response_code(401); // Set HTTP status code to 401 Unauthorized
        }
    } else {
        // Missing username or password
        $response = array(
            'status' => 'error',
            'message' => 'Missing username or password'
        );
        http_response_code(400); // Set HTTP status code to 400 Bad Request
    }
} else {
    // Invalid request method
    $response = array(
        'status' => 'error',
        'message' => 'Invalid request method'
    );
    http_response_code(405); // Set HTTP status code to 405 Method Not Allowed
}

// Set response headers to indicate JSON content type
header('Content-Type: application/json');

// Output JSON response
echo json_encode($response);

?>

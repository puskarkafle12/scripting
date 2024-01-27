<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == 'example' && $password == 'password') {
        echo 'Login successful!';
    } else {
        echo 'Invalid username or password. Please try again.';
    }
} else {
    echo 'Invalid request method.';
}


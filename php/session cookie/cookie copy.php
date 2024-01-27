<?php
// Set a cookie with a name, value, and expiration time (in seconds)
setcookie('user', 'John Doe', time() + 3600); // Expires in 1 hour

// Retrieve and display the value of the cookie
if (isset($_COOKIE['user'])) {
    $username = $_COOKIE['user'];
    echo "Welcome back, $username!";
} else {
    echo "Welcome! It seems to be your first visit.";
}
?>

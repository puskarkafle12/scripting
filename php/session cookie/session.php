<?php
session_start();

// Simulating user credentials (replace with actual user database)
$user_credentials = ['john_doe' => 'password123'];

// Handle login
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'login') {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (isset($user_credentials[$username]) && $user_credentials[$username] == $password) {
            // Valid login
            $_SESSION['username'] = $username;
            echo "Login successful! Welcome, $username.";
        } else {
            // Invalid login
            echo "Invalid username or password.";
        }
    }
}

// Handle logout
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    if ($_POST['action'] === 'logout') {
        // Destroy the session on logout
        session_unset();
        session_destroy();
        echo "Logout successful!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session Demo</title>
</head>
<body>

<?php
// Check if the user is logged in
if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Welcome, $username! <form action='' method='post'>
            <input type='hidden' name='action' value='logout'>
            <input type='submit' value='Logout'>
          </form>";
} else {
    // Display login form if not logged in
    echo "<form action='' method='post'>
            <input type='hidden' name='action' value='login'>
            Username: <input type='text' name='username' required>
            Password: <input type='password' name='password' required>
            <input type='submit' value='Login'>
          </form>";
}
?>

</body>
</html>

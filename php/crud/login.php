<?php
require 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST['username'];
    $password = $_POST['password'];

    // Perform login check
    if (checkLogin($email, $password)) {
        // Redirect to users.php on successful login
        header("Location: users.php");
        exit();
    } else {
        // Display an alert if login fails
        $error_message = "Invalid email or password. Please try again.";

        // header("Location: index.php");

    }
}

// Function to check login credentials
function checkLogin($username, $password) {
    global $conn;

    // Sanitize input to prevent SQL injection (consider using prepared statements for additional security)
    // $username = mysqli_real_escape_string($conn, $username);
    // $password = mysqli_real_escape_string($conn, $password);

    // Query to check if the user exists
    $sql = "SELECT * FROM user_data WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    // Check if the query was successful and if a matching user was found
    if ($result && $result->num_rows > 0) {
        return true; // Valid login
    } else {
        return false; // Invalid login
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Include your head content here if needed -->
</head>

<body>
    <?php if (isset($error_message)): ?>
        <div class="alert alert-danger" role="alert">
            <?php echo $error_message; ?>
        </div>
    <?php endif; ?>
</body>

</html>
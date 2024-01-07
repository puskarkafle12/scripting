<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "scripting"; // Replace with your actual database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// CRUD Operations
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $operation = $_POST['operation'];
    if ($operation == 'create') {
        // Create operation
        $sql = "INSERT INTO user_data (username, password, address) VALUES ('$username', '$password', '$address')";

        if ($conn->query($sql) === TRUE) {
            // Success message
            echo "user data created in database sucess";
            exit();
        } else {
            // Error message
            header("Location: index.php?error=create");
            exit();
        }
    } elseif ($operation == 'edit') {
        $id = $_POST['id'];
        $newUsername = $_POST['username'];
        $newPassword = $_POST['password'];
        $newAddress = $_POST['address'];

        // Update the record in the database
        $updateQuery = "UPDATE user_data SET username='$newUsername', password='$newPassword', address='$newAddress' WHERE id=$id";

        if ($conn->query($updateQuery) === TRUE) {
            echo "Record updated successfully!";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}

// Fetch user data
function fetchUsers()
{
    global $conn;
    $users = [];

    $result = $conn->query("SELECT * FROM user_data");

    while ($row = $result->fetch_assoc()) {
        $users[] = $row;
    }

    return $users;
}

// Delete operation
if (isset($_GET['operation']) && $_GET['operation'] == 'delete') {
    $id = $_GET['id'];

    if ($conn->query("DELETE FROM user_data WHERE id=$id") === TRUE) {
        // Success message
        header("Location: users.php?success=delete");
        exit();
    } else {
        // Error message
        header("Location: index.php?error=delete");
        exit();
    }
}

?>

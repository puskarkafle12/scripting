
<?php
// Get form data
include "../crud/config.php";
$user_id = $_POST['id'];
$username = $_POST['username'];
$address = $_POST['address'];

// Update user data in the database
$sql = "UPDATE user_data SET username = '$username', address = '$address' WHERE id = $user_id";

if ($conn->query($sql) === TRUE) {
    echo "User updated successfully";
} else {
    echo "Error updating user: " . $conn->error;
}

// Close database connection
$conn->close();
?>
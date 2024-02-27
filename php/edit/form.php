<?php
include "../crud/config.php";
// Get user ID from URL parameter
$user_id = $_GET['id'];

// Retrieve user data from database
$sql = "SELECT * FROM user_data WHERE id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['username'];
    $address = $row['address'];
} else {
    echo "User not found";
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <h2>Edit User</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $user_id; ?>">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" value="<?php echo $username; ?>"><br><br>
        <label for="address">address:</label>
        <input type="address" name="address" id="email" value="<?php echo $address; ?>"><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>

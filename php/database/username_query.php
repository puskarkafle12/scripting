<?php
$servername = "localhost";
$username = "root";
$password = ""; // Empty password
$database = "scripting"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform query to get usernames
$sql = "SELECT username FROM user_data";
$result = $conn->query($sql);

// Check if the query was successful
if ($result) {
    // Fetch and print usernames
    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"] . "<br>";
    }

    // Free result set
    $result->free_result();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>

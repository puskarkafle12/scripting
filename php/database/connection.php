<?php
$servername = "localhost";
$username = "root";
$password = ""; // Empty password
$database = "scripting"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } else {
    // echo "<script>console.log('connected sucess')</script>";
// }

// // Close the connection
// $conn->close();
?>

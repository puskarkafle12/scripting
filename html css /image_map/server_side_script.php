<?php
// server_side_script.php

// Check if the 'area' parameter is set in the query string
if (isset($_GET['area'])) {
    // Get the value of the 'area' parameter
    $area = $_GET['area'];
    
    // Depending on the value of 'area', perform different actions
    switch ($area) {
        case 1:
            // Redirect to computer.html
            header("Location: computer.html");
            exit();
        case 2:
            // Redirect to coffee.html
            header("Location: coffee.html");
            exit();
        default:
            // Handle unknown area values or fallback
            // Redirect to a default page or display an error message
            header("Location: default_page.html");
            exit();
    }
} else {
    // Handle case where 'area' parameter is not set
    // Redirect to a default page or display an error message
    header("Location: default_page.html");
    exit();
}
?>

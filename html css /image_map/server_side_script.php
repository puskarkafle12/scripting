<?php
// server_side_script.php

if (isset($_GET['area'])) {
    $area = $_GET['area'];
    
    switch ($area) {
        case 1:
            header("Location: computer.html");
            exit();
        case 2:
            header("Location: coffee.html");
            exit();
        default:
            header("Location: default_page.html");
            exit();
    }
} else {
    header("Location: default_page.html");
    exit();
}
?>

<?php
if(isset($_GET['name'])) {
    $name = $_GET['name'];
    echo "Hello, $name!";
} else {
    echo "Please enter a name.";
}
?>

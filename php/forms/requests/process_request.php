<?php
if(isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    echo "Hello, $name!";
} else {
    echo "Please enter a name.";
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if the file was uploaded without errors
    if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
        
        $uploadFile = '/Users/pkafle/Downloads/scripting /php/file upload/' . basename($_FILES['file']['name']);

        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadFile)) {
            echo "File is valid, and was successfully uploaded to $uploadFile.";
        } else {
            echo "Error uploading file. Check file permissions.";
        }
    } else {
        echo "Error during file upload. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>

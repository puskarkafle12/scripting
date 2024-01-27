<?php
// 1. Creating a File
$filename = 'example.txt';
$file = fopen($filename, 'w'); // 'w' mode for writing
fclose($file);
echo "File '$filename' created successfully.\n\n";

// 2. Writing to a File
$file = fopen($filename, 'w'); // 'w' mode for writing
fwrite($file, "Hello, this is some content.");
fclose($file);
echo "Content written to '$filename' successfully.\n\n";

// 3. Reading from a File
$file = fopen($filename, 'r'); // 'r' mode for reading
$content = fread($file, filesize($filename));
fclose($file);
echo "Content read from '$filename': $content\n\n";

// 4. Appending to a File
$file = fopen($filename, 'a'); // 'a' mode for appending
fwrite($file, "\nAdditional content appended.");
fclose($file);
echo "Content appended to '$filename' successfully.\n\n";

// 5. Checking if a File Exists
if (file_exists($filename)) {
    echo "File '$filename' exists.";
} else {
    echo "File '$filename' does not exist.";
}

// Check if the file exists before attempting to delete it
if (file_exists($filename)) {
    // Attempt to delete the file
    if (unlink($filename)) {
        echo "File '$filename' has been deleted successfully.";
    } else {
        echo "Error deleting '$filename'. Check file permissions.";
    }
} else {
    echo "File '$filename' does not exist.";
}


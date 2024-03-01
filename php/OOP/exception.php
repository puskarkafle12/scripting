<?php 

function divide($numerator, $denominator) {
    if ($denominator === 0) {
        throw new Exception("Division by zero is not allowed");
    }
    return $numerator / $denominator;
}

// Example of using try, catch
try {
    echo divide(10, 2); // Outputs: 5
    echo divide(10, 0); // This will throw an exception
} catch (Exception $e) {
    echo "Error: " . $e->getMessage(); // Outputs: Error: Division by zero is not allowed
}
?>
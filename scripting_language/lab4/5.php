<?php
// Define a function that may throw an exception
function divide($numerator, $denominator) {
    if ($denominator == 0) {
        throw new Exception("Division by zero");
    }
    return $numerator / $denominator;
}

// Try block to catch exceptions
try {
    // Call the function with potential exception
    $result = divide(10, 0);
    echo "Result of division: $result";
} catch (Exception $e) {
    // Catch any thrown exception and handle it
    echo "Exception caught: " . $e->getMessage();
}
?>

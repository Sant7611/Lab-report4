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
    $s = 0;
    // Call the function with potential exception
    $result = 5/$s;
    echo "Result of division: $result";
} catch (Exception $e) {
    // Catch any thrown exception and handle it
    echo "Exception caught: " . $e->getMessage();
}
?>

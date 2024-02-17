<?php
// Start the session
session_start();

// Check if the session variable 'count' exists
if (!isset($_SESSION['count'])) {
    // If it doesn't exist, initialize it to 1
    $_SESSION['count'] = 1;
} else {
    // If it exists, increment it by 1
    $_SESSION['count']++;
}

// Display the current count
echo "<h2>Page Visits Counter:</h2>";
echo "You have visited this page " . $_SESSION['count'] . " times.";

// Destroy the session (optional, uncomment if you want to reset the counter)
// session_destroy();
?>

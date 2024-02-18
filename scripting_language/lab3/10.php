<?php
// Set a cookie named 'username' with a value 'John Doe' that expires in 30 days
setcookie('username', 'Ram', time() + (30 * 24 * 60 * 60), '/');

// Check if the cookie 'username' is set
if (isset($_COOKIE['username'])) {
    // If it is set, retrieve and display the value
    $username = $_COOKIE['username'];
    echo "<h2>Welcome back, $username!</h2>";
} else {
    // If it is not set, display a message asking the user to log in
    echo "<h2>Please log in</h2>";
}
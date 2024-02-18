<?php
// Specify the file path
$filePath = 'example.txt';

// Check if the file exists
if (file_exists($filePath)) {
    // Read the content of the file
    $content = file_get_contents($filePath);

    // Display the content
    echo "<h2>File Content:</h2>";
    echo "<pre>$content</pre>";
} else {
    // If the file does not exist, display an error message
    echo "Error: File not found!";
}

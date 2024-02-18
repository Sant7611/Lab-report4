<?php
echo "<h2>Numbers Skipping Even Numbers:</h2>";
for ($i = 1; $i <= 10; $i++) {
    if ($i % 2 == 0) {
        // Skip even numbers
        continue;
    }
    echo "$i <br>";
}

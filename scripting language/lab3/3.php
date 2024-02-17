<!DOCTYPE html>
<html>
<head>
    <title>PHP Loops Example</title>
</head>
<body>

<?php
// For Loop
echo "<h2>For Loop:</h2>";
for ($i = 1; $i <= 5; $i++) {
    echo "Iteration $i <br>";
}

// While Loop
echo "<h2>While Loop:</h2>";
$j = 1;
while ($j <= 5) {
    echo "Iteration $j <br>";
    $j++;
}

// Do-While Loop
echo "<h2>Do-While Loop:</h2>";
$k = 1;
do {
    echo "Iteration $k <br>";
    $k++;
} while ($k <= 5);

// Foreach Loop
echo "<h2>Foreach Loop:</h2>";
$colors = array("Red", "Green", "Blue");
foreach ($colors as $color) {
    echo "$color <br>";
}
?>

</body>
</html>

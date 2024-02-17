<?php
// Define a variable
$grade = "A";

// Use a switch statement to perform different actions based on the value of the variable
switch ($grade) {
    case "A":
        echo "Excellent!";
        break;
    case "B":
        echo "Good job!";
        break;
    case "C":
        echo "Average.";
        break;
    case "D":
        echo "Needs improvement.";
        break;
    case "F":
        echo "Failed.";
        break;
    default:
        echo "Invalid grade.";
}
?>

<?php
// Function to calculate simple interest
function calculateSimpleInterest($principal, $rate, $time) {
    return ($principal * $rate * $time) / 100;
}

// Input values
$principal = 1000; // Principal amount
$rate = 5; // Interest rate (in percentage)
$time = 2; // Time period (in years)

// Call the function to calculate interest and display the result
echo "Simple Interest: " . calculateSimpleInterest($principal, $rate, $time);

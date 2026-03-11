<!DOCTYPE html>
<html>
    <head>
        <title>w4p1</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 4</h1>
        <h2>In Class Practice 1</h2>
        <h2>w4p1</h2>
    </body>
</html>

<?php
// Function to display a greeting message
function greetUser($name) {
    return "Hello, $name! Welcome to our website.";
}

// Calling the function and storing the returned value
$userGreeting = greetUser("Alice");

// Display the returned value
echo $userGreeting;
echo "<br>";

// Given function from lecture: Calculate total cost
function calculateCost($price, $qty, $discount = 0) {
    $cost = $price * $qty;
    return $cost - $discount;
}

// Example usage
$totalCost = calculateCost(50, 2, 10);
echo "Total cost after discount: $" . $totalCost;
?>

<?php
$num1 = rand(0,5); // Get random value
$num2 = rand(0,5); // Get random value
$operation = rand(0,3); // Get random value
$operations = [ // Array of operations
    "Addition",
    "Subtraction",
    "Multiplication",
    "Division"
];
function calculate($num1, $num2, $operation) { // Calculate result based on operation
    return match ($operation) {
        0 => $num1 + $num2,
        1 => $num1 - $num2,
        2 => $num1 * $num2,
        3 => $num2 != 0 ? $num1 / $num2 : "Error: Division by zero",
    };
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Simple Calculator</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 3</h1>
        <h2>Lab 3</h2>
        <h2>Q 3: Simple Calculator</h2>
        <p>
            <?php // Display numbers, operation, and result
            echo "Number 1: $num1<br>";
            echo "Number 2: $num2<br>";
            echo "Operation: $operations[$operation]<br>";
            echo "Result: " . calculate($num1, $num2, $operation);
            ?>
        </p>
    </body>
</html>

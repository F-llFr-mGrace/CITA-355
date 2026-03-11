<?php
$number = 5; // Starting value for countdown
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Countdown Timer</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 3</h1>
        <h2>Lab 3</h2>
        <h2>Q 5: Countdown Timer</h2>
        <?php
        while ($number >= 0) { // Countdown loop
            echo "<p>$number</p>"; // Display current value
            $number--; // Lower value
        }
        ?>
    </body>
</html>

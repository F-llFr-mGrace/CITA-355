<?php
$ages = [
    25,
    34,
    18,
    42,
    29,
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Creating and Displaying an Indexed Array</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Lab 2</h1>
        <h2>Task 1</h2>
        <p>Tom: <?php echo $ages[0]; ?> <- First age</p>
        <p>Sarah: <?php echo $ages[1]; ?></p>
        <p>Joe: <?php echo $ages[2]; ?></p>
        <p>Mark: <?php echo $ages[3]; ?></p>
        <p>Mandy: <?php echo $ages[4]; ?> <- Last age</p>
        <h3>Sum of oldest and youngest: <?php echo (25+29); ?></h3>
        <h3>Difference between oldest and youngest: <?php echo (42-25); ?></h3>
        <h3>Average of all ages (no for loop): <?php echo (number_format((25+34+18+42+29)/5, 2)); ?></h3>
    </body>
</html>

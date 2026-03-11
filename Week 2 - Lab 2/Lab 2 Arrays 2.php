<?php
$products = [
    'Keyboard'   => 50,
    'Mouse' => 30,
    'Monitor'  => 200,
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Working with an Associative Array</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Lab 2</h1>
        <h2>Task 2</h2>
        <h2>Prices of components:</h2>
        <h3>Keyboard: <?php echo $products['Keyboard']; ?></h3>
        <h3>Mouse: <?php echo $products['Mouse']; ?></h3>
        <h3>Monitor: <?php echo $products['Monitor']; ?></h3>
        <p>The total cost of buying a Keyboard and a Monitor: <?php echo ($products['Keyboard'] + $products['Monitor']); ?></p>
        <p>The price difference between the most expensive and least expensive item: <?php echo ($products['Monitor'] - $products['Mouse']); ?></p>
        <p>The average price of the three products: <?php echo (number_format(($products['Keyboard'] + $products['Mouse'] + $products['Monitor'])/3, 2)); ?></p>
    </body>
</html>

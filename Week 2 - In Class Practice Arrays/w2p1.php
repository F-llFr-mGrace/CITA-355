<?php
$nutrition = [
    'fat'   => 16,
    'sugar' => 51,
    'salt'  => 6.3,
    'protein' => 12,
    'vitamin A' => 12,
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Associative Arrays</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>The Candy Store</h1>
        <h2>Nutrition (per 100g)</h2>
        <p>Fat: <?php echo $nutrition['fat']; ?>%</p>
        <p>Sugar: <?php echo $nutrition['sugar']; ?>%</p>
        <p>Salt: <?php echo $nutrition['salt']; ?>%</p>
        <p>protein: <?php echo $nutrition['protein']; ?>%</p>
        <p>vitamin A: <?php echo $nutrition['vitamin A']; ?>%</p>
    </body>
</html>
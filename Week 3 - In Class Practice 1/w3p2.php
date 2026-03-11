<?php
$offers = [
    "Student Discount" => "15% off",
    "Free Shipping" => "Orders over $50",
    "Holiday Sale" => "20% off",
    "BOGO" => "Buy One Get One Free"
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Associative Array – Offers</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 3</h1>
        <h2>Part 2</h2>
        <?php
            foreach ($offers as $offerID => $offerValue) {
                echo "Sale Name - " . $offerID . " | Offered Savings - " . $offerValue;
                echo "<br>";
            }
        ?>
        
    </body>
</html>

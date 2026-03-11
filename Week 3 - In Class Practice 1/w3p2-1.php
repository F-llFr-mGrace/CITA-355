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
        <title>Decision Making (if statement)</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 3</h1>
        <h2>Part 2-2</h2>
        <?php
            foreach ($offers as $offerID => $offerValue) {
                if ($offerID === "Student Discount") {
                    echo "Special Offer Available - " . $offerID . " - " . $offerValue . "<br>";
                } else {
                    echo "Sale Name - " . $offerID . " | Offered Savings - " . $offerValue . "<br>";
                    echo "No student discount available." . "<br>";
                }
                echo "<br>";
            }
        ?>
        
    </body>
</html>

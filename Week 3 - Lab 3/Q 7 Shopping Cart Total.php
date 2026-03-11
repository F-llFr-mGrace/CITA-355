<?php
$cart = ["Apple" => 2.5, "Banana" => 1.2, "Milk" => 3.8];
$total = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Shopping Cart Total</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 3</h1>
        <h2>Lab 3</h2>
        <h2>Q 7: Shopping Cart Total</h2>
        <table border='1'>
            <tr>
                <th>Item</th>
                <th>Price</th>
            </tr>
        <?php
        foreach ($cart as $item => $price) {
            echo "<tr><td>$item</td><td>\$$price</td></tr>";
            $total += $price;
        }
        
        echo "<tr><th>Total</th><th>\$$total</th></tr>";
        ?>
        </table>
    </body>
</html>

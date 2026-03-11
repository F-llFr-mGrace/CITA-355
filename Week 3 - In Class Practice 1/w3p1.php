<?php
$nutrition = [
    "Apple",
    "Banana",
    "Carrot",
    "Milk",
    "Bread",
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Warm-up (Indexed Array + foreach)</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 3</h1>
        <h2>Part 1</h2>
        <?php
        foreach($nutrition as $item) {
            echo ($item), "<br>";
        }
        ?>
    </body>
</html>

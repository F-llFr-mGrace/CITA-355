<?php
$index = 0;
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Random Even Numbers</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 3</h1>
        <h2>Lab 3</h2>
        <h2>Q 6: Random Even Numbers</h2>
        <?php
        echo "<ul>";
        do {
            $randEven = rand(1, 50) * 2; // Generate random even number (2-100)
            echo "<li>$randEven</li>";
            $index++;
        } while ($index < 5);
        echo "</ul>";
        ?>
    </body>
</html>

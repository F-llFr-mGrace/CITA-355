<?php
// Config vars
$tableSize = 12; // Size of multiplication table
$tableTitle = "Multiplication tables";
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Multiplication Table</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 3</h1>
        <h2>Lab 3</h2>
        <h2>Q 4: Multiplication Table</h2>
        <table border="1">
            <tr>
                <th>
                <?php for ($i = 1; $i <= $tableSize; $i++) {
                     echo "<th>$i</th>"; //Make head tables 1 - $tableSize
                    } ?>
                </th>
            </tr>
            <?php for ($row = 1; $row <= $tableSize; $row++) { //Cycle through all rows
                echo "<tr>";
                    echo "<th>$row</th>";
                    for ($col = 1; $col <= $tableSize; $col++) { //Cycle through all collums
                        echo "<td>" . ($row * $col) . "</td>"; 
                    }
                echo "</tr>";
            } ?>
        </table>
    </body>
</html>

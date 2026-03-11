<?php
$nutrition = [
    ["Apple","Fruit"],
    ["Banana","Fruit"],
    ["Carrot","Vegetable"],
    ["Milk","Dairy Product"],
    ["Bread",""],
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Add Logic (foreach + if)</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 3</h1>
        <h2>Part 1-1</h2>
        <?php
        foreach($nutrition as $itemData) {
            $index = 0;
            foreach($itemData as $data) {
                if($index === 0) {
                    echo ($data);
                }
                if($index === 1 && $data !== "") {
                    echo (" - $data");
                }
                $index++;
            }
            echo ("<br>");
        }
        ?>
    </body>
</html>

<?php
require 'bdConnection.php';

$sql = "SELECT * FROM Student;";
$statement = $pdo->query($sql);
$members = $statement->fetchAll();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Week 6 - Lab 6</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 6</h1>
        <h2>Lab 6</h2>
        
        <h2>Part 1: Working with Databases in PHP</h2>
        <h2>Task 3: Retrieving Data from the Database</h2>
        <?php foreach ($members as $member) {
            echo $member['id'];
            echo $member['name'];
            echo $member['dept_name'];
            echo $member['gpa'];
            echo $member['email'];
        }?>
    </body>
</html>

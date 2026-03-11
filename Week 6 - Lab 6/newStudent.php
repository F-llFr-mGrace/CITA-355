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
        
        <h2>Part 2: Adding New Records Using a Form</h2>
        <h2>Task 1: Creating the Form</h2>
        <form action="addStudent.php" method="post">
            <p> Student ID: <input type="text" name="id"> </p>
            <p> Student Name: <input type="text" name="name"> </p>
            <p> Department Name: 
                Math <input type="radio" name="dep_name" value="Math">
                CIT <input type="radio" name="dep_name" value="CIT">
                Physics <input type="radio" name="dep_name" value="Physics">
                AUTO <input type="radio" name="dep_name" value="AUTO">
            </p>
            <p> Student GPA: <input type="text" name="gpa"> </p>
            <p> Student Email: <input type="text" name="email"> </p>
            <p> 
                <input type="reset" value="Clear Form" />&nbsp; &nbsp; &nbsp; &nbsp;
                <input type="submit" name="Submit" value="Send Form" />
            </p>
        </form>
    </body>
</html>

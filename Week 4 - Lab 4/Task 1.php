<?php
$employees = [
    ["name" => "John Doe", "department" => "IT", "hrsWorked" => 28, "ratePerHr" => 75, "workStatus" => "PT"],
    ["name" => "Jane Smith", "department" => "Marketing", "hrsWorked" => 40, "ratePerHr" => 30, "workStatus" => "FT"],
    ["name" => "Emily Davis", "department" => "HR", "hrsWorked" => 28, "ratePerHr" => 20, "workStatus" => "PT"],
    ["name" => "Michael Brown", "department" => "Finance", "hrsWorked" => 40, "ratePerHr" => 50, "workStatus" => "FT"],
    ["name" => "Sarah Wilson", "department" => "Sales", "hrsWorked" => 40, "ratePerHr" => 40, "workStatus" => "FT"]
];
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Task 1: Define Employee Data (Using Arrays)</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 4</h1>
        <h2>Lab 4</h2>
        <h2>Task 1: Define Employee Data (Using Arrays)</h2>
        <p>
            <?php
            echo "<pre>";
            print_r($employees);
            ?>
        </p>
    </body>
</html>

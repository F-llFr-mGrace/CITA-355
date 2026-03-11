<?php
$employees = [
    ["name" => "John Doe", "department" => "IT", "hrsWorked" => 28, "ratePerHr" => 75, "workStatus" => "PT"],
    ["name" => "Jane Smith", "department" => "Marketing", "hrsWorked" => 40, "ratePerHr" => 30, "workStatus" => "FT"],
    ["name" => "Emily Davis", "department" => "HR", "hrsWorked" => 28, "ratePerHr" => 20, "workStatus" => "PT"],
    ["name" => "Michael Brown", "department" => "Finance", "hrsWorked" => 40, "ratePerHr" => 50, "workStatus" => "FT"],
    ["name" => "Sarah Wilson", "department" => "Sales", "hrsWorked" => 40, "ratePerHr" => 40, "workStatus" => "FT"]
];
function displayEmployees($employees) {
    foreach ($employees as $employee) {
        echo "<tr>";
        echo "<td>" . $employee["name"] . "</td>";
        echo "<td>" . $employee["department"] . "</td>";
        echo "<td>" . $employee["hrsWorked"] . "</td>";
        echo "<td>$" . $employee["ratePerHr"] . "</td>";
        echo "<td>" . $employee["workStatus"] . "</td>";
        if ($employee["hrsWorked"] >= 35) { // Check if employee has the required # of hours
            echo "<td>Sufficient hours</td>";
        } else {
            echo "<td>Needs more hours</td>";
        }
        echo "</tr>";
    }
}
function displayFtEmployees($employees) {
    foreach ($employees as $employee) {
        if ($employee["workStatus"] === "FT") {
            echo "<tr>";
            echo "<td>" . $employee["name"] . "</td>";
            echo "<td>" . $employee["department"] . "</td>";
            echo "<td>" . $employee["hrsWorked"] . "</td>";
            echo "<td>$" . $employee["ratePerHr"] . "</td>";
            echo "<td>" . $employee["workStatus"] . "</td>";
            if ($employee["hrsWorked"] >= 35) { // Check if employee has the required # of hours
                echo "<td>Sufficient hours</td>";
            } else {
                echo "<td>Needs more hours</td>";
            }
            echo "</tr>";
        }
    }
}
function calculateTotalPayroll($employees) {
    $totalPayroll = 0;
    foreach ($employees as $employee) {
        $totalPayroll += $employee["hrsWorked"] * $employee["ratePerHr"];
    }
    return $totalPayroll;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Task 5: Create a Function to Calculate Total Payroll</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 4</h1>
        <h2>Lab 4</h2>
        <h2>Task 5: Create a Function to Calculate Total Payroll</h2>
        <h3>Number of Employees: <?php echo count($employees); ?></h3>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Hours Worked</th>
                <th>Rate Per Hour</th>
                <th>Status</th>
                <th>Work Status</th>
            </tr>
            <?php displayEmployees($employees); // Call function to display employee data ?>
        </table>
        <table border="1">
            <tr>
                <th>Name</th>
                <th>Department</th>
                <th>Hours Worked</th>
                <th>Rate Per Hour</th>
                <th>Status</th>
                <th>Work Status</th>
            </tr>
            <?php displayFtEmployees($employees); // Call function to display full-time employee data ?>
        </table>
        <h3>Total Payroll: $<?php echo calculateTotalPayroll($employees); ?></h3>
    </body>
</html>

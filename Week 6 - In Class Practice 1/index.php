<!DOCTYPE html>
<html>
    <head>
        <title>Week 6 - In Class Practice</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 6</h1>
        <h2>In Class Practice</h2>
        <h2>Part 6 – Execute SELECT Queries</h2>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "school_db";
$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sqlTest = "SELECT * FROM students";
$resultTest = mysqli_query($conn, $sqlTest);
$rowsTest = mysqli_fetch_all($resultTest, MYSQLI_ASSOC);
echo "Connected successfully | " . count($rowsTest) . " students in database.<br>";

echo "<h2>Query 1: Display All Students</h2>";
$sqlQ1 = "SELECT * FROM students";
$resultQ1 = mysqli_query($conn, $sqlQ1);
$rowsQ1 = mysqli_fetch_all($resultQ1, MYSQLI_ASSOC);
displayStudents($rowsQ1);

echo "<h2>Query 2: Students with GPA between 3 and 3.5</h2>";
$sqlQ2 = "SELECT *, gpa FROM students WHERE gpa <= 3.5 AND gpa >= 3";
$resultQ2 = mysqli_query($conn, $sqlQ2);
$rowsQ2 = mysqli_fetch_all($resultQ2, MYSQLI_ASSOC);
displayStudents($rowsQ2);

echo "<h2>Query 3: Order Students by GPA Descending</h2>";
$sqlQ3 = "SELECT * FROM students ORDER BY gpa DESC";
$resultQ3 = mysqli_query($conn, $sqlQ3);
$rowsQ3 = mysqli_fetch_all($resultQ3, MYSQLI_ASSOC);
displayStudents($rowsQ3);

echo "<h2>All students as an HTML table instead of plain text</h2>";
$sqlTest1 = "SELECT * FROM students";
$resultTest1 = mysqli_query($conn, $sqlTest1);
$rowsTest1 = mysqli_fetch_all($resultTest1, MYSQLI_ASSOC);
?>
<table>
    <th>
        <th>Name</th>
        <th>GPA</th>
    </th>
    <tbody>
        <?php
        foreach ($rowsTest1 as $student) {
            echo "<tr>";
            echo "<td>" . $student['id'] . "</td>";
            echo "<td>" . $student['name'] . "</td>";
            echo "<td>" . $student['gpa'] . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

<?php
function displayStudents($students) {
    $namesOnly = false;
    foreach ($students as $student) {
        if ($namesOnly) {
            echo $student['name'] . "<br>";
        }
        else {
            echo "ID: " . $student['id'] .
             " | Name: " . $student['name'] .
             " | GPA: " . $student['gpa'] . "<br>";
        }
    }
}
?>
    </body>
</html>

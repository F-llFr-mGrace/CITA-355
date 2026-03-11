<?php
require_once 'bdConnection.php';

$id = $_GET['id'];

$sql = "DELETE FROM Student WHERE id=:id";
$statement = $pdo->prepare($sql);

if ($statement->execute(['id' => $id])) {
    echo "Student deleted successfully.";
} else {
    echo "Error deleting record: " . $statement->errorInfo();
}
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

        <h2>Part 3: Updating and Deleting Student Records</h2>
        <h2>Task 4: Deleting a Student Record (deleteStudent.php)</h2>
        
    </body>
</html>

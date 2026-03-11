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
        
        <h2>Part 3: Updating and Deleting Student Records</h2>
        <h2>Task 1: Add Edit and Delete Links to the Student Table</h2>
        <h2>Student Information</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>GPA</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($members as $member) { ?>
                    <tr>
                        <td><?php echo $member['id']; ?></td>
                        <td><?php echo $member['name']; ?></td>
                        <td><?php echo $member['dept_name']; ?></td>
                        <td><?php echo $member['gpa']; ?></td>
                        <td><?php echo $member['email']; ?></td>
                        <td><a href="editStudent.php?id=<?php echo $member['id']; ?>">Edit</a></td>
                        <td><a href="deleteStudent.php?id=<?php echo $member['id']; ?>">Delete</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>

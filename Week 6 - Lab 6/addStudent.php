<?php
require 'bdConnection.php';

$sql = "INSERT INTO Student(id, name, dept_name, gpa, email) VALUES (?, ?, ?, ?, ?)";

$statement = $pdo->prepare($sql);
$statement->execute([$_POST['id'], $_POST['name'], $_POST['dep_name'], $_POST['gpa'], $_POST['email']]);

$sql2 = "SELECT * 
        FROM Student;";

$statement = $pdo->query($sql2);
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
        <h2>Task 2: Processing the Form and Adding Data to the Database</h2>
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
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </body>
</html>

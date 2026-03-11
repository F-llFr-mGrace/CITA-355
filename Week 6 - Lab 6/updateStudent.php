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
        <h2>Task 3: Processing the Edit Form and Updating the Record (updateStudent.php)</h2>
        
        <?php
        require 'bdConnection.php';

        $id = $_POST['id'];
        $name = $_POST['name'];
        $dept_name = $_POST['dept_name'];
        $gpa = $_POST['gpa'];
        $email = $_POST['email'];

        $sql = "UPDATE Student SET name=:name, dept_name=:dept_name, gpa=:gpa, email=:email WHERE id=:id";
        $statement = $pdo->prepare($sql);

        if ($statement->execute(['id' => $id, 'name' => $name, 'dept_name' => $dept_name, 'gpa' => $gpa, 'email' => $email])) {
            echo "Student updated successfully.";
        } else {
            echo "Error updating record: " . $statement->errorInfo();
        }
        ?>
    </body>
</html>

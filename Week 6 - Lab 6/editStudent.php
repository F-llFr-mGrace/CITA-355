<?php
require 'bdConnection.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM Student WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->execute(['id' => $id]);
    $student = $statement->fetch();
} else {
    echo "No student ID provided.";
    exit;
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
        <h2>Task 2: Editing a Student Record (editStudent.php)</h2>
        
        <form action="updateStudent.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($student['id']); ?>">
            
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($student['name']); ?>" required><br><br>
            
            <label for="dept_name">Department:</label>
            <input type="text" id="dept_name" name="dept_name" value="<?php echo htmlspecialchars($student['dept_name']); ?>" required><br><br>
            
            <label for="gpa">GPA:</label>
            <input type="number" step="0.01" id="gpa" name="gpa" value="<?php echo htmlspecialchars($student['gpa']); ?>" required><br><br>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($student['email']); ?>" required><br><br>
            
            <input type="submit" value="Update Student">
        </form>
    </body>
</html>

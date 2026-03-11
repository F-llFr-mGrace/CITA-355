<?php
$students = [
    ['Alice', 85, 90,],
    ['Bob', 78, 82,],
    ['Charlie', 92, 88,],
];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Using Two-Dimensional Arrays</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Lab 2</h1>
    <h2>Task 3</h2>
    <h2>Student Gradebook</h2>
    <table>
        <thead>
            <tr>
                <th>Student</th>
                <th>Math</th>
                <th>Science</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $students[0][0]; ?></td>
                <td><?php echo $students[0][1]; ?></td>
                <td><?php echo $students[0][2]; ?></td>
            </tr>
            <tr>
                <td><?php echo $students[1][0]; ?></td>
                <td><?php echo $students[1][1]; ?></td>
                <td><?php echo $students[1][2]; ?></td>
            </tr>
            <tr>
                <td><?php echo $students[2][0]; ?></td>
                <td><?php echo $students[2][1]; ?></td>
                <td><?php echo $students[2][2]; ?></td>
            </tr>
        </tbody>
    </table>
    <p>The total score of each student:</p>
    <p>Alice: <?php echo ($students[0][1] + $students[0][2]); ?></p>
    <p>Bob: <?php echo ($students[1][1] + $students[1][2]); ?> <- The lowest total score among all students</p>
    <p>Charlie: <?php echo ($students[2][1] + $students[2][2]); ?> <- The highest total score among all students</p>
</body>

</html>

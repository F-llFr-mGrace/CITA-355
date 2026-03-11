<!DOCTYPE html>
<html>

<head>
    <title>Week 5 - process.php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Week 5</h1>
    <h2>In Class Practice 1</h2>
    <h2>process.php</h2>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'] ?? '';
    $age = $_POST['age'] ?? '';
    $terms = isset($_POST['terms']) ? 'Agreed' : 'Not Agreed';
    echo "<p>Email: $email</p>";
    echo "<p>Age: $age</p>";
    echo "<p>Terms: $terms</p>";
}
?>

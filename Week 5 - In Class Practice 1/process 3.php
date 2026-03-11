<!DOCTYPE html>
<html>

<head>
    <title>Week 5 - process 3.php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Week 5</h1>
    <h2>In Class Practice 1</h2>
    <h2>process 3.php</h2>
</body>

</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];
    // Collecting form data
    $email = trim($_POST['email'] ?? '');
    $age = $_POST['age'] ?? '';
    $password = $_POST['password'] ?? '';
    $terms = $_POST['terms'] ?? false;
    $gender = $_POST['gender'] ?? '';
    // Validation
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email address.";
    }
    if (empty($password) || strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }
    if (empty($age) || !filter_var($age, FILTER_VALIDATE_INT) || $age < 18 || $age > 65) 
    {
        $errors[] = "Age must be between 18 and 65.";
    }
    if (!$terms) {
        $errors[] = "You must agree to the terms.";
    }
    if (empty($gender)) {
        $errors[] = "Gender must be selected.";
    }
    if (!empty($errors)) {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
    } else {
        echo "<p>Email: $email</p>";
        echo "<p>Password: " . str_repeat("*", strlen($password)) . "</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Terms: Agreed</p>";
        echo "<p>Gender: $gender</p>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Part 2: Create Processing & Validation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Week 5</h1>
    <h2>Lab 5</h2>
    <h2>Part 2: Create Processing & Validation</h2>
    <p>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $errors = [];
            // Collecting form data
            $name = trim($_POST['name'] ?? '');
            $email = trim($_POST['email'] ?? '');
            $age = $_POST['age'] ?? '';
            $password = $_POST['password'] ?? '';
            $phone = $_POST['phone'] ?? '';
            $bio = trim($_POST['bio'] ?? '');
            $country = $_POST['country'] ?? '';
            // Validation
            if (empty($name) || strlen($name) < 3) {
                $errors[] = "Name must be at least 3 characters.";
            }
            if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email address.";
            }
            if (
                empty($age) || !filter_var($age, FILTER_VALIDATE_INT) || $age
                < 18 || $age > 65
            ) {
                $errors[] = "Age must be between 18 and 65.";
            }
            if (
                empty($password) || strlen($password) < 8 ||
                !preg_match('/[A-Z]/', $password) || !preg_match(
                    '/[0-9]/',
                    $password
                )
            ) {
                $errors[] = "Password must be at least 8 characters, include
one uppercase letter and one number.";
            }
            if (empty($phone) || !preg_match('/^\d{10}$/', $phone)) {
                $errors[] = "Phone number must be exactly 10 digits.";
            }
            if (empty($bio) || strlen($bio) > 150) {
                $errors[] = "Bio must not exceed 150 characters.";
            }
            if (empty($country)) {
                $errors[] = "Please select a country.";
            }
            // Display errors or success message
            echo "<div class='container'>";
            if (!empty($errors)) {
                foreach ($errors as $error) {
                    echo "<p class='error'>$error</p>";
                }
            } else {
                echo "<p class='success'>Registration Successful!</p>";
                echo "<p>Name: $name</p>";
                echo "<p>Email: $email</p>";
                echo "<p>Age: $age</p>";
                echo "<p>Phone: $phone</p>";
                echo "<p>Country: $country</p>";
                echo "<p>Bio: $bio</p>";
            }
            echo "</div>";
        }
        ?>

    </p>
</body>

</html>
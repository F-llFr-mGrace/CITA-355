<!DOCTYPE html>
<html>

<head>
    <title>Part 1: Create a Styled Registration Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>User Registration</h2>
        <form action="process.php" method="POST">
            <label>Name:</label>
            <input type="text" name="name">
            <label>Email:</label>
            <input type="email" name="email">
            <label>Age:</label>
            <input type="number" name="age">
            <label>Password:</label>
            <input type="password" name="password">
            <label>Phone Number:</label>
            <input type="text" name="phone">
            <label>Bio (Max 150 chars):</label>
            <textarea name="bio" maxlength="150"></textarea>
            <label>Country:</label>
            <select name="country">
                <option value="">Select</option>
                <option value="USA">USA</option>
                <option value="Canada">Canada</option>
                <option value="UK">UK</option>
            </select>
            <p><input type="submit" value="Register"></p>
        </form>
    </div>
</body>
</html>

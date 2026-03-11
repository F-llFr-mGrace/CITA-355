<!DOCTYPE html>
<html>

<head>
    <title>Week 5 - Homepage (index 3.php)</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Week 5</h1>
    <h2>In Class Practice 1</h2>
    <h2>Homepage (index 3.php)</h2>
</body>
<form action="process 3.php" method="POST">
    <p>Email: <input type="email" name="email"></p>
    <p>Password: <input type="password" name="password"></p>
    <p>Age: <input type="number" name="age"></p>
    <p>
        <input type="checkbox" name="terms" value="true">
        I agree to the terms and conditions
    </p>
    <p>
        Gender: 
        <input type="radio" name="gender" value="male"> Male
        <input type="radio" name="gender" value="female"> Female
    </p>
    <p><input type="submit" value="Submit"></p>
</form>

</html>

<?php

?>

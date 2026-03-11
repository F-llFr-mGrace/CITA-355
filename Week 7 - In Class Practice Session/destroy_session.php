<!DOCTYPE html>
<html>
    <head>
        <title>Week 7 - In Class Practice Session</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 7</h1>
        <h2>In Class Practice Session</h2>
        <h2>Exercise 3: Destroy the Session</h2>
        
        <?php
        session_start(); // Start the session
        session_unset(); // Unset all session variables
        session_destroy(); // Destroy the session
        echo "Session destroyed.";
        ?>
    </body>
</html>

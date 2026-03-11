<!DOCTYPE html>
<html>
    <head>
        <title>Week 7 - In Class Practice Session</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 7</h1>
        <h2>In Class Practice Session</h2>
        <h2>Page 2: Access Session Variables</h2>
        
        <?php
        session_start(); // Start the session
        // Check if session variables are set
        if (isset($_SESSION["username"]) && isset($_SESSION["role"])) {
        echo "Welcome, " . $_SESSION["username"] . "!<br>";
        echo "Your role is: " . $_SESSION["role"];
        } else {
        echo "No session data found.";
        }
        ?>
    </body>
</html>

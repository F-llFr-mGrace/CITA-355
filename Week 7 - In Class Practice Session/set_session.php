<!DOCTYPE html>
<html>
    <head>
        <title>Week 7 - In Class Practice Session</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 7</h1>
        <h2>In Class Practice Session</h2>
        <h2>Page 1: Start Session and Set Variables</h2>
        
        <?php
        session_start(); // Start the session
        // Set session variables
        $_SESSION["username"] = "JohnDoe";
        $_SESSION["role"] = "Admin";
        echo "Session variables are set.<br>";
        echo '<a href="get_session.php">Go to the next page</a>';
        ?>
    </body>
</html>

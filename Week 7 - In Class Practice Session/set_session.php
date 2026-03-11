<!DOCTYPE html>
<html>
    <head>
        <title>Week 7 - In Class Practice Session</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 7</h1>
        <h2>In Class Practice Session</h2>
        <h2>Exercise 2: Modify and Add New Session Variables</h2>
        
        <?php
        session_start(); // Start the session
        // Set session variables
        $_SESSION["Username"] = "GraceFowler";
        $_SESSION["Role"] = "Student";
        $_SESSION["Email"] = "gracefowler@proton.me";
        $_SESSION["Age"] = 21;
        $_SESSION["Country"] = "USA, NY";
        $_SESSION["Last Login"] = date("Y-m-d H:i:s");
        echo "Session variables are set.<br>";
        echo '<a href="get_session.php">Go to the next page</a>';
        ?>
    </body>
</html>

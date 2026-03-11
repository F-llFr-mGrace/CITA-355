<!DOCTYPE html>
<html>
    <head>
        <title>Week 6 - Lab 6</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Week 6</h1>
        <h2>Lab 6</h2>
        
        <h2>Part 1: Working with Databases in PHP</h2>
        <h2>Task 2: creating database connection</h2>
        <?php
        // Database connection configuration
        $type     = 'mysql';        // Type of database
        $server   = 'localhost';    // Server the database is on
        $db       = 'college';      // Name of the database
        $port     = '3306';         // Port (usually 8889 in MAMP and 3306 in XAMPP)
        $charset  = 'utf8mb4';      // UTF-8 encoding using 4 bytes per character

        $username = 'root';         // Enter YOUR username here
        $password = '';             // Enter YOUR password here

        // Options for how PDO works
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        // --- DO NOT CHANGE ANYTHING BENEATH THIS LINE ---

        // Create DSN (Data Source Name)
        $dsn = "$type:host=$server;dbname=$db;port=$port;charset=$charset";

        try {
            // Create the PDO object
            $pdo = new PDO($dsn, $username, $password, $options);
        } catch (PDOException $e) {
            // Re-throw exception if connection fails
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }
        ?>
    </body>
</html>

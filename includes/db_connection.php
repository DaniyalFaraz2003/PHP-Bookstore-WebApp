<?php

// Database credentials
$host = "localhost"; // If your MySQL server is running on a different host, change this
$db_name = "bookstore"; // Replace 'your_database_name' with your actual database name
$username = "root"; // Replace 'root' with your MySQL username if different
$password = ""; // If you've set a password for your MySQL server, enter it here

try {
    // PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$db_name", $username, $password);
    
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Optionally, you can set character set to utf8
    $pdo->exec("SET NAMES utf8");
    
    // Uncomment the following line if you want to show a message when connected successfully
    // echo "Connected successfully"; 
} catch(PDOException $e) {
    // Display error message if connection fails
    die("Connection failed: " . $e->getMessage());
}
?>

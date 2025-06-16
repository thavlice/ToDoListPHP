<?php
// Database connection settings
$servername = getenv('DB_HOST');
$username = getenv('DB_USER');
$password = getenv('DB_PASS');
$dbname = getenv('DB_NAME'); // The name of the database to connect to

// Create a new MySQLi object to establish a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    // If there is a connection error, output the error message and terminate the script
    die("Connection failed: " . $conn->connect_error);
}
?>

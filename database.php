<?php
$servername = "localhost";
$username = "root";
$password = ""; // Leave empty for XAMPP
$database = "mydb"; // Your database name

// Create connection
$connection = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql_drop = "DROP TABLE IF EXISTS students";
mysqli_query($connection, $sql_drop);

$sql_create = "CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50) NOT NULL
)";

if (mysqli_query($connection, $sql_create)) {
    echo "Table 'students' has been recreated successfully!";
} else {
    echo "Error creating table: " . mysqli_error($connection);
}

mysqli_close($connection);
?>

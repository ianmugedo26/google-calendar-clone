<?php
// Connection to local MySQL Server (using XAMPP)
$host = "localhost";
$username = "root";
$password = ""; // default in XAMPP is empty
$database = "calender";

$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully to MySQL with mysqli!";
$conn->set_charset("utf8mb4");
?>

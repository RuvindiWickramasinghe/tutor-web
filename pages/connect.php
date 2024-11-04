<?php
// connect.php

$servername = "localhost";
$username = "";  // Update this if you have a database username
$password = "";  // Update this if you have a database password
$dbname = "tutor_db";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

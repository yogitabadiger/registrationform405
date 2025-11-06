<?php
$servername = "localhost";
$username = "root";      // default in WAMP
$password = "";          // leave empty unless you set one
$dbname = "student_registration";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

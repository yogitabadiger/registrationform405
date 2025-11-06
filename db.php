<?php
$servername = "localhost";
$username = "root";
$password = ""; // leave empty in WAMP
$dbname = "student_registration";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $cgpa = $_POST['cgpa'];

    $sql = "UPDATE students SET 
        fname='$fname', lname='$lname', email='$email', phone='$phone', city='$city', cgpa='$cgpa'
        WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('✅ Record updated successfully!'); window.location.href='student.html';</script>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
$conn->close();
?>

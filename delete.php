<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM students WHERE id=$id");
    echo "<script>alert('Record deleted successfully'); window.location.href='student.html';</script>";
}
$conn->close();
?>

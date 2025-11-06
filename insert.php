<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $color = $_POST['color'];
    $rollno = $_POST['rollno'];
    $department = $_POST['department'];
    $year = $_POST['year'];
    $sem = $_POST['sem'];
    $cgpa = $_POST['cgpa'];
    $favsub = $_POST['favsub'];
    $percentage = $_POST['percentage'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $linkedin = $_POST['linkedin'];
    $github = $_POST['github'];
    $hobbies = $_POST['hobbies'];
    $clubs = isset($_POST['clubs']) ? implode(',', $_POST['clubs']) : '';
    $skills = $_POST['skills'];
    $languages = $_POST['languages'];

    $sql = "INSERT INTO students 
        (fname, mname, lname, dob, gender, email, password, phone, color, rollno, department, year, sem, cgpa, favsub, percentage, address, city, state, pincode, linkedin, github, hobbies, clubs, skills, languages)
        VALUES 
        ('$fname', '$mname', '$lname', '$dob', '$gender', '$email', '$password', '$phone', '$color', '$rollno', '$department', '$year', '$sem', '$cgpa', '$favsub', '$percentage', '$address', '$city', '$state', '$pincode', '$linkedin', '$github', '$hobbies', '$clubs', '$skills', '$languages')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('✅ Student registered successfully!'); window.location.href='student.html';</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>

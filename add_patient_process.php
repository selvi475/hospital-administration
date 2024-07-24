<?php
include 'config.php';

$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];

$sql = "INSERT INTO patients (name, dob, gender, address, phone, email) 
        VALUES ('$name', '$dob', '$gender', '$address', '$phone', '$email')";

if ($conn->query($sql) === TRUE) {
    echo "New patient added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

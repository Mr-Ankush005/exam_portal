<?php
include 'db.php';

$id=$_GET['id'];
$result=mysqli_query($conn,"SELECT * FROM std_details WHERE student_id='$id'");
$row=mysqli_fetch_assoc($result);

$email=$row['email'];
$password=$row['password'];

mysqli_query($conn,"INSERT INTO log VALUES ('$email','$password','U','Y')");
mysqli_query($conn,"UPDATE std_details SET status='Y' WHERE student_id='$id'");

header("Location: check_registration.php");
?>

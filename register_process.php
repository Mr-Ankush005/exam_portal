<?php
include 'db.php';

$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$class=$_POST['class'];
$course=$_POST['course'];
$password=$_POST['password'];

$sql="INSERT INTO std_details
(student_name,email,mobile,dob,gender,class,course,password,status)
VALUES
('$name','$email','$mobile','$dob','$gender','$class','$course','$password','N')";

mysqli_query($conn,$sql);
header("Location: registration_success.php");
?>

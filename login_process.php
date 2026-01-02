<?php
include 'db.php';
session_start();

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM log 
WHERE username='$username' 
AND password='$password' 
AND status='Y'";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1){
    $row=mysqli_fetch_assoc($result);
    $_SESSION['username']=$username;
    $_SESSION['user_type']=$row['user_type'];

    if($row['user_type']=='A'){
        header("Location: admin_dashboard.php");
    }else{
        header("Location: user_dashboard.php");
    }
}else{
    header("Location: login_error.php");
exit;
;
}
?>

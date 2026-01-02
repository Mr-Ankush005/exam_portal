<!DOCTYPE html>
<html>
<head>
<title>Exam Portal</title>
<style>
body{
    margin:0;
    padding:0;
    font-family:Arial, Helvetica, sans-serif;
    background:linear-gradient(to right,#0f2027,#203a43,#2c5364);
    color:white;
}
.container{
    width:100%;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}
.box{
    background:white;
    color:#333;
    width:500px;
    padding:40px;
    border-radius:16px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
}
.box h1{
    margin-bottom:10px;
    color:#1e293b;
}
.box p{
    font-size:15px;
    margin-bottom:30px;
    color:#555;
}
.btn{
    display:inline-block;
    width:180px;
    padding:12px;
    margin:10px;
    background:#1e293b;
    color:white;
    text-decoration:none;
    border-radius:8px;
    font-weight:bold;
}
.btn:hover{
    background:#334155;
}
.footer{
    margin-top:30px;
    font-size:13px;
    color:#777;
}
</style>
</head>
<body>

<div class="container">
    <div class="box">
        <h1>Online Exam Portal</h1>
        <p>
            Welcome to the Online Examination System.  
            Register as a student, get admin approval,  
            and appear for your course exam securely.
        </p>

        <a class="btn" href="login.php">Login</a>
        <a class="btn" href="std_reg.php">Student Registration</a>

        <div class="footer">
            © <?php echo date("Y"); ?> Exam Portal | All Rights Reserved
        </div>
    </div>
</div>

</body>
</html>

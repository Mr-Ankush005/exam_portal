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
    width:520px;
    padding:40px;
    border-radius:16px;
    text-align:center;
    box-shadow:0 10px 30px rgba(0,0,0,0.3);
}
h1{
    color:#1e293b;
}
p{
    color:#555;
    font-size:14px;
}
.notice{
    background:#f1f5f9;
    border-left:5px solid #1e293b;
    padding:12px;
    margin:20px 0;
    text-align:left;
    font-size:13px;
    color:#333;
}
.btn{
    display:inline-block;
    width:200px;
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
.admin{
    margin-top:25px;
    font-size:13px;
}
.admin a{
    color:#64748b;
    text-decoration:none;
}
.admin a:hover{
    text-decoration:underline;
}
.footer{
    margin-top:25px;
    font-size:12px;
    color:#777;
}
</style>
</head>
<body>

<div class="container">
    <div class="box">

        <h1>Online Exam Portal</h1>
        <p>
            Secure online examination system for students.  
            Register, get approved, and appear for your exam.
        </p>

        <div class="notice">
            <b>Exam Instructions:</b><br>
            • Registration requires admin approval<br>
            • Exam is course-based<br>
            • No re-exam without permission<br>
            • Results are auto-generated
        </div>

        <a class="btn" href="login.php">Login</a>
        <a class="btn" href="std_reg.php">Student Registration</a>

        <!-- Hidden Admin Access -->
        <div class="admin">
            <a href="login.php">Admin Login</a>
        </div>

        <div class="footer">
            © <?php echo date("Y"); ?> Exam Portal | All Rights Reserved
        </div>

    </div>
</div>

</body>
</html>

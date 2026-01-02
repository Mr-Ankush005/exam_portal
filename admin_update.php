<?php
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Change Password</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #141e30, #243b55);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .password-box {
        background: #ffffff;
        width: 360px;
        padding: 35px;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.25);
        animation: fadeIn 0.8s ease-in-out;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .form-group {
        margin-bottom: 15px;
    }

    label {
        display: block;
        font-size: 14px;
        color: #555;
        margin-bottom: 6px;
    }

    input[type="password"] {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 6px;
        outline: none;
        transition: border 0.3s;
    }

    input:focus {
        border-color: #243b55;
    }

    .btn-submit {
        width: 100%;
        background: #243b55;
        color: #fff;
        border: none;
        padding: 12px;
        font-size: 15px;
        border-radius: 6px;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn-submit:hover {
        background: #141e30;
    }

    .message {
        margin-top: 15px;
        text-align: center;
        font-size: 14px;
        color: #2ecc71;
    }

    .back-link {
        display: block;
        text-align: center;
        margin-top: 15px;
        text-decoration: none;
        color: #243b55;
        font-size: 14px;
    }

    .back-link:hover {
        text-decoration: underline;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
</head>
<body>

<div class="password-box">
    <h2>Change Password</h2>

    <form method="post">
        <div class="form-group">
            <label>New Password</label>
            <input type="password" name="pass" required>
        </div>

        <input type="submit" value="Update Password" class="btn-submit">
    </form>

    <?php
    if (isset($_POST['pass'])) {
        $p = $_POST['pass'];
        mysqli_query($conn, "UPDATE login SET password='$p' WHERE username='admin'");
        echo "<div class='message'>Password Updated Successfully</div>";
    }
    ?>

    <a href="admin_dashboard.php" class="back-link">← Back to Dashboard</a>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login Failed</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #ff416c, #ff4b2b);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .error-box {
        background: #ffffff;
        padding: 40px;
        width: 380px;
        text-align: center;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        animation: fadeIn 0.8s ease-in-out;
    }

    .error-icon {
        font-size: 60px;
        color: #e74c3c;
        margin-bottom: 15px;
    }

    h2 {
        color: #333;
        margin-bottom: 10px;
    }

    p {
        color: #555;
        font-size: 15px;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .btn-back {
        display: inline-block;
        text-decoration: none;
        background: #ff4b2b;
        color: #fff;
        padding: 10px 22px;
        border-radius: 6px;
        font-size: 14px;
        transition: background 0.3s;
    }

    .btn-back:hover {
        background: #d93b1f;
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

<div class="error-box">
    <div class="error-icon">✖</div>
    <h2>Login Failed</h2>
    <p>
        Invalid username or password<br>
        <strong>OR</strong><br>
        Your account is waiting for admin approval.
    </p>
    <a href="login.php" class="btn-back">Try Again</a>
</div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registration Successful</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #43cea2, #185a9d);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .success-box {
        background: #ffffff;
        padding: 40px;
        width: 380px;
        text-align: center;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.2);
        animation: fadeIn 1s ease-in-out;
    }

    .success-icon {
        font-size: 60px;
        color: #2ecc71;
        margin-bottom: 15px;
    }

    h2 {
        margin: 10px 0;
        color: #333;
    }

    p {
        font-size: 15px;
        color: #555;
        line-height: 1.6;
        margin-bottom: 20px;
    }

    .btn-home {
        display: inline-block;
        text-decoration: none;
        background: #185a9d;
        color: #fff;
        padding: 10px 20px;
        border-radius: 6px;
        font-size: 14px;
        transition: background 0.3s;
    }

    .btn-home:hover {
        background: #0f3f6f;
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

<div class="success-box">
    <div class="success-icon">✔</div>
    <h2>Registration Successful</h2>
    <p>
        Thank you for registering.<br>
        Please wait for <strong>admin approval</strong><br>
        (24–48 hours).
    </p>
    <a href="login.php" class="btn-home">Go to Login</a>
</div>

</body>
</html>

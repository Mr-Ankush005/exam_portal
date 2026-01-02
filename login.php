<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #11998e, #38ef7d);
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .login-box {
        background: #ffffff;
        padding: 35px 40px;
        width: 340px;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.2);
        animation: fadeIn 0.8s ease-in-out;
    }

    .login-box h2 {
        text-align: center;
        margin-bottom: 25px;
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

    input {
        width: 100%;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
        outline: none;
        transition: border 0.3s;
    }

    input:focus {
        border-color: #11998e;
    }

    .btn-login {
        width: 100%;
        background: #11998e;
        color: white;
        border: none;
        padding: 12px;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        margin-top: 10px;
        transition: background 0.3s;
    }

    .btn-login:hover {
        background: #0e7c72;
    }

    .links {
        text-align: center;
        margin-top: 15px;
        font-size: 14px;
    }

    .links a {
        text-decoration: none;
        color: #11998e;
    }

    .links a:hover {
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

<div class="login-box">
    <h2>Login</h2>

    <form method="post" action="login_process.php">
        <div class="form-group">
            <label>Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <input type="submit" value="Login" class="btn-login">
    </form>

    <div class="links">
        <a href="std_reg.php">Create an account</a>
    </div>
</div>

</body>
</html>

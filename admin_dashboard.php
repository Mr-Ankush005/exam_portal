<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #141e30, #243b55);
        min-height: 100vh;
    }

    .navbar {
        background: #111;
        color: #fff;
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar h2 {
        margin: 0;
        font-size: 20px;
        letter-spacing: 1px;
    }

    .logout-btn {
        color: #fff;
        text-decoration: none;
        background: #e74c3c;
        padding: 8px 14px;
        border-radius: 5px;
        font-size: 14px;
        transition: background 0.3s;
    }

    .logout-btn:hover {
        background: #c0392b;
    }

    .dashboard {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 60px 20px;
    }

    .card {
        background: #fff;
        width: 420px;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.25);
        padding: 30px;
        animation: fadeIn 0.8s ease-in-out;
    }

    .card h3 {
        margin-top: 0;
        color: #333;
        text-align: center;
    }

    .menu {
        margin-top: 25px;
    }

    .menu a {
        display: block;
        text-decoration: none;
        background: #243b55;
        color: #fff;
        padding: 12px;
        margin-bottom: 12px;
        border-radius: 6px;
        text-align: center;
        font-size: 15px;
        transition: background 0.3s, transform 0.2s;
    }

    .menu a:hover {
        background: #141e30;
        transform: translateY(-2px);
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

<div class="navbar">
    <h2>Admin Panel</h2>
    <a href="logout.php" class="logout-btn">Logout</a>
</div>

<div class="dashboard">
    <div class="card">
        <h3>Welcome Admin</h3>

        <div class="menu">
            <a href="check_registration.php">Check Registrations</a>
            <a href="admin_update_profile.php">Change Password</a>

            <!-- NEW BUTTONS -->
            <a href="create_course.php">Create Course</a>
            <a href="set_question.php">Set Questions</a>
        </div>

    </div>
</div>

</body>
</html>

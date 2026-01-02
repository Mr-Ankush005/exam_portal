<?php
include 'db.php';
session_start();
$user = $_SESSION['username'];

$result = mysqli_query($conn, "SELECT * FROM std_details WHERE email='$user'");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>User Dashboard</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #1d2671, #c33764);
        min-height: 100vh;
    }

    .navbar {
        background: rgba(0,0,0,0.85);
        color: #fff;
        padding: 15px 30px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .navbar h2 {
        margin: 0;
        font-size: 20px;
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
        padding: 60px 20px;
    }

    .card {
        background: #ffffff;
        width: 450px;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        padding: 30px;
        animation: fadeIn 0.8s ease-in-out;
    }

    .card h3 {
        margin-top: 0;
        color: #333;
        text-align: center;
        margin-bottom: 20px;
    }

    .info {
        font-size: 15px;
        color: #555;
        margin-bottom: 12px;
    }

    .info span {
        font-weight: 600;
        color: #333;
    }

    .menu {
        margin-top: 25px;
    }

    .menu a {
        display: block;
        text-decoration: none;
        background: #1d2671;
        color: #fff;
        padding: 12px;
        margin-bottom: 12px;
        border-radius: 6px;
        text-align: center;
        font-size: 15px;
        transition: background 0.3s, transform 0.2s;
    }

    .menu a:hover {
        background: #141d52;
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
    <h2>User Dashboard</h2>
    <a href="logout.php" class="logout-btn">Logout</a>
</div>

<div class="dashboard">
    <div class="card">
        <h3>Welcome, <?php echo $row['student_name']; ?></h3>

        <div class="info"><span>Email:</span> <?php echo $row['email']; ?></div>
        <div class="info"><span>Course:</span> <?php echo $row['course']; ?></div>

        <div class="menu">
            <a href="user_update_profile.php">Update Profile</a>
            <a class="btn" href="exam.php">Give Exam</a> 
        </div>
    </div>
</div>

</body>
</html>

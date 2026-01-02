<?php
include 'db.php';
session_start();

if ($_SESSION['user_type'] != 'A') {
    header("Location: login.php");
    exit;
}

$success = false;

if (isset($_POST['submit'])) {
    $course = $_POST['course'];
    mysqli_query($conn, "INSERT INTO courses(course_name) VALUES('$course')");
    $success = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Create Course</title>
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

    .course-box {
        background: #ffffff;
        width: 380px;
        padding: 35px;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.3);
        animation: fadeIn 0.8s ease-in-out;
    }

    h2 {
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

    input[type="text"] {
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

<div class="course-box">
    <h2>Create Course</h2>

    <form method="post">
        <div class="form-group">
            <label>Course Name</label>
            <input type="text" name="course" required>
        </div>

        <input type="submit" name="submit" value="Add Course" class="btn-submit">
    </form>

    <?php if ($success): ?>
        <div class="message">Course Added Successfully</div>
    <?php endif; ?>

    <a href="admin_dashboard.php" class="back-link">← Back to Dashboard</a>
</div>

</body>
</html>

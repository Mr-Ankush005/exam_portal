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
    $q  = $_POST['question'];
    $a  = $_POST['a'];
    $b  = $_POST['b'];
    $c  = $_POST['c'];
    $d  = $_POST['d'];
    $ans = $_POST['ans'];

    mysqli_query($conn, "INSERT INTO questions
        (course_id, question, option_a, option_b, option_c, option_d, correct_option)
        VALUES ('$course', '$q', '$a', '$b', '$c', '$d', '$ans')");

    $success = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Set Question</title>
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

    .question-box {
        background: #ffffff;
        width: 500px;
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

    input, textarea, select {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 6px;
        outline: none;
        transition: border 0.3s;
    }

    textarea {
        resize: vertical;
        min-height: 80px;
    }

    input:focus, textarea:focus, select:focus {
        border-color: #243b55;
    }

    .options {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 12px;
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
        margin-top: 10px;
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

<div class="question-box">
    <h2>Set Question</h2>

    <form method="post">

        <div class="form-group">
            <label>Course</label>
            <select name="course" required>
                <?php
                $result = mysqli_query($conn, "SELECT * FROM courses");
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<option value='{$row['course_id']}'>{$row['course_name']}</option>";
                }
                ?>
            </select>
        </div>

        <div class="form-group">
            <label>Question</label>
            <textarea name="question" required></textarea>
        </div>

        <div class="options">
            <div class="form-group">
                <label>Option A</label>
                <input type="text" name="a" required>
            </div>

            <div class="form-group">
                <label>Option B</label>
                <input type="text" name="b" required>
            </div>

            <div class="form-group">
                <label>Option C</label>
                <input type="text" name="c" required>
            </div>

            <div class="form-group">
                <label>Option D</label>
                <input type="text" name="d" required>
            </div>
        </div>

        <div class="form-group">
            <label>Correct Option</label>
            <select name="ans" required>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
            </select>
        </div>

        <input type="submit" name="submit" value="Add Question" class="btn-submit">
    </form>

    <?php if ($success): ?>
        <div class="message">Question Added Successfully</div>
    <?php endif; ?>

    <a href="admin_dashboard.php" class="back-link">← Back to Dashboard</a>
</div>

</body>
</html>

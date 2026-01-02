<?php
include 'db.php';
session_start();
$user = $_SESSION['username'];

$success = false;

if (isset($_POST['submit'])) {
    $name   = $_POST['name'];
    $mobile = $_POST['mobile'];
    $dob    = $_POST['dob'];
    $gender = $_POST['gender'];

    mysqli_query($conn, "UPDATE student_details SET
        student_name='$name',
        mobile='$mobile',
        dob='$dob',
        gender='$gender'
        WHERE email='$user'");

    $success = true;
}

$result = mysqli_query($conn, "SELECT * FROM std_details WHERE email='$user'");
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Update Profile</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #1d2671, #c33764);
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .profile-box {
        background: #ffffff;
        width: 420px;
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

    input, select {
        width: 100%;
        padding: 10px;
        font-size: 14px;
        border: 1px solid #ccc;
        border-radius: 6px;
        outline: none;
        transition: border 0.3s;
    }

    input:focus, select:focus {
        border-color: #1d2671;
    }

    .btn-update {
        width: 100%;
        background: #1d2671;
        color: #fff;
        border: none;
        padding: 12px;
        font-size: 15px;
        border-radius: 6px;
        cursor: pointer;
        margin-top: 10px;
        transition: background 0.3s;
    }

    .btn-update:hover {
        background: #141d52;
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
        color: #1d2671;
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

<div class="profile-box">
    <h2>Update Profile</h2>

    <form method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" value="<?php echo $row['student_name']; ?>" required>
        </div>

        <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>" required>
        </div>

        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" name="dob" value="<?php echo $row['dob']; ?>">
        </div>

        <div class="form-group">
            <label>Gender</label>
            <select name="gender">
                <option <?php if($row['gender']=="Male") echo "selected"; ?>>Male</option>
                <option <?php if($row['gender']=="Female") echo "selected"; ?>>Female</option>
            </select>
        </div>

        <input type="submit" name="submit" value="Update Profile" class="btn-update">
    </form>

    <?php if ($success): ?>
        <div class="message">Profile Updated Successfully</div>
    <?php endif; ?>

    <a href="user_dashboard.php" class="back-link">← Back to Dashboard</a>
</div>

</body>
</html>

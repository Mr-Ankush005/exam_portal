<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Registration Form</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #667eea, #764ba2);
        height: 120vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .form-container {
        background: #fff;
        padding: 40px 40px;
        width: 350px;
        border-radius: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 1);
    }

    .form-container h2 {
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
        margin-bottom: 5px;
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
        border-color: #000000ff;
    }

    .btn-submit {
        width: 100%;
        background: #0220a3ff;
        color: white;
        border: none;
        padding: 12px;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
        margin-top: 10px;
        transition: background 0.3s;
    }

    .btn-submit:hover {
        background: #5563d6;
    }

    @media (max-width: 400px) {
        .form-container {
            width: 90%;
            padding: 20px;
        }
    }
</style>
</head>
<body>

<div class="form-container">
    <h2>Registration</h2>
    <form method="post" action="register_process.php">
        
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" required>
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="form-group">
            <label>Mobile</label>
            <input type="text" name="mobile" required>
        </div>

        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" name="dob">
        </div>

        <div class="form-group">
            <label>Gender</label>
            <select name="gender">
                <option>Male</option>
                <option>Female</option>
            </select>
        </div>

        <div class="form-group">
            <label>Class</label>
            <input type="text" name="class" required>
        </div>

        <div class="form-group">
            <label>Course</label>
            <select name="course">
                <option>C Programming</option>
                <option>Python</option>
                <option>Java</option>
            </select>
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" required>
        </div>

        <input type="submit" value="Register" class="btn-submit">

    </form>
</div>

</body>
</html>

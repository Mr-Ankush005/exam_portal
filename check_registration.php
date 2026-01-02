<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Pending Registrations</title>
<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(135deg, #141e30, #243b55);
        min-height: 100vh;
    }

    .container {
        width: 90%;
        max-width: 1000px;
        margin: 60px auto;
        background: #ffffff;
        padding: 30px;
        border-radius: 12px;
        box-shadow: 0 15px 35px rgba(0,0,0,0.25);
        animation: fadeIn 0.8s ease-in-out;
    }

    h2 {
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th, td {
        padding: 12px;
        text-align: center;
        border-bottom: 1px solid #ddd;
        font-size: 15px;
    }

    th {
        background: #243b55;
        color: #fff;
    }

    tr:hover {
        background: #f5f5f5;
    }

    .approve-btn {
        text-decoration: none;
        background: #2ecc71;
        color: #fff;
        padding: 7px 14px;
        border-radius: 5px;
        font-size: 14px;
        transition: background 0.3s;
    }

    .approve-btn:hover {
        background: #27ae60;
    }

    .no-data {
        text-align: center;
        padding: 20px;
        color: #666;
        font-size: 16px;
    }

    .back-link {
        display: inline-block;
        margin-top: 20px;
        text-decoration: none;
        background: #243b55;
        color: #fff;
        padding: 8px 16px;
        border-radius: 6px;
        transition: background 0.3s;
    }

    .back-link:hover {
        background: #141e30;
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

<div class="container">
    <h2>Pending Registrations</h2>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM std_details WHERE status='N'");

    if (mysqli_num_rows($result) > 0) {
        echo "<table>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Course</th>
                    <th>Action</th>
                </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['student_name']}</td>
                    <td>{$row['email']}</td>
                    <td>{$row['course']}</td>
                    <td>
                        <a class='approve-btn' href='approved_user.php?id={$row['student_id']}'>
                            Approve
                        </a>
                    </td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<div class='no-data'>No pending registrations.</div>";
    }
    ?>

    <a href="admin_dashboard.php" class="back-link">← Back to Dashboard</a>
</div>

</body>
</html>

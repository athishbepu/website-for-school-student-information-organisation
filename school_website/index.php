<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management System</title>
    <link rel="stylesheet" href="css/styles.css">
    <style>
        body {
            background: url('images/school_bg.png') no-repeat center center fixed;
            background-size:cover;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .logo {
            display: block;
            margin: 0 auto;
            width: 150px;
        }
        h1 {
            text-align: center;
            margin: 20px 0;
        }
        .nav-links {
            display: flex;
            justify-content: space-around;
            margin-top: 20px;
        }
        .nav-links a {
            display: inline-block;
            padding: 10px 20px;
            font-size: 18px;
            text-decoration: none;
            color: #fff;
            background-color: #5cb85c;
            border-radius: 4px;
            transition: background-color 0.3s;
        }
        .nav-links a:hover {
            background-color: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="images/jnv_black.png" alt="School Logo" class="logo">
        <h1>Welcome to JNV KASARAGOD</h1>
        <div class="nav-links">
            <a href="add_student.php">Add Student</a>
            <a href="view_student.php">View Students</a>
            <a href="logout.php">logout</a>
            <a href="about.php">About</a>

        </div>
    </div>
</body>
</html>

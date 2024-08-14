<?php
session_start();
include 'header.php';
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Hardcoded credentials for simplicity
    $correct_username = 'admin';
    $correct_password = 'adam123';

    if ($username === $correct_username && $password === $correct_password) {
        $_SESSION['loggedin'] = true;
        header('Location: index.php');
        exit;
    } else {
        $error = "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Login</h1>
        <?php if (isset($error)) { echo "<p style='color:red;'>$error</p>"; } ?>
        <form action="" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <br>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <br>
            <button type="submit" name="login">Login</button>
        </form>
    </div>
</body>
</html>

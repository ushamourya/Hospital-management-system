<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM admins WHERE username='$username'");
    $admin = $result->fetch_assoc();

    if($admin && password_verify($password, $admin['password'])){
        $_SESSION['admin'] = $admin['username'];
        header("Location: admin_dashboard.php");
    } else {
        echo "Invalid admin login!";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Admin Login</h2>
    <form method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="login">Login</button>
    </form>
</div>
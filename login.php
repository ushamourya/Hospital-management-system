<html><body><link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Login</h2>

    <form method="post">
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="login">Login</button>
    </form>
</div><body></html>
<?php
session_start();
include 'db.php';

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $result = $conn->query("SELECT * FROM patients WHERE email='$email'");
    $user = $result->fetch_assoc();

    if($user && password_verify($password, $user['password'])){
        $_SESSION['patient_id'] = $user['id'];
        $_SESSION['name'] = $user['name'];

        header("Location: dashboard.php");
    } else {
        echo "Invalid login!";
    }
}
?>

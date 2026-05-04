<?php
include 'db.php';

$message = "";

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO patients (name, email, password) VALUES ('$name', '$email', '$password')";

    if($conn->query($sql)){
        $message = "success";
    } else {
        $message = "error: " . $conn->error;
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">

    <h2>Register</h2>

    <!-- MESSAGE BOX -->
    <?php if($message == "success") { ?>
        <div class="msg success">
            <b>Registration Successful!</b><br>
            You can now login.
            <br><br>
            <a href="login.php">Go to Login</a>
        </div>
    <?php } ?>

    <?php if(strpos($message, "error") !== false) { ?>
        <div class="msg error">
            <?php echo $message; ?>
        </div>
    <?php } ?>

    <!-- FORM -->
    <form method="post">
        <input type="text" name="name" placeholder="Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button name="register">Register</button>
    </form>

</div>
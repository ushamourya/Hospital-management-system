<?php
session_start();
include 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

if(isset($_POST['add'])){
    $name = $_POST['name'];
    $spec = $_POST['specialization'];
    $availability = $_POST['availability'];

    $conn->query("INSERT INTO doctors (name, specialization, availability) 
                  VALUES ('$name', '$spec', '$availability')");

    echo "<p style='color:green;'>Doctor added successfully!</p>";
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">

    <h2>Add Doctor</h2>

    <form method="post">
        <input type="text" name="name" placeholder="Doctor Name" required>
        <input type="text" name="specialization" placeholder="Specialization" required>
        <input type="text" name="availability" placeholder="Timing (e.g. 10AM - 2PM)" required>
        <button name="add">Add Doctor</button>
    </form>

    <br>

    <a href="admin_dashboard.php" style="
        display:block;
        text-align:center;
        margin-top:15px;
        text-decoration:none;
        background:#4facfe;
        color:white;
        padding:10px;
        border-radius:5px;
    ">
    ⬅ Back to Admin Dashboard
    </a>

</div>
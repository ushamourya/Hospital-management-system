<?php
session_start();
include 'db.php';

if(!isset($_SESSION['patient_id'])){
    header("Location: login.php");
    exit();
}

if(!isset($_GET['doctor_id'])){
    echo "Invalid doctor!";
    exit();
}

$doctor_id = intval($_GET['doctor_id']);

if(isset($_POST['book'])){
    $date = $_POST['date'];
    $patient_id = $_SESSION['patient_id'];

    $stmt = $conn->prepare("INSERT INTO appointments (patient_id, doctor_id, appointment_date, status) VALUES (?, ?, ?, 'Pending')");
    $stmt->bind_param("iis", $patient_id, $doctor_id, $date);

    if($stmt->execute()){
        $success = "✅ Appointment booked successfully!";
    } else {
        $error = "❌ Error booking appointment!";
    }
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Book Appointment</h2>

    <?php if(isset($success)) echo "<p class='success'>$success</p>"; ?>
    <?php if(isset($error)) echo "<p class='error'>$error</p>"; ?>

    <form method="post">
        <input type="date" name="date" required>
        <button name="book">Book Appointment</button>
    </form>

    <br>
    <a href="dashboard.php">⬅ Back to Dashboard</a>
</div>
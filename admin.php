<?php
session_start();
include 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">
    <h2>Appointments</h2>

    <?php
    $result = $conn->query("
        SELECT a.*, p.name as patient, d.name as doctor 
        FROM appointments a
        JOIN patients p ON a.patient_id = p.id
        JOIN doctors d ON a.doctor_id = d.id
    ");

    while($row = $result->fetch_assoc()){
        echo "<div class='card'>";
        echo "Patient: ".$row['patient']."<br>";
        echo "Doctor: ".$row['doctor']."<br>";
        echo "Date: ".$row['appointment_date']."<br>";
        echo "Status: ".$row['status'];
        echo "</div>";
    }
    ?>
</div>
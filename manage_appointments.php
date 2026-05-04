<?php
session_start();
include 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}

/* APPROVE */
if(isset($_GET['approve'])){
    $id = $_GET['approve'];
    $conn->query("UPDATE appointments SET status='Approved' WHERE id=$id");
    header("Location: manage_appointments.php");
    exit();
}

/* REJECT */
if(isset($_GET['reject'])){
    $id = $_GET['reject'];
    $conn->query("UPDATE appointments SET status='Rejected' WHERE id=$id");
    header("Location: manage_appointments.php");
    exit();
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">

<h2>📅 Manage Appointments</h2>

<?php
$result = $conn->query("
    SELECT a.*, p.name AS patient_name, d.name AS doctor_name
    FROM appointments a
    JOIN patients p ON a.patient_id = p.id
    JOIN doctors d ON a.doctor_id = d.id
    WHERE a.status = 'Pending'
");

while($row = $result->fetch_assoc()){
    echo "<div class='card'>";

    echo "<b>Patient:</b> ".$row['patient_name']."<br>";
    echo "<b>Doctor:</b> ".$row['doctor_name']."<br>";
    echo "<b>Date:</b> ".$row['appointment_date']."<br>";
    echo "<b>Status:</b> ".$row['status']."<br><br>";

    echo "<a class='approve-btn' href='?approve=".$row['id']."'>Approve</a> ";
    echo "<a class='reject-btn' href='?reject=".$row['id']."'>Reject</a>";

    echo "</div>";
}
?>

<br>

<a href="admin_dashboard.php" class="back-btn">⬅ Back to Dashboard</a>

</div>
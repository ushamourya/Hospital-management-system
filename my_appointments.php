<?php
session_start();
include 'db.php';

if(!isset($_SESSION['admin'])){
    header("Location: admin_login.php");
    exit();
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">

<h2>📅 All Appointments</h2>

<?php
$result = $conn->query("
    SELECT 
        a.id,
        a.appointment_date,
        a.status,
        p.name AS patient_name,
        d.name AS doctor_name,
        d.specialization
    FROM appointments a
    JOIN patients p ON a.patient_id = p.id
    JOIN doctors d ON a.doctor_id = d.id
    WHERE a.status != 'Completed'
");

while($row = $result->fetch_assoc()){
    echo "<div class='card'>";

    echo "<b>Patient:</b> ".$row['patient_name']."<br>";
    echo "<b>Doctor:</b> ".$row['doctor_name']."<br>";
    echo "Specialization: ".$row['specialization']."<br>";
    echo "<b>Date:</b> ".$row['appointment_date']."<br>";
    echo "<b>Status:</b> ".$row['status'];

    echo "</div>";
}
?>

<br>
<a href="admin_dashboard.php" class="back-btn">⬅ Back to Dashboard</a>

</div>
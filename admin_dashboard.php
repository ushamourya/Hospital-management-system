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
    <h2>Admin Panel</h2>

    <a href="add_doctor.php">➕ Add Doctor</a><br><br><a href="manage_appointments.php">📅 Manage Appointments</a><br><br>
    
<a href="view_appointment.php">📅 View Appointments</a><br><br><a href="admin_logout.php">Logout</a>

</div>
<?php
session_start();
include 'db.php';

if(!isset($_SESSION['patient_id'])){
    header("Location: login.php");
    exit();
}
?>

<link rel="stylesheet" href="style.css">

<div class="container">

    <div class="top-bar">
        <h2>Welcome <?php echo $_SESSION['name']; ?></h2>
        <a href="logout.php" class="logout-btn">Logout</a>
    </div>

    <div class="nav-links">
        <a href="dashboard.php">👨‍⚕️ Doctors</a>
        <a href="my_appointments.php">📅 My Appointments</a>
    </div>

    <h3>Available Doctors</h3>

    <?php
    $result = $conn->query("SELECT * FROM doctors");

    while($row = $result->fetch_assoc()){
        echo "<div class='card'>";
        echo "<b>".$row['name']."</b><br>";
        echo "Specialization: ".$row['specialization']."<br>";
        echo "⏰ Available: ".($row['availability'] ?? 'Not Set')."<br><br>";
        echo "<a href='book.php?doctor_id=".$row['id']."'>Book Appointment</a>";
        echo "</div>";
    }
    ?>

</div>
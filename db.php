<?php
$conn = new mysqli("localhost", "YOUR_USERNAME", "YOUR_PASSWORD", "hospital_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
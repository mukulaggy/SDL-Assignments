<?php
$conn = new mysqli("localhost", "root", "", "college_admission_db",3307);
if ($conn->connect_error) die("Connection failed: " . $conn->connect_error);
?>

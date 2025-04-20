<?php
$conn = new mysqli("localhost", "root", "", "complaint_db",3307);
if ($conn->connect_error) {
    die("connection failed" . $conn->connect_error);
}
?>
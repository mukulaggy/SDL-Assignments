<?php
$conn = new mysqli("localhost", "root", "", "library_db",3307);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

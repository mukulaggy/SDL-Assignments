<?php
$conn = new mysqli("localhost", "root", "", "mini_facebook",3307);
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>

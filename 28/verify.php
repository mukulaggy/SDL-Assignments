<?php
include "config.php";

if (isset($_GET['email']) && isset($_GET['token'])) {
  $email = $_GET['email'];
  $token = $_GET['token'];

  $res = $conn->query("SELECT * FROM users WHERE email='$email' AND token='$token'");

  if ($res->num_rows > 0) {
    $conn->query("UPDATE users SET is_verified=1 WHERE email='$email'");
    echo "Email verified successfully!";
  } else {
    echo "Invalid verification link.";
  }
}
?>

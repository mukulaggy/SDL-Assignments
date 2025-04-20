<?php
include "config.php";

if ($_POST) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $token = md5(rand());

  $conn->query("INSERT INTO users (name, email, token) VALUES ('$name', '$email', '$token')");

  $subject = "Verify Your Email";
  $message = "Click this link to verify: http://localhost/verify.php?email=$email&token=$token";
  $headers = "From: noreply@example.com";

  mail($email, $subject, $message, $headers);

  echo "Check your email for verification link.";
}
?>

<form method="post">
  Name: <input name="name"><br>
  Email: <input name="email"><br>
  <input type="submit" value="Register">
</form>

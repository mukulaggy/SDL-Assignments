<?php
include "config.php";
session_start();
if ($_POST) {
  $email = $_POST['email'];
  $pass = $_POST['password'];
  $res = $conn->query("SELECT * FROM users WHERE email='$email'");
  $user = $res->fetch_assoc();
  if ($user && password_verify($pass, $user['password'])) {
    $_SESSION['user'] = $user;
    header("Location: home.php");
  } else {
    echo "Invalid credentials.";
  }
}
?>
<form method="post">
  Email: <input name="email"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Login">
</form>

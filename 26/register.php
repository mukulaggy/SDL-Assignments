<?php
include "config.php";
if ($_POST) {
  $name = $_POST['username'];
  $email = $_POST['email'];
  $pass = md5($_POST['password']);
  $conn->query("INSERT INTO users (username, email, password) VALUES ('$name', '$email', '$pass')");
  echo "Registered successfully! <a href='login.php'>Login</a>";
}
?>
<form method="post">
  Username: <input name="username"><br>
  Email: <input name="email"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Register">
</form>

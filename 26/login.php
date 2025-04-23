<?php
include "config.php";
session_start();
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $res = $conn->query("SELECT * FROM users WHERE email='$email'");
  if ($res->num_rows > 0) {
    $user = $res->fetch_assoc();
    if ($user['password'] === md5($password)) {
      $_SESSION['user'] = $user; // ✅ Save the whole user row
      header("Location: home.php");
      exit;
    } else {
      echo "Invalid password!";
    }
  } else {
    echo "User not found!";
  }

}
?>
<form method="post">
  Email: <input name="email"><br>
  Password: <input type="password" name="password"><br>
  <input type="submit" value="Login" name="submit">
</form>

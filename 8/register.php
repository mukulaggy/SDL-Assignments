<?php
include 'db.php';
if (isset($_POST['register'])) {
    $u = $_POST['username'];
    $p = md5($_POST['password']);
    $conn->query("INSERT INTO users (username, password) VALUES ('$u', '$p')");
    echo "Registered! <a href='login.php'>Login</a>";
}
?>
<form method="post">
  Username: <input name="username" required><br>
  Password: <input type="password" name="password" required><br>
  <button name="register">Register</button>
</form>

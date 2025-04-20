<?php
session_start();
include 'db.php';
if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = md5($_POST['password']);
    $res = $conn->query("SELECT * FROM users WHERE username='$u' AND password='$p'");
    if ($res->num_rows > 0) {
        $_SESSION['user_id'] = $res->fetch_assoc()['id'];
        header("Location: submit_complaint.php");
    } else echo "Invalid login!";
}
?>
<form method="post">
  Username: <input name="username"><br>
  Password: <input type="password" name="password"><br>
  <button name="login">Login</button>
</form>

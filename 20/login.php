<?php
session_start();
include 'db.php';

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = md5($_POST['password']);
    
    $res = $conn->query("SELECT * FROM users WHERE username='$u' AND password='$p'");
    
    if ($res->num_rows > 0) {
        $user = $res->fetch_assoc();
        $_SESSION['user_id'] = $user['id']; // Store user ID
        $_SESSION['username'] = $u; // Store username for displaying on welcome page
        
        if (isset($_POST['remember'])) {
            setcookie("username", $u, time() + 604800); // Store only the username
        }

        header("Location: welcome.php");
    } else {
        echo "Invalid login!";
    }
}
?>

<form method="post">
  Username: <input name="username" value="<?= $_COOKIE['username'] ?? '' ?>"><br>
  Password: <input type="password" name="password" value="<?= $_COOKIE['password'] ?? '' ?>"><br>
  <input type="checkbox" name="remember" <?= isset($_COOKIE['username']) ? 'checked' : '' ?>> Remember Me<br>
  <button name="login">Login</button>
</form>

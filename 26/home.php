<?php
include "config.php";
session_start();
if (!isset($_SESSION['user'])) {
  header("Location: login.php");
  exit;
}
$user = $_SESSION['user'];

if ($_POST) {
  $msg = $_POST['message'];
  $uid = $user['id'];
  $conn->query("INSERT INTO posts (user_id, content) VALUES ('$uid', '$msg')");
}
?>

<h3>Welcome, <?= $user['username'] ?>!</h3>
<form method="post">
  <textarea name="message" placeholder="What's on your mind?"></textarea><br>
  <input type="submit" value="Post">
</form>

<h3>All Posts:</h3>
<?php
$res = $conn->query("SELECT posts.*, users.username FROM posts JOIN users ON posts.user_id = users.id ORDER BY posts.id DESC");
while ($row = $res->fetch_assoc()) {
  echo "<b>{$row['username']}</b>: {$row['content']} <br><small>{$row['created_at']}</small><hr>";
}
?>
<a href="logout.php">Logout</a>

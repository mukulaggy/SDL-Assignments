<?php
session_start();
if (!isset($_SESSION['user_id'])) header("Location: login.php");
include 'db.php';

if (isset($_POST['submit'])) {
    $uid = $_SESSION['user_id'];
    $sub = $_POST['subject'];
    $desc = $_POST['description'];
    $conn->query("INSERT INTO complaints (user_id, subject, description) VALUES ('$uid', '$sub', '$desc')");
    echo "Complaint submitted!";
}
?>
<form method="post">
  Subject: <input name="subject" required><br>
  Description: <textarea name="description" required></textarea><br>
  <button name="submit">Submit</button>
</form>
<a href="logout.php">Logout</a>

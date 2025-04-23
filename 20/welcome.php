<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}
?>

<h2>Hello, <?= htmlspecialchars($_SESSION['username']) ?>!</h2>
<a href="logout.php">Logout</a>
<br><br>
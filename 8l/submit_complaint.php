<?php
include'db.php';
session_start();
if(isset($_POST["submit"])){
    $uid=$_SESSION['user_id'];
    $s=$_POST["subject"];
    $d=$_POST["description"];
    $conn->query("INSERT INTO complaints (user_id,subject,description) VALUES ('$uid','$s','$d')");
    echo"success";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
  Subject: <input name="subject" required><br>
  Description: <textarea name="description" required></textarea><br>
  <button name="submit">Submit</button>
</form>
<a href="logout.php">Logout</a>
</body>
</html>
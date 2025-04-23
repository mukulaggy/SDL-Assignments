<?php
session_start();
include 'db.php';
if(isset($_POST['sc'])){
    $uid = $_SESSION['user_id'];
    $sub = $_POST['subject'];
    $desc = $_POST['description'];
    $conn->query("INSERT INTO complaints (user_id, subject, description) VALUES ('$uid', '$sub', '$desc')");
    echo "Complaint submitted!";
    
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
        subject: <input type="text" placeholder="subject" name="subject">
        complain description: <input type="text" placeholder="description" name="description">

        <button name="sc">submit</button>


    </form>
<a href="logout.php">logout</a>    
</body>
</html>
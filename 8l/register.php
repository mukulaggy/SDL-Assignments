<?php
include 'db.php';
if(isset($_POST['register'])){
    $u=$_POST['username'];
    $p=md5($_POST['password']);
    $conn->query("INSERT INTO users (username,password) VALUES ('$u','$p')");
    echo "regitration success";
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
    <h1>register</h1>
    <form method="post">
        username: <input type="text" placeholder="username" name="username">
        password: <input type="password" placeholder="password" name="password">

        <button name="register">register</button>


    </form>
    
</body>
</html>
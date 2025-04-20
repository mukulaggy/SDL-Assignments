<?php
include'db.php';
session_start();
if(isset($_POST["login"])){
    $u=$_POST["username"];
    $p=md5($_POST["password"]);
    $res=$conn->query("SELECT * from users WHERE username='$u' AND password='$p'");
    if($res->num_rows>0){
        header("Location: submit_complaint.php");
        echo"login succesffull";
    }else{
        echo"invalid login";
    }

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
    <h1>login form</h1>
    <form method="post">
        <input type="text" placeholder="username" value="username" name="username">
        <input type="password" placeholder="password" value="password" name="password">
        <button name="login">login</button>
    </form>
    
</body>
</html>
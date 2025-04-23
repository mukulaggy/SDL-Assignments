<?php
include 'db.php';
if(isset($_POST["login"])){
    $u=$_POST["username"];
    $p=md5($_POST["password"]);
    $res=$conn->query("SELECT * FROM users where username='$u' AND password='$p' ");
    if($res->num_rows>0){
        $_SESSION["user_id"]=$res->fetch_assoc()['id'];
        header("Location: submit_complaint.php");
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
    <form method="post">
        username: <input type="text" placeholder="username" name="username">
        password: <input type="password" placeholder="password" name="password">

        <button name="login">submit</button>


    </form>
    
</body>
</html>
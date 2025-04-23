<?php

if($_SERVER["REQUEST_METHOD"]=='POST'){
    $employees=["mukul","aniket","akshay","rohit"];
    $name=trim($_POST['name']);
    if(in_array($name,$employees,true)){
        echo"<p class='result'>$name is in list</p>";
    }
    else{
        echo"<p class='not-found'>$name is not in list</p>";
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
    <h1>employee search</h1>
    <form method="post">
        emo anme:<input type="text" name="name" placeholder="enter name">
        <button name="submit" type="submit">submit</button>
    </form>
    
</body>
</html>
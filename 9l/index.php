<?php
include'db.php';
if(isset($_POST["submit"])){
    $vn=$_POST["vehicle_number"];
    $vt=$_POST["vehicle_type"];
    $amt=$vt=='car'?"50":($vt=="bus"?"100":"150");
    $conn->query("INSERT INTO toll_entries (vehicle_number,vehicle_type,amount) VALUES ('$vn','$vt','$amt')");
    echo"entry of toll".$amt;
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
    <h1>toll management system</h1>
    <form method="post">
        <input type="text" name="vehicle_number" placeholder="Vehicle Number" >
        <select name="vehicle_type">
            <option >car</option>
            <option >bus</option>
            <option >truck</option>
        </select>
        <button name="submit">submit</button>

    </form>
    
</body>
</html>
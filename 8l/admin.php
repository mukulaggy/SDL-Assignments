<?php
include'db.php';
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $id=$_POST['user_id'];
    $status=$_POST['status'];
    $conn->query("UPDATE complaints SET status='$status' WHERE id='$id'");
}
$res=$conn->query("select * from complaints");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>admin panel</h1>
    <table border="1">
        <tr>
            <td>id</td>
            <td>userid</td>
            <td>subject</td>
            <td>Description</td>
            <td>status</td>
            <td>action</td>
        </tr>
            <?php while($row=$res->fetch_assoc()) { ?>
        <tr>
            <td><?=$row['id']?></td>
            <td><?=$row['user_id']?></td>
            <td><?=$row['subject']?></td>
            <td><?=$row['description']?></td>
            <td><?=$row['status']?></td>
            <td>
                <form method="post">
                    <input type="hidden" name="id" value="<?=$row['id']?>">
                    <select name="status" >
                        <option <?= $row['status']=="pending"?"select": " "?>>pending</option>
                        <option <?= $row['status']=="solved"?"select": " "?>>resolved</option>
                    </select>
                    <button type="submit">Update</button>
                </form>
            </td>

        </tr>
                
            


        <?php } ?> 
    </table>
    
</body>
</html>
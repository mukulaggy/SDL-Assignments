<?php
include 'db.php';
if($_SERVER['REQUEST_METHOD']==="POST"){
    $id=$_POST["id"];
    $s=$_POST["status"];
    $conn->query("UPDATE compaints SET STATUS='$s' WHERE is='$id'");
}
$res=$conn->query("SELECT * FROM complaints");
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
            <td>ID</td>
            <td>User</td>
            <td>Subject</td>
            <td>Description</td>
            <td>Status</td>
            <td>Action</td>
        </tr>
        <?php while($row=$res->fetch_assoc()) { ?>
        <tr>
            
                <td><?= $row["id"]?></td>
                <td><?= $row["user_id"]?></td>
                <td><?= $row["subject"]?></td>
                <td><?= $row["description"]?></td>
                <td><?= $row["status"]?></td>
                <td>
                    <form method="post">
                        <input type="hidden" name="id" value="<?=$row['id']?>">
                        <select name="status" >
                            <option <?=$row["status"]=="pending" ? "selected":" " ?>>pending</option>
                            <option <?=$row['status']=="resolved"?'selected':" "?>> resolved</option>
                        </select>
                        <button type="submit">update</button>

                    </form>
                </td>




                
        </tr>
        <?php } ?>

    </table>
    
</body>
</html>
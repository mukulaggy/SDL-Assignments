<?php
include'db.php';
$res=$conn->query("SELECT * FROM toll_entries");
$total=$conn->query("SELECT sum(amount) AS total from toll_entries")->fetch_assoc()["total"];
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
            <td>vehicle Number</td>
            <td>Vehicle Type</td>
            <td>Amount</td>
            <td>Time</td>
        </tr>

        <?php  while($row=$res->fetch_assoc()){ ?>
            <tr>
                <td><?=$row["id"]?></td>
                <td><?=$row["vehicle_number"]?></td>
                <td><?=$row["vehicle_type"]?></td>
                <td><?=$row["amount"]?></td>
                <td><?=$row["entry_time"]?></td>
            </tr>
        <?php }?>
    </table>
    <h2>total toll collection is <?=$total ?></h2>
    
</body>
</html>

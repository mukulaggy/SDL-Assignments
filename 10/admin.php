<?php
include 'db.php';
$res = $conn->query("SELECT * FROM medicines");
?>

<h3>Medicine Stock</h3>
<table border="1" cellpadding="8">
  <tr><th>ID</th><th>Name</th><th>Price (₹)</th><th>Quantity</th></tr>
  <?php while ($row = $res->fetch_assoc()) { ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['price'] ?></td>
      <td><?= $row['quantity'] ?></td>
    </tr>
  <?php } ?>
</table>

<br>
<a href="add_medicine.php">Add Medicine</a> |
<a href="sell_medicine.php">Sell Medicine</a>

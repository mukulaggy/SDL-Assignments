<?php
include 'db.php';
$res = $conn->query("SELECT * FROM toll_entries");
$total = $conn->query("SELECT SUM(amount) AS total FROM toll_entries")->fetch_assoc()['total'];
?>

<h2>Admin Panel – Toll Records</h2>
<table border="1" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Vehicle</th>
    <th>Type</th>
    <th>Amount</th>
    <th>Time</th>
  </tr>
  <?php while ($row = $res->fetch_assoc()) { ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['vehicle_number'] ?></td>
      <td><?= $row['vehicle_type'] ?></td>
      <td>₹<?= $row['amount'] ?></td>
      <td><?= $row['entry_time'] ?></td>
    </tr>
  <?php } ?>
</table>

<h3>Total Toll Collected: ₹<?= $total ?? 0 ?></h3>
<a href="index.php">Back to Entry</a>
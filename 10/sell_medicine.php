<?php
include 'db.php';
if (isset($_POST['sell'])) {
  $id = $_POST['medicine_id'];
  $qty = $_POST['sell_qty'];

  $conn->query("UPDATE medicines SET quantity = quantity - $qty WHERE id = $id AND quantity >= $qty");
  echo "Sold $qty unit(s)";
}

$res = $conn->query("SELECT * FROM medicines");
?>

<h3>Sell Medicine</h3>
<form method="post">
  Medicine:
  <select name="medicine_id">
    <?php while ($m = $res->fetch_assoc()) { ?>
      <option value="<?= $m['id'] ?>"><?= $m['name'] ?> (Stock: <?= $m['quantity'] ?>)</option>
    <?php } ?>
  </select><br>
  Quantity to Sell: <input name="sell_qty" type="number" required><br>
  <button name="sell">Sell</button>
</form>

<br><a href="admin.php">Go to Admin</a>
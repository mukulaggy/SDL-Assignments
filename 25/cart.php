<?php
include "db.php";
session_start();
echo "<h2>Your Cart</h2>";

$total = 0;
if (!empty($_SESSION['cart'])) {
  $ids = implode(",", $_SESSION['cart']);
  $res = $conn->query("SELECT * FROM products WHERE id IN ($ids)");
  
  echo "<ul>";
  while ($row = $res->fetch_assoc()) {
    echo "<li>{$row['name']} - ₹{$row['price']}</li>";
    $total += $row['price'];
  }
  echo "</ul>";
  echo "<strong>Total: ₹$total</strong>";
} else {
  echo "Cart is empty.";
}
?>
<br><br>
<a href="index.php">Back to Store</a>

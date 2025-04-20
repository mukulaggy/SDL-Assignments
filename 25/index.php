<?php
include "db.php";
session_start();

if (!isset($_SESSION['cart'])) {
  $_SESSION['cart'] = [];
}

if (isset($_POST['add'])) {
  $_SESSION['cart'][] = $_POST['product_id'];
}
?>

<h2>Grocery Store</h2>

<form method="post">
  <table border="1">
    <tr><th>Name</th><th>Price</th><th>Action</th></tr>
    <?php
    $res = $conn->query("SELECT * FROM products");
    while ($row = $res->fetch_assoc()) {
      echo "<tr>
              <td>{$row['name']}</td>
              <td>₹{$row['price']}</td>
              <td>
                <form method='post'>
                  <input type='hidden' name='product_id' value='{$row['id']}'>
                  <button type='submit' name='add'>Add to Cart</button>
                </form>
              </td>
            </tr>";
    }
    ?>
  </table>
</form>

<a href="cart.php">View Cart</a>

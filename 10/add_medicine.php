<?php
include 'db.php';
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $qty = $_POST['quantity'];

    $conn->query("INSERT INTO medicines (name, price, quantity) VALUES ('$name', '$price', '$qty')");
    
    echo "Medicine added!";
}
?>

<h3>Add Medicine</h3>
<form method="post">
  Name: <input name="name" required><br>
  Price: <input name="price" type="number" step="0.01" required><br>
  Quantity: <input name="quantity" type="number" required><br>
  <button name="add">Add</button>
</form>

<br><a href="admin.php">Go to Admin</a>

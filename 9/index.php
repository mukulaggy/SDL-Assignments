<?php
include 'db.php';

if (isset($_POST['submit'])) {
    $num = $_POST['vehicle_number'];
    $type = $_POST['vehicle_type'];
    $amount = $type == 'Car' ? 50 : ($type == 'Truck' ? 100 : 70);
    
    $conn->query("INSERT INTO toll_entries (vehicle_number, vehicle_type, amount) VALUES ('$num','$type', '$amount')");
    echo "Entry Recorded. Toll: ₹$amount";
}
?>

<h2>Toll Tax Entry</h2>
<form method="post">
  Vehicle No: <input name="vehicle_number" required><br><br>
  Type:
  <select name="vehicle_type">
    <option>Car</option>
    <option>Truck</option>
    <option>Bus</option>
  </select><br><br>
  <button name="submit">Submit</button>
</form>

<br><a href="admin.php">Go to Admin</a>

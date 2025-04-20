<!DOCTYPE html>
<html>
<head>
  <title>Sort & Sum Numbers</title>
</head>
<body>
  <h2>Enter numbers (comma separated):</h2>
  <form method="post">
    <input type="text" name="numbers" placeholder="e.g. 10,5,3,8"><br><br>
    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['numbers'];
    $arr = explode(",", $input);              // Split input into array
    $arr = array_map('trim', $arr);           // Trim spaces
    $arr = array_map('floatval', $arr);       // Convert to numbers
    sort($arr);                               // Sort array

    $sum = array_sum($arr);                   // Sum of array

    echo "<h3>Sorted Numbers:</h3>";
    echo implode(", ", $arr);
    echo "<h3>Sum: $sum</h3>";
  }
  ?>
</body>
</html>

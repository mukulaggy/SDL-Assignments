<!DOCTYPE html>
<html>
<head>
  <title>Sort & Sum Numbers</title>
</head>
<body>
  <h2>Enter numbers (comma separated):</h2>
  <form method="post">
    <input type="text" name="numbers" placeholder="e.g. 10,5,3,8"><br><br>
    <input name="submit" type="submit" value="Submit">
  </form>
  <?php
  if(isset($_POST['submit'])){
    $input = $_POST['numbers'];
    $numbers = explode(',', $input);
    foreach($numbers as $key => $value) {
      $numbers[$key] = (int)$value; // Convert to integer
    }
    sort($numbers); // Sort the array
    $sum = array_sum($numbers); // Calculate the sum
    echo "<h3>Sorted Numbers:</h3>";
    echo implode(", ", $numbers);
    echo "<h3>Sum of Numbers:</h3>";
    echo $sum;
  }
  ?>

  
</body>
</html>

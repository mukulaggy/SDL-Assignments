<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Search</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 50px;
    }

    form {
      margin-bottom: 20px;
    }

    input,
    button {
      padding: 8px;
      margin: 5px;
    }

    .result {
      font-weight: bold;
      color: green;
    }

    .not-found {
      color: red;
    }
  </style>
</head>

<body>
  <h2>Employee Name Search</h2>
  <form method="POST">
    <label for="name">Enter Employee Name:</label>
    <input type="text" id="name" name="name" required>
    <button type="submit">Search</button>

  </form>
  <?php
  // Define an indexed array of 20 employee names
  $employees = [
    "John Doe",
    "Jane Smith",
    "Michael Brown",
    "Emily Davis"
  ];
  // Check if form is submitted
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchName = trim($_POST["name"]);
    // Check if the name exists in the array (case-insensitive search)
    if (in_array($searchName, $employees, true)) {
      echo "<p class='result'>$searchName is an employee.</p>";
    } else {
      echo "<p class='not-found'>$searchName is not found in the
employee list.</p>";
    }
  }
  ?>
</body>

</html>
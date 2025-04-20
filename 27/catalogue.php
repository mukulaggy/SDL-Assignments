<?php include "config.php"; 


$result = $conn->query("SELECT * FROM books");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Book Catalogue</title>
  <style>
    body { font-family: Arial; }
    table { border-collapse: collapse; width: 60%; margin: 20px auto; }
    th, td { padding: 10px; border: 1px solid #ddd; }
    th { background-color: #f2f2f2; }
  </style>
</head>
<body>

<h2 style="text-align:center;">Library Book Catalogue</h2>

<table>
  <tr>
    <th>Title</th>
    <th>Author</th>
    <th>Genre</th>
  </tr>

  <?php while ($row = $result->fetch_assoc()) {?>
  <tr>
    <td><?=$row['title']?></td>
    <td><?=$row['author']?></td>
    <td><?=$row['genre']?></td>
  </tr>

  <?php  } ?>
</table>

</body>
</html>
<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $id = $_POST['id'];
  $status = $_POST['status'];
  $conn->query("UPDATE complaints SET status='$status' WHERE id=$id");
}
$res = $conn->query("SELECT * FROM complaints");
?>

<h3>Admin Panel</h3>
<table border="1">
  <tr>
    <th>ID</th>
    <th>User</th>
    <th>Subject</th>
    <th>Description</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <?php while ($row = $res->fetch_assoc()) { ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['user_id'] ?></td>
      <td><?= $row['subject'] ?></td>
      <td><?= $row['description'] ?></td>
      <td><?= $row['status'] ?></td>
      <td>
        <form method="post">
          <input type="hidden" name="id" value="<?= $row['id'] ?>">
          <select name="status">
            <option <?= $row['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
            <option <?= $row['status'] == 'Resolved' ? 'selected' : '' ?>>Resolved</option>
          </select>
          <button type="submit">Update</button>
        </form>
      </td>
    </tr>
  <?php } ?>
</table>
<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $status = $_POST['status'];
  $conn->query("UPDATE admissions SET status='$status' WHERE id=$id");
}

$result = $conn->query("SELECT * FROM admissions");
?>

<h2>Admin Panel – Admission Applications</h2>
<table border="1" cellpadding="10">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Status</th>
    <th>Action</th>
  </tr>
  <?php while ($row = $result->fetch_assoc()) { ?>
    <tr>
      <td><?= $row['id'] ?></td>
      <td><?= $row['name'] ?></td>
      <td><?= $row['email'] ?></td>
      <td><?= $row['course'] ?></td>
      <td><?= $row['status'] ?></td>
      <td>
        <form method="post">
          <input type="hidden" name="id" value="<?= $row['id'] ?>">
          <select name="status">
            <option <?= $row['status'] == 'Pending' ? 'selected' : '' ?>>Pending</option>
            <option <?= $row['status'] == 'Accepted' ? 'selected' : '' ?>>Accepted</option>
            <option <?= $row['status'] == 'Rejected' ? 'selected' : '' ?>>Rejected</option>
          </select>
          <button type="submit">Update</button>
        </form>
      </td>
    </tr>
  <?php } ?>
</table>
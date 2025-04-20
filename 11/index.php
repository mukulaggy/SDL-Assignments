<?php
include 'db.php';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $course = $_POST['course'];

  $conn->query("INSERT INTO admissions (name, email, course) VALUES (?, ?, ?)");
  echo "Application submitted!";
}
?>

<h2>College Admission Form</h2>
<form method="post">
  Name: <input name="name" required><br><br>
  Email: <input name="email" type="email" required><br><br>
  Course:
  <select name="course">
    <option>B.Sc</option>
    <option>B.Com</option>
    <option>B.A</option>
    <option>B.Tech</option>
  </select><br><br>
  <button name="submit">Submit</button>
</form>

<br><a href="admin.php">Go to Admin Panel</a>

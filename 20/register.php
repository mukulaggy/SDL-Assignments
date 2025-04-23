<?php
require 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = md5($_POST['password']); // secure hashing

    $conn->prepare("INSERT INTO users (username, password) VALUES ('$username', '$password')");
    echo "Registered successfully. <a href='login.php'>Login here</a>";
}
?>

<h2>Register</h2>
<form method="post">
    Username: <input type="text" name="username" required><br><br>
    Password: <input type="password" name="password" required><br><br>
    <button type="submit">Register</button>
</form>

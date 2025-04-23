<?php
// Set the cookie (name: user, value: Mukul, expires in 1 hour)
setcookie("user", "Mukul", time() + 3600); // 3600 seconds = 1 hour
?>

<!DOCTYPE html>
<html>
<head>
  <title>Cookie Example</title>
</head>
<body>

<h2>Cookie Demo in PHP</h2>

<?php
if (isset($_COOKIE["user"])) {
  echo "Welcome back, " . $_COOKIE["user"] . "!";
} else {
  echo "Cookie named 'user' is not set yet.";
}
?>

</body>
</html>

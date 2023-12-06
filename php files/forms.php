<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname"><br><br>

  <label for="lname">Last name:</label>
  <input type="text" id="lname" name="lname"><br><br>

  <label for="email">Enter your email:</label>
  <input type="email" id="email" name="email"><br><br>

  <label for="username">Username:</label>
  <input type="text" id="username" name="username"><br><br>
  
  <input type="submit">
  <br><br>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $fname = isset($_GET['fname']) ? $_GET['fname'] : '';
  $lname = isset($_GET['lname']) ? $_GET['fname'] : '';
  $email = isset($_GET['email']) ? $_GET['fname'] : '';
  $username = isset($_GET['username']) ? $_GET['fname'] : '';
  if (empty($fname) || empty($lname) || empty($email) || empty($username)) {
    echo "Please fill in all fields.";
  } else {
    echo "First name: " . $fname . "<br>";
    echo "Last name: " . $lname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Username: " . $username . "<br>";
  }
}  
?>
</body>
</html>
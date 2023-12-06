<?php
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$password = $_POST['password'];

echo "First name: " . $fname . "<br>";

if (preg_match('/[\'^£$%&*()}{!@#~?><>,|=_+¬-]/', $lname)) {
  echo "Last name: " . $lname . "<br>";
} else {
  echo "Sorry...Invalid Last Name!!" . "<br>";
}

echo "First name: " . $password . "<br>";

?>
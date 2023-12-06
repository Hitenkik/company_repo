<?php
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $fname = $_REQUEST['fname'];
  $lname = $_REQUEST['lname'];
  $email = $_REQUEST['email'];
  $username = $_REQUEST['username'];
  if (empty($fname) || empty($lname) || empty($email) || empty($username)) {
    echo "Please fill in all fields.";
  } else {
    echo "First name: " . $fname . "<br>";
    echo "Last name: " . $lname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Username: " . $username . "<br>";
  }
// }
?>
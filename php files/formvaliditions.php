<?php
$fname = $_POST["name"];
$lname = $_POST["lname"];
$pass = $_POST["pass"];

echo $fname;
echo "<br>";


if(preg_match("/[a-zA-z][*@#\%?=~&_|!]/",$lname)){
    echo $lname;
}
else{
    echo "Sorry...Invalid Last Name!!";
}
echo "<br>";
echo $pass;

?>
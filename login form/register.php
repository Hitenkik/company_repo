<?php

$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if (mysqli_connect_errno()) {

    exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}

if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['email'])) {

    exit('Please complete the registration form');
}

if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
    $stmt->execute();
    header("location:succses.php");
} else {
    echo 'Could not prepare statement!';
}
?>
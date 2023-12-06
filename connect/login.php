<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hiten";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $rollno = $_POST["rollno"];

    // $_SESSION["name"] = $name;
    // $_SESSION["phone"] = $phone;
    // $_SESSION["email"] = $email;
    // $_SESSION["rollno"] = $rollno;

    // header("location:login.php");
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO student (name, phone, email, rollno) VALUES ('$name', '$phone', '$email', '$rollno')";
    $run = "SELECT hiten FROM student";
    echo $run;
}

// echo $name;
// echo $phone;
// echo $email;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $rollno = $_POST["rollno"];
    $_SESSION["name"] = $name;
    $_SESSION["rollno"] = $rollno;


    if ($_SESSION["name"] === $name && $_SESSION["rollno"] === $rollno) {
        header("location:welcome.php");
        echo "Thank you for Login";
        exit();
    } else {
        header("location:login.php");
        echo "Your login fail please try again";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Student Login Details</h2>
    <form action="" method="POST">
        <label for="name">Name:</label>
        <input type="text" name="name" required /><br><br>

        <label for="rollno">RollNo:</label>
        <input type="rollno" name="rollno" required /><br><br>

        <input type="submit" name="Login">
    </form>
</body>

</html>
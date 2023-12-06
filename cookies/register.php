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

    if ($conn->query($sql) === TRUE) {
        echo "Data inserted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .had {
            text-align: center;
        }

        .input-chnage {
            text-align: center;
            margin-top: 30px;
        }

        .my-input {
            width: 200px;
            padding: 8px;
            margin: 8px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 20px;
        }

        .my-button {
            width: 150px;
            height: 40px;
            font-size: 20px;
            color: white;
            background-color: rosybrown;
        }
    </style>
</head>

<body>
    <h1 class="had">Student Form And Details</h1>

    <form class="input-chnage" action="" method="POST">
        Name:<input class="my-input" type="text" name="name" /><br><br>
        Phone:<input class="my-input" type="phone" name="phone" /><br><br>
        Email:<input class="my-input" type="email" name="email" /><br><br>
        RollNo:<input class="my-input" type="number" name="rollno" /><br><br>
        <input class="my-button" type="submit" name="submit" /><br><br>
    </form>
</body>

</html>
<?php
include "config.php";
$insert = "";
$msg = "";
if (isset($_POST["submit"])) {
    // echo "<pre>";
    // print_r($_POST);
    $uname = $_POST['uname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $mobile = $_POST['mobile'];
    $message = $_POST['message'];

    $insert = mysqli_query($conn, "INSERT INTO `newproject`(`username`, `lastname`, `email`, `job`, `mobile`, `message`)
     VALUES ('$uname','$lname','$email','$job','$mobile','$message')");
}
if ($insert) {
    $msg = "Data inserted successfully";
} else {
    $msg = "Something Error, Try after sometime !";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="index.css" rel="stylesheet" type="text/css">
    <title>New Project</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            width: 100%;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #5d6d7d;
        }

        .container {
            max-width: 500px;
            width: 100%;
            background-color: #fff;
        }

        .container form {
            width: 100%;
            padding: 30px;
        }

        .container form .data-insert {
            width: 100%;
            padding: 12px 10px;
            outline: none;
            border: 1px solid #111;
            margin: 8px 0px;
        }

        .container form .sub_btn {
            width: 100%;
            padding: 10px 30px;
            background-color: dimgray;
            color: #ffff;
            font-size: 1em;
            outline: none;
            border: 0;
            cursor: pointer;
        }

        .container h1 {
            display: block;
            text-align: center;
            padding: 15px 0px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Register Form</h1>
        <form action="" method="post">
            <input type="text" name="uname" placeholder="Enter your firstname" class="data-insert">
            <input type="text" name="lname" placeholder="Enter your lastname" class="data-insert">
            <input type="text" name="email" placeholder="Enter your email" class="data-insert">
            <input type="text" name="job" placeholder="Enter your job" class="data-insert">
            <input type="text" name="mobile" placeholder="Enter your mobile" class="data-insert">
            <input type="text" name="message" placeholder="Enter your message" class="data-insert">
            <input type="submit" name="submit" value="Submit" class="sub_btn">
            <br>
            <span>
                <?php $msg; ?>
            </span>
        </form>
    </div>
</body>

</html>
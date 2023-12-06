<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <link href="form.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="form.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phplogin';

    $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

    if (mysqli_connect_error()) {
        die("Connection failed: ");
    }

    $id = $_GET['id'];
    if ($id) {
        $query = "SELECT * FROM accounts";

        $result = mysqli_query($conn, $query);
        $data = mysqli_fetch_assoc($result);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();


            $name = $row["username"];
            $email = $row["email"];
            $password = $row["password"];
        } else {
            echo "Record not found";
        }
    }
    if (isset($_POST['submit'])) {
        $name = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $update_data = "UPDATE accounts SET username='$name', email='$email', password='$password' WHERE id=$id";

        if ($conn->query($update_data) === true) {
            echo "Record updated successfully";
            header('location: succses.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    ?>
    <div class="register">
        <h1>Register</h1>
        <form action="register.php" method="post" autocomplete="off">
            <label for="username">
                <i class="fas fa-user"></i>
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required
                value="<?php echo $data['username'] ?>">
            <label for="password">
                <i class="fas fa-lock"></i>
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required
                value="<?php echo $data['password'] ?>">
            <label for="email">
                <i class="fas fa-envelope"></i>
            </label>
            <input type="email" name="email" placeholder="Email" id="email" required
                value="<?php echo $data['email'] ?>">
            <input type="submit" value="Register">
        </form>
    </div>
</body>

</html>
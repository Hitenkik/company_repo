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
    <title>CRUD PROJECT</title>
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hiten";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = $_GET['id'];
    if ($id) {
        $selectData = "SELECT * FROM login  WHERE id=$id";

        $result = $conn->query($selectData);

        if ($result->num_rows > 0) {
            // Fetch the data as an associative array
            $row = $result->fetch_assoc();

            // Assign the fetched data to variables
            $name = $row["name"];
            $email = $row["email"];
            $password = $row["password"];
        } else {
            echo "Record not found";
        }
    }

    if (isset($_POST['submit'])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $update_data = "UPDATE login SET name='$name', email='$email', password='$password' WHERE id=$id";

        if ($conn->query($update_data) === true) {
            echo "Record updated successfully";
            header('location: dispaly.php');
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
    ?>
    <div class="container">
        <h1 class="had">Student Form And Details</h1>
        <form method="post" action="update.php?id=<?php echo $id; ?>">

            <div class="mb-3">
                <label for="exampleInputName1" class="form-label">Name</label>
                <input type="text" name="name" value="<?php echo $name ?>" class="form-control" id="exampleInputName1">
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" name="email" value="<?php echo $email ?>" class="form-control"
                    id="exampleInputEmail1" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="text" name="password" value="<?php echo $password ?> class=" form-control"
                    id="exampleInputPassword1">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>
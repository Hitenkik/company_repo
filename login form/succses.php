<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous" />
    <link href="form.css" rel="stylesheet" type="text/css">

</head>

<!-- <div class="">
    <h2>You have successfully registered! You can now login!</h2>
    <a href="register.html">Back To Register Form</a>
</div> -->

<div class="container add-mar">
    <button class="btn btn-primary my-5"><a href="register.html" class="text-light">Add Student</a></button>

    <table class="table">
        <th>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Username</th>
                <th scope="col">Password</th>
                <th scope="col">Email</th>
            </tr>
        </th>
        <tbody>

            <?php

            $DATABASE_HOST = 'localhost';
            $DATABASE_USER = 'root';
            $DATABASE_PASS = '';
            $DATABASE_NAME = 'phplogin';

            $conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

            if (mysqli_connect_error()) {
                die("Connection failed: ");
            }

            $query = "select * from accounts";
            $result = mysqli_query($conn, $query);
            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {

                    $id = $row['id'];
                    $name = $row['username'];
                    $password = $row['password'];
                    $email = $row['email'];
                    echo '<tr>
        <th scope="row" style="padding: 15px 0px 10px 0px;">' . $id . '</th>
        <td style="padding: 15px 0px 10px 0px;">' . $name . '</td>
        <td style="padding: 15px 0px 10px 0px;">' . $password . '</td>
        <td style="padding: 15px 0px 10px 0px;">' . $email . '</td>
        <td style="padding: 10px 0px 10px 0px;"><button class="btn btn-primary new-btn"><a class="text-light" href="update.php?id=' . $id . '">Edit</a></button>
        <button class="btn btn-danger new-btn"><a class="text-light" href="delete.php?id=' . $id . '">Delete</a></button>
        </td>
      </tr>';


                }
            }

            ?>

        </tbody>
    </table>
</div>

<body>

</body>

</html>
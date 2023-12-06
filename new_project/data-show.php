<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show All Data</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100vh;
            background-color: #5d6d7d;
        }

        table {
            border-collapse: collapse;
        }

        table th {
            background-color: black;
            padding: 8px 10px;
            color: #fff;
        }

        table td {
            background-color: #f3f3f3;
            padding: 8px 10px;
            color: #111;
        }

        .opt {
            background-color: red;
            color: #fff;
            font-size: 14px;
            padding: 5px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <table border="1" cellpadding="0">
            <tr>
                <th>ID</th>
                <th>User Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Job</th>
                <th>Mobile</th>
                <th>Message</th>
                <th>Operation</th>
            </tr>
            <?php
            include "config.php";
            $select = mysqli_query($conn, "select * from newproject");
            $num = mysqli_num_rows($select);
            if ($num > 0) {
                while ($result = mysqli_fetch_assoc($select)) {
                    echo "
                        <tr>
                            <td>" . $result['id'] . "</td>
                            <td>" . $result['username'] . "</td>
                            <td>" . $result['lastname'] . "</td>
                            <td>" . $result['email'] . "</td>
                            <td>" . $result['job'] . "</td>
                            <td>" . $result['mobile'] . "</td>
                            <td>" . $result['message'] . "</td>
                            <td>
                                <a href='?id=" . $result['id'] . "' class='opt'>Delete</a>
                                <a href='' class='opt'>Edit</a>
                            </td>
                        </tr>
                    ";
                }
            }
            ?>
        </table>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            text-align: center;
            background-color:Tomato;
            justify-content: center;
        }
        .center-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 300px; 
        }

        .center-container .centered-content label {
            text-align: center;
            color: #000;
            font-size: 20px;
            float: left;
            /* background-color: pink; */
        }
        .center-container .centered-content input {
            float: right;
            /* background-color: pink; */
        }
    </style>
</head>
<body>
<div class="center-container">
    <div class="centered-content">
        <form method="post" action="form_result.php">
            <label for="fname">First name:</label>
            <input type="text" id="fname" name="fname"><br><br>

            <label for="lname">Last name:</label>
            <input type="text" id="lname" name="lname"><br><br>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email"><br><br>

            <label for="username">Username:</label>
            <input type="text" id="username" name="username"><br><br>
            
            <input type="submit">
            <br><br>
        </form>
    </div>
</div>

</body>
</html>

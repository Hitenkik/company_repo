<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body {
      font-family: Arial, Helvetica, sans-serif;
    }

    * {
      box-sizing: border-box;
    }

    input[type=text] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=password] {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
      margin-top: 6px;
      margin-bottom: 16px;
      resize: vertical;
    }

    input[type=submit] {
      background-color: #04AA6D;
      color: white;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type=submit]:hover {
      background-color: #45a049;
    }

    .container {
      border-radius: 5px;
      background-color: #f2f2f2;
      padding: 20px;
    }
  </style>
</head>

<body>

  <h3>Validation Form</h3>

  <div class="container">
    <form method="post" id="validForm">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" placeholder="First name.." maxlength="6">

      <label for="lname">Last name:</label>
      <input type="text" id="lname" name="lname" placeholder="Last name">


      <label for="password">Password</label>
      <input type="password" name="password" placeholder="Password.." id="pass">

      <input type="submit" value="Submit" onclick="passCheck()">
    </form>
  </div>

  <script>
    function passCheck() {
      let passcheck = document.getElementById("pass").value;
      let passwor = document.getElementById("pass")
      let check_pass = pass.match(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/)
      if (passcheck.match(check_pass)) {
        document.getElementById("validForm").action = "formhtmloutput.php"
      }
    }
  </script>

</body>

</html>
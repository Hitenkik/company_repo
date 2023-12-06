<!DOCTYPE html>
<html>

<body>
    <h1>Hey Welcome Student ......</h1>
    <h2>Your personal details here</h2>
    <?php
    session_start();
    echo "Name: " . $_SESSION["name"] . "<br>";
    echo "Phone: " . $_SESSION["phone"] . "<br>";
    echo "Email: " . $_SESSION["email"] . "<br>";
    echo "RollNo: " . $_SESSION["rollno"] . "<br>";
    ?>
</body>

</html>
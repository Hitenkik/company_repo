<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hiten";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define the DELETE query
$id = $_REQUEST["id"];
// echo "ID to delete: " . $id_to_delete;

$sql = "DELETE FROM login WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    header("location:dispaly.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
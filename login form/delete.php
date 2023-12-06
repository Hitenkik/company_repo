<?php
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'phplogin';

// Create a database connection
$conn = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);

if (mysqli_connect_error()) {
    die("Connection failed: ");
}

// Define the DELETE query
$id = $_REQUEST["id"];
// echo "ID to delete: " . $id_to_delete;

$query = "DELETE FROM accounts WHERE id = $id";

if ($conn->query($query) === TRUE) {
    header("location:succses.php");
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();

?>
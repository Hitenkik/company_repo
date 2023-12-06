<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "hiten";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL to create a table
$sqlCreateTable = "CREATE TABLE IF NOT EXISTS clinte (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sqlCreateTable) === TRUE) {
    echo "Table clinte created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// SQL to insert data
$sqlInsertData = "INSERT INTO clinte (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if ($conn->query($sqlInsertData) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// SQL to fetch all records
$query = "SELECT * FROM clinte";
$result = $conn->query($query);

if (!$result) {
    die("Query failed: " . $conn->error);
}

$recordArray = array();

while ($row = $result->fetch_assoc()) {
    $recordArray[] = $row;
}
// echo "<pre>";
// print_r($recordArray);
// echo "</pre>";
$conn->close();
?>
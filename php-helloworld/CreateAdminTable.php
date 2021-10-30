
<?php

include_once 'connection.php';
$servername = "localhost:3306";
$username = "root";
$upassword = "";
$dbname = "equipmentrental";

// Create connection
$conn = new mysqli($servername, $username, $upassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sqlAdmin = "CREATE TABLE Admin (
        first_name VARCHAR(30),
        last_name VARCHAR(30),
        username VARCHAR(30),
        age VARCHAR(50),
        password VARCHAR(30)
        )";

$result = $conn->query($sqlAdmin);

if ($result) {
    echo "Admin table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>

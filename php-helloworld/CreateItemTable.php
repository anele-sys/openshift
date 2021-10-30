
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
$sqlAdmin = "CREATE TABLE ItemTable (
        item_code VARCHAR(30),
        category VARCHAR(30),
        description VARCHAR(30),
        size VARCHAR(50),
        color VARCHAR(30),
        bin_number VARCHAR(30)
        )";

$result = $conn->query($sqlAdmin);

if ($result) {
    echo "Item table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>

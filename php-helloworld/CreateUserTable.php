
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
$sql = "CREATE TABLE Users (
        user_ID INT(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
        user_type VARCHAR(30) NOT NULL DEFAULT 'regular_user',
        first_name VARCHAR(30) NOT NULL,
        last_name VARCHAR(30) NOT NULL,
        username VARCHAR(30) UNIQUE NOT NULL,
        age INT ( 3 ) NOT NULL,
        password VARCHAR(30) NOT NULL
        )";

$result = $conn->query($sql);

if ($result) {
    echo "Users table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$conn->close();
?>

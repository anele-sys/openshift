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
//Add users
$first_name = 'kim';
$last_name = 'Smith';
$user_name = 'ksmith';
$age = '28';
$password = 'my@secrete';

add_user($conn,$name, $surname, $UserName, $age, $user_password);

//Add users
$first_name = 'terry';
$last_name = 'baot';
$user_name = 'tboat';
$age = '45';
$password = 'boat@123';

add_user($conn,$name, $surname, $UserName, $age, $user_password);

function add_user($conn,$fn, $sn, $ag, $un, $ps) {

    // Performing insert query execution
    $sqlUser = $conn->prepare("INSERT INTO Users VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param('ssss',$fn, $sn, $ag, $un, $ps);
    $stmt->exucute();
    $stmt->close();
}
$conn->close();
?>

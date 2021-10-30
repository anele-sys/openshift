<?php

use PDO;

$conn = "";

try {
    $servername = "localhost";
    $dbname = "equipmentrental";
    $username = "root";
    $upassword = "";

    

    $conn = new PDO(
            "mysql:host=$servername; dbname=equipmentrental", $username, $upassword
    );
   
    
    
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>


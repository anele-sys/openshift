<?php

include_once('connection.php');

function test_input($data) {

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = test_input($_POST["username"]);
    $upassword = test_input($_POST["password"]);

    $stmt = $conn->prepare("SELECT * FROM Users");
    $stmt->execute();
    $users = $stmt->fetchAll();

    foreach ($users as $user) {
        
        if ( ($user['username'] == $username) && ($user['password'] == $upassword)) {
            echo $user['last_name'];
            
            if( $user['user_type'] == 'administrator' ) {
                header("Location: ItemTable.php");
//                echo 'administrator';
            } elseif( $user['user_type'] == 'regular_user' ) {
                header("Location: loged-in-customer-table.php");
//                echo 'regular_user';
            }
        } else {
           echo "<script language='javascript'>";
           echo "alert('Incorrect username or password')";
           echo "</script>";
        }
    }
}
?>


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

        if (($user['username'] == $username) &&
                ($user['password'] == $upassword)) {
            header("Location: ItemTable.php");
        } else {
            echo "<script language='javascript'>";
            echo "alert('Incorrect username or password')";
            echo "</script>";
            die();
        }
    }
}
?>


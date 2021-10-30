<?php
session_start();
unset($_SESSION["username"]);
unset($_SESSION["last_name"]);
header("Location:login.php");
?>
<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["email"]);
unset($_SESSION["success"]);
$_SESSION["success"] = false;
header("Location: adminlogin.php");
?>
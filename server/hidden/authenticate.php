<?php
session_start();
$admin_user=$_SESSION["admin_user"];
if(!isset($_SESSION["admin_user"])){
header("Location: ../index.php");
exit(); }
?>

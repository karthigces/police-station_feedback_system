<?php
session_start();
$st_code=$_SESSION["st_code"];
if(!isset($_SESSION["st_code"])){
header("Location: ../index.php");
exit(); }
?>

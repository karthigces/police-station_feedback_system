<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!------ Include the above in your HEAD tag ---------->
  <title>Welcome to CCTNS Citizen Portal</title>	
<script>
  (function titleScroller(text) {
    document.title = text;
    setTimeout(function () {
        titleScroller(text.substr(1) + text.substr(0, 1));
    }, 500);
}("Welcome to CCTNS Citizen Portal"));
</script>
<link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/jquery.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<link rel="icon" href="../images/tn_police.ico" type="image/x-icon"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1">
    <meta http-equiv="cache-control" content="no-cache, must-revalidate,no-store"/>
    <meta http-equiv="cache-control" content="post-check=0, pre-check=0', FALSE"/>
	<meta http-equiv="pragma" content="no-cache" />
    <meta http-equiv="expires" content="-1" />
    <meta name="description" content="TAMIL NADU POLICE - CITIZEN PORTAL">
	<!------ Karthi ---------->
    <meta name="author" content="Karthi | CSE | GCE,SALEM">
    <meta name="keywords" content="POLICE">
    <meta name="keywords" content="TAMIL NADU POLICE">
    <meta name="keywords" content="TAMIL NADU CCTNS">
    <meta name="keywords" content="CCTNS">
    <meta name="keywords" content="TAMIL NADU SCRB">
    <!-- ############## apple browser ##################### -->
    <meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black"> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<style> 
	footer {
		position: fixed;
		height: 20px;
		bottom: 0;
		width: 100%;
		background-color: #030B4C;
		color: white;
		}
	body {
			font-family: 'Roboto Condensed', sans-serif !important;

		}
	.well {
	background-image: linear-gradient(#EFF4FA, #98D4EC);
	border-radius: 30px;
	border-color: #050B49;
	color: #050B49;
	font-size:16px;
	font-weight:bold;
		}
	.table2 th{
    border: #98D4EC solid 1px !important;
}
.nav.navbar-nav li.active a {
      background-color: #9ED7EB;
  }
.navbar-default .navbar-nav>li>a:focus, 
.navbar-default .navbar-nav>li>a:hover,
.navbar-default .navbar-nav .open .dropdown-menu>li>a:focus, 
.navbar-default .navbar-nav .open .dropdown-menu>li>a:hover  {
  background: #9ED7EB;
}
/* make sidebar nav vertical */ 
@media (min-width: 768px) {
  .sidebar-nav .navbar .navbar-collapse {
    padding: 0;
    max-height: none;
  }
  .sidebar-nav .navbar ul {
    float: none;
    display: block;
	color:#110F40;
  }
  .sidebar-nav .navbar li {
    float: none;
    display: block;
	color:#110F40;
  }
  .sidebar-nav .navbar li active{
  }
  .sidebar-nav .navbar li a {
    padding-top: 12px;
    padding-bottom: 12px;
	color:#110F40;
  }
   .col-sm-9 {
        margin-top:20px;
    }
}

</style>
<?php
include("authenticate.php");
$activePage = basename($_SERVER['PHP_SELF'], ".php");
?>

</head>
	<body>
<div class="row">
  <div class="col-sm-12">
  <img class="img-responsive" width="100%" src="../images/main_logo.jpg" alt="TN POLICE HEADER">
  </div>
</div>
<div class="row">
  <div class="col-sm-2">
    <div class="sidebar-nav">
      <div class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <span class="visible-xs navbar-brand"><?php echo $st_code. " Police Zone";?></span>
        </div>
        <div class="navbar-collapse collapse sidebar-navbar-collapse">
          <ul class="nav navbar-nav">
            <br><li><center><font color="green">Terminal ID : <?php echo $st_code;?></font></li><br>
			<li class="<?= ($activePage == 'index') ? 'active':''; ?>"><a href="index.php"><b>Dashboard</b></a></li>
			<li class="<?= ($activePage == 'dda_complaint') ? 'active':''; ?>"><a href="dda_complaint.php">Add New Complaint&nbsp;&nbsp;</a></li>
			<li class="<?= ($activePage == 'wiev_troper') ? 'active':''; ?>"><a href="wiev_troper.php">View Reports&nbsp;&nbsp;&nbsp;</a></li>
            <li class="<?= ($activePage == 'logout') ? 'active':''; ?>"><a href="logout.php">Logout&nbsp;&nbsp;&nbsp;</a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
            <li><a></a></li>
          </ul>
        </div><!--/.nav-collapse -->
<!------ Karthi ---------->
      </div>
    </div>
  </div>
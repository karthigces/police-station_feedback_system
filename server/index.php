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
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src=".js/bootstrap.min.js"></script>
	<!------ Include the above in your HEAD tag ---------->
	<link rel="icon" href="images/tn_police.ico" type="image/x-icon"/>
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
		height: 30px;
		bottom: 0;
		width: 100%;
		background-color: #030B4C;
		color: white;
		}
	body {
			font-family: 'Roboto Condensed', sans-serif !important;

		}
	.well {
	background-image: linear-gradient(#F2DEDE, white);
	border-radius: 30px;
	border-color: #050B49;
	color: #050B49;
	font-size:16px;
	font-weight:bold;
		}
	.table2 th{
    border: #98D4EC solid 1px !important;
}
	</style>
</head>
<!------ Karthi ---------->
<?php
	session_start();
?>
<?php
	// Application library ( with DemoLib class )
	include_once('includes/library.php');
	$app = new DemoLib();
	// check Login request
if (!empty($_POST['submit']))
{
    $admin_district = $_POST['admin_district'];
    $admin_user = $_POST['admin_user'];
    $admin_pass = $_POST['admin_pass'];
    $admin_pass = md5($admin_pass);
    $st_captcha = $_POST['st_captcha'];
    if($_SESSION["captcha"]==$st_captcha)
	{
	$row = $app->Login($admin_user,$admin_pass); // check user login
}  
else{  
    echo "<div align='center' class='alert alert-danger'>CAPTHCA is not valid! Ignore submission</div>";  
    }
}
?>
	<body>
		<img class="img-responsive" width="100%" src="images/main_logo.jpg" alt="TN POLICE HEADER"><br>
		<div class="container">
		<div align="center" class="well well-sm">POLICE STATION FEEDBACK SYSTEMS - SALEM, TAMILNADU.</div>
		<table align="center">
		<tr>
		<td>
		<img align="center" class="img-responsive" src="images/admin.png" alt="TN POLICE HEADER">
		</td>
		<td><h3>ADMIN LOGIN</h3></td>
		</tr>
		</table>
		<br>
	<form action="" method="POST" enctype="multipart/form-data">
		<table align="center" class="table2 table table-bordered">
		<thead>
      <tr>
        <td align="right">
		<big><font color="red"> City: </font></big>
		</td>
		<td>
		<select name="admin_district" id="district">
				<option value="SALEM">SALEM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		</select>
		</td>
      </tr>
		</thead>
		<tbody>
      <tr class="danger">
        <td align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Admin ID <font color="red">*</font></td>
        <td><input type="text" autocomplete="off" name="admin_user" required id="administrator_id" placeholder="Admin ID"></td>
      </tr>
      <tr>
        <td align="right">Password <font color="red">*</font></td>
        <td><input type="password" name="admin_pass" required id="administrator_password" placeholder="Password"></td>
      </tr>
		<tr class="danger">
			<td align="right">
			<font color="red">Captcha* : </font>
			</td>
			<td>
			<input type="text" autocomplete="off" name="st_captcha" name="st_captcha" /> <img src="captcha.php" alt="captcha image"> 
			</td>
		</tr>
		<tr class="">
        <td></td>
        <td><input type="submit" class="btn btn-warning" name="submit" value="SUBMIT" id="station_code"></td>
		</tr>
		</tbody>
	</table>
  </form>
 <!------ Karthi ---------->
		</div>
		<?php include('includes/footer.php');?>
	</body>
</html>
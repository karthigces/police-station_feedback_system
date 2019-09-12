<?php
error_reporting(0);
@ini_set('display_errors', 0);
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
<link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
    <meta name="author" content="Karthi | CSE | GCE SALEM">
    <meta name="keywords" content="POLICE">
    <meta name="keywords" content="TAMIL NADU POLICE">
    <meta name="keywords" content="TAMIL NADU CCTNS">
    <meta name="keywords" content="CCTNS">
    <meta name="keywords" content="TAMIL NADU SCRB">
	<!------ Karthi ---------->
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
	</style>
</head>
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
    $st_district = $_POST['st_district'];
    $st_district = preg_replace("/<script.*?\/script>/s", "", $st_district);
    $st_code = $_POST['st_code'];
    $st_code = preg_replace("/<script.*?\/script>/s", "", $st_code);
    $st_name = $_POST['st_name'];
    $st_name = preg_replace("/<script.*?\/script>/s", "", $st_name);
    $st_password = $_POST['st_password'];
    $st_password = preg_replace("/<script.*?\/script>/s", "", $st_password);
    $st_password = md5($st_password);
    $st_captcha = $_POST['st_captcha'];
    $st_captcha = preg_replace("/<script.*?\/script>/s", "", $st_captcha);
    if($_SESSION["captcha"]==$st_captcha)
	{
	$row = $app->Login($st_code,$st_password); // check user login
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
		<td><h3>CLIENT POLICE STATION LOGIN</h3></td>
		</tr>
		</table>
	<form action="" method="POST" enctype="multipart/form-data">
		<table class="table2 table table-bordered">
		<thead>
      <tr class="info">
        <td align="right">
		<big><font color="red">City (மாநகரம்) : </font></big>
		</td>
		<td>
	<select name="st_district" id="district">
		<option value="SALEM">SALEM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
	</select>
		</td>
		</th>
      </tr>
		</thead>
		<tbody>
      <tr>
        <td align="right">Station Code (காவல் நிலைய எண்) :<font color="red">*</font></td>
        <td>
		<select name="st_code" id="station_code" required onChange="return setStation()">
					<option data-mail="0">Choose from The list&nbsp;</option>
					<option data-mail="1" value="B1">B1</option>
					<option data-mail="2" value="B1C">B1C</option>
					<option data-mail="3" value="B2">B2</option>
					<option data-mail="4" value="B3">B3</option>
					<option data-mail="5" value="B4">B4</option>
					<option data-mail="6" value="B5">B5</option>
					<option data-mail="7" value="B6">B6</option>
					<option data-mail="8" value="C1">C1</option>
					<option data-mail="9" value="C2">C2</option>
					<option data-mail="10" value="C3">C3</option>
					<option data-mail="11" value="C4">C4</option>
					<option data-mail="12" value="D1">D1</option>
					<option data-mail="13" value="D2">D2</option>
					<option data-mail="14" value="D3">D3</option>
					<option data-mail="15" value="D4">D4</option>
					<option data-mail="16" value="D5">D5</option>
					<option data-mail="17" value="W1">W1</option>
					<option data-mail="18" value="W2">W2</option>
					<option data-mail="19" value="W3">W3</option>
					<option data-mail="20" value="CCB">CCB</option>
		</select>
			<script>
			function setStation(){
			// find the dropdown
			var ddl = document.getElementById("station_code");
			// find the selected option
			var selectedOption = ddl.options[ddl.selectedIndex];
			// find the attribute value
			var mailValue = selectedOption.getAttribute("data-mail");
			// find the textbox
			var textBox = document.getElementById("station_name");

			// set the textbox value
			if(mailValue=="0"){
				textBox.value = "";
			}
			if(mailValue=="1"){
				textBox.value = "SALEM TOWN PS";
			}
			else if(mailValue=="2"){
				textBox.value = "SALEM TOWN CRIME PS";
			} 
			else if(mailValue=="3"){
				textBox.value = " SHEVAPET PS";
			}
			
			else if(mailValue=="4"){
				textBox.value = "GOVT.HOSPITAL PS";
			}
			
			else if(mailValue=="5"){
				textBox.value = "ANNADHANAPATTY PS";
			}
			
			else if(mailValue=="6"){
				textBox.value = "KITCHIPALAYAM PS";
			}
			
			else if(mailValue=="7"){
				textBox.value = "KONDALAMPATTY PS";
			}			
			else if(mailValue=="8"){
				textBox.value = "AMMAPET PS";
			}
			
			else if(mailValue=="9"){
				textBox.value = "HASTHAMPATTY PS";
			}
			
			else if(mailValue=="10"){
				textBox.value = "KANNAKURICHI PS";
			}
			
			else if(mailValue=="11"){
				textBox.value = "VEERANAM PS";
			}
			
			else if(mailValue=="12"){
				textBox.value = "FAIRLANDS PS";
			}
			
			else if(mailValue=="13"){
				textBox.value = "PALLAPATTY PS";
			}
			else if(mailValue=="14"){
				textBox.value = "SORAMANGALAM PS";
			}
			else if(mailValue=="15"){
				textBox.value = "STEEL PLANT PS";
			}
			
			else if(mailValue=="16"){
				textBox.value = "KARUPPUR PS";
			}
			
			else if(mailValue=="17"){
				textBox.value = "AWPS PS SALEM TOWN";
			}			
			else if(mailValue=="18"){
				textBox.value = "AWPS AMMAPET";
			}
			
			else if(mailValue=="19"){
				textBox.value = "AWPS SOORAMANGALAM PS";
			}
			
			else if(mailValue=="20"){
				textBox.value = "AWPS CENTRAL CRIME BRANCH";
			}
		}
			</script>
		</td>
      </tr>
      <tr class="info">
        <td align="right">Station Name (காவல் நிலைய பெயர் ):<font color="red">*</font></td>
        <td><input type="text" name="st_name" required readonly id="station_name" placeholder=""> (Autofill)</td>
      </tr>
      <tr>
        <td align="right">Password (கடவுச்சொல்):<font color="red">*</font></td>
        <td><input type="password" name="st_password" required id="station_code" placeholder="Password"></td>
      </tr>
		<tr class="info">
			<td align="right">
			<font color="red">Captcha:</font>
			</td>
			<td>
			<input type="text" autocomplete="off" name="st_captcha" name="st_captcha" /> <img src="captcha.php" alt="captcha image"> 
			</td>
		</tr>
		<tr class="">
        <td></td>
        <td><input class="btn btn-primary" type="submit" name="submit" value="SUBMIT" id="station_code"></td>
		</tr>
		<tr class="">
        <td></td>
        <td></td>
		</tr>
		</tbody><br>
	</table>
  </form>
		</div>
		<?php include('includes/footer.php');?>
	</body>
</html>

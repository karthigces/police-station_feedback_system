<?php
error_reporting(0);
ini_set('display_errors', 0);
ob_start();
?>
</head>
<?php
include("authenticate.php");
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include("header.php");
?>

<body>
  <div class="col-sm-9">
    <?php
  include_once('../includes/psl-config.php');
          try {
            $sr_no = $_POST['sr_no'];
			$db = DB();
            $query = $db->prepare("SELECT * FROM salem_1c2af6696c4c67949752fa8006c4e63d WHERE sr_no =:sr_no");
            $query->bindParam("sr_no", $sr_no, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                while ($row = $query->fetch(PDO::FETCH_NUM)) {
				$sr_no=$row[0];
				$st_code=$row[1];
				$st_num=$row[2];
				$v_date=$row[3];
				$v_time=$row[4];
				$ack_id=$row[5];
				$v_name=$row[6];
				$v_mobile=$row[7];
				$v_age=$row[8];
				$v_address=$row[9];
				$v_aadhar=$row[10];
				$v_photo=$row[11];
				$v_name2=$row[12];
				$v_mobile2=$row[13];
				$c_subject=$row[14];
				$c_detail=$row[15];
				$receipt_off=$row[16];
				$incharge_off=$row[18];
				$ack_type=$row[20];
				$ack_num=$row[21];
				$next_enquiry=$row[22];
				$next_enquiry_time=$row[23];
				$dispose=$row[27];
				$fwd_detail=$row[28];
				}
}
		else {
				echo "<div align='center' class='alert alert-danger'><strong>Error: </strong> Station Code Error</div>";
					}
				} catch (PDOException $e) {
					echo "<div align='center' class='alert alert-danger'><strong>Error: </strong></div>";
					echo $e;
				}
  ?>
<?php
include_once('../includes/psl-config.php');
if(isset($_POST['submit']))
{
	$db = DB();
	$receipt_off= $_POST['receipt_off'];
	$incharge_off= $_POST['incharge_off'];
	$ack_type= $_POST['ack_type'];
	$ack_num= $_POST['ack_num'];
	$next_enquiry= $_POST['next_enquiry'];
	$next_enquiry_time= $_POST['next_enquiry_time'];
	$dispose= $_POST['dispose'];
	$fwd_detail= $_POST['fwd_detail'];
	$sql2 = "UPDATE salem_1c2af6696c4c67949752fa8006c4e63d SET receipt_off=?, incharge_off=?, ack_type=?, ack_num=?, next_enquiry=?,next_enquiry_time=?,dispose=?,fwd_detail=? WHERE sr_no=?";
	$stmt2= $db->prepare($sql2);
if ($stmt2->execute([$receipt_off, $incharge_off, $ack_type, $ack_num, $next_enquiry, $next_enquiry_time, $dispose, $fwd_detail, $sr_no])) {
    echo "<tr>";
	echo '<script type="text/javascript">'; 
	echo 'alert("Information Updated Successfully!");'; 
	echo 'window.location.href = "wiev_troper.php";';
	echo '</script>';
	echo "</tr>";
	}
else {
    echo "<tr>";
	echo"<td colspan='2'><center><div class='alert alert-danger'>Updation Error Occured!</div></center></td>";
	echo "</tr>";
}
}
?>
	<div>
	<?php date_default_timezone_set("Asia/Calcutta"); ?>
		<p style="text-align:left;">
		<font color="red"><b>Date : </font><?php echo date('d-m-Y');?></b>
		<span style="float:right;">
		<font color="red"><b>Time : </font><?php echo date('h:i:s A');?></span></b>
		</p>
	</div>
	<table class="table table-bordered">
    <thead>
	<tr>
	<td align="center" colspan="2" class="alert alert-info">UPDATE FEEDBACK</td>
	</tr>
    </thead>
    <tbody>
	<form method="POST" action="">
	<tr class="">
	<td><input type="hidden" readonly name="sr_no" value="<?php echo htmlspecialchars($sr_no); ?>" placeholder="St Number"/></td>
	</tr>
	<tr class="alert alert-info">
	<td align="right">Station Code *</td>
	<td><input type="text" readonly name="st_code" value="<?php echo htmlspecialchars($st_code); ?>" placeholder="Station Code"/></td>
	</tr>
	<tr class="">
	<td align="right">Station Number *</td>
	<td><input type="text" readonly name="st_code" value="<?php echo htmlspecialchars($st_num); ?>" placeholder="Station Number"/></td>
	</tr>
	<tr class="alert alert-info">
	<td align="right">Petitioner Name P1*</td>
	<td><input type="text" readonly name="v_name" value="<?php echo htmlspecialchars($v_name); ?>" placeholder="Visitor Name"/></td>
	</tr>
	<tr class="">
	<td align="right">Petitioner Mobile Number P1*</td>
	<td><input type="text" readonly name="v_mobile" value="<?php echo htmlspecialchars($v_mobile); ?>" placeholder="Visitor Mobile Number"/></td>
	</tr>
	<tr class="alert alert-info">
	<td align="right">Petitioner Age</td>
	<td><input type="text" readonly name="v_age" value="<?php echo htmlspecialchars($v_age); ?>" placeholder="Visitor Age"/></td>
	</tr>
	<tr class="">
	<td align="right">Petitioner Address *</td>
	<td><textarea name="v_address" readonly placeholder="Address"><?php echo htmlspecialchars($v_address); ?></textarea></td>
	</tr>
<tr class="alert alert-info">
	<td align="right">Petitioner Aadhar</td>
	<td><input type="text" readonly name="v_aadhar" value="<?php echo htmlspecialchars($v_aadhar); ?>" placeholder="Visitor Aadhar"/></td>
	</tr>
<!--
	<tr class="alert alert-info">
	<td align="right">Petitioner Photo</td>
	<td><?php echo "<img src='petitioner_photos/".$v_photo."' height=100 width=100 alt='Petitioner Photo'"; ?></textarea></td>
	</tr>
-->
	<tr>
	<td align="right">Petitioner Name P2</td>
	<td><input type="text" readonly name="v_name2" value="<?php echo htmlspecialchars($v_name2); ?>" placeholder="Visitor Name 2"/></td>
	</tr>
	<tr class="alert alert-info">
	<td align="right">Petitioner Mobile Number P2</td>
	<td><input type="text" readonly name="v_mobile2" value="<?php echo htmlspecialchars($v_mobile2); ?>" placeholder="Visitor Mobile Number 2"/></td>
	</tr>
	<tr>
	<td align="right">Subject of Visit *</td>
	<td><input type="text" name="c_subject" size="49" value="<?php echo htmlspecialchars($c_subject); ?>"/></td>
	</tr>
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript">
	  // Load the Google Transliteration API
	  google.load("elements", "1", {
		packages: "transliteration"
	  });

	  function onLoad() {
		var options = {
		  sourceLanguage: 'en',
		  destinationLanguage: ['ta'],
		  shortcutKey: 'ctrl+m',
		  transliterationEnabled: true
		}

		// Create an instance on TransliterationControl with the required options.
		var control = new google.elements.transliteration.TransliterationControl(options);

		// Enable transliteration in the textfields with the given ids.
		var ids = ["language"];
		control.makeTransliteratable(ids);

		// Show the transliteration control which can be used to toggle between English and Hindi and also choose other destination language.
		control.showControl('translControl');
	  }

	  google.setOnLoadCallback(onLoad);
	</script>
<tr class="alert alert-info">
	<td align="right">Detail</td>
	<td><textarea name="c_detail" rows="4" cols="50" id="language" placeholder="Detail"><?php echo htmlspecialchars($c_detail); ?></textarea></td>
	</tr>
	<tr>
	<td align="right">Receiptionist Officer *</td>
	<td><input type="text" readonly name="receipt_off" value="<?php echo htmlspecialchars($receipt_off); ?>"/></td>
	</tr>
	<tr class="alert alert-info">
	<td align="right">Incharge Officer *</td>
	<td><input type="text" name="incharge_off" value="<?php echo htmlspecialchars($incharge_off); ?>"/></td>
	</tr>
	<tr class="">
	<td align="right">Acknowledge Type *</td>
	<td>
		<input name="ack_type" id="cnumber" onclick="ShowHideDiv()" type="radio" value="C NUMBER" <?php echo ($ack_type== 'C NUMBER') ?  "checked" : "" ;  ?>/> C NUMBER
		<input name="ack_type" id="csrnumber" onclick="ShowHideDiv()" type="radio" value="CSR" <?php echo ($ack_type== 'CSR') ?  "checked" : "" ;  ?>/> CSR
		<input name="ack_type" id="firnumber" onclick="ShowHideDiv()" type="radio" value="FIR" <?php echo ($ack_type== 'FIR') ?  "checked" : "" ;  ?>/> FIR
		<input name="ack_type" id="forecastnumber" onclick="ShowHideDiv()" type="radio" value="FORECAST" <?php echo ($ack_type== 'FORECAST') ?  "checked" : "" ;  ?>/> FORECAST
		<input name="ack_type" id="nonenumber" onclick="ShowHideDiv()" type="radio" value="NONE" <?php echo ($ack_type== 'NONE') ?  "checked" : "" ;  ?>/> NONE
	</td>
	</tr>
	<script type="text/javascript">
    function ShowHideDiv() {
		$(document).ready(function()
          {
             if ($('#cnumber').is(':checked')) 
             {
               $('#acklabel').text("Current Number");
             }
			 else if ($('#csrnumber').is(':checked')) 
             {
               $('#acklabel').text("CSR Number");
             }
			 else if ($('#firnumber').is(':checked')) 
             {
               $('#acklabel').text("FIR Number");
             }
			 else if ($('#forecastnumber').is(':checked')) 
             {
               $('#acklabel').text("Forecast Number");
             }
			 else if ($('#nonenumber').is(':checked')) 
             {
				$('#acklabel').text("None");
             }
          }
        );
	}
		$(document).ready(function()
          {
             if ($('#cnumber').is(':checked')) 
             {
               $('#acklabel').text("Current Number");
             }
			 else if ($('#csrnumber').is(':checked')) 
             {
               $('#acklabel').text("CSR Number");
             }
			 else if ($('#firnumber').is(':checked')) 
             {
               $('#acklabel').text("FIR Number");
             }
			 else if ($('#forecastnumber').is(':checked')) 
             {
               $('#acklabel').text("Forecast Number");
             }
			 else if ($('#nonenumber').is(':checked')) 
             {
				$('#acklabel').text("None");
             }
          }
        );
	</script>
	<tr class="">
	<td align="right"><p id="acklabel">Text</p></td>
	<td>
		<input name="ack_num" type="text" id="inputfield" value="<?php echo htmlspecialchars($ack_num); ?>"/>
	</td>
	</tr>
	<tr class="alert alert-info">
	<td align="right">Next  Enuquiry Date *</td>
	<td><input type="date" name="next_enquiry" value="<?php echo htmlspecialchars($next_enquiry); ?>" placeholder="Complaint Status"/></td>
	</tr>
	<tr class="">
	<td align="right">Next  Enquiry Time </td>
	<td><input type="time" class="" name="next_enquiry_time" value="<?php echo htmlspecialchars($next_enquiry_time); ?>"  placeholder=""/></td>
	</tr>
	<tr class="alert alert-info">
		<td align="right">Dispose *</td>
		<td>
		<input type="radio" name="dispose" value=1 <?php echo ($dispose==1) ?  "checked" : "" ;  ?>/> YES
		<input type="radio" name="dispose" value=0 <?php echo ($dispose==0) ?  "checked" : "" ;  ?>/> NO
		</td>
	</tr>
	<tr class="">
	<td align="right"><p id="acklabel">If Forward, Describe Details</p></td>
	<td>
		<input name="fwd_detail" type="text" value="<?php echo htmlspecialchars($fwd_detail); ?>"/>
	</td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" class="btn btn-info" name="submit" value="&nbsp;&nbsp;&nbsp;Update&nbsp;&nbsp;&nbsp;"/></td>
	</tr>
	<tr>
	<td></td>
	<td></td>
	</tr>
	</form>
    </tbody>
  </table>
</div>
</div>
<?php include('../includes/footer.php');?>
</body>
</html>

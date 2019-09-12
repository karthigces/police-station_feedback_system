<?php
error_reporting(0);
ini_set('display_errors', 0);
ob_start();
?>
<!------ NatpuKarthi ---------->
</head>
<?php
include("authenticate.php");
$activePage = basename($_SERVER['PHP_SELF'], ".php");
include("header.php");
?>

<body>
  <?php
  include_once('../../includes/psl-config.php');
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
				$r_officer_behavior=$row[17];
				$incharge_off=$row[18];
				$i_officer_behavior=$row[19];
				$ack_type=$row[20];
				$ack_num=$row[21];
				$next_enquiry=$row[22];
				$next_enquiry_time=$row[23];
				$police_response=$row[24];
				$other_remarks=$row[25];
				$dispose=$row[27];
				$fwd_detail=$row[28];
				}
}
		else {
				echo "<div align='center' class='alert alert-danger'><strong>Error: </strong> Station Code / Password Error</div>";
					}
				} catch (PDOException $e) {
					echo "<div align='center' class='alert alert-danger'><strong>Error: </strong></div>";
					echo $e;
				}
  ?>
  <div class="col-sm-9">
	<div>
	<?php date_default_timezone_set("Asia/Calcutta"); ?>
		<p style="text-align:left;">
		<font color="red"><b>Date : </font><?php echo date('d-m-Y');?></b>
		<span style="float:right;">
		<font color="red"><b>Time : </font><?php echo date('h:i:s A');?></span></b>
		</p>
	</div>
	   <?php
include_once('../includes/dbs.php');
if(isset($_POST['submit']))
{
	$db = DB();
	$v_name=$_POST['v_name'];
	$v_mobile=$_POST['v_mobile'];
	$v_address=$_POST['v_address'];
	$r_officer_behavior= $_POST['r_officer_behavior'];
	$incharge_off= $_POST['incharge_off'];
	$i_officer_behavior= $_POST['i_officer_behavior'];
	$ack_type= $_POST['ack_type'];
	$ack_num= $_POST['ack_num'];
	$next_enquiry= $_POST['next_enquiry'];
	$next_enquiry_time= $_POST['next_enquiry_time'];
	$police_response= $_POST['police_response'];
	$other_remarks= $_POST['other_remarks'];
	$dispose= $_POST['dispose'];
	$fwd_detail= $_POST['fwd_detail'];
	
	$sql2 = "UPDATE salem_1c2af6696c4c67949752fa8006c4e63d SET v_name=?,v_mobile=?,v_address=?,r_officer_behavior=?, incharge_off=?,i_officer_behavior=?, ack_type=?, ack_num=?, next_enquiry=?,next_enquiry_time=?,police_response=?,other_remarks=?,fwd_detail=?,dispose=? WHERE sr_no=?";
	$stmt2= $db->prepare($sql2);
if ($stmt2->execute([$v_name,$v_mobile,$v_address,$r_officer_behavior, $incharge_off,$i_officer_behavior, $ack_type, $ack_num, $next_enquiry, $next_enquiry_time,$police_response,$other_remarks,$fwd_detail,$dispose,$sr_no])) {
    echo "<tr>";
	echo"<td colspan='2'><center><div class='alert alert-success'>Information Updated Successfully!</div></center></td>";
	echo "</tr>";
	}
else {
    echo "<tr>";
	echo"<td colspan='2'><center><div class='alert alert-danger'>Updation Error Occured!</div></center></td>";
	echo "</tr>";
}
}
?>
	<table class="table table-bordered">
    <thead>
	<tr>
	<td align="center" colspan="2" class="alert alert-info">UPDATE FEEDBACK</td>
	</tr>
    </thead>
    <tbody>
	<form method="POST" action="">
	<tr>
	<td align="right">Serial ID *</td>
	<td><input type="text" readonly name="sr_no" value="<?php echo htmlspecialchars($sr_no); ?>" placeholder="ID"/></td>
	</tr>
	<tr class="alert alert-warning">
	<td align="right">Station Code *</td>
	<td><input type="text"  readonly name="st_code" value="<?php echo htmlspecialchars($st_code); ?>" placeholder="Mobile Number"/></td>
	</tr>
	<tr >
	<td align="right">Station Number *</td>
	<td><input type="text" readonly name="st_code" value="<?php echo htmlspecialchars($st_num); ?>" placeholder="Mobile Number"/></td>
	</tr>
	<tr class="alert alert-warning">
	<td align="right">Petitioner Name P1*</td>
	<td><input type="text"  name="v_name" value="<?php echo htmlspecialchars($v_name); ?>" placeholder="Visitor Name"/></td>
	</tr>
	<tr >
	<td align="right">Petitioner Mobile Number P1*</td>
	<td><input type="text"  name="v_mobile" value="<?php echo htmlspecialchars($v_mobile); ?>" placeholder="Visitor Mobile Number"/></td>
	</tr>
	<tr class="alert alert-warning">
	<td align="right">Petitioner Age</td>
	<td><input type="text" readonly name="v_age" value="<?php echo htmlspecialchars($v_age); ?>" placeholder="Visitor Age"/></td>
	</tr>
	<tr >
	<td align="right">Petitioner Address *</td>
	<td><textarea name="v_address"  placeholder="Address"><?php echo htmlspecialchars($v_address); ?></textarea></td>
	</tr>
	<tr class="alert alert-warning">
	<td align="right">Petitioner Aadhar</td>
	<td><input type="text" readonly name="v_aadhar" value="<?php echo htmlspecialchars($v_aadhar); ?>" placeholder="Visitor Aadhar"/></td>
	</tr>
<!--	<tr class="alert alert-warning">
	<td align="right">Petitioner Photo</td>
	<td>
<?php //echo "<img src='../../../hidden/petitioner_photos/".$v_photo."' height=100 width=100 alt='Petitioner Photo'"; ?>
</textarea></td>
	</tr>
-->
	<tr>
	<td align="right">Petitioner Name P2</td>
	<td><input type="text"  name="v_name2" value="<?php echo htmlspecialchars($v_name2); ?>" placeholder="Visitor Name 2"/></td>
	</tr>
	<tr class="alert alert-warning">
	<td align="right">Petitioner Mobile Number P2</td>
	<td><input type="text"  name="v_mobile2" value="<?php echo htmlspecialchars($v_mobile2); ?>" placeholder="Visitor Mobile Number 2"/></td>
	</tr>
	<tr>
	<td align="right">Subject of Visit *</td>
	<td><input type="text" readonly name="c_subject" value="<?php echo htmlspecialchars($c_subject); ?>"/></td>
	</tr>
	<tr class="alert alert-warning">
	<td align="right">Detail</td>
	<td><textarea name="c_detail"  placeholder="Detail"><?php echo htmlspecialchars($c_detail); ?></textarea></td>
	</tr>
	<tr >
	<td align="right">Receiptionist Officer *</td>
	<td><input type="text" readonly name="receipt_off"  value="<?php echo htmlspecialchars($receipt_off); ?>"/></td>
	</tr>
	<tr class="alert alert-warning">
		<td align="right">Receiptionist Officer Behavior *</td>
		<td>
		<input name="r_officer_behavior" type="radio" value="FRIENDLY" <?php echo ($r_officer_behavior== 'FRIENDLY') ?  "checked" : "" ;  ?>/> FRIENDLY
		<input name="r_officer_behavior" type="radio" value="DETACHED" <?php echo ($r_officer_behavior== 'DETACHED') ?  "checked" : "" ;  ?>/> DETACHED
		<input name="r_officer_behavior" type="radio" value="HOSTILE" <?php echo ($r_officer_behavior== 'HOSTILE') ?  "checked" : "" ;  ?>/> HOSTILE
		</td>
	</tr>
	<tr >
	<td align="right">Incharge Officer *</td>
	<td><input type="text" name="incharge_off"  value="<?php echo htmlspecialchars($incharge_off); ?>"/></td>
	</tr>
	<tr class="alert alert-warning">
		<td align="right">Incharge Officer Behavior *</td>
		<td>
		<input name="i_officer_behavior" type="radio" value="FRIENDLY" <?php echo ($i_officer_behavior== 'FRIENDLY') ?  "checked" : "" ;  ?>/> FRIENDLY
		<input name="i_officer_behavior" type="radio" value="DETACHED" <?php echo ($i_officer_behavior== 'DETACHED') ?  "checked" : "" ;  ?>/> DETACHED
		<input name="i_officer_behavior" type="radio" value="HOSTILE" <?php echo ($i_officer_behavior== 'HOSTILE') ?  "checked" : "" ;  ?>/> HOSTILE
		</td>
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
	<tr class="">
	<td align="right"><p id="acklabel">Acknowledge Number</p></td>
	<td>
		<input name="ack_num" type="text" id="inputfield" value="<?php echo htmlspecialchars($ack_num); ?>"/>
	</td>
	</tr>
	<tr class="alert alert-warning">
	<td align="right">Next  Enuquiry Date *</td>
	<td><input type="date" name="next_enquiry"  value="<?php echo htmlspecialchars($next_enquiry); ?>" placeholder="Complaint Status"/></td>
	</tr>
	<tr class="">
	<td align="right">Next  Enuquiry Time *</td>
	<td><input type="time" name="next_enquiry_time"  value="<?php echo htmlspecialchars($next_enquiry_time); ?>" placeholder="Complaint Status"/></td>
	</tr>
	<tr class="alert alert-warning">
	<td align="right">Police Station Response *</td>
	<td><input type="text" id="language" name="police_response"  value="<?php echo htmlspecialchars($police_response); ?>" placeholder="Police Response Status"/></td>
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
		var ids = ["language1"];
		control.makeTransliteratable(ids);

		// Show the transliteration control which can be used to toggle between English and Hindi and also choose other destination language.
		control.showControl('translControl');
	  }

	  google.setOnLoadCallback(onLoad);
	</script>
	<tr class="alert">
	<td align="right">Other Remarks (Press Ctrl+M for change language (Tamil , English)</td>
	<td><textarea id="language1" name="other_remarks" placeholder="Other Feedbacks"><?php echo htmlspecialchars($other_remarks); ?></textarea></td>
	</tr>
	<tr class="alert alert-warning">
	<td align="right">Forward Detail*</td>
	<td><input type="text" name="fwd_detail"  value="<?php echo htmlspecialchars($fwd_detail); ?>"/></td>
	</tr>
	<tr >
		<td align="right">Dispose *</td>
		<td>
		<input type="radio" name="dispose" value=1 <?php echo ($dispose== 1) ?  "checked" : "" ;  ?>/> YES
		<input type="radio" name="dispose" value=0 <?php echo ($dispose== 0) ?  "checked" : "" ;  ?>/> NO
		</td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="submit" value="Update"/></td>
	</tr>
	</form>
<!------ NatpuKarthi ---------->
    </tbody>
  </table>
</div>
</div>
<?php include('../../includes/footer.php');?>
</body>
</html>

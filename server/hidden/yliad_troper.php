<?php include_once('header.php');
error_reporting(0);
?>
<style>

.bgsort{
background-color: red;
padding:4px 4px 4px 4px;
color: white;
font-family: Cambria;
font-weight: bold;
font-size: 14px;
}
@media print {
  #printPageButton {
    display: none;
  }
}
@page { size: auto;  margin: 0mm; }
</style>
<div align="center" class="col-sm-9">
	
<form action="" method="GET">
	<label id="printPageButton">FROM DATE :</label> <input class="inputlength"  id="printPageButton" type="date" name="fromdate" /><label id="printPageButton">TO DATE :</label><input  id="printPageButton" class="inputlength" type="date" name="todate" />
	<label id="printPageButton">STATION CODE :</label> <select class="inputlength"  id="printPageButton" name="sta_code">
	<option data-mail="0" value=""></option>
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
	<label id="printPageButton">ACK TYPE :</label> <select class="inputlength"  id="printPageButton" name="ack_type">
	<option value=""></option>
	<option value="C NUMBER">C NUMBER</option>
	<option value="CSR">CSR</option>
	<option value="FIR">FIR</option>
	<option value="NONE">NONE</option>
	</select><br>
	<label id="printPageButton">COMPLAINT TYPE:</label> <select class="inputlength" name="c_subject" id="printPageButton">
	<option value=""></option>
	<option value="FAMILY QUARRAEL/DISPUTE (குடும்ப தகராறு)">FAMILY QUARRAEL/DISPUTE (குடும்ப தகராறு)</option>
		<option value="MONEY DISPUTE (பணம் கொடுக்கல் வாங்கல்)">MONEY DISPUTE (பணம் கொடுக்கல் வாங்கல்)</option>
		<option value="LAND DISPUTE (நிலம்/சொத்து தகராறு)">LAND DISPUTE (நிலம்/சொத்து தகராறு)</option>
		<option value="ROAD ACCIDENT(FATAL/NON FATAL) (சாலை விபத்து)">ROAD ACCIDENT(FATAL/NON FATAL) (சாலை விபத்து)</option>
		<option value="ACCIDENTAL FALL (கவனகுறைவால் தவறி விழுதல்)">ACCIDENTAL FALL (கவனகுறைவால் தவறி விழுதல்)</option>
		<option value="FIRE ACCIDENT (தீ விபத்து)">FIRE ACCIDENT (தீ விபத்து)</option>
		<option value="CATAL THEFT (கால்நடை திருட்டு)">CATAL THEFT (கால்நடை திருட்டு)</option>
		<option value="LOVE MARRIAGE (காதல் திருமணம்)">LOVE MARRIAGE (காதல் திருமணம்)</option>
		<option value="CRIME AGAINST CHILDREN (குழந்தைகளுக்கு எதிரான குற்றம்)">CRIME AGAINST CHILDREN (குழந்தைகளுக்கு எதிரான குற்றம்)</option>
		<option value="CRIMINAL TRESPASS (அத்துமீறி நுழைதல்)">CRIMINAL TRESPASS (அத்துமீறி நுழைதல்)</option>
		<option value="CYBER CRIMES (இணையதள குற்றங்கள்)">CYBER CRIMES (இணையதள குற்றங்கள்)</option>
		<option value="DOCUMENT MISSING (காணாமல் போன ஆவணம்)">DOCUMENT MISSING (காணாமல் போன ஆவணம்)</option>
		<option value="CHEATING (மோசடி)">CHEATING (மோசடி)</option>
		<option value="EXTORTION (அச்சுறுத்திப் பறித்தல்)">EXTORTION (அச்சுறுத்திப் பறித்தல்)</option>
		<option value="HURT CASE/WORDY QWANT (காய வழக்கு/வாய் தகராறு )">HURT CASE/WORDY QWANT (காய வழக்கு/வாய் தகராறு )</option>
		<option value="KIDNAPPING (ஆட்கடத்தல்)">KIDNAPPING (ஆட்கடத்தல்)</option>
		<option value="MISSING PERSONS (காணாமல் போன ஆட்கள்)">MISSING PERSONS (காணாமல் போன ஆட்கள்)</option>
		<option value="MOBILE MISSING (காணாமல் போன கைபேசி)">MOBILE MISSING (காணாமல் போன கைபேசி)</option>
		<option value="NUISANCE (தொல்லை">NUISANCE (தொல்லை)</option>
		<option value="OFFENCES AGAINST RELIGION &amp; PUBLIC WORSHIP (மத  வழிபாட்டுதலங்களுக்கெதிரான குற்றங்கள்)">OFFENCES AGAINST RELIGION &amp; PUBLIC WORSHIP (மத  வழிபாட்டுதலங்களுக்கெதிரான குற்றங்கள்)</option>
		<option value="OFFENCES AGAINST STATE (அரசுக்கு எதிரான குற்றங்கள்)">OFFENCES AGAINST STATE (அரசுக்கு எதிரான குற்றங்கள்)</option>
		<option value="ROBBERY (கொள்ளை)">ROBBERY (கொள்ளை)</option>
		<option value="THEFT (திருட்டு)">THEFT (திருட்டு)</option>
		<option value="PUBLIC FUNCTION (பொது நிகழ்ச்சி)">PUBLIC FUNCTION (பொது நிகழ்ச்சி)</option>
		<option value="PUBLIC MEETING (பொதுக்கூட்டம்)">PUBLIC MEETING (பொதுக்கூட்டம்)</option>
		<option value="DEMONSTRATION (ஆர்ப்பாட்டம்)">DEMONSTRATION (ஆர்ப்பாட்டம்)</option>
	<option value="VEHICLE MISSING (காணாமல் போன வாகனம்)">VEHICLE MISSING (காணாமல் போன வாகனம்)</option>
		<option value="WOMEN HARASSMENT (பெண் வதைப்படுத்துதல்)">WOMEN HARASSMENT (பெண் வதைப்படுத்துதல்)</option>
		<option value="OTHERS (பிற குற்றங்கள்)">OTHERS (பிற குற்றங்கள்)</option>
</select>
	<button class="btn btn-primary " type="submit"  id="printPageButton" name="submit"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button>
</form><br>
<form action="" method="GET">
	<button id="printPageButton" class="inline btn btn-success" onClick="window.print();">Print</button>
</form>
	<div>
	<?php date_default_timezone_set("Asia/Calcutta"); ?>
		<p style="text-align:left;">
		<font color="red"><b>Date : </font><?php echo date('d-m-Y');?></b>
		<span style="float:right;">
		<font color="red"><b>Time : </font><?php echo date('h:i:s A');?></span></b>
		</p>
	</div>
	<table class="table table-bordered">
	<?php
    include_once("../includes/dbs.php");
	$todayDate = date("Y-m-d"); # or any other date
	if(isset($_GET['submit']))
	{
	$clauses=array();
    if( isset( $_GET['ack_type'] ) && !empty( $_GET['ack_type'] ) ){
        $clauses[] = "ack_type = '{$_GET['ack_type']}'";   
    }
    if( isset( $_GET['sta_code'] ) && !empty( $_GET['sta_code'] ) ){
        $clauses[] = "st_code = '{$_GET['sta_code']}'";   
    }
    if( isset( $_GET['c_subject'] ) && !empty( $_GET['c_subject'] ) ){
        $clauses[] = "c_subject = '{$_GET['c_subject']}'";   
    }
    if ( isset( $_GET['fromdate'] ) && !empty( $_GET['fromdate'] ) ){
        $clauses[]="v_date >= '{$_GET['fromdate']}'";   
    }
    if ( isset( $_GET['todate'] ) && !empty( $_GET['todate'] ) ){
        $clauses[]="v_date <= '{$_GET['todate']}'";   
    }
    $where = !empty( $clauses ) ? ' where '.implode(' and ',$clauses ) : '';
    $sql = "SELECT * FROM salem_1c2af6696c4c67949752fa8006c4e63d " . $where ." AND status=1 ORDER BY sr_no DESC";
	$rowcount=0;
	if ($result2=mysqli_query($con,$sql)){
	$rowcount=mysqli_num_rows($result2);
	}
	$result = $con->query($sql);
	echo "<table class='table table-bordered'>";
	echo "<tr><td colspan=6 align='left'>Total : $rowcount</td><td colspan=4 align='right'>From Date :".$_GET['fromdate']." To Date : ".$_GET['todate']."</td></tr>";
	echo "<tr class='info'>
	<th>S.No</th>
	<th>Station Code</th>
	<th>Petitioner Detail</th>
	<th>Complaint Detail</th>
	<th>Complaint Date/Time</th>
	<th>Incharge Officer</th>
	<th>ACK Type</th>
	<th>Next Enquiry</th>
	<th>Status</th>
	<th>Remarks</th>
	</tr>";
	if ($result->num_rows > 0) {
		$count=0;
			while($row=mysqli_fetch_row($result)) {
				$count++;
					echo "<tr align='left'>
					<td>".$count."</td><td><big><b>".$row[1]."</b></big>/".$row[2]."</td><td style='word-wrap: break-word;min-width: 140px;max-width: 140px;'>".$row[6]."<br>".$row[7]."<br>".$row[9]."</td><td style='word-wrap: break-word;min-width: 350px;max-width: 350px;'><b>".$row[14]."</b><br>".$row[15]."</td><td>".$row[3]."<br>".$row[4]."</td><td style='word-wrap: break-word;min-width: 120px;max-width: 120px;'>".$row[18]."</td><td style='word-wrap: break-word;min-width: 80px;max-width: 80px;'>".$row[20]."<br>".$row[21]."<hr>".$row[28]."</td><td>".$row[22]."<br>".$row[23]."</td><td style='word-wrap: break-word;min-width: 100px;max-width: 100px;'>".$row[24]."</td><td style='word-wrap: break-word;min-width: 120px;max-width: 120px;'>".$row[25]."</td>
					</tr>";
					}
}
else {
			echo "0 results";
		}
}
	?>	
	</table>
</div>
</div>
</div>
</body>
</html>

<?php
error_reporting(0);
ini_set('display_errors', 0);
?>
<?php include_once('header.php');?>
<style>
.bgsort{
background-color: red;
padding:4px 4px 4px 4px;
color: white;
font-family: Cambria;
font-weight: bold;
font-size: 14px;
}

.inputlength{
    width:195px;  
    -ms-box-sizing:content-box;
    -moz-box-sizing:content-box;
    box-sizing:content-box;
    -webkit-box-sizing:content-box; 
}
</style>

<div class="col-sm-2">
				<h4 class="bgsort"><center>SORT</center></h4>
				<form action="" method="GET">
				STATION CODE : <select class="inputlength" name="sta_code">
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
		</select><br>
		APPLICATION NUMBER : <input class="inputlength" type="text" name="sta_number" /><br>
		FROM DATE : <input class="inputlength" type="date" name="fromdate" /><br>
		TO DATE : <input class="inputlength" type="date" name="todate" /><br>
		PETITIONER NAME : <input class="inputlength" type="text" name="petitionername" /><br>
		RECEIPTIONIST OFFICER BEHAVIOUR : <select class="inputlength" name="r_officer_behavior">
		<option value=""></option>
		<option value="FRIENDLY">FRIENDLY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		<option value="DETACHED">DETACHED</option>
		<option value="HOSTILE">HOSTILE</option>
		</select><br>
		INCHARGE OFFICER BEHAVIOUR : <select class="inputlength" name="i_officer_behavior">
		<option value=""></option>
		<option value="FRIENDLY">FRIENDLY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		<option value="DETACHED">DETACHED</option>
		<option value="HOSTILE">HOSTILE</option>
		</select><br>
		NEXT ENQUIRY DATE : <input class="inputlength" type="date" name="nextenquiry" /><br>
		STATION RESPONSE : <select class="inputlength" name="policeresponse">
		<option value=""></option>
		<option value="GOOD">GOOD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</option>
		<option value="SATISFIED">SATISFIED</option>
		<option value="POOR">POOR</option>
		</select><br>
		<br>
		<center><button class="btn btn-primary" type="submit" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Submit&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</button></center>
	</form>
</div>
<div class="col-sm-7">
	<div>
	<?php date_default_timezone_set("Asia/Calcutta"); ?>
		<p style="text-align:left;">
		<font color="red"><b>Date : </font><?php echo date('d-m-Y');?></b>
		<span style="float:right;">
		<font color="red"><b>Time : </font><?php echo date('h:i:s A');?></span></b>
		</p>
	</div>
	<div>
	<p>View Set: <a href="wiev_troper.php">Last 1000</a> | <b>ALL</b></p>
	</div>
<script>
function ConfirmDelete()
{
  return confirm("Are you sure you want to delete?");
}
</script>
<table class="table table-bordered">
<?php
    include_once("../includes/dbs.php");
	if(isset($_GET['submit']))
	{
	$clauses=array();

    if( isset( $_GET['sta_code'] ) && !empty( $_GET['sta_code'] ) ){
        $clauses[] = "st_code = '{$_GET['sta_code']}'";   
    }
     if( isset( $_GET['sta_number'] ) && !empty( $_GET['sta_number'] ) ){
        $clauses[] = "st_num = '{$_GET['sta_number']}'";   
    }
    if ( isset( $_GET['fromdate'] ) && !empty( $_GET['fromdate'] ) ){
        $clauses[]="v_date >= '{$_GET['fromdate']}'";   
    }
    if ( isset( $_GET['todate'] ) && !empty( $_GET['todate'] ) ){
        $clauses[]="v_date <= '{$_GET['todate']}'";   
    }
    if ( isset( $_GET['petitionername'] ) && !empty( $_GET['petitionername'] ) ){
        $clauses[]="v_name = '{$_GET['petitionername']}'";   
    }
    if ( isset( $_GET['r_officer_behavior'] ) && !empty( $_GET['r_officer_behavior'] ) ){
        $clauses[]="r_officer_behavior = '{$_GET['r_officer_behavior']}'";   
    }
   if ( isset( $_GET['i_officer_behavior'] ) && !empty( $_GET['i_officer_behavior'] ) ){
        $clauses[]="i_officer_behavior = '{$_GET['i_officer_behavior']}'";   
    }
    if ( isset( $_GET['nextenquiry'] ) && !empty( $_GET['nextenquiry'] ) ){
        $clauses[]="next_enquiry = '{$_GET['nextenquiry']}'";   
    }
    if ( isset( $_GET['policeresponse'] ) && !empty( $_GET['policeresponse'] ) ){
        $clauses[]="police_response = '{$_GET['policeresponse']}'";   
    }
    $where = !empty( $clauses ) ? ' where '.implode(' and ',$clauses ) : '';
    $sql = "SELECT * FROM salem_1c2af6696c4c67949752fa8006c4e63d " . $where ." AND status=1 ORDER BY sr_no DESC";    
	$rowcount=0;
	if ($result2=mysqli_query($con,$sql)){
	$rowcount=mysqli_num_rows($result2);
	}
	$result = $con->query($sql);
	
echo "<table class='table table-bordered'>";
echo "<tr><td colspan='21'>Total : $rowcount</td></tr>";
echo "<tr class='info'>
<th>S.No</th>
<th>Station Code</th>
<th>Petition Number</th>
<th>Date</th>
<th>Time</th>
<th>Acknowledgement ID</th>
<th>Petitioner Name P1</th>
<th>Petitioner Mobile Number P1</th>
<th>Petitioner Age</th>
<th>Petitioner Address</th>
<th>Petitioner Aadhar</th>
<th>Petitioner Photo</th>
<th>Petitioner Name P2</th>
<th>Petitioner Mobile Number P2</th>
<th>Subject</th>
<th>Detail</th>
<th>Receptionist Officer Name</th>
<th>Receptionist Officer Behavior</th>
<th>Incharge Officier Name</th>
<th>Incharge Officier Behavior</th>
<th>Acknowledgement Type</th>
<th>Acknowledgement Number</th>
<th>Next Enquiry Date</th>
<th>Next Enquiry Time</th>
<th>Forward Detail</th>
<th>Police Station Response</th>
<th>Other Remarks</th>

<th>Action</th>
</tr>";

if ($result->num_rows > 0) {
		// output data of each row
		$count=$result->num_rows+1;
		while($row=mysqli_fetch_row($result)) {
		$count--;
				if($row[28]==1)
				{
				echo "<tr class='alert alert-success'>
				<td>".$count."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td><img src='../images/alt.png' alt='petetioner_photo' height='25' width='25' /></td><td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td><td>".$row[17]."</td><td>".$row[18]."</td><td>".$row[19]."</td><td>".$row[20]."</td><td>".$row[21]."</td><td>".$row[22]."</td><td>".$row[23]."</td><td>".$row[28]."</td><td>".$row[24]."</td><td>".$row[25]."</td>";
				echo "<td>";
				echo "<form action='tide_row.php' method='post'><input type='hidden' name='sr_no' value='" . $row['0'] . "'/><input type='image' src='../images/edit.png' class='buttonedit'/>
				</form>";
				echo "<form action='eteled_row.php' method='post'><input type='hidden' name='sr_no' value='" . $row['0'] . "'/><input type='image' onclick='return ConfirmDelete()' src='../images/delete.png' class='buttondelete'/>
				</form>";
				echo "</td>
				</tr>";
				}

else{
				echo "<tr>
				<td>".$count."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td><img src='../images/alt.png' alt='petetioner_photo' height='25' width='25' /></td><td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td><td>".$row[17]."</td><td>".$row[18]."</td><td>".$row[19]."</td><td>".$row[20]."</td><td>".$row[21]."</td><td>".$row[22]."</td><td>".$row[23]."</td><td>".$row[28]."</td><td>".$row[24]."</td><td>".$row[25]."</td>";
				echo "<td>";
				echo "<form action='tide_row.php' method='post'><input type='hidden' name='sr_no' value='" . $row['0'] . "'/><input type='image' src='../images/edit.png' class='buttonedit'/>
				</form>";
				echo "<form action='eteled_row.php' method='post'><input type='hidden' name='sr_no' value='" . $row['0'] . "'/><input type='image' onclick='return ConfirmDelete()' src='../images/delete.png' class='buttondelete'/>
				</form>";
				echo "</td>
				</tr>";
				}
		}
	} else {
		echo "<div class='alert alert-danger'>NO RESULT FOUND , PLS REFRESH OR SEARCH WITH OTHER KEYWORDS!</div></center>";
	}
	}
else
{
	$sql = "SELECT * FROM salem_1c2af6696c4c67949752fa8006c4e63d WHERE status=1 ORDER BY sr_no DESC";
	if ($result2=mysqli_query($con,$sql)){
	$rowcount=mysqli_num_rows($result2);
	}
$sql = "SELECT * FROM salem_1c2af6696c4c67949752fa8006c4e63d WHERE status=1 ORDER BY sr_no DESC";
	$result = $con->query($sql);
echo "<table class='table table-bordered'>";
echo "<tr><td colspan='21'>Total : $rowcount</td></tr>";
echo "<tr class='info'>
<th>S.No</th>
<th>Station Code</th>
<th>Petition Number</th>
<th>Date</th>
<th>Time</th>
<th>Acknowledgement ID</th>
<th>Petitioner Name P1</th>
<th>Petitioner Mobile Number P1</th>
<th>Petitioner Age</th>
<th>Petitioner Address</th>
<th>Petitioner Aadhar</th>
<th>Petitioner Photo</th>
<th>Petitioner Name P2</th>
<th>Petitioner Mobile Number P2</th>
<th>Subject</th>
<th>Detail</th>
<th>Receptionist Officer Name</th>
<th>Receptionist Officer Behavior</th>
<th>Incharge Officier Name</th>
<th>Incharge Officier Behavior</th>
<th>Acknowledgement Type</th>
<th>Acknowledgement Number</th>
<th>Next Enquiry Date</th>
<th>Next Enquiry Time</th>
<th>Forward Detail</th>
<th>Police Station Response</th>
<th>Other Remarks</th>
<th>Action</th>
</tr>";
	if ($result->num_rows > 0) {
		$count=$result->num_rows+1;
			$count=$rowcount+1;
			while($row=mysqli_fetch_row($result)) {
				$count--;
					if($row[27]==1)
					{
					echo "<tr class='alert alert-success'>
					<td>".$count."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td><img src='../images/alt.png' alt='petetioner_photo' height='25' width='25' /></td><td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td><td>".$row[17]."</td><td>".$row[18]."</td><td>".$row[19]."</td><td>".$row[20]."</td><td>".$row[21]."</td><td>".$row[22]."</td><td>".$row[23]."</td><td>".$row[28]."</td><td>".$row[24]."</td><td>".$row[25]."</td>";
					echo "<td>";
					echo "<form action='tide_row.php' method='post'><input type='hidden' name='sr_no' value='" . $row['0'] . "'/><input type='image' src='../images/edit.png' class='buttonedit'/>
					</form>";
					echo "<form action='eteled_row.php' method='post'><input type='hidden' name='sr_no' value='" . $row['0'] . "'/><input type='image' onclick='return ConfirmDelete()' src='../images/delete.png' class='buttondelete'/>
					</form>";
					echo "</td>
					</tr>";
					}
					else{
					echo "<tr>
					<td>".$count."</td><td>".$row[1]."</td><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td><img src='../images/alt.png' alt='petetioner_photo' height='25' width='25' /></td><td>".$row[12]."</td><td>".$row[13]."</td><td>".$row[14]."</td><td>".$row[15]."</td><td>".$row[16]."</td><td>".$row[17]."</td><td>".$row[18]."</td><td>".$row[19]."</td><td>".$row[20]."</td><td>".$row[21]."</td><td>".$row[22]."</td><td>".$row[23]."</td><td>".$row[28]."</td><td>".$row[24]."</td><td>".$row[25]."</td>";
					echo "<td>";
					echo "<form action='tide_row.php' method='post'><input type='hidden' name='sr_no' value='" . $row['0'] . "'/><input type='image' src='../images/edit.png' class='buttonedit'/>
					</form>";
					echo "<form action='eteled_row.php' method='post'><input type='hidden' name='sr_no' value='" . $row['0'] . "'/><input type='image' onclick='return ConfirmDelete()' src='../images/delete.png' class='buttondelete'/>
					</form>";
					echo "</td>
					</tr>";
					}
			}
		} else {
			echo "0 results";
		}
	}
	?>
	</table>
</div>
</div>
</div>
<?php include('footer.php');?>
</body>
</html>

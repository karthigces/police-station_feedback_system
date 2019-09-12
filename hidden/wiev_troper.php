<?php include_once('header.php');?>
<div class="col-sm-9 table-responsive">
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
echo "<table class='table table-bordered table-hover'>";
echo "<tr class='info'>
<th>S.No</th>
<th>Date</th>
<th>Time</th>
<th>Complaint Number</th>
<th>Petitioner Name P1</th>
<th>Petitioner Mobile Number P1</th>
<th>Petitioner Age</th>
<th>Petitioner Address</th>
<th>Petitioner Aadhar</th>
<th>Petitioner Name P2</th>
<th>Petitioner Mobile Number P2</th>
<th>Subject</th>
<th>Detail</th>
<th>Receptionist Name</th>
<th>Incharge Officier Name</th>
<th>Acknowledge Type</th>
<th>Acknowledge Number</th>
<th>Next Enquiry date</th>
<th>Next Enquiry Time</th>
<th>Forward Action</th>
<th>Action</th>
<th></th>
</tr>";
		include_once("../includes/psl-config.php");
			try {
            $db = DB();
            $query = $db->prepare("SELECT * FROM salem_1c2af6696c4c67949752fa8006c4e63d WHERE st_code=:st_code AND status=1 ORDER BY sr_no DESC");
            $query->bindParam("st_code", $st_code, PDO::PARAM_STR);
			$query->execute();
            if ($query->rowCount() > 0) {
                while ($row = $query->fetch(PDO::FETCH_NUM)) {
				echo "<tr><td>".$row[2]."</td><td>".$row[3]."</td><td>".$row[4]."</td><td>".$row[5]."</td><td>".$row[6]."</td><td>".$row[7]."</td><td>".$row[8]."</td><td>".$row[9]."</td><td>".$row[10]."</td><td>".$row[12]."<td>".$row[13]."<td>".$row[14]."<td>".$row[15]."</td><td>".$row[16]."</td><td>".$row[18]."</td><td>".$row[20]."</td><td>".$row[21]."</td><td>".$row[22]."</td><td>".$row[23]."</td><td>".$row[28]."</td>";
				echo "<td><form action='tide_row.php' method='post'><input type='hidden' name='sr_no' value='" . $row['0'] . "'/><input type='submit' class='buttonedit' value='EDIT'/>
				</form></td>";
				echo "</tr>";
				}
}
		else {
				echo "<div align='center' class='alert alert-danger'><strong></strong> Station Complaints Empty</div>";
					}
				} catch (PDOException $e) {
					echo "<div align='center' class='alert alert-danger'><strong>Error: </strong></div>";
					echo $e;
				}
//fetching data in descending order (lastest entry first)

?>
  </table>
</div>
</div>
<?php include('../includes/footer.php');?>
</body>
</html>

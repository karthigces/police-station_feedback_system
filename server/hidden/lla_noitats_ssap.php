  <?php
  include_once('header.php');
  ?>
  <div class="col-sm-9">
	<div>
	<?php date_default_timezone_set("Asia/Calcutta"); ?>
		<p style="text-align:left;">
		<font color="red"><b>Date : </font><?php echo date('d-m-Y');?></b>
		<span style="float:right;">
		<font color="red"><b>Time : </font><?php echo date('h:i:s A');?></span></b>
		</p>
	</div><table class="table table-bordered">
    <thead>
	<tr>
	<td align="center" colspan="2" class="alert alert-success">Verify Its You!</td>
	</tr>
    </thead>
    <tbody>
	<form method="POST" action="">
	<tr>
	<td align="right">Enter Your mobile number</td>
	<td><input type="text" required autocomplete="off" name="mobile_number" placeholder="Your Mobile Number"/></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="submit" value="Generate"/></td>
	</tr>
	</form>
<?php
include_once('../includes/psl-config.php');
	  try {
		$db = DB();
		$query = $db->prepare("SELECT * FROM salem_21232f297a57a5a743894a0e4a801fc3 WHERE admin_user=:admin_user");
		$query->bindParam("admin_user", $admin_user, PDO::PARAM_STR);
		$query->execute();
		if ($query->rowCount() > 0) {
			while ($row = $query->fetch(PDO::FETCH_NUM)) {
			$admin_phon=$row[4];
			}
		}
	else {
			echo "<div align='center' class='alert alert-danger'><strong>Error: </strong> Station Code / Password Error</div>";
				}
		} catch (PDOException $e) {
				echo "<div align='center' class='alert alert-danger'><strong>Error: </strong></div>";
				echo $e;
		}
if(isset($_POST['submit']))
	{
	$mobile_number=$_POST['mobile_number'];
if($mobile_number==$admin_phon)
	{
echo "<table class='table table-bordered'>";
echo "<tr class='warning'>
<th>S.No</th>
<th>District</th>
<th>Client Police Station Code</th>
<th>Name</th>
<th>Action</th>
</tr>";
$db=DB();
$stmt = $db->query("SELECT * FROM salem_a4db7d6fe80f15db7fb1061fa362d0fa");
while ($row = $stmt->fetch()) {
    echo "<tr>";
    echo "<td>".$row['st_st']."</td>";
    echo "<td>".$row['st_district']."</td>";
    echo "<td>".$row['st_code']."</td>";
    echo "<td>".$row['st_name']."</td>";
    echo "<td><form action='tide_ssap.php' method='post'><input type='hidden' name='st_st' value='" . $row['0'] . "'/><input type='submit' class='buttonedit' value='EDIT'/></form></td>";
	echo "</tr>";
}
	}
	}
?>
    </tbody>
  </table>
</div>
</div>
<?php include('../includes/footer.php');?>
</body>
</html>

 <?php
error_reporting(0);
ini_set('display_errors', 0);
ob_start();
?>
<?php
include_once('header.php');
?>
  <?php
  include_once('../includes/psl-config.php');
          try {
            $st_st = $_POST['st_st'];
			$db = DB();
            $query = $db->prepare("SELECT * FROM salem_a4db7d6fe80f15db7fb1061fa362d0fa WHERE st_st =:st_st");
            $query->bindParam("st_st", $st_st, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                while ($row = $query->fetch(PDO::FETCH_NUM)) {
				$st_st=$row[0];
				$st_district=$row[1];
				$st_code=$row[2];
				$st_name=$row[3];
				}
}
		else {
				echo "<div align='center' class='alert alert-danger'><strong>Error: </strong> Station Code / Password Error</div>";
					}
				}
			catch (PDOException $e) {
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
	</div><table class="table table-bordered">
    <thead>
	<tr>
	<td align="center" colspan="2" class="alert alert-success">Password Change Tool</td>
	</tr>
    </thead>
    <tbody>
<form method="POST" action="">
	<tr>
	<td align="right">Station Code *</td>
	<td><input type="text" readonly name="st_st" value="<?php echo htmlspecialchars($st_st); ?>"/></td>
	</tr>
	<tr>
	<td align="right">Station Code *</td>
	<td><input type="text" readonly name="st_district" value="<?php echo htmlspecialchars($st_district); ?>"/></td>
	</tr>
	<tr>
	<td align="right">Station Code *</td>
	<td><input type="text" readonly name="st_code" value="<?php echo htmlspecialchars($st_code); ?>"/></td>
	</tr>
	<tr>
	<td align="right">Station Name *</td>
	<td><input type="text" readonly name="st_name" value="<?php echo htmlspecialchars($st_name); ?>"/></td>
	</tr>
	<tr>
	<td align="right">New Password *</td>
	<td><input type="password" name="st_password" value="" placeholder="New Password" /></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="submit" value="Change"/></td>
	</tr>
</form>
<?php
include_once('../includes/psl-config.php');
if(isset($_POST['submit']))
{
	$st_password= $_POST['st_password'];
	$st_password= md5($st_password);
	$data = [
    'st_password' => $st_password,
	'st_st'=> $st_st,
];
$sql = "UPDATE salem_a4db7d6fe80f15db7fb1061fa362d0fa SET st_password=:st_password WHERE st_st=:st_st";
$db->prepare($sql)->execute($data);
echo "<div align='center' class='alert alert-success'>Password Updated!</div>";
}
?>
    </tbody>
  </table>
</div>
</div>
<?php include('../includes/footer.php');?>
</body>
</html>

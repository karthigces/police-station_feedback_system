  <?php
  include_once('header.php');
  include_once('../includes/psl-config.php');
          try {
            $db = DB();
            $query = $db->prepare("SELECT * FROM salem_21232f297a57a5a743894a0e4a801fc3 WHERE admin_user=:admin_user");
            $query->bindParam("admin_user", $admin_user, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                while ($row = $query->fetch(PDO::FETCH_NUM)) {
				$admin_pass=$row[3];
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
	</div><table class="table table-bordered">
    <thead>
	<tr>
	<td align="center" colspan="2" class="alert alert-success">Password Change Tool</td>
	</tr>
    </thead>
    <tbody>
	<form method="POST" action="">
	<tr>
	<td align="right">Enter Current Password</td>
	<td><input type="password" required name="current_password" placeholder="Current Password"/></td>
	</tr>
	<tr>
	<td align="right">Enter New Password</td>
	<td><input type="password" required name="new_password" placeholder="New Password"/></td>
	</tr>
	<tr>
	<td></td>
	<td><input type="submit" name="submit" value="Change"/></td>
	</tr>
	</form>
<?php
include_once('../includes/dbs.php');
if(isset($_POST['submit']))
{
$current_password=$_POST['current_password'];
$current_password=md5($current_password);
$new_password=$_POST['new_password'];
$new_password=md5($new_password);
if($current_password==$admin_pass)
{
$sql = "UPDATE salem_21232f297a57a5a743894a0e4a801fc3 SET admin_pass='$new_password' WHERE admin_user='$admin_user'";
if ($con->query($sql) === TRUE) {
    echo "<tr>";
	echo"<td colspan='2'><center><div class='alert alert-success'>Password Updated !</div></center></td>";
	echo "</tr>";
	}
}
else {
    echo "<tr>";
	echo"<td colspan='2'><center><div class='alert alert-danger'>Current Password Don't match !</div></center></td>";
	echo "</tr>";
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

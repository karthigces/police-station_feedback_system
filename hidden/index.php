  <?php include_once('header.php');?>
  <div class="col-sm-9">
	<div class="topheader">
	<?php date_default_timezone_set("Asia/Calcutta"); ?>
		<p style="text-align:left;">
		<font color="red"><b>Date : </font><?php echo date('d-m-Y');?></b>
		<span style="float:right;">
		<font color="red"><b>Time : </font><?php echo date('h:i:s A');?></span></b>
		</p>
	</div>
	<div  align="center">
	Welcome <b><?php echo strtoupper("$st_code");?></b> Police Station<br>
	</div>
<div  align="center">
<?php
include_once('../includes/psl-config.php');
$db = DB();
$stmt = $db->prepare("SELECT st_photo FROM salem_a4db7d6fe80f15db7fb1061fa362d0fa WHERE st_code=:st_code");
$stmt->execute(['st_code' => $st_code]); 
$st_photo = $stmt->fetch();
echo "<center><img src='police_station_photos/".$st_photo[0]."' alt='Station Photo'/></center>";
?>
</div>
	<b>
</div>
		<?php include('../includes/footer.php');?>
	</body>
</html>
</body>
</html>

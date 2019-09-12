<!------ Karthi ---------->
  <?php include_once('header.php');?>
  <div class="col-sm-9">
	<div>
	<?php date_default_timezone_set("Asia/Calcutta"); ?>
		<p style="text-align:left;">
		<font color="red"><b>Date : </font><?php echo date('d-m-Y');?></b>
		<span style="float:right;">
		<font color="red"><b>Time : </font><?php echo date('h:i:s A');?></span></b>
		</p>
	</div>
	<div  align="center">
	Welcome <b><big><?php echo strtoupper("$admin_user");?></big></b><br>
	</div>
	<div  align="center">
	<img class="img-responsive" src="../images/police-station.png" alt="POLICE STATION">
	</div>
	<b>
</div>
		<?php include('../includes/footer.php');?>
	</body>
</html>
</body>
</html>
<!------ Karthi ---------->

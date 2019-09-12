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
@media print {
  #printPageButton {
    display: none;
  }
}
@page { size: auto;  margin: 0mm; }
</style>
<div align="center" class="col-sm-9">
<br>
	<div>
	<?php date_default_timezone_set("Asia/Calcutta"); ?>
		<p style="text-align:left;">
		<font color="red"><b>Date : </font><?php echo date('d-m-Y');?></b>
		<span style="float:right;">
		<font color="red"><b>Time : </font><?php echo date('h:i:s A');?></span></b>
		</p>
	</div>
	<table class="table table-bordered">
	
	</table>
</div>
</div>
</div>
</body>
</html>

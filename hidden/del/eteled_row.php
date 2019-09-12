<?php
include("../authenticate.php");
include_once('../../includes/psl-config.php');
?>
<?php
$db = DB();
	$sr_no = $_POST['sr_no'];
	$stmt = $db->prepare( "DELETE FROM salem_1c2af6696c4c67949752fa8006c4e63d WHERE sr_no =:sr_no AND st_code =:st_code" );
	$stmt->bindParam(':sr_no', $sr_no);
	$stmt->bindParam(':st_code', $st_code);
	$stmt->execute();
	if($stmt->rowCount())
	{
		header("Location: ../wiev_troper.php"); // Redirect user to the profile.php
	}
    else
    {
        echo "ID must be a positive integer";
    }
?>
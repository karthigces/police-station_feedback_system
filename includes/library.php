<?php
include_once('includes/psl-config.php');
class DemoLib
{
    public function Login($st_code,$st_password)
    {
        try {
            $db = DB();
            $query = $db->prepare("SELECT * FROM salem_a4db7d6fe80f15db7fb1061fa362d0fa WHERE st_code=:st_code AND st_password=:st_password");
            $query->bindParam("st_code", $st_code, PDO::PARAM_STR);
            $query->bindParam("st_password", $st_password, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                while ($row = $query->fetch(PDO::FETCH_NUM)) {
				print "<p>".$row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]."</p>";
				$_SESSION['st_code'] = $st_code; // Set Session
				header("Location: hidden/index.php"); // Redirect user to the profile.php
				}
}
		else {
				echo "<div align='center' class='alert alert-danger'><strong>Error: </strong> Station Code / Password Error</div>";
					}
				} catch (PDOException $e) {
					echo "<div align='center' class='alert alert-danger'><strong>Error: </strong></div>";
					echo $e;
				}
			}
		}
?>
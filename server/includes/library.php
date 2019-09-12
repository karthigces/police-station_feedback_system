<?php
include_once('includes/psl-config.php');
class DemoLib
{
    public function Login($admin_user,$admin_pass)
    {
        try {
            $db = DB();
            $query = $db->prepare("SELECT * FROM salem_21232f297a57a5a743894a0e4a801fc3 WHERE admin_user=:admin_user AND admin_pass=:admin_pass");
            $query->bindParam("admin_user", $admin_user, PDO::PARAM_STR);
            $query->bindParam("admin_pass", $admin_pass, PDO::PARAM_STR);
            $query->execute();
            if ($query->rowCount() > 0) {
                while ($row = $query->fetch(PDO::FETCH_NUM)) {
				print "<p>".$row[0]." ".$row[1]." ".$row[2]." ".$row[3]." ".$row[4]."</p>";
				$_SESSION['admin_user'] = $admin_user; // Set Session
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
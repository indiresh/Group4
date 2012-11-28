<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php
	// make sure the robot id sent is an integer
	if (intval($_GET['subj']) == 0) {
		redirect_to('staff.php');
	}
	
	$id = mysql_prep($_GET['subj']);
	// make sure the robot exists (not strictly necessary)

	if ($page = get_robot_by_id($id)) {
		
		$query = "DELETE FROM robots WHERE id = {$page['id']} ";
		$result = mysql_query ($query);
		if (mysql_affected_rows() == 1) {
			// Successfully deleted
			redirect_to("staff.php");
		} else {
			// Deletion failed
			echo "<p>Page deletion failed.</p>";
			echo "<p>" . mysql_error() . "</p>";
			echo "<a href=\"staff.php\">Return to Main Page</a>";
		}
	} else {
		// page didn't exist, deletion was not attempted
		redirect_to('robots.php');
	}
?>
<?php 
// because this file didn't include footer.php I added this manually
mysql_close($db);
?>
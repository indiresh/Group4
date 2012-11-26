<?php require_once("includes/session.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>

<?php

	include_once("includes/form_functions.php");

	// START FORM PROCESSING
	// only execute the form processing if the form has been submitted
	if (isset($_POST['submit'])) {
		// initialize an array to hold our errors
		$errors = array();
	
		// perform validations on the form data
		$required_fields = array('name', 'dimension', 'temp', 'frame', 'mass', 'class', 'power', 'color', 'price', 'description', 'recharge');
		$errors = array_merge($errors, check_required_fields($required_fields));
		
		$fields_with_lengths = array('name' => 30);
		$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths));
		
		// clean up the form data before putting it in the database
		$id = mysql_prep($_GET['subj']);
		$name = trim(mysql_prep($_POST['name']));
		$dimension = mysql_prep($_POST['dimension']);
		$temp = mysql_prep($_POST['temp']);
		$frame = mysql_prep($_POST['frame']);
		$mass = mysql_prep($_POST['mass']);
		$class = mysql_prep($_POST['class']);
		$power = mysql_prep($_POST['power']);
		$color = mysql_prep($_POST['color']);
		$price = mysql_prep($_POST['price']);
		$description = mysql_prep($_POST['description']);
		$recharge = mysql_prep($_POST['recharge']);
	
		// Database submission only proceeds if there were NO errors.
		if (empty($errors)) {
			$query = 	"UPDATE robots SET 
							name = '$name',
							dimension = '$dimension', 
							temp = '$temp',
							frame = '$frame',
							mass = '$mass',
							class = '$class',
							power = '$power',
							color = '$color',
							price = '$price',
							description = '$description',
							recharge = '$recharge' 
						WHERE id = {$id}";
			$result = mysql_query($query);
			// test to see if the update occurred
			if (mysql_affected_rows() == 1) {
				// Success!
				$message = "The page was successfully updated.";
			} else {
				$message = "The page could not be updated.";
				$message .= "<br />" . mysql_error();
			}
		} else {
			if (count($errors) == 1) {
				$message = "There was 1 error in the form.";
			} else {
				$message = "There were " . count($errors) . " errors in the form.";
			}
		}
		// END FORM PROCESSING
	}
?>

<?php find_selected_page(); ?>
<?php include("includes/header.php"); ?>
<table id="structure">
	<tr>
			<a href="new_robot.php">+ Add a new robot</a>
		<td id="page">
			<h2>Edit Robot: <?php echo $sel_robot['name']; ?></h2>
			<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
			<?php if (!empty($errors)) { display_errors($errors); } ?>
			
			<form action="edit_page.php?subj=<?php echo $sel_robot['id']; ?>" method="post">
				<?php include "page_form.php" ?>
				<input type="submit" name="submit" value="Update Robot" />&nbsp;&nbsp;
				<a href="delete_robot.php?subj=<?php echo $sel_robot['id']; ?>" onclick="return confirm('Are you sure you want to delete this page?');">Delete Robot</a>
			</form>
			<br />
			<a href="content.php?subj=<?php echo $sel_robot['id']; ?>">Cancel</a><br />
		</td>
	</tr>
</table>
<?php include("includes/footer.php"); ?>
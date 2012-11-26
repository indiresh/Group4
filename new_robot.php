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
		$errors = array_merge($errors, check_required_fields($required_fields, $_POST));
		
		$fields_with_lengths = array('name' => 30);
		$errors = array_merge($errors, check_max_field_lengths($fields_with_lengths, $_POST));
		
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
			$query = "INSERT INTO robots (
						name, dimension, temp, frame, mass, class, power, color, price, description, recharge
					) VALUES (
						'$name', '$dimension', '$temp', '$frame', '$mass', '$class', '$power', '$color', '$price', '$description', '$recharge'
					)";
			if ($result = mysql_query($query, $connection)) {
				// as is, $message will still be discarded on the redirect
				$message = "The page was successfully created.";
				// get the last id inserted over the current db connection
				$new_page_id = mysql_insert_id();
				redirect_to("content.php?subj={$new_page_id}");
			} else {
				$message = "The page could not be created.";
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
		<td id="page">
			<h2>AddNew Robot</h2>
			<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
			<?php if (!empty($errors)) { display_errors($errors); } ?>
			
			<form action="new_robot.php?subj=<?php echo $sel_robot['id']; ?>" method="post">
				<?php $new_page = true; ?>
				<?php include "page_form.php" ?>
				<input type="submit" name="submit" value="Create Page" />
			</form>
			<br />
			<a href="staff.php">Cancel</a><br />
		</td>
	</tr>
</table>
<?php include("includes/footer.php"); ?>
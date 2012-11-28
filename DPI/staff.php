<?php require_once("includes/session.php"); ?>
<?php require_once 'includes\connection.php';?>
<?php require_once("includes/functions.php"); ?>
<?php confirm_logged_in(); ?>
<?php include("includes/header.php"); ?>
<table id="structure">
	<tr>
		<td id="navigation">
			&nbsp;
		</td>
		<td id="page">
			<h2>Staff Menu</h2>
			<p>Welcome to the staff area, <?php echo $_SESSION['username']; ?>.</p>
			<ul>
				<li><a href="new_robot.php">Add Robot</a></li>
				<li><a href="new_user.php">Add User</a></li>
				<li><a href="logout_new.php">Logout</a></li>
			</ul>
		</td>
	</tr>
</table>
<?php include("includes/footer.php"); ?>

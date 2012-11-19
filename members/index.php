<?php include ('header.php'); ?>

<?
session_start();

echo "Welcome ". $_SESSION['first_name'] ." ". $_SESSION['last_name'] ."! You have made it to the members area!<br /><br />";



?>
<?php include ('footer.php'); ?>
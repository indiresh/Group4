<?

include 'db.php';

// Define post fields into simple variables
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_address = $_POST['email_address'];
$address = $_POST['address'];

/* Let's strip some slashes in case the user entered
any escaped characters. */

$first_name = stripslashes($first_name);
$last_name = stripslashes($last_name);
$email_address = stripslashes($email_address);
$address = stripslashes($address);


/* Do some error checking on the form posted fields */

if((!$first_name) || (!$last_name) || (!$email_address) || (!$address)){
include 'header.php';
	echo 'You did not submit the following required information! <br />';
	if(!$first_name){
		echo "First Name is a required field. Please go back and enter it.<br />";
	}
	if(!$last_name){
		echo "Last Name is a required field. Please go back and enter it.<br />";
	}
	if(!$email_address){
		echo "Email Address is a required field. Please go back and enter it.<br />";
	}
	if(!$address){
		echo "Address is a required field. Please go back and enter it.<br />";
	}
	include 'footer.php'; // Show the form again!
	/* End the error checking and if everything is ok, we'll move on to
	 creating the user account */
	exit(); // if the error checking has failed, we'll exit the script!
}
	
/* Let's do some checking and ensure that the user's email address or username
 does not exist in the database */
 
 $sql_email_check = mysql_query("SELECT email_address FROM robot_users WHERE email_address='$email_address'");
 
 $email_check = mysql_num_rows($sql_email_check);
 
 if(($email_check > 0)){
 	echo "Please fix the following errors: <br />";
 	if($email_check > 0){
 		echo "<strong>Your email address has already been used by another member in our database. Please submit a different Email address!<br />";
 		unset($email_address);
 	}
 	
 	include 'join_form.php'; // Show the form again!
 	exit();  // exit the script so that we do not create this account!
 }
 
/* Everything has passed both error checks that we have done.
It's time to create the account! */

/* Random Password generator. 
http://www.phpfreaks.com/quickcode/Random_Password_Generator/56.php

We'll generate a random password for the
user and encrypt it, email it and then enter it into the db.
*/

function makeRandomPassword() {
  $salt = "abchefghjkmnpqrstuvwxyz0123456789";
  srand((double)microtime()*1000000); 
  	$i = 0;
  	while ($i <= 7) {
    		$num = rand() % 33;
    		$tmp = substr($salt, $num, 1);
    		$pass = $pass . $tmp;
    		$i++;
  	}
  	return $pass;
}

$random_password = makeRandomPassword();

$db_password = md5($random_password);

// Enter info into the Database.
$sql = mysql_query("INSERT INTO robot_users (first_name, last_name, email_address, address, password)
		VALUES('$first_name', '$last_name', '$email_address', '$address', '$db_password')") or die (mysql_error());

if(!$sql){
	echo 'There has been an error creating your account. Please contact the webmaster.';
} else {
	$userid = mysql_insert_id();
	// Let's mail the user!
	$subject = "Build-A-Bot Robots!";
	$message = "Dear $first_name $last_name,
	Thank you for registering at our website, Build-A-Bot!
	
	You are two steps away from logging in and accessing our exclusive members area.
	
	To activate your membership, please click here: www.secs.oakland.edu/~mjdawson/activate.php?id=$userid&code=$db_password
	
	Once you activate your memebership, you will be able to login with the following information:
	Username: $email_address
	Password: $random_password
	
	Thanks!
	Build-A-Bot
	
	This is an automated response, please do not reply!";
	
	mail($email_address, $subject, $message, "From: Build-A-Bot<admin@buildabot.com>\nX-Mailer: PHP/" . phpversion());
		include 'header.php';
	echo 'Your membership information has been mailed to your email address! Please check it and follow the directions! (Check your spam filter!)';
}

?>
<?
include 'db.php';

switch($_POST['recover']){
	default:
	include 'lost_pw.php';
	break;
	
	case "recover":
	recover_pw($_POST['email_address']);
	break;
}
function recover_pw($email_address){
	if(!$email_address){
	include 'header.php';
		echo "You forgot to enter your Email address <strong>Knucklehead</strong><br />";
		include 'footer.php';
		
		exit();
	}
	// quick check to see if record exists	
	$sql_check = mysql_query("SELECT * FROM robot_users WHERE email_address='$email_address'");
	$sql_check_num = mysql_num_rows($sql_check);
	if($sql_check_num == 0){
		include 'header.php';
		echo "No records found matching your email address<br />";
		include 'footer.php';
		exit();
	}
	// Everything looks ok, generate password, update it and send it!
	
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
	
	$sql = mysql_query("UPDATE robot_users SET password='$db_password' WHERE email_address='$email_address'");
	
	$subject = "Your Password at MyWebsite!";
	$message = "Hi, we have reset your password.
	
	New Password: $random_password
	
	http://www.secs.oakland.edu/~mjdawson/login_form.php
	
	Thanks!
	The Webmaster
	
	This is an automated response, please do not reply!";
	
	mail($email_address, $subject, $message, "From: MyDomain Webmaster<admin@mydomain.com>\nX-Mailer: PHP/" . phpversion());
	include 'header.php';
		echo "Your password has been sent! Please check your email!<br />";
		include 'footer.php';
}
?>
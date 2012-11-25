<?
/* Check User Script */
session_start();  // Start Session

include 'db.php';
// Conver to simple variables
$email_address = $_POST['email_address'];
$password = $_POST['password'];

if((!$email_address) || (!$password)){
	include 'header.php';
	echo "Please enter ALL of the information! <br />";
		include 'footer.php';
	exit();
}

// Convert password to md5 hash
$password = md5($password);

// check if the user info validates the db
$sql = mysql_query("SELECT * FROM robot_users WHERE email_address='$email_address' AND password='$password' AND activated='1'");
$login_check = mysql_num_rows($sql);

if($login_check > 0){
	while($row = mysql_fetch_array($sql)){
	foreach( $row AS $key => $val ){
		$$key = stripslashes( $val );
	}
		// Register some session variables!
		session_register('first_name');
		$_SESSION['first_name'] = $first_name;
		session_register('last_name');
		$_SESSION['last_name'] = $last_name;
		session_register('email_address');
		$_SESSION['email_address'] = $email_address;
		
		mysql_query("UPDATE robot_users SET last_login=now() WHERE userid='$userid'");
		
		header("Location: login_success.php");
	}
} else {
	include 'header.php';
	echo "You could not be logged in! Either the username and password do not match or you have not validated your membership!<br />
	Please try again!<br />";
	include 'footer.php';
}
?>
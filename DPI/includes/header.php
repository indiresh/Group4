<?php require_once("includes/session.php"); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Built-a-Bot Robotics</title>

<link rel="stylesheet" type="text/css" href="http://www.secs.oakland.edu/~mjdawson/css/main.css">
<link rel="stylesheet" type="text/css" href="http://www.secs.oakland.edu/~mjdawson/menu/menu2.css">

<script type="text/javascript" src="http://www.secs.oakland.edu/~mjdawson/menu/jQuery.js"></script>
<script type="text/javascript" src="http://www.secs.oakland.edu/~mjdawson/menu/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="http://www.secs.oakland.edu/~mjdawson/menu/menu.js"></script>
<script type="text/javascript" src="http://www.secs.oakland.edu/~mjdawson/jquery.shorten.1.0.js"></script>
</head>
<body>

<!-- Cart Bar -->
<div class="cart">
		<table width="200" border="0" cellspacing="0" cellpadding="0" align="right">
  		<tr>
    	<?php if (logged_in() == TRUE) {
    		echo "<td align=\"center\"><a href=\"Staff.php\">Main Menu</a> | </td>";
			echo "<td align=\"center\"><a href=\"logout_new.php\">Logout</a> | </td>";
		} else {
			echo "<td align=\"center\"><a href=\"login.php\">Sign In</a> | </td>";
		}
		 ?>
    	<!--<td align="center"><a href="/login.php">Sign In</a> | </td>-->
    	<!--<td align="center"><a href="join_form.php">Sign Up</a></td>-->
    	<!--<td align="center"> | Check Out</td>-->
  		</tr>
		</table>
</div>

</br>
</br>
<img src="http://www.secs.oakland.edu/~mjdawson/images/logo.png" height="50" width="350" border="0" alt="logo" align="left">

<!-- Navagation Bar -->
<div class="menu">
 <ul class="nav">
	<div id = "navLeft"></div>
	<div id = "navRight"></div>
	<li class = "mainmenu"><a href="content.php?page=1">Home</a></li>
            <li class = "submenu"><a href="robots.php"><span></span>Products</a>
			<?php echo navigation();?>
            <li class = "mainmenu"><a href="content.php?page=2">About Us</a></li>
        <li class = "mainmenu"><a href="content.php?page=3">Tech Support</a></li>
		<li class = "mainmenu"><a href="contactus.php">Contact</a></li>
		<li class = "mainmenu"><a href="#"></a></li>
 </ul>
</div>




<!-- Content -->
<div class="content">
<table width="98%" align="center">
<tr><td>
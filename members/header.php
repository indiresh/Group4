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
</head>
<body>

<!-- Cart Bar -->
<div class="cart">
		<table width="400" border="0" cellspacing="0" cellpadding="0" align="right">
  		<tr>
    	<td align="right"><?
session_start();

echo "Welcome, ". $_SESSION['first_name'] ." ". $_SESSION['last_name'] ."!";
?>


&nbsp;|&nbsp;<a href="http://www.secs.oakland.edu/~mjdawson/logout.php?logmeout">Logout</a>&nbsp;|&nbsp;Check Out</td>
  		</tr>
		</table>
</div>



<!-- Navagation Bar -->
<div class="menu">
 <ul class="nav">
	<div id = "navLeft"></div>
	<div id = "navRight"></div>
	<li class = "mainmenu"><a href="http://www.secs.oakland.edu/~mjdawson/index.php">Home</a></li>
            <li class = "submenu"><a href="#"><span></span>Products</a>
			<ul>
				<li><a href="http://www.secs.oakland.edu/~mjdawson/immoveableobject.php">Immoveable Object</a></li>
				<li><a href="http://www.secs.oakland.edu/~mjdawson/unstoppableforce.php">Unstoppable Force</a></li>
				<li><a href="http://www.secs.oakland.edu/~mjdawson/rosie.php">Rosie</a></li>
				<li><a href="http://www.secs.oakland.edu/~mjdawson/bluethunder.php">Blue Thunder</a></li>
			</ul></li>
            <li class = "mainmenu"><a href="http://www.secs.oakland.edu/~mjdawson/aboutus.php">About Us</a></li>
        <li class = "mainmenu"><a href="http://www.secs.oakland.edu/~mjdawson/techsupport.php">Tech Support</a></li>
		<li class = "mainmenu"><a href="http://www.secs.oakland.edu/~mjdawson/contactus.php">Contact</a></li>
		<li class = "mainmenu"><a href="#"></a></li>
 </ul>
</div>



<!-- Content -->
<div class="content">
<table width="98%" align="center">
<tr><td>
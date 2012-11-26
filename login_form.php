<?php include ('header.php'); ?>

<h1>Please Login</h1>

<form action="members/checkuser.php" method="post" name="" id="">
  <table width="70%" border="0" align="left" cellpadding="4" cellspacing="0">
    <tr> 
      <td align=right width="22%">Email Address:</td>
      <td width="78%"><input name="email_address" type="email" id="email_address"></td>
    </tr>
    <tr> 
      <td align=right>Password:</td>
      <td><input name="password" type="password" id="password"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
    <tr>
      <td align=center colspan="2"><a href="http://www.secs.oakland.edu/~mjdawson/lost_pw.php">Lost Password?</a></td>
    </tr>
  </table>
</form>

<?php include ('footer.php'); ?>

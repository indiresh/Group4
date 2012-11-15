<?php include ('header.php'); ?>

<h1>Please Login</h1>

<form action="checkuser.php" method="post" name="" id="">
  <table width="50%" border="0" align="left" cellpadding="4" cellspacing="0">
    <tr> 
      <td width="22%">Email</td>
      <td width="78%"><input name="email_address" type="text" id="email_address"></td>
    </tr>
    <tr> 
      <td>Password</td>
      <td><input name="password" type="password" id="password"></td>
    </tr>
    <tr> 
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit"></td>
    </tr>
  </table>
</form>

<?php include ('footer.php'); ?>

<?php include ('header.php'); ?>

<form name="form1" method="post" action="register.php">
  <table width="100%" border="0" cellpadding="4" cellspacing="0">
    <tr> 
      <td width="24%" align="right" valign="top">First Name:</td>
      <td width="76%"><input name="first_name" type="text" id="first_name2" value="<? echo $first_name; ?>"></td>
    </tr>
    <tr> 
      <td align="right" valign="top">Last Name:</td>
      <td><input name="last_name" type="text" id="last_name" value="<? echo $last_name; ?>"></td>
    </tr>
    <tr> 
      <td align="right" valign="top">Email Address:</td>
      <td><input name="email_address" type="email" id="email_address" value="<? echo $email_address; ?>"></td>
    </tr>
    <tr> 
      <td align="right" valign="top">Address:</td>
      <td><textarea name="address" id="address"><? echo $address; ?></textarea></td>
    </tr>
    <tr> 
      <td align="right" valign="top">&nbsp;</td>
      <td><input type="submit" name="Submit" value="Join Now!"></td>
    </tr>
  </table>
</form>

<?php include ('footer.php'); ?>

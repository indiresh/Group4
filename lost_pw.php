<?php include ('header.php'); ?>
<h1>Forget something?</h1>
Shame on you! Hmm... shall I give it to you?
<p>
<form name="form1" method="post" action="lostpw.php">
  <table width="50%" border="0" cellspacing="0" cellpadding="4">
    <tr> 
      <td>Please enter your email address</td>
      <td><input name="email_address" type="text" id="email_address"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="recover" type="hidden" id="recover" value="recover">
        <input type="submit" name="Submit" value="Recover My Password!"></td>
    </tr>
  </table>
</form>
<?php include ('footer.php'); ?>

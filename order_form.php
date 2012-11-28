<?php include ('includes\header.php'); ?>
<form name="contactform" method="post" action="send_email.php">
			
			
			
<h1>Order Form</h1>
<table width="63%" border="0" cellspacing="12" cellpadding="0">
  <tr>
    <td align=right>Name:</td>
    <td><input type="text" name="name" size="50" maxlength="100" /></td>
  </tr> 
  <tr>
    <td align=right>Email Address:</td>
    <td><input type="email" name="email" size="50" maxlength="100" /></td>
  </tr>
<tr>
    <td align=right>Street Address:</td>
    <td><input type="text" name="name" size="50" maxlength="100" /></td>
  </tr> 
<tr>
    <td align=right>City:</td>
    <td><input type="text" name="name" size="50" maxlength="100" /></td>
  </tr> 
<tr>
    <td align=right>State:</td>
    <td><input type="text" name="name" size="50" maxlength="100" /></td>
  </tr> 
<tr>
    <td align=right>Zip Code:</td>
    <td><input type="text" name="name" size="50" maxlength="100" /></td>
  </tr> 
  <tr>
  	<td align=right valign=top>Do you have an account with us?</td>
	<td><input type="radio" name="account" value="Yes" class="radio"/>
	Yes</br>
	<input type="radio" name="account" value="No" class="radio"/>
	No</td>
  </tr>
  <tr>
    <td align=right valign=top>What type of robot are you purchasing? (Please select all that apply)</td>
	<td><input type="checkbox" name="robot" value="ImmovableOject" class="check"/>
	Immovable Object</br>
	<input type="checkbox" name="robot" value="Rosie" class="check"/>
	Rosie</br>
	<input type="checkbox" name="robot" value="TheUnstoppableForce" class="check"/>
	The Unstoppable Force</br>
	<input type="checkbox" name="robot" value="Blue Thunder" class="check"/>
	Blue Thunder</td>
  </tr>
<tr>
  	<td align=right valign=top>Is this a gift?</td>
	<td><input type="radio" name="account" value="Yes" class="radio"/>
	Yes</br>
	<input type="radio" name="account" value="No" class="radio"/>
	No</td>
  </tr>
  <tr>
    <td align=right>Quantity:</td>
	<td><select name="reason">
		<option value="1"></option>
		<option value="2">Feedback</option>
		<option value="3">Question</option>
		<option value="4">Technical Support</option>
		<option value="Other">Other</option></td>
  </tr>
  <tr>
    <td></td>
	<td><input type="submit" name="Submit" value="Submit" class="button"><INPUT TYPE="reset" value="Clear" class="button"></td>	
  </tr>

</table>
</form> 	

<?php include ('includes\footer.php'); ?>

<?php include ('header.php'); ?>

<form name="contactform" method="post" action="send_email.php">
			
			
			
<h1>Contact Us</h1>
<table width="63%" border="0" cellspacing="12" cellpadding="0">
  <tr>
    <td align=right>Name:</td>
    <td><input type="text" name="name" size="50" maxlength="100" /></td>
  </tr> 
  <tr>
    <td align=right>E-mail:</td>
    <td><input type="email" name="email" size="50" maxlength="100" /></td>
  </tr>
  <tr>
  	<td align=right valign=top>Do you have an account with us?</td>
	<td><input type="radio" name="account" value="Yes" class="radio"/>
	Yes</br>
	<input type="radio" name="account" value="No" class="radio"/>
	No</td>
  </tr>
  <tr>
    <td align=right valign=top>What type of robot do you have? (Please select all that apply)</td>
	<td><input type="checkbox" name="robot" value="ImmovableOject" class="check"/>
	Immovable Object</br>
	<input type="checkbox" name="robot" value="Rosie" class="check"/>
	Rosie</br>
	<input type="checkbox" name="robot" value="TheUnstoppableForce" class="check"/>
	The Unstoppable Force</br>
	<input type="checkbox" name="robot" value="Blue Thunder" class="check"/>
	Robot4</td>
  </tr>
  <tr>
    <td align=right>Reason for contacting us:</td>
	<td><select name="reason">
		<option value="Blank"></option>
		<option value="Feedback">Feedback</option>
		<option value="Question">Question</option>
		<option value="TechnicalSupport">Technical Support</option>
		<option value="Other">Other</option></td>
  </tr>
  <tr>
  	<td align=right valign=top>Comments:</td>
	<td><textarea name="comments" rows=8 cols=50></textarea></td>
  </tr>	
  <tr>
    <td></td>
	<td><input type="submit" name="Submit" value="Submit" class="button"><INPUT TYPE="reset" value="Clear" class="button"></td>	
  </tr>

<!-- End Content -->
</td>
</tr>
</table>
</form> 	
</div>





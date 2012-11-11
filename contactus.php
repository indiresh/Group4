<?php include ('header.php'); ?>

<form method="post" enctype="text/plain" action=mailto: contactus@build-a-botrobotics.com>
<input type="hidden" name="To" value="Subject">
<h1>Contact Us</h1>
<table width="63%" border="0" cellspacing="12" cellpadding="0">
  <tr>
    <td align=right>Name:</td>
    <td><input type="text" name="Name" size="50" maxlength="100" /></td>
  </tr> 
  <tr>
    <td align=right>E-mail:</td>
    <td><input type="email" name="Email" size="50" maxlength="100" /></td>
  </tr>
  <tr>
  	<td align=right valign=top>Do you have an account with us?</td>
	<td><input type="radio" name="Account" value="Yes" class="radio"/>
	Yes</br>
	<input type="radio" name="Account" value="No" class="radio"/>
	No</td>
  </tr>
  <tr>
    <td align=right valign=top>What type of robot do you have? (Please select all that apply)</td>
	<td><input type="checkbox" name="Robot" value="ImmovableOject" class="check"/>
	Immovable Object</br>
	<input type="checkbox" name="Robot" value="Rosie" class="check"/>
	Rosie</br>
	<input type="checkbox" name="Robot" value="TheUnstoppableForce" class="check"/>
	The Unstoppable Force</br>
	<input type="checkbox" name="Robot" value="Robot4" class="check"/>
	Robot4</td>
  </tr>
  <tr>
    <td align=right>Reason for contacting us:</td>
	<td><select name="select">
		<option value="Blank"></option>
		<option value="Feedback">Feedback</option>
		<option value="Question">Question</option>
		<option value="TechnicalSupport">Technical Support</option>
		<option value="Other">Other</option></td>
  </tr>
  <tr>
  	<td align=right valign=top>Comments:</td>
	<td><textarea name="Comments" rows=8 cols=50></textarea></td>
  </tr>	
  <tr>
    <td></td>
	<td><input type="submit" value="Submit"></td>	
  </tr>

<!-- End Content -->
</td>
</tr>
</table>
</form> 	
</div>




</body>
</html>

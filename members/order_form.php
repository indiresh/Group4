<?php include ('header.php'); ?>
<form name="contactform" method="post" action="send_order.php">
			
					
<h1>Order Form</h1>
<table width="63%" border="0" cellspacing="12" cellpadding="0">
  <tr>
    <td align=right>Username:</td>
    <td><input type="text" name="username" size="20" maxlength="100" /></td>
  </tr> 
  <tr>
    <td align=right>Phone Number:</td>
    <td><input type="tel" name="phone" size="20" maxlength="100" /></td>
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
    <td align=right>Quantity:</td>
    <td><input type="text" name="quantity" size="1" maxlength="100" /></td>
  </tr>
  <tr>
    <td align=right>Color:</td>
    <td><input type="text" name="color" size="1" maxlength="100" /></td>
  </tr>
  <tr>
    <td align=right>Payment Method:</td>
	<td><select name="payment">
		<option value="blank"></option>
		<option value="Cash">Cash</option>
		<option value="Credit/Debit Card">Credit/Debit Card</option>
		<option value="Check">Check</option>
		<option value="Other">Other</option></td>
  </tr>
  <tr>
  <td align=right valign=top>                                                                     </td>
 <td><input type="checkbox" name="accept" value="I have read and agreed to the Terms and Conditions" class="check"/>
	I have read and agreed to the Terms and Conditions<br>
   <textarea style="resize:none" cols="24" rows="2">Terms: 
Must respond by 30 days.
Pick up robot at least by chosen date.

If fail to follow these terms, we will charge you a fee of 50% of the robot's value.</textarea></br> </td></tr>
 <tr>
    <td></td>
	<td><input type="submit" name="Submit" value="Submit" class="button"><INPUT TYPE="reset" value="Clear" class="button"></td>	
  </tr>

</table>
</form> 	

<?php include ('footer.php'); ?>

<?php require_once("includes/session.php"); ?>
<?php require_once('includes\connection.php');?>
<?php require_once('includes\functions.php');?>
<?php find_selected_page(); ?>
<?php include 'includes\header.php';?>
<table id="structure">
	<tr>

		<td id="page">
			<?php if (!is_null($sel_robot)) { ?>
				<h2><?php echo $sel_robot['name']; ?></h2> 
				<?php if (logged_in() == TRUE) {
					$edit = "<h3><a href=\"edit_page.php?subj=" . urlencode($sel_robot['id']) . "\">Edit Robot</a></h3>";
					echo $edit;
				} ?>
				
				<div class="page-content">

<img src="http://www.secs.oakland.edu/~mjdawson/images/<?php echo $sel_robot['image']; ?>" height="300" width="250" border="0" alt="<?php echo $sel_robot['name']; ?>" align="left">
<?php echo $sel_robot['description']; ?><p>


<h2>Product Specifications</h2>
<b>Dimensions:</b> <?php echo $sel_robot['dimension']; ?>    			<br>
<b><span class="droptext">Robot Mass:<span style="width:500px;">How much the robot weighs.</span></span></b> <?php echo $sel_robot['mass']; ?> <br>
<b>Operating temperature range:</b>	<?php echo $sel_robot['temp']; ?>	<br>
<b><span class="droptext">Frame:<span style="width:500px;">What the robot is made from.</span></span></b> <?php echo $sel_robot['frame']; ?><br>
<b><span class="droptext">Class:<span style="width:500px;">The general type of robot.</span></span></b> <?php echo $sel_robot['class']; ?> <br>
<b><span class="droptext">Power:<span style="width:500px;">What this robot uses for power.</span></span></b> <?php echo $sel_robot['power']; ?> <br>
<b><span class="droptext">Full Recharge Rate:<span style="width:500px;">How long it takes this robot to recharge. (If applicable)</span></span></b> <?php echo $sel_robot['recharge']; ?><br>
<b>Color(s):</b> <?php echo $sel_robot['color']; ?><br>

<h2>Price: $<?php echo $sel_robot['price']; ?></h2>

<br><p><font color="#FF0000" size="-1">**CAUTION: Do not allow the Unstoppable Force to go head to head with the Immovable Object. Unknown conquences may occur.</font>	
				</div>

				
<?php			 }
					elseif (!is_null($sel_page)) {
					echo "<div class=\"page-content\">";
					switch ($sel_page['id']) {
						
					case 1:
						echo get_home($sel_page['id']);
					break;
					
					case 2:
						?><img src="http://www.secs.oakland.edu/~mjdawson/images/robot.jpg" height="278"
						width="396" border="0" alt="robot" align="left"><?php echo "<h2> {$sel_page['name']} </h2>";
						echo "<p> {$sel_page['descr']} </p>";
					break;
						
					case 3:
						echo get_tech_support($sel_page['id']);
					break;
						
					default:
						$sel_page =1;
						?><p><?php echo get_home($sel_page); ?></p><?php
					break;
						}
						echo "</div>";
						}
						else {
							$sel_page =1;
						?><p><?php echo get_home($sel_page); ?></p><?php
					} ?>
			<br />
			<br />
		</td>
	</tr>
</table>
<?php
	require('includes\footer.php');
 ?>
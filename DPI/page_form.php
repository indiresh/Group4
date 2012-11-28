<?php require_once("includes/session.php"); ?>
<?php confirm_logged_in(); ?>
<?php // this page is included by new_page.php and edit_page.php ?>
<?php if (!isset($new_page)) {$new_page = false;} ?>

<p>Robot name: <input type="text" name="name" value="<?php echo $sel_robot['name']; ?>" id="name" /></p>
<p>Dimensions: <input type="text" name="dimension" value="<?php echo $sel_robot['dimension']; ?>" id="dimension" /></p>
<p>Operating Temp: <input type="text" name="temp" value="<?php echo $sel_robot['temp']; ?>" id="temp" /></p>
<p>Frame: <input type="text" name="frame" value="<?php echo $sel_robot['frame']; ?>" id="frame" /></p>
<p>Weight: <input type="text" name="mass" value="<?php echo $sel_robot['mass']; ?>" id="mass" /></p>
<p>Class: <input type="text" name="class" value="<?php echo $sel_robot['class']; ?>" id="class" /></p>
<p>Power: <input type="text" name="power" value="<?php echo $sel_robot['power']; ?>" id="power" /></p>
<p>Color: <input type="text" name="color" value="<?php echo $sel_robot['color']; ?>" id="color" /></p>
<p>Recharge Rate: <input type="text" name="recharge" value="<?php echo $sel_robot['recharge']; ?>" id="recharge" /></p>
<p>Price: <input type="text" name="price" value="<?php echo $sel_robot['price']; ?>" id="price" /></p>

</p>
<p>Description:<br />
	<textarea name="description" rows="20" cols="200"><?php echo $sel_robot['description']; ?></textarea>
</p>
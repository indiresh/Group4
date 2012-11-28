<?php include ('header.php'); ?>
<?php
$username = $_POST['username'];
$phone = $_POST['phone'];
$robot = $_POST['robot'];
$quantity = $_POST['quantity'];
$payment = $_POST['payment'];
$accept = $_POST['accept'];
$formcontent=" From: $name \n Phone: $phone \n Robot(s): $robot \n Quantity: $quantity \n Payment Method: $payment \n Accept Terms: $accept";
$recipient = "order@build-a-botrobotics.com";
$subject = "Build-A-Bot";
$mailheader = "From: $username \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error! Please go back and fill in all information.");
echo "Thank you for purchasing our products! We will get back to you as soon as the order form has been processed.";
?>

<?php include ('footer.php'); ?>
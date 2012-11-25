<?php include ('header.php'); ?>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
$account = $_POST['account'];
$robot = $_POST['robot'];
$reason = $_POST['reason'];
$comment = $_POST['comment'];
$formcontent=" From: $name \n E-mail: $email \n Account: $account \n Robot(s): $robot \n Reason for contacting Us: $reason \n Comments: $comment";
$recipient = "contactus@build-a-botrobotics.com";
$subject = "Build-A-Bot";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error! Please go back and fill in all information.");
echo "Thank You! We will get back to you as soon as possible.";
?>

<?php include ('footer.php'); ?>
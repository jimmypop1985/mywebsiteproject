<?php 

	
	

	
	if(isset($_POST['submit']))
	{
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$message = $_POST['message'];	

	if(empty($name)||empty($visitor_email))
	{
		
?>
<script>
		alert("Sorry, both name and email must be filled in to proceed");
	window.location = "index.php#contact";
		exit;
	
</script>

<?php
	}
	else{
	$email_from = $visitor_email;
	$email_subject = 'New website enquiry';
	$email_body = "You have received a new website enquiry from Twenty20 Hospitality\ n".
		"From: $name \n".
		"Email Address $visitor_email \n".
		"Enquiry $message".
		
		$to = "James Drummond<jimothy_drummond@hotmail.co.uk>";
		$headers = "From: $email_from \r\n";
?>



<?php
	
	if(mail($to,$email_subject,$email_body,$headers)){
		?>

<script>


	alert("Thanks for your enquiry, a member of our team will be in touch soon!");
	window.location = "index.php";
</script>
<?php
exit;		
}
	else{
	
	?>
<script>
	alert("Sorry, something went wrong there, please try again");
	window.location = "index.php#contact";
</script>
<?php
	}
	}
	}
?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
</body>
</html>
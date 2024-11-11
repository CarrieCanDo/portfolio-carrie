<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
	
	<?php
	
	$name= $_POST['name'];
	$visitor_email= $_POST['email'];
	$message= $_POST['message'];
	
	$email_from='carrie.a.wright@outlook.com';
	
	$email_subject="New Form Submission";
	
	$email_body="User Name: $name.\n".
				"User Email: $visitor_email.\n".
				"User Message: $message.\n";
	
	$to="carrie.a.wright@outlook.com";
	
	$headers ="From: $email_from\r\n";
	$headers="Reply-To: $visitor_email\r\n";
	
	mail($to,$email_Subject,$email_body,$headers);
	
	header("Location:Contact Me.html");
	
	?>
	
</body>
</html>
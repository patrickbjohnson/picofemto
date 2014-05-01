<?php 
	
	echo "I'm here";
	// $email and $message are the data that is being
	// posted to this page from our html contact form
	$email = $_POST['email'] ;
	$message = $_POST['message'] ;

	// When we unzipped PHPMailer, it unzipped to
	// public_html/PHPMailer_5.2.0
	require("phpmailer/class.phpmailer.php");

	$mail = new PHPMailer();

	$mail->IsSMTP();
	$mail->SMTPAuth = true;
	$mail->SMTPSecure = "tls";                 // sets the prefix to the servier
	$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
	$mail->Port       = 587;  
	$mail->Username 	= "patrick.johnson9@gmail.com";
	$mail->Password 	= "corner09";

	$mail->SetFrom('name@yourdomain.com', 'First Last');
	$mail->AddAddress("im@pbj.me","First Last")

	$mail->Subject    = "PHPMailer Test Subject via smtp (Gmail), basic";
	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	$mail->MsgHTML($body);

	$mail->AddAttachment("images/phpmailer.gif");      // attachment
	$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
	 
	if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
		echo "Message sent!";
	}

?>
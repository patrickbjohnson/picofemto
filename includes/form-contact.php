<?php 
header('Content-Type: application/json');
date_default_timezone_set('Etc/UTC');
require '../includes/phpmailer/PHPMailerAutoload.php';

$errors = array(); // array to hold validation erros
$data 	= array(); // array to pass back data

// validate the variables
  // if any of these variables dont' exist, add an error to our $error array

// if (empty($_POST["name"])) {
// 	$errors["name"] = "Name is required";
// }

// if (empty($_POST["email"])){
// 	$errors["email"] = "Email is required";
// }


// if (empty($_POST["subject"])){
// 	$errors["subject"] = "Subject is required";
// }

// if (empty($_POST["message"])){
// 	$errors["message"] = "Message is required";
// }


// Return a response 
	// if there are any errors in our errors array, 

if (!empty($errors)){
	$data["success"] = false;
	$data["errors"] = $errors;
} else {

	$name = 		filter_var($_POST["name"], FILTER_SANITIZE_STRING);
	$email = 		filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$subject = 		filter_var($_POST["subject"], FILTER_SANITIZE_EMAIL);
	$formMessage = 	filter_var($_POST["message"], FILTER_SANITIZE_STRING);
	$message 	= '<p>The following request was sent from: </p>';
	$message .= '<p>Name: ' 		. $name 				.'</p>';
	$message .= '<p>Subject: ' 	. $subject 			.'</p>';
	$message .= '<p>Email: ' 		. $email 				.'</p>';
	$message .= '<p>Message: ' 	. $formMessage 	.'</p>';


	//Create a new PHPMailer instance
	$mail = new PHPMailer();

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	$mail->SMTPSecure = 'ssl'; //Set the encryption system to use - ssl (deprecated) or tls
	$mail->isHTML(true);

	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 1;

	//Ask for HTML-friendly debug output
	$mail->Debugoutput = 'html';

	//Set the hostname of the mail server
	$mail->Host = 'box658.bluehost.com';

	//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
	$mail->Port = 465;

	
	//Whether to use SMTP authentication
	$mail->SMTPAuth = true;

	//Username to use for SMTP authentication - use full email address for gmail
	$mail->Username = "im@pbj.me";

	//Password to use for SMTP authentication
	$mail->Password = "corner09";

	//Set who the message is to be sent from
	$mail->setFrom($email, $name);
	$mail->AddReplyTo($email,$name);

	//Set who the message is to be sent to
	$mail->addAddress('im@pbj.me', 'Patrick Johnson');

	//Set the subject line
	$mail->Subject = '[Contact Form] From:  ' . $name;

	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->Body = $message;
	// $mail->MsgHTML($message);

	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';

	//Attach an image file
	// $mail->AddAttachment($file); //$_FILES['upload']['name']

	//send the message, check for errors
	if (!$mail->send()) {
	    echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	  //   $data["success"] = true;
			// $data["message"] = "Success";
		echo "success";
	}


	// // if there are no errors, process our form, then return a message
	// $name = 		filter_var($_POST["name"], FILTER_SANITIZE_STRING);
	// $email = 		filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	// $message = 	filter_var($_POST["message"], FILTER_SANITIZE_STRING);


	// $to = "im@pbj.me";
	// $subjectLine = "[Contact Form] " . $subject;
	// $headers = "From: " . $email . "\r\n";
	// $headers .= "Reply-To: ". $email . "\r\n";
	// $headers .= "MIME-Version: 1.0\r\n";
	// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	// $body 	= "From: " . $name . "<br>";
	// $body  .= "Email: " . $email . "<br>";
	// $body  .= "Subject Line: " . $subject . "<br>";
	// $body	 .= "Message: " . $message . "<br>";


	// if(mail($to, $subjectLine, $body, $headers)){
	// 	$data["success"] = true;
	// 	$data["message"] = "Success";
	// } 
	// else {
	// 	$data["success"] = false;
	// 	$data["errors"] = $errors;
	// }
}

echo json_encode($data);

?>
<?php 

	//SMTP needs accurate times, and the PHP time zone MUST be set
	//This should be done in your php.ini, but this is how to do it if you don't have access to that
	date_default_timezone_set('Etc/UTC');

	require '../includes/phpmailer/PHPMailerAutoload.php';



	$errors = array(); // array to hold validation erros
	$data 	= array(); // array to pass back data

// validate the variables
  // if any of these variables dont' exist, add an error to our $error array


// echo $_POST["name"];

if (empty($_POST["name"])) {
	$errors["name"] = "Name is required";
} else {
	$data["name"] = $_POST["name"];
}

if (empty($_POST["email"])){
	$errors["email"] = "Email is required";
} else {
	$data["email"] = $_POST["email"];
}

if (empty($_POST["message"])){
	$errors["message"] = "Message is required!";
} else {
	$data["message"] = $_POST["message"];
}

$hello = $_FILES['upload']['tmp_name'];


var_dump($hello);


// Return a response 
	// if there are any errors in our errors array, 

// if (! empty($errors)){
// 	$data["success"] = false;
// 	$data["errors"] = $errors;
// } else {
// 	echo "this shit works!";
// 	var_dump($_FILES['upload']['name']);
// 		$name = 		filter_var($_POST["name"], FILTER_SANITIZE_STRING);
// 		$email = 		filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
// 		$formMessage = 	filter_var($_POST["message"], FILTER_SANITIZE_STRING);
// 		$message = '<p>The following request was sent from: </p>';
// 		$message .= '<p>Name: '.$name.'</p>';
// 		$message .= '<p>Email: '.$email.'</p>';
// 		$message .= '<p>Message: '.$formMessage.'</p>';


// 		//Create a new PHPMailer instance
// 		$mail = new PHPMailer();

// 		//Tell PHPMailer to use SMTP
// 		$mail->isSMTP();
// 		$mail->isHTML(true);

// 		//Enable SMTP debugging
// 		// 0 = off (for production use)
// 		// 1 = client messages
// 		// 2 = client and server messages
// 		$mail->SMTPDebug = 2;

// 		//Ask for HTML-friendly debug output
// 		$mail->Debugoutput = 'html';

// 		//Set the hostname of the mail server
// 		$mail->Host = 'smtp.gmail.com';

// 		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
// 		$mail->Port = 587;

// 		//Set the encryption system to use - ssl (deprecated) or tls
// 		$mail->SMTPSecure = 'tls';

// 		//Whether to use SMTP authentication
// 		$mail->SMTPAuth = true;

// 		//Username to use for SMTP authentication - use full email address for gmail
// 		$mail->Username = "pbjdevtest@gmail.com";

// 		//Password to use for SMTP authentication
// 		$mail->Password = "9Lj.wCeDPQosX()bR47";

// 		//Set who the message is to be sent from
// 		$mail->setFrom($email, $name);
// 		$mail->AddReplyTo($email,$name);

// 		//Set who the message is to be sent to
// 		$mail->addAddress('im@pbj.me', 'Patrick Johnson');

// 		//Set the subject line
// 		$mail->Subject = '[Job Application] Test Email from ' . $name;

// 		//Read an HTML message body from an external file, convert referenced images to embedded,
// 		//convert HTML into a basic plain-text alternative body
// 		$mail->Body = $message;
// 		// $mail->MsgHTML($message);

// 		//Replace the plain text body with one created manually
// 		$mail->AltBody = 'This is a plain-text message body';

// 		//Attach an image file
// 		$mail->addAttachment('images/phpmailer_mini.png');

// 		//send the message, check for errors
// 		if (!$mail->send()) {
// 		    echo "Mailer Error: " . $mail->ErrorInfo;
// 		} else {
// 		    echo "Message sent!";
// 		}
// }



// echo json_encode($data);

?>
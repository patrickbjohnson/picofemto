<?php 


	// You need to add server side validation and better error handling here


	date_default_timezone_set('Etc/UTC');
	require '../includes/phpmailer/PHPMailerAutoload.php';



	$data = array();

	if(isset($_GET['files'])){	
		$error = false;
		$files = array();

		$uploaddir = './uploads/';
		foreach($_FILES as $file) {
			if(move_uploaded_file($file['tmp_name'], $uploaddir . basename($file['name']))) {
				$files[] = $uploaddir . $file['name'];
			} else {
			    $error = true;
			}
		}

		if ($error){
			$data = array('error' => 'There was an error uploading your files');
		} else {
			$data = array(
				'files' => $files
				);

		}


	} 


	else {
		


		$data = array('success' => 'Form was submitted.', 'formData' => $_POST);

		
		
	}

	$our_name = $_GET['name'];
	$our_file = $data['files'][0];

	// mailer shit
	
	//Create a new PHPMailer instance
	$mail = new PHPMailer();

	 $message = '<p>Name: ' . $our_name . '</p>';

	//Tell PHPMailer to use SMTP
	$mail->isSMTP();
	$mail->SMTPSecure = 'ssl'; //Set the encryption system to use - ssl (deprecated) or tls
	$mail->isHTML(true);

	//Enable SMTP debugging
	// 0 = off (for production use)
	// 1 = client messages
	// 2 = client and server messages
	$mail->SMTPDebug = 0;

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
	$mail->setFrom("example@jack.com");
	$mail->AddReplyTo("example@jack.com");

	//Set who the message is to be sent to
	$mail->addAddress('im@pbj.me', 'Patrick Johnson');

	//Set the subject line
	$mail->Subject = '[Job Application] Test Email from ' . $our_name;

	//Read an HTML message body from an external file, convert referenced images to embedded,
	//convert HTML into a basic plain-text alternative body
	$mail->Body = $message;
	// $mail->MsgHTML($message);

	//Replace the plain text body with one created manually
	$mail->AltBody = 'This is a plain-text message body';

	//Attach an image file
	$mail->AddAttachment($our_file); //$_FILES['upload']['name']

	//send the message, check for errors
	if (!$mail->send()) {
	    // echo "Mailer Error: " . $mail->ErrorInfo;
	} else {
	    // echo "Message sent!";
	}
	// end mailer shit


	echo json_encode($data);

?>

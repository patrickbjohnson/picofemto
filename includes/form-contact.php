<?php 

	date_default_timezone_set('America/New_York');
	require '../includes/phpmailer/PHPMailerAutoload.php';

	$data = array();
	$errors = array();

	if (empty($_POST['name'])){
    $errors['name'] = "Name is required";
  } 

  if (empty($_POST['email'])){
    $errors['email'] = "Email is required";
  } 

  if (empty($_POST['message'])){
    $errors['message'] = "Message is required";
  } 

  if (empty($_POST['subject'])){
    $errors['subject'] = "Subject is required";  
  }

	if (! empty($errors)){
		$data["success"] = false;
		$data["errors"] = $errors;
		$data['msg'] = "All fields required.";

	} else {

		$name =     filter_var($_POST['name'], FILTER_SANITIZE_STRING);
		$email =    filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
		$subject =    filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
		$formMessage =  filter_var($_POST['message'], FILTER_SANITIZE_STRING);
		$message = '<p>Someone wants to contact Picofemto: </p>';
		$message .= '<p>Name: ' . $name . '</p>';
		$message .= '<p>Email: ' . $email . '</p>';
		$message .= '<p>Subject: ' . $subject . '</p>';
		$message .= '<p>Message: ' . $formMessage .'</p>';


		$mail = new PHPMailer;

		$mail->isSMTP();  																	// Enable SMTP authentication
		$mail->SMTPAuth = true;                             // Set mailer to use SMTP
		$mail->Host = 'box658.bluehost.com';  							// Specify main and backup server
		$mail->SMTPDebug = 0;

		$mail->Username = 'im@pbj.me';                      // SMTP username
		$mail->Password = 'corner09';                       // SMTP password
		$mail->SMTPSecure = 'ssl';  												// Enable encryption, 'ssl' also accepted
		$mail->Port = 465;                        

		$mail->From = $email;
		$mail->FromName = $name;
		$mail->AddReplyTo($email,$name);
		$mail->addAddress('im@pbj.me', 'Patrick Johnson');  // Add a recipient

		$mail->WordWrap = 50;                               // Set word wrap to 50 characters
		$mail->isHTML(true);                                // Set email format to HTML

		$mail->Subject = '[CONTACT FORM] From: ' . $name . " about " . $subject;
		$mail->Body    = $message;
		$mail->AltBody = $message;

		if(!$mail->send()) {
		  $data['error']['title'] = 'Message could not be sent.';
		   exit;
		}

		$data['success']['title'] = 'Message has been sent';
		
		$data['name'] = $name;
		$data['email'] = $email;
		$data['subject'] = $subject;
		$data['message'] = $message;
		$data['msg'] = "Success. Thank you.";

	}	
	

	echo json_encode($data);
	
?>
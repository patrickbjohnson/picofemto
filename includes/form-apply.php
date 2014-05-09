<?php 
  
  // TODO
  // - set up proper colon formatting for dates
  // - set up proper time zone - bluehost?
  // - mail all contents to proper address


  // the header is making the success throw an error
  // but the email still sends. why?
  date_default_timezone_set('America/New_York');
  header ("content-type: application/json; charset=utf-8");
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

  if (empty($_FILES)){
    $errors['file'] = "Resume is required";  
  }


  // if the errors array has things in it, set the message to false and display the errors
  if(!empty($errors)){
    $data['success'] = false;
    $data['errors']  = $errors;
    $data['message'] = "Woops. Missing a few things. All fields required.";
    
  }

  // else, send email, then upload to ../includes/job_applicants
  else {
    $fileUpload = $_FILES[file_0]['tmp_name'];
    $fileName = $_FILES[file_0]['name'];

    // php mailer
    $file = $_FILES["upload"]["tmp_name"];
    $name =     filter_var($_POST["name"], FILTER_SANITIZE_STRING);
    $email =    filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $position =    filter_var($_POST["position"], FILTER_SANITIZE_STRING);
    $formMessage =  filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    $message = '<p>The following request was sent from: </p>';
    $message .= '<p>Name: ' . $name . '</p>';
    $message .= '<p>Position: ' . $position . '</p>';
    $message .= '<p>Email: ' . $email . '</p>';
    $message .= '<p>Message: ' . $formMessage .'</p>';


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
      $mail->setFrom($email, $name);
      $mail->AddReplyTo($email,$name);
      //Set who the message is to be sent to
      $mail->addAddress('im@pbj.me', 'Patrick Johnson');

      //Set the subject line
      $mail->Subject = '[Job Application] Test Email from ' . $name;

      //Read an HTML message body from an external file, convert referenced images to embedded,
      //convert HTML into a basic plain-text alternative body
      $mail->Body = $message;

      //Replace the plain text body with one created manually
      $mail->AltBody = 'This is a plain-text message body';

      //Attach an image file
      $mail->AddAttachment($fileUpload, $fileName); //$_FILES['upload']['name']

      //send the message, check for errors
      if (!$mail->send()) {
          $data['error']['title'] = 'Message could not be sent.';
          exit;
      } 

      $uploaddir = '../job_applicants/';
        foreach($_FILES as $file){
          if(move_uploaded_file($file['tmp_name'], $uploaddir . basename( date('m-d-Y_g:iA') . "--" .  $file['name']))){
            $files[] = $uploaddir . $file['name'];

          } else { 
            $error = true;
          }
        }
      $data = ($error) ? array('error' => 'There was an error uploading your files') : array('files' => $files);

      $data['success'] = true;
      $data['name'] = $name;
      $data['message'] = "Success! If we feel you're a fit we'll reach out shortly.";
      $data['errors'] = false;
      $data['file'] = $_FILES;
      
  }

echo json_encode($data, JSON_PRETTY_PRINT);

?>
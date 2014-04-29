<?php 




$errors = array(); // array to hold validation erros
$data 	= array(); // array to pass back data

// validate the variables
  // if any of these variables dont' exist, add an error to our $error array

if (empty($_POST["name"])) {
	$errors["name"] = "Name is required";
}

if (empty($_POST["email"])){
	$errors["email"] = "Email is required";
}

if (empty($_POST["message"])){
	$errors["message"] = "Message is required";
}


// Return a response 
	// if there are any errors in our errors array, 

if (! empty($errors)){
	$data["success"] = false;
	$data["errors"] = $errors;
} else {

	// if there are no errors, process our form, then return a message
	$name = 		filter_var($_POST["name"], FILTER_SANITIZE_STRING);
	$email = 		filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
	$subject = 	filter_var($_POST["subject"], FILTER_SANITIZE_STRING);
	$message = 	filter_var($_POST["message"], FILTER_SANITIZE_STRING);


	$to = "im@pbj.me";
	$subjectLine = "[Contact Form] " . $subject;
	$headers = "From: " . $email . "\r\n";
	$headers .= "Reply-To: ". $email . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

	$body 	= "From: " . $name . "<br>";
	$body  .= "Email: " . $email . "<br>";
	$body  .= "Subject Line: " . $subject . "<br>";
	$body	 .= "Message: " . $message . "<br>";


	if(mail($to, $subjectLine, $body, $headers)){
		$data["success"] = true;
		$data["message"] = "Success";
	} 
	else {
		$data["success"] = false;
		$data["errors"] = $errors;
	}
}

echo json_encode($data);

?>
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

	$data["success"] = true;
	$data["message"] = "Success";


	$name = $_POST['contact-name'];
	$subject = $_POST['contact-subjet'];
	$message = $_POST['contact-message'];

	$from = 'From: Patrick Johnson'; 
	$to = 'patrickjohnson9@gmail.com'; 
	$subject = "Message from " + $name + " about " + $subject;

	$body = "From: $name\n E-Mail: $email\n Message:\n $message";


	mail($to, $subject, $body, $from);
	
}

echo json_encode($data);





?>
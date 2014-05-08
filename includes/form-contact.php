<?php 
// header('Content-Type: application/json');
// date_default_timezone_set('Etc/UTC');
// require '../includes/phpmailer/PHPMailerAutoload.php';

$data = array();
$errors = array();


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

if (!(empty($errors))){
	$data["success"] = false;
	$data["errors"] = $errors;
} else {
	var_dump($data);
}
	echo json_encode($data, JSON_PRETTY_PRINT);


// echo $errors;
	
// Return a response 
	// if there are any errors in our errors array, 

// if (!empty($errors)){
// 	$data["success"] = false;
// 	$data["errors"] = $errors;
// } 
// else {

// 	$name = 		filter_var($_POST["name"], FILTER_SANITIZE_STRING);
// 	$email = 		filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
// 	$subject = 		filter_var($_POST["subject"], FILTER_SANITIZE_EMAIL);
// 	$formMessage = 	filter_var($_POST["message"], FILTER_SANITIZE_STRING);
// 	$message 	= '<p>The following request was sent from: </p>';
// 	$message .= '<p>Name: ' 		. $name 				.'</p>';
// 	$message .= '<p>Subject: ' 	. $subject 			.'</p>';
// 	$message .= '<p>Email: ' 		. $email 				.'</p>';
// 	$message .= '<p>Message: ' 	. $formMessage 	.'</p>';




?>
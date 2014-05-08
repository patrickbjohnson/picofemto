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
}


?>
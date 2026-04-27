<?php 


$email = $_REQUEST['email'];
$user = $_REQUEST['user'];
$password = $_REQUEST['password'];
$errors = [];

//validaiton
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email_error'] ="*Invalid E-mail";
}

if(strlen($user) < 2){
    $errors['username_error'] = "Please write at least 3 character";
}

if(count($errors) > 0) {
    $_SESSION['form_errors'] = $errors;
    header('Location: ../signup.php');
}
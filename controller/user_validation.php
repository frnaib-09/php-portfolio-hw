<?php 
session_start();
include_once '../database/env.php';

$email = $_REQUEST['email'];
$user = $_REQUEST['username'];
$password = $_REQUEST['psk'];
$pass_hash = 
$errors = [];

//validaiton
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email_error'] ="* Invalid E-mail";
}

if(strlen($user) < 2){
    $errors['username_error'] = "* Please write at least 3 character";
}

if(strlen($password) < 8 || strlen($password) > 32 || empty($password)) {
    $errors['password_error'] = "* Password must contain 8 to 32 characters";
}


if(count($errors) > 0) {
    $_SESSION['form_errors'] = $errors;
    header('Location: ../signup.php');
} else {
    $query = "INSERT INTO `users`(`email`, `user`, `password`, `confirm_password`) VALUES ('$email', '$user', '$password')";
    $response = mysqli_query($connection, $query);

    if($response) {
        header("Location: ../user_validation.php");
    } else {
        header ("Location: ../index.php");
    }
}   


session_unset();
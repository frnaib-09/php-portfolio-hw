<?php 
session_start();

$email = $_REQUEST['email'];
$user = $_REQUEST['user'];
$password = $_REQUEST['psk'];
$confirm_password = $_REQUEST['conf_pass'];
$errors = [];

//validaiton
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email_error'] ="*Invalid E-mail";
}

if(strlen($user) < 2){
    $errors['username_error'] = "Please write at least 3 character";
}

if(strlen($password) < 8 || strlen($password) > 32) {
    $errors['password_ error'] = "Password must contain 8 to 32 characters";
}

if($password !== $confirm_password) {
    $errors ['confirm_pass_error'] = "Passwords must be same";
}

if(count($errors) > 0) {
    $_SESSION['form_errors'] = $errors;
    header('Location: ../signup.php');
} else {
    include_once '../database/env.php';
    $query = "INSERT INTO `users`(`email`, `user`, `password`, `confirm_password`) VALUES ('$email', '$user', '$password', '$confirm_password')";
    $response = mysqli_query($connection, $query);

    if($response) {
        header("Location: ../list.php");
    } else {
        header ("Location: ../index.php");
    }
}

session_abort();
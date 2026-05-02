<?php 
session_start();
include_once '../database/env.php';

$email = $_REQUEST['email'];
$user = $_REQUEST['username'];
$password = $_REQUEST['psk'];
$pass_hash = 
$errors = [];

//validaiton
<<<<<<< HEAD
if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
=======
if(!filter_var($email, FILTER_VALIDATE_EMAIL) || empty($email)){
>>>>>>> 5048748aa5aff494e3bc871be16db8d74ddd00d8
    $errors['email_error'] ="* Invalid E-mail";
}

if(strlen($user) < 2){
    $errors['username_error'] = "* Please write at least 3 character";
}

if(strlen($password) < 8 || strlen($password) > 32 || empty($password)) {
<<<<<<< HEAD
    $errors['password_error'] = "* Password must contain 8 to 32 characters";
}

=======
    $errors['password_ error'] = "* Password must contain 8 to 32 characters";
}

if($password !== $confirm_password) {
    $errors ['confirm_pass_error'] = "* Passwords must be same";
}
>>>>>>> 5048748aa5aff494e3bc871be16db8d74ddd00d8

if(count($errors) > 0) {
    $_SESSION['form_errors'] = $errors;
    header('Location: ../signup.php');
} else {
<<<<<<< HEAD
    $query = "INSERT INTO `users`(`email`, `user`, `password`, `confirm_password`) VALUES ('$email', '$user', '$password')";
    $response = mysqli_query($connection, $query);
=======
    $query = "INSERT INTO `users`(`email`, `user`, `password`, `confirm_password`) VALUES ('$email', '$user', '$password', '$confirm_password')";
    $response = mysqli_query($connection,    $query);
>>>>>>> 5048748aa5aff494e3bc871be16db8d74ddd00d8

    if($response) {
        header("Location: ../user_validation.php");
    } else {
        header ("Location: ../user_list.php");
    }
<<<<<<< HEAD
}   


session_unset();
=======
}
>>>>>>> 5048748aa5aff494e3bc871be16db8d74ddd00d8

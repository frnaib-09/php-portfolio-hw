<?php
session_start();
$email = $_REQUEST['email'];
$password = $_REQUEST['psk'];
include_once '../database/env.php';


//Validaiton

if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $errors['email_error'] ="* Invalid E-mail";
}

// if(strlen($user) < 2){
//     $errors['username_error'] = "* Please write at least 3 character";
// }

if(strlen($password) < 8 || strlen($password) > 32 || empty($password)) {
    $errors['password_error'] = "* Password must contain 8 to 32 characters";
}

$query = "SELECT * FROM users WHERE email = '$email' OR username = '$email'";

$resp = mysqli_query($connection, $query);

if(mysqli_num_rows($resp) == 0) {
    $errors['email_error'] = "Email or Password is incorrect";
    $_SESSION['form_errors'] = $errors;
    header("Location: ../signin.php");
}else{
    $user = mysqli_fetch_assoc($resp);
    $result = password_verify($password, $user['password']);
}

if(!$result) {
    $errors['email_error'] = "Email or Password is incorrect";
    $_SESSION['form_errors'] = $errors;
    header("Location: ../signin.php");
} else {
    $_SESSION['authenticate'] = $user;
    header("Location: ../dashboard.php");
}
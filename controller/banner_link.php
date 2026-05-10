<?php
session_start();
include_once "../database/env.php";

// echo "<pre>";
// print_r($_FILES);

$job_type = $_REQUEST['job_type'];
$moto = $_REQUEST['moto'];
$title = $_REQUEST['title'];
$short_desc = $_REQUEST['short_desc'];
$cta = $_REQUEST['cta'];
$cta_link = $_REQUEST['cta_link'];
$experience = $_REQUEST['experience'];
$projects = $_REQUEST['projects'];
$clients = $_REQUEST['clients'];
$cv = $_FILES['cv'];
$image = $_FILES['image'];
$errors = [];
$cvExt = "";

if($cv['size'] > 0){
    $cvPath = pathinfo($cv['name']);
    $cvExt = $cvPath['extension'];
    
    if($cvExt != 'pdf' && $cvExt != 'docx' && $cvExt != 'doc'){
        $errors['cv_error'] = "CV must be a PDF, DOCX, or DOC file.";
    }
}

if($image['size'] > 0){
    $imagePath = pathinfo($image['name']);
    $imageExt = $imagePath['extension'];
    $validImageExts = ['jpg', 'jpeg', 'png', 'webp', 'gif'];

    if(!in_array($imageExt, $validImageExts)){
        $errors['image_error'] = "Image must be a JPG, JPEG, PNG, WEBP or GIF file.";
        } else if(($image['size'] / 1000) > 2048){
            $errors['image_error'] = "Image size must be less than 2KB.";
    }
}

if(count($errors) > 0){
    $_SESSION['form_errors'] = $errors;
    header("Location: ../dashboard.php");
} else {
    if($cv['size'] > 0){
        if(!file_exists("../uploads/")) {
            mkdir("../uploads");
        }
        $cvNewName = uniqid() . ". $cvExt";
        move_uploaded_file($cv['tmp_name'], "../uploads/" . $cvNewName);
    }
}
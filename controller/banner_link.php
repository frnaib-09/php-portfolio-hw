<?php
session_start();
include_once "../database/env.php";

$job_type = $_REQUEST['job_type'];
$moto = $_REQUEST['moto'];
$motos = $_REQUEST['motos'];
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
$imageExt = "";

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
    $query = "SELECT * FROM `banners`";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0){
        $existingBanner = mysqli_fetch_assoc($result);
        //cv existance check 
        $cvVerify = '../' . $existingBanner['cv'];
        if($existingBanner['cv'] && file_exists($cvVerify)){
            unlink($cvVerify);
        }
        //image existance check
        $imageVerify = '../' . $existingBanner['image'];
        if($existingBanner['image'] && file_exists($imageVerify)){
            unlink($imageVerify);
        }

        $delQuery = "DELETE FROM `banners`";
        mysqli_query($connection, $delQuery);
    }

    //cv upload
    $cvPath = "";
    $imagePath = "";

    if($cv['size'] > 0){
        if(!file_exists("../uploads/")) {
            mkdir("../uploads");
        }
        $cvNewName = uniqid() . ". $cvExt";
        $cvPath = "uploads/" . $cvNewName;
        move_uploaded_file($cv['tmp_name'], "../uploads/" . $cvNewName);
    }

    //image upload
    if($image['size'] > 0){
        if(!file_exists("../uploads/")) {
            mkdir("../uploads");
        }
        $imageNewName = uniqid() . ". $imageExt";
        $imagePath = "uploads/" . $imageNewName;
        move_uploaded_file($image['tmp_name'], "../uploads/" . $imageNewName);
    }

    //database insertion
    $query = "INSERT INTO `banners`(`job_type`, `moto`, `motos`, `title`, `short_desc`, `cta`, `cta_link`, `exp`, `projects`, `clients`, `cv`, `image`) VALUES ('$job_type','$moto','$motos','$title','$short_desc','$cta','$cta_link','$experience','$projects','$clients','$cvPath','$imagePath')";
    
    $result = mysqli_query($connection, $query);

    
    header ("Location: ../dashboard.php");
}
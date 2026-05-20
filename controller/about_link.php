<?php
session_start();
include_once "./database/env.php";

$title_1 = $_REQUEST['title_1'];
$title_2 = $_REQUEST['title_2'];
$paragraph_1 = $_REQUEST['paragraph_1'];
$paragraph_2 = $_REQUEST['paragraph_2'];
$paragraph_3 = $_REQUEST['paragraph_3'];
$errors = [];

if(count($errors) > 0){
    $_SESSION['form_errors'] = $errors;
    header("Location: ../dash_about.php");
} else {
    $query = "SELECT * FROM `abouts`";
    $result = mysqli_query($connection, $query);

    if(mysqli_num_rows($result) > 0){
        $existingAbout = mysqli_fetch_assoc($result);

        $delQuery = "DELETE FROM `abouts`";
        mysqli_query($connection, $delQuery);
    }

    //database insertion
    $query = "INSERT INTO `abouts`(`title_1`, `title_2`, `paragraph_1`, `paragraph_2`, `paragraph_3`) VALUES ('$title_1','$title_2','$paragraph_1','$paragraph_2','$paragraph_3')";
    
    $result = mysqli_query($connection, $query);

    header ("Location: ../dash_about.php");
}
<?php
session_start();
if(!isset($_SESSION['authenticate'])) {
    session_unset();
    header("Locaiton: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="icon" href="./images/web logo.png">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.2.1/hamburgers.min.css"
        rel="stylesheet">
    <link rel="stylesheet" href="./css/slick.css">
    <link rel="stylesheet" href="./css/dashboard.css">
    <link rel="stylesheet" href="./css/responsive.css">
</head>

<body>
    <header>
        <aside>
            <h1>Admin Dashboard</h1>
            <hr>
            <ul>
                <li class="active"><a href="#"><iconify-icon icon="ic:outline-widgets"></iconify-icon>Overview</a></li>
                <li><a href="#"><iconify-icon icon="octicon:person-24"></iconify-icon>About Me</a></li>
                <li><a href="#"><iconify-icon icon="tdesign:code"></iconify-icon>Expertise</a></li>
                <li><a href="#"><iconify-icon icon="prime:briefcase"></iconify-icon>Project</a></li>
                <li><a href="#"><iconify-icon icon="mi:location"></iconify-icon>Journey</a></li>
                <li><a href="#"><iconify-icon icon="majesticons:comment-line"></iconify-icon>Testimonial</a></li>
                <li><a href="#"><iconify-icon icon="solar:settings-linear"></iconify-icon>Settings</a></li>
            </ul>
            <hr>
            <ul class="bottomul">
                <li><a href="../index.php"><iconify-icon icon="ic:outline-widgets"></iconify-icon>View Site</a></li>
                <li><a href="../controller/logout.php"><iconify-icon icon="material-symbols:logout-sharp"></iconify-icon>Log Out</a></li>
            </ul>
        </aside>
        <nav>
            <div class="container">
                <div class="row">
                    <div class="d-flex justify-content-end align-items-center">
                        <div class="welcome">
                            <p>Welcome back!</p>
                            <h5><?= $_SESSION['authenticate']['name'] ?></h5>
                        </div>
                        <div class="image-wrapper">
                            <img src="./images/gemini image.jpeg" alt="" class=" img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </header>

        <main>
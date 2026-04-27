<?php

$dbHost = "localhost";
$dbUser = "root";
$dbPsk = '';
$dbName = "foyjur_portfolio";

try {
$connection = mysqli_connect($dbHost, $dbUser, $dbPsk, $dbName);
} catch (\Exception $error) {
    echo $error-> getMessage();
    exit();
}
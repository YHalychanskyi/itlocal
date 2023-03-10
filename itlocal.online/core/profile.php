<?php
require_once 'connect.php';

session_start();
if (!$_SESSION['user']) {
    header('Location:../index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="/components/style.css">
    <link rel="shortcut icon" href="/img/favicon.ico">
</head>

<body>
    <div>
        <video autoplay muted loop id="myVideo">
            <source src="/img/gsh.mp4" type="video/mp4">
        </video>
    </div>


    <div class="heading2">
        
        
        <h2><?= $_SESSION['user']['fname'] ?> <?= $_SESSION['user']['lname'] ?></h2>
        <a href="../index.php" class="main">Home page</a>       
        <a href="logout.php" class="quit">Quit from account</a>
    </div>

</body>
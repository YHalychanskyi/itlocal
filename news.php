<?php
    require_once "core/connect.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITlocal</title>
    <link rel="stylesheet" href="/components/style.css">
    <link rel="shortcut icon" href="/img/favicon.ico">
</head>
<body>

<div class="heading">   
        <h1>It's ITlocal-social network to discuss programming and coding issues</h1>
    <div class="posts">
        <p></p>
    </div>
            
</div>

<div>
    <button onclick="window.location.href = 'core/profile.php';" class="profbtn">Profile</button>
</div>
  
    
    
    <div>
        <video autoplay muted loop id="myVideo">
            <source src="/img/gsh.mp4" type="video/mp4">
        </video>
    </div>
    <div onclick="show('none')" id="shadow"></div> 
<center><div id="regarea">
    <img onclick="show('none')" class="close" src="/img/close.png" alt="">

</body>
</html>
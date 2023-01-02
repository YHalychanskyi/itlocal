<?php
    session_start();
    if ($_SESSION['user']) {
        header('Location:../profile.php');
    } 
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
<div>
    <button class="regbtn" onclick="show('block')">Authorization/Registration</button>
    <button onclick="window.location.href = 'core/profile.php';" class="profbtn">Profile</button>
</div>
</div>  
    <div>
        <video autoplay muted loop id="myVideo">
            <source src="/img/gsh.mp4" type="video/mp4">
        </video>
    </div>
    <div onclick="show('none')" id="shadow"></div> 
<center><div id="regarea">
    <img onclick="show('none')" class="close" src="/img/close.png" alt="">

    <h2>Registration</h2>
    
    <form action="core/signup.php" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="First Name" name="fname" class="input">
        <input type="text" placeholder="Last Name" name="lname" class="input">
        <input type="email" placeholder="Email" name="email" class="input">       
        <input type="password" placeholder="Password" name="pass" class="input">
        <input type="password" placeholder="Confirm password" name="pass2" class="input">       
        <input type='tel' placeholder="Phone number" name="tel" class="input"><br>
        <input type="submit" value="Register" name="sab" class="subm">
            <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
            ?>
        <p>Already have an account?  
        <center><a href = "/index.php" class="lognow">Log in now. </a></center></p>
        
    </form>
</center></div>
    <script>
            function show(state)
            {
            document.getElementById('regarea').style.display = state;	
            document.getElementById('shadow').style.display = state;
            }	
    </script>
 
</body>
</html>
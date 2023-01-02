<?php
    require_once "core/connect.php";
    require_once "core/func.php";
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

    <h2>Authorization</h2>
        
    <form action="core/signin.php" method="post">
        <input type="email" placeholder="Email" name="email" class="input">       
        <input type="password" placeholder="Password" name="pass" class="input"><br>
        <input type="submit" value="Log in" name="sab" class="subm">
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
            ?>
        <p>Do not have an account?  
        <center><a href = "/reg.php" class="regnow">Register now. </a></center></p> 
    </form>

</center></div>
<div>
<div class="posts">
                <?php $posts = get_info(); ?>
                <?php foreach($posts as $post): ?>
                <h2><?=$post['content']?> </h2>
</div>     
<?php endforeach; ?>
</div>


    <script>
            function show(state)
            {
            document.getElementById('regarea').style.display = state;	
            document.getElementById('shadow').style.display = state;
            }	
    </script>
<?php
    
?>
</body>
</html>
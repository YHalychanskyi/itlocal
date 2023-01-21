<?php
    session_start();
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
<div class = "content_block">
<div class="heading">
        <h1>It's ITlocal<br>site for registration and authorization</h1>
        <div id="msg">
        <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            };
            unset($_SESSION['message']);
            ?>
        </div>
<div>
<?php
if($_SESSION['user']) { 
    echo 
    '<a href=../core/profile.php><button class="profbtn">Profile</button></a>';
}

else{
    print_r('<button class="regbtn" onclick="show' . "('block'" . ')">Authorization</button>');
}
?>   


   
</div>
</div>
    <div>   
        <video autoplay muted loop playsinline webkit-playinginline id="myVideo">
            <source src="/img/underwater.mp4" type="video/mp4">
        </video>
        
    </div>
    
 
    <div onclick="show('none')" id="shadow"></div>
<div id="form">   
<center><div id="regarea">
    <img onclick="show('none')" class="close" src="/img/close.png" alt="">

     
    <h2>Authorization</h2>   
    <form action="core/signin.php" method="post">
        <input type="email" placeholder="Email" name="email" class="input">       
        <input type="password" placeholder="Password" name="pass" class="input"><br>
        <input type="submit" value="Log in" name="sab" class="subm">
        
        <p>Do not have an account?  
        <center><a href = "reg.php" class="regnow">Register now. </a></center></p> 
    </form>

</center></div>
</div> 
</div>
    <script>
    try {
            function show(state)
            {
            document.getElementById('regarea').style.display = state;	
            document.getElementById('shadow').style.display = state;
            }
        }
    catch {
        function show(state)
            {
            document.getElementById('regarea').style.display = state;	
            document.getElementById('shadow').style.display = state;
            }
    }
    </script>

</body>
</html>
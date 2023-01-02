<?php

    session_start();
    require_once 'connect.php';
    
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $pass2 = $_POST['pass2'];
    $tel = $_POST['tel'];

    if ($pass === $pass2) {

        
        
    $pass = md5($pass);

    mysqli_query($connect, "INSERT INTO `data` 
    (`id`, `fname`, `lname`, `email`, `pass`, `tel`) 
    VALUES (NULL, '$fname', '$lname', '$email', '$pass', '$tel')");
    $_SESSION['message'] = 'Registeration success';
    header('Location: ../index.php');


    } else {
        $_SESSION['message'] = 'Passwords do not match';
        header('Location: ../reg.php');
    }
?>



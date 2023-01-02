<?php
    session_start();
    require_once 'connect.php';
    
    $content = $_POST['content'];

    if (empty($_POST['content'])) exit("Fill in the field.");
    else {
        header('Location: ../index.php');
    };


    mysqli_query($connect, "INSERT INTO `posts` (`id`, `content`) VALUES (NULL, '$content')");
    header('Location: ../index.php');

    
?>  
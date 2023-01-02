<?php   
    session_start();
    require_once 'connect.php';

    $email = $_POST['email'];
    $pass = md5($_POST['pass']);

    $check_data = mysqli_query($connect, 
    "SELECT * FROM `data` WHERE `email` = '$email' AND `pass` = '$pass'");

    if (mysqli_num_rows($check_data) > 0) {

        $user = mysqli_fetch_assoc($check_data);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "fname" => $user['fname'],
            "lname" => $user['lname'],
        ];

        header('Location: profile.php');

    } else {
        $_SESSION['message'] = 'Account is not found (wrong email or password)';
        header('Location: ../index.php');
    }

?>
<?php
require_once 'connect.php';

function get_info() {

    global $connect;

    $sql = "SELECT * FROM `posts`";

    $result = mysqli_query($connect, $sql);

    $posts = mysqli_fetch_all($result, 1);

    return $posts;

}


?>
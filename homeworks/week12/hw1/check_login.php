<?php
    include_once('./conn.php');
    include_once('./utils.php');

    //check login 讀取 cookie  裡面的 cookie 
    if(isset($_COOKIE['token']) && !empty($_COOKIE['token'])){
        $token = $_COOKIE['token'];
    } else {
        $token = null;
    }

    //由 token 找 username 
    $user = getUserByToken($conn, $token);
?>
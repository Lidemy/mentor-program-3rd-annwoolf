<?php 
require_once('./conn.php'); 
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>安安您好留言版</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
        <?php include_once('./navbar.php') ?>
        <div class="container">
            <p class="title">會員登入</p>
            <form method="POST" action="./handle_login.php">
                <p>帳號：<input type="text" name="login_username"></p>
                <p>密碼：<input type="password" name="login_password"></p>
                <button>登入</button>
            </form>
        </div>
        
    </body>
</html>


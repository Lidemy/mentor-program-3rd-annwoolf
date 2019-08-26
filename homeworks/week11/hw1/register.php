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
            <p class="title">會員註冊</p>
            <form method="POST" action="./handle_register.php">
                <p>帳號：<input type="text" name="username" placeholder="請勿填真實帳號"></p>
                <p>密碼：<input type="password" name="password" placeholder="請勿填真實密碼"></p>
                <p>暱稱：<input type="text" name="nickname"></p>
                <div class='button'>
                    <button>註冊</button>
                </div>
            </form>
        </div>
        
    </body>
</html>
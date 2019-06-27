<?php require_once('./conn.php'); ?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="register.css">
    </head>
    <body>
        <div class="container">
            <h1>會員註冊</h1>
            <form method="POST" action="./handle_register.php">
                <p>帳號：<input type="text" name="username" placeholder="請勿填真實帳號"></p>
                <p>密碼：<input type="password" name="password" placeholder="請勿填真實密碼"></p>
                <p>暱稱：<input type="text" name="nickname"></p>
                <div class='button'>
                    <button>註冊</button>
                </div>
                <div class='signIn'>
                    <a href="index.php">回到留言板首頁</a>
                </div>
            </form>
        </div>
        
    </body>
</html>
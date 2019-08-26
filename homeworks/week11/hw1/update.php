<?php 
    require_once('./conn.php'); 
    require_once('./utils.php');
    error_reporting(0);
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>安安您好留言版</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="warning">
            <p class="warning">本站為練習用網站，因教學用途刻意忽略資安的實作，註冊時請勿使用任何真實的帳號或密碼</p>
        </div>
        <nav>
            <div class="navbar-brand">
                <a href='index.php' target='_self'>留言板</a>
            </div>
            <ul class="navbar-right">
                <li class="signup">
                    <?php /*是否為member：出現不一樣的button*/
                        if (isset($_COOKIE["member_id"])) {  
                            $sql = "SELECT * FROM annwoolf_users WHERE username = '$_COOKIE[member_id]'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            echo "<div class='user'>您好 $row[nickname]！</div>";
                        } else {
                            echo "<a href='register.php' target='_self'>會員註冊</a>";
                        }
                    ?>
                </li>
                <li class="signin">
                    <?php /*是否為member：出現不一樣的button*/
                        if (isset($_COOKIE["member_id"])) {  
                            $sql = "SELECT * FROM annwoolf_users WHERE username = '$_COOKIE[member_id]'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            echo "<a href='logout.php' target='_self'>登出</a>";
                        } else {
                            echo "<a href='login.php' target='_self'>登入</a>";
                        }
                    ?>
                </li> 
            </ul>
        </nav>
            <div class="wrapper">
                <div class="welcome">
                    <p> 編輯留言 </p>
                </div>
                <div class="leave-comment-box">
                    <form action="./handle_update.php" method="POST"> <!--POST傳參數-->
                     <textarea name="content"><?php 
                    $id = $_GET['id'];
                    $sql = "SELECT * FROM annwoolf_comments WHERE id = '$id' ";
                    $result = $conn->query($sql);
                    $row = $result->fetch_assoc();
                    echo $row[content]?></textarea>
                    <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                    <div class='submit-btn'><button>送出</button></div>
                    <!--<input type='submit' value='送出' class='submit-btn'>-->
                </form>
                </div>
            </div>
        </div>
    </body>
</html>



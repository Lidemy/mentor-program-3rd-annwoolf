<?php 
    require_once('./conn.php'); 
    require_once('./alert.php');
?>

<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <nav>
                <div class="comments">
                    留言板
                </div>
                <div class="signin">
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
                </div>
                <div class="signup">
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
                </div>
            </nav>
            <div class="wrapper">
                <div class="warning">
                    <p class="warning">本站為練習用網站，因教學用途刻意忽略資安的實作，註冊時請勿使用任何真實的帳號或密碼</p>
                </div>
                <div class="welcome">
                    <p> 歡迎留言！</p>
                </div>
                <div class="leave-comment-box">
                    <form action="handle_add_comments.php" method="post"> <!--POST傳參數-->
                     <textarea name="content" placeholder="留言在這邊吧！"></textarea>
                        <?php /*是否為member：出現不一樣的button*/
                            if (isset($_COOKIE["member_id"])) {  
                                echo "<div class='submit-btn'>" . "<button>送出</button>" . "</div>";
                            } else {
                                echo "<div class='submit-btn'>請先登入會員</div>";
                            }
                        ?>
                    </form>
                </div>

                <div class="comments">
                    <?php 
                        //$sql查詢語法//
                        $sql = "SELECT C.content, C.created_at, U.nickname  FROM annwoolf_comments C LEFT JOIN annwoolf_users U ON C.username = U.username ORDER BY created_at DESC LIMIT 50";
                        //連線執行$sql//
                        $result = $conn->query($sql);
                        //檢查連線//
                        if (!$result) {
                            echo "failed, " . $conn->error;
                        }
                        //如果$result拿到的筆數大於0，把拿到的資料印出來//
                        if ($result->num_rows > 0){ 
                            while($row = $result->fetch_assoc()){
                                echo "<div class='comment-box'>";
                                echo "<div class='nickname'>$row[nickname]</div>";
                                echo "<div class='time'>$row[created_at]</div>";
                                echo "<div class='comment'>$row[content]</div>";
                                echo "</div>";
                            }
                        }
                    ?>
                </div>
            </div>
        </div>
        
    </body>
</html>



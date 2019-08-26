<?php 
    require_once('./conn.php'); 
    require_once('./utils.php');
    require_once('./check_login.php');
    error_reporting(0)
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
        <?php include_once('./navbar.php') ?>
        <div class="wrapper">
                <div class="welcome">
                    <?php /*是否為member：出現不一樣的button*/
                        if (isset($user)) {  
                            $sql = "SELECT * FROM annwoolf_users WHERE username = '$user'";
                            $result = $conn->query($sql);
                            $row = $result->fetch_assoc();
                            echo "<p>您好 $row[nickname] 歡迎留言！</p>";
                        } else {
                            echo "<p>歡迎留言！</p>";
                        }
                    ?>
                </div>
                <div class="leave-comment-box">
                    <form action="handle_add_comments.php" method="post"> <!--POST傳參數-->
                     <textarea name="content" placeholder="留言在這邊吧！"></textarea>
                        <?php /*是否為member：出現不一樣的button*/
                            if (isset($user)) {  
                                echo "<div class='submit-btn'>" . "<button>送出</button>" . "</div>";
                            } else {
                                echo "<div class='sign_in_first'>欲留言請先登入或成為會員</div>";
                            }
                        ?>
                    </form>
                </div>

                <div class="comments">
                    <?php 
                        //分頁功能
                        
                        //資料庫連線，選取表格內所有資料，並算出全部有幾筆
                        $sql = "SELECT * FROM annwoolf_comments ORDER BY created_at DESC";
                        $result = $conn->query($sql);
                        $data_nums = $result->num_rows; //共有幾個留言

                        //設定分頁參數
                        $page_limit = 10; //每頁數量20個留言
                        $pages = ceil($data_nums/$page_limit); //有幾頁（ceil整數無條件進位）

                        //過濾手續 
                        if (!isset($_GET['page'])){ 
                            $pageIndex=1; //設定起始頁 
                        } else {
                            $pageIndex = intval($_GET['page']); //確認頁數只能夠是數值資料
                        }

                        //每頁起始資料序號 
                        $data_start = ($pageIndex-1)*$page_limit;  

                        //取得資料，顯示在畫面上：起始序號、每頁顯示多少筆資料
                        //$sql查詢語法//
                        $sql = "SELECT C.content, C.created_at, C.id, U.nickname, U.username  
                        FROM annwoolf_comments C LEFT JOIN annwoolf_users U 
                        ON C.username = U.username 
                        ORDER BY created_at DESC 
                        LIMIT $data_start, $page_limit";
                        //連線執行$sql//
                        $result = $conn->query($sql);
                        //檢查連線//
                        if (!$result) {
                            echo "failed, " . $conn->error;
                        }

                        //如果$result拿到的筆數大於0，把拿到的資料印出來//
                        if ($result->num_rows > 0){ 
                            while($row = $result->fetch_assoc()){ //拿到每行資料
                                echo "<div class='comment-box'>";
                                echo "<div class='nickname'>$row[nickname]</div>";
                                echo "<div class='time'>$row[created_at]</div>";
                                echo "<div class='comment'>$row[content]</div>";
                                //條件：只能編輯自己的東西
                                if ($user === $row['username']) { 
                                    echo "<a class='update' href='update.php?id=" . $row['id']."'>編輯</a>";
                                    echo "<a class='delete' href='handle_delete.php?id=" . $row['id']."'>刪除</a>";
                                } 
                                echo "<div class='reply'>回覆</div>";
                                echo "</div>";
                            }
                        }
                    ?>
                </div>
                <div class="pages">
                <?php 
                    //分頁
                    echo "<div class='page_select'>";
                    echo "<a href='?page=1'>第一頁 </a>";
                    //中間頁碼
                    for($i=1 ; $i <= $pages ; $i++){
                        echo "<a href='?page= $i' > $i </a>"; //為什麼知道是index.php?page=1
                    };
                    echo "<a href='?page= $pages '>最後頁  </a>";
                    echo "</div>";
                    //第幾頁
                    echo "<div class='page_show'>";
                    echo "共 $data_nums 筆留言 - 在第 $pageIndex 頁 - 共 $pages 頁";
                    echo "</div>";
                ?>
                </div>
            </div>
        </div>
        
    </body>
</html>
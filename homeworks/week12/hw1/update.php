<?php 
    require_once('./conn.php'); 
    require_once('./utils.php');
    require_once('./check_login.php');
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
            <?php include_once('./navbar.php') ?>
            <div class="wrapper">
                <div class="welcome">
                    <p> 編輯留言 </p>
                </div>
                <div class="leave-comment-box">
                    <form action="./handle_update.php" method="POST"> <!--POST傳參數-->
                     <textarea name="content"><?php 
                    $id = $_GET['id'];

                    //$sql = "SELECT * FROM annwoolf_comments WHERE id = '$id' ";
                    //$result = $conn->query($sql);
                    //$row = $result->fetch_assoc();
                    
                    /*prepare statement*/
                    $stmt = $conn->prepare("SELECT content FROM annwoolf_comments WHERE id = ? ");
                    $stmt->bind_param("s", $id);
                    $stmt->execute();
                    $result = $stmt->get_result();
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



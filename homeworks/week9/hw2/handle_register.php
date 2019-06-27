<?php
    /* 讀取資料庫檔案 */
    require_once('./conn.php');
    require_once('./alert.php');
	error_reporting(0);
    /* 用 $_POST 拿到input的參數 */
	$username = $_POST['username'];
	$password = $_POST['password'];
	$nickname = $_POST['nickname'];

    /* 檢查輸入的值是不是空的 */
	/* empty(變數)：檢查變數是否為空值 */
	if (empty($username) || empty($password) || empty($nickname)){
        alertMessage('請輸入帳號密碼', './register.php');
    }else{ 
        /* 把資料寫入php資料庫 */
        $sql = "INSERT INTO annwoolf_users(username, password, nickname) VALUE('$username', '$password', '$nickname')";
        /* query 可以是資料庫查詢、資料庫更新或其他動作，順利執行則回傳 true */
        /* 用 query 查詢 $sql 輸入資料庫的指令是否成功 */ 
        $result = $conn->query($sql);
        if ($result) {
            /*add 成功的話導回 ./index.php的頁面*/
            setcookie("member_id", $username, time() + 3600 * 24);
            alertMessage('註冊成功', './index.php');
        } else {
            alertMessage('已有相同帳號', './register.php');
        }  
    }
?>
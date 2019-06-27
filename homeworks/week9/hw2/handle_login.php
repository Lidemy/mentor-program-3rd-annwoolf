<?php
    /* 讀取資料庫檔案 */
    require_once('./conn.php');
    require_once('./alert.php');
	error_reporting(0);
	/* 用 $_POST 拿到input的參數 */
	$login_username = $_POST['login_username'];
    $login_password = $_POST['login_password'];
    
    /* 檢查輸入的值是不是空的 */
	/* empty(變數)：檢查變數是否為空值 */
	if (empty($login_username) || empty($login_password)){
		alertMessage('請輸入帳號密碼', './login.php');
	}else{
	    /* 查詢資料庫*/
        $sql = "SELECT * FROM `annwoolf_users` WHERE `username`='$login_username' AND `password`='$login_password'";
        /* query 可以是資料庫查詢、資料庫更新或其他動作，順利執行則回傳 true */
        /* 用 query 查詢 $sql 輸入資料庫的指令是否成功 */ 
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            /*查詢成功的話導回 ./index.php的頁面*/
            setcookie("member_id", $login_username, time() + 3600 * 24);
            alertMessage('登入成功', './index.php');
        } else {
            alertMessage('帳號密碼錯誤，請重新輸入', './login.php');
        }
    }
?>

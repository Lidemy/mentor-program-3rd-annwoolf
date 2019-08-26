<?php
    /* 讀取資料庫檔案 */
    require_once('./conn.php');
    require_once('./utils.php');
	error_reporting(0);
	/* 用 $_POST 拿到input的參數 */
	$username = $_POST['login_username'];
    $password = $_POST['login_password'];
    
    /* 檢查輸入的值是不是空的 */
	/* empty(變數)：檢查變數是否為空值 */
	if (empty($username) || empty($password)){
		alertMessage('請輸入帳號密碼', './login.php');
	}else{
	    /* 查詢username*/
        $sql = "SELECT * FROM `annwoolf_users` WHERE `username`='$username'";
        /* query 可以是資料庫查詢、資料庫更新或其他動作，順利執行則回傳 true */
        /* 用 query 查詢 $sql 輸入資料庫的指令是否成功 */ 
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        /*拿出hash過的password*/
        $hash_password = $row['password'];

        /*password_verify驗證hash過的passowrd*/
        if (password_verify('$password', $hash_password)) {
            /*登入成功，設置cookie*/
            setToken($conn, $username);
            /*查詢成功的話導回 ./index.php的頁面*/
            alertMessage('登入成功', './index.php');
        } else {
            alertMessage('帳號密碼錯誤', './login.php');
        }
        
    }
?>

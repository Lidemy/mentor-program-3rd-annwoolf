<?php
    require_once('conn.php');
    
    //印出訊息 function 
    function alertMessage($message, $location){
        echo 
        "<script> 
            alert('$message');
            window.location = '$location';
        </script>";
    }

    //setToken function 
    function setToken($conn, $username){
        /*新增token*/
        $token = uniqid();
        // 如果之前已經有登入取得 token，要先刪除
        $sql = "DELETE FROM annwoolf_users_certificate WHERE username ='$username'";
        $result = $conn->query($sql);

        /*新增進token&username表單*/
        $sql= "INSERT INTO annwoolf_users_certificate(username, token) VALUES('$username', '$token')";
        /*連線*/
        $result = $conn->query($sql);
        /*建立cookie：cookie名稱token，cookie內容：$token*/
        setcookie("token", $token, time()+3600*24);
    }

    //用 token 找 username function 
    function getUserByToken($conn, $token){
    //驗證是否設定 token、驗證 token 是否為空值
        if(isset($token) && !empty($token)){
            /*如果不是空值：驗證token是否和資料庫token一樣*/
            //sql查詢token、對比token是否相同
            //如果相同就回傳 $row['username']
            /*取值*/
            $sql= "SELECT * FROM annwoolf_users_certificate 
            WHERE token='$token'";
            /*連線*/
            $result = $conn->query($sql);
            /*確認有回傳值*/
            if ($result->num_rows > 0) {
                /*拿取回傳值&賦值給$row*/
                $row = $result->fetch_assoc();
                /*取得值裡面的username*/
                return $row['username'];
            } else {
                return null;
            }
        }else {
            //如果是空值回傳 null
            return null;
        }
    }
?>
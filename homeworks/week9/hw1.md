### 資料庫名稱：annwoolf_comments

| 欄位名稱   | 欄位型態  | 說明  | KEY  |Extra| Encoding | Collation| 
|----------|----------|------|------|------|----------|----------|
|  id      |integer(11)|    id    | PRI | auto_increment | 
| username |VARCHAR(16)| 留言者帳號 |     |   | UTF-8 | utf8_general_ci
| content  |    TEXT   | 留言內容   |     |   | UTF-8 | utf8_general_ci
|created_at|  datetime | 留言的時間 |     |on update CURRENT_TIMESTAMP| | | 


### 資料庫名稱：annwoolf_users

| 欄位名稱 | 欄位型態 | 說明 | KEY | Extra | Encoding | Collation 
|----------|----------|------|------|------|------|------|
|  id        |    integer(11)    | id       | PRI | auto_increment | 
|  username  |    VARCHAR(16)    | 留言者帳號 |  |  | UTF-8 | utf8_general_ci
|  password  |    VARCHAR(16)    | 留言者密碼 |  |  | UTF-8 | utf8_general_ci
|  nickname  |    VARCHAR(64)    | 留言者暱稱 |  |  | UTF-8 | utf8_general_ci
|  created_at |    datetime      | 建立會員時的時間 |  |on update CURRENT_TIMESTAMP| | |  

### USER STORY 
1. 身為使用者，在新增留言時應該可以輸入暱稱跟留言內容
2. 身為系統，應該顯示出留言者的暱稱跟留言內容以及留言時間
3. 身為系統，顯示留言時應該按照時間排序，最後留的顯示在最上面
4. 身為系統，應該只顯示最新的前五十筆留言


### 留言版前、後台
index.php ：顯示留言頁面50筆資料、新增留言 TEXT 區塊  
1. 留言區輸入區 textarea 
2. 登入之前：navbar 加入會員按鈕
3. 登入之前：navbar 登入會員按鈕
4. 登入之前：button 請先登入留言
5. 「本站為練習用網站，因教學用途刻意忽略資安的實作，註冊時請勿使用任何真實的帳號或密碼」
6. 顯示50筆留言：顯示留言者的暱稱、留言內容、留言時間、降冪排序、顯示最新前50筆留言
7. 登入之後：navbar 自動帶入使用者的暱稱
8. 登入之後：navbar 登出會員按鈕
9. 登入之後：button 改為送出按鈕  

handle_add_comments.php ：POST 處理新增留言的功能

### 連線資料庫
conn.php 連線資料庫

### 會員註冊前、後台
register.php 
1. 會員帳號 input 
2. 會員密碼 input 
3. 會員暱稱 input 
4. 註冊 button 
5. 輸入資料不完全會跳出對話框 "請輸入帳號密碼"   

handle_register.php ：POST 處理會員註冊資料

### 會員註冊登入頁面前、後台
login.php 
1. 會員帳號 input 
2. 會員密碼 input 
3. 登入 button 
4. 還不是會員？導回註冊頁面 register.php   

handle_login.php ：POST 處理會員登入資料

### 會員註冊登出頁面前台
logout.php
1. 登出把 cookie 刪掉





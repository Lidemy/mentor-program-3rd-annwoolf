## 請說明 SQL Injection 的攻擊原理以及防範方法
使用者輸入字元可以變成程式碼的一部分，進而修改程式，攻擊資料庫
例如從 username 輸入'or1=1 -- 就會忽略密碼，不需要有帳號密碼就能登入
利用預處理器 prepare statement，先準備模板，要執行SQL再將資料帶入模板
並對程式碼做跳脫，使字元不會變成程式碼的一塊 

## 請說明 XSS 的攻擊原理以及防範方法
利用表單在前端嵌入JS，在用戶瀏覽網站時，執行JS
也是使用者輸入字元可以變成程式碼的一部分、修改程式、操控網頁（竄改頁面、連結、偷cookie)
例如輸入```<h2>Hello</h2>```會被解析成 html ，而非純文字
利用 php htmlspecialchars() 的內建函式把特殊字元轉成一般文字

## 請說明 CSRF 的攻擊原理以及防範方法
在不同的 domain ，偽造成使用者請求
使用者在網站已經認證的情況下，使用者點擊的連結，會對另個網站發送請求
此請求會夾帶使用者的資料例如 Session ID
所以必須「擋掉從別的 domain 來的 request」
解決方式是加上 CSRF token ，在 form 裡面加上 type='hidden' name='csrftoken'的欄位
值則是隨機產生，且存在 server 的 session 中
server 會對比表單中 csrftoken 的 token ，一樣的話代表本人發出的
因為攻擊者不會知道 csrftoken 的 token 是什麼，所以無法攻擊

參考網站：讓我們來談談 CSRF 好神的一篇文 



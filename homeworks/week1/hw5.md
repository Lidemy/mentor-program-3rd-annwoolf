## 請解釋後端與前端的差異。
1. 白話文來說，前端是使用者在瀏覽器能看到的東西，後端是使用者看不到的東西
2. 文言文來說，前端是瀏覽器上使用者互動的部分，後端則是網頁伺服器和資料庫
## 假設我今天去 Google 首頁搜尋框打上：JavaScri[t 並且按下 Enter，請說出從這一刻開始到我看到搜尋結果為止發生在背後的事情。
1. 瀏覽器上使用者 input "JavaScript" 值，保存起來
2. 瀏覽器去問DNS伺服器，google.com 怎麼走
3. DNS回說：你去8.8.8.8
4. 瀏覽器送 request 給 8.8.8.8
5. 位在 8.8.8.8 的 server 收到request 
6. server 去問資料庫，查詢 "JavaScript" 關鍵字 
7. 資料庫找到關鍵字 "JavaScript" ，回傳有關 "JavaScript" 的資料給 server 
8. server 回傳 response 給瀏覽器
9. 瀏覽器解析回傳的資料並顯示出來 
## 請列舉出 5 個 command line 指令並且說明功用
1. cd ~ ："~" 這個符號表示 home 目錄 
2. cd /tmp : 切換到 /tmp 目錄（絕對路徑）
3. cd my_project : 切換到 my_project (相對路徑)
4. mv index.html info.html : 把檔案index.html更名成info.html 
5. rm *.html : 刪除在這個目錄裡所有的html檔 
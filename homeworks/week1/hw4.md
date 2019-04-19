## 跟你朋友介紹 Git
##### Git 的基本概念以及基礎的使用，例如說 add 跟 commit，若是還有時間的話可以連 push 或是 pull 都講
### Git是什麼？
#### Git 是一種版本控制系統
用資料夾概念來譬喻，
隨著版本越來越多，每次版本改版一次，會增加一個資料夾，
Git 可以紀錄所有版本歷史紀錄，
使用者可以隨時回到過去某個版本的狀態，
Git 就像玩遊戲的時候可以儲存進度一樣，
#### 與傳統「複製、貼上大法」方法有何不同？
如果使用傳同的「複製、貼上大法」，
版本會很大很占空間，所以 Git 也可以節省很多空間。
#### Git 還可以很精確知道修改過的檔案改了什麼內容
不會像「複製、貼上大法」一樣不知道檔案到底哪些地方被修改過，
Git 詳細列出兩個檔案的修改差異。
### 基礎使用方法？
先新建一個資料夾
然後 cd 資料夾名稱
git init 輸入初始化版本控制
git status 查看版本控制的狀態
git add '檔名' 可以將檔案加入版本控制
git commit -m "版本相關敘述" 可以新建版本，有點像新建資料夾的概念，儲存add的檔案
git log 可以查看每次commit的歷史紀錄
git checkout 回到過去某個版本號、或cehck某個branch 
git commit -am "message" 可以整合add和commit，一次建立版本，和將檔案加入版本，但如果有新增檔案，還是要先用git add
### Git Branch 
與同事合作專案工作時，開新分支的分支開發，可以隨意增加新功能、修正 Bug、實驗新做法，
待做完確認沒問題之後再合併回來，不會影響原本的專案(Master Branch)
### Git Branch 基礎使用方法？
git branch '名稱' 產生新的branch
git branch -v 看現在有哪些branch
git checkout '名稱' 轉到其他branch做開發
git merge '名稱' 合併branch
git branch -d '名稱' 刪除branch 
### 遇到版本衝突怎麼辦？
1. git branch feature2 新增 branch feature2
2. git checkout feature2 移到 branch feature2 
3. 進行開發 開發開發
4. git checkout master 移到 branch master
5. git merge feature2 合併 branch checkout 到 master
6. 修改檔案 手動解決衝突
7. git commit -am “resolved" 在 master branch commit
8. git branch -d feature2 刪除 branch feature2
### 什麼是 Github？
GitHub 是放 Git repository 的地方，可以共享專案、共同協作
### 如何把 code 放上 github? 用 push! 
git remote add origin ‘網址' 
git push -u origin master 
### 如何把 github 的 code 拿下來？ 用 pull! 
git pull origin master
### 怎麼抓別人的 Repository？ 用 clone!
1. 看別人的github，點右邊的綠色按鈕，複製網址。
2. git clone "網址"，複製一份到電腦裡。
3. 想要改的話，vim進去改。
4. 不能push回去，因為是別人的東西，因為沒有權限。
5. 點右上角 Fork，前面變成我的名字變成你帳號，用新的網址clone一份到電腦。
6. 修改後，再 push，權限已經是你的，可以clone。
### 怎麼在 github 上 merge 資料？
在本地merge沒有辦法看到檔案的變化比較麻煩
所以通常大家都會去用 pull requests 的功能 
1. git branch hey 本地新增 hey branch 
2. git push origin hey 推到github上
3. 按compare & pull request 
4. hey branch 合併到 master 
5. 打標題和敘述
6. file change 會顯示兩個 file 之間的差別 
7. creat pull request 
8. 把 hey branch 合併到master : 點 merge pull request > confirm merge 


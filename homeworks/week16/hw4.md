## CSS 預處理器是什麼？我們可以不用它嗎？
CSS 預處理器是可以透過預處理器語法產生CSS的程式
可以使 CSS 結構更簡潔、可讀性更高、更容易維護，列舉功能如下：
1. 管理 CSS 文件：如果頁面越複雜，需要加載的 CSS 檔案就越大，需要把檔案切分開來，預處理器就可以用 @import 功能導入切分的檔案，被切分的檔案可以用寫成一個樹狀的結構，例如：base.css 下面有 normalize.css 和 reset.css ， layout.css 下面有 header.css 和 footer.css 。
2. 變數：變數功能可以很輕易的讓網站的視覺風格統一，可以快速的換風格樣式。
3. 巢狀化結構：巢狀結構可以清楚簡潔的表達 CSS 間層級關係。
4. 函式功能：可以自定義函式，預處理也有內建函式，比如 darken 函式可以把主題顏色加深 20%。
5. mixin 功能：類似函式功能，可以使用整段 CSS 程式碼在想要使用的地方，與函式不同的地方在於，函式用於值，mixin 功能可以使用整段程式碼。
如果網站頁面簡單可以不用使用，但如果網站很大需要切分文件或風格需常依照商業模式更換，使用之後比較容易管理、維護、更改程式碼。

## 請舉出任何一個跟 HTTP Cache 有關的 Header 並說明其作用。
Cache-Control 可以設定快取的策略，裡面有的設定如下 

1. no-cache 、 no-store  設定是否要求更新檔
no-cache： 強制快取傳 request給server，必須以 ETag 確認使否有更新檔，如果沒有更新檔，伺服器無需回應。
no-store： 禁止儲存快取，每次都必須跟伺服器要求更新檔。

2. public 、 private  可以快取的使用者   
public： 可以給所有中繼設備和瀏覽器快取。
private： 只限單一使用者快取，例如可以供瀏覽器快取。

3. max-age  快取時限
快取的時限，秒為單位，譬如 max-age: 300，代表5分鐘後快取過期，必須重新跟伺服器要新的檔案。

## Stack 跟 Queue 的差別是什麼？
Stack : 最先進的資料，最後出來 First In Last Out 的資料結構，類似「疊餐盤」。

Queue： 最先進的資料，最先出來 First In First Out 的資料結構，類似「排隊」。

## 請去查詢資料並解釋 CSS Selector 的權重是如何計算的（不要複製貼上，請自己思考過一遍再自己寫出來）

CSS 選擇器選到不同的 html 元素來決定權重 
當一個元素被 2 個選擇器都選到的時候，權重越大的會越優先套用 

### 基本的權重大小 
!important > inline style > ID > Class/psuedo-class/attribute > Element > * 

### 基本的權重分數
!important : 1,0,0,0,0 
inline style ： 1,0,0,0
ID : 1,0,0
Class/偽類/屬性 : 0,1,0
Element : 0,0,1 
* : 0,0,0 

### 看 CSS 選擇器如何選擇 html 元素來計算權重分數 
div 一個 element: 0,0,1 
li > ul 兩個 element: 0,0,2 
.myclass 一個 class: 0,1,0 
[type:checkbox] 一個屬性: 0,1,0 
:only-of-type 一個偽類: 0,1,0
li.myclass 一個 element 和 一個 class: 0,1,1
li:nth-of-type(3n)~li 一個偽類、兩個 element: 0,1,2
form input[type=email] 兩個 element、一個屬性: 0,1,2 
#myDiv li.class a[href] 一個 ID 兩個 element 一個 class 一個 attribute : 1,2,2 

### 具體範例 
a 標籤中的文字最終是什麼顏色？
.box a {
    color: green;
}
p a { 
  color: red;  
}
第一個的權重是: 0,1,1
第二個的權重是: 0,0,2 
所以答案是綠色









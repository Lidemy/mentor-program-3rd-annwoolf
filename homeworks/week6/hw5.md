## 請找出三個課程裡面沒提到的 HTML 標籤並一一說明作用。  
* `<section>`: 語意化標籤，有意義的內容，會附帶標題 title 或 heading。  
* `<article>`: 語意化標籤，有意義的內容，會附帶標題 title 或 heading，與section 差別是 article 有更高的獨立性和完整性，可獨立存在，section 則對外層有一定的相依性。  
* `<aside>`: 語意化標籤，主要內容之外的其他內容，如：側邊欄，與周圍的內容有相關性。  
* `<figure>`: 語意化標籤，有完整內容的區塊，可以任意移動位置，不影響整體內容表達。圖片和標題可以組合在 figure 元素裡。  

## 請問什麼是盒模型（box modal）  
HTML元素可以看成一個一個盒子，而CSS用來設計和佈局時使用時，基本的 HTML 元素外層又會包含許多盒子，整體成為一個盒子的模型      
主要包含下列元素：      
* content: 內容，可以設定內容寬高      
* padding: 內邊距，內容與 boder 之間的空間      
* border: 外框，內邊距 padding 與 外邊距 margin 之間的空間     
* margin: 外邊距，元素（盒子）與其他元素（盒子）的空間    

## 請問 display: inline, block 跟 inline-block 的差別是什麼？  
### display: block :   
* 「區塊元素」一個區塊  
* 跟 inline-block 差別就是佔滿一整行，不能併排  
* 跟 inline-block 差別就是所有盒模型的屬性都可以修改。  
* `<div>、<h1>、<p>、<header>、<footer>、<section>`  
### display: inline :   
* 「行內元素」：可以想像成一行  
* 跟 block 的差別就是可以併排  
* 跟 block 差別就是不能修改寬高和 margin 上下  
* `<span>、<a>`  
### display: inline-block :   
* 和 block 的差別就是可以併排  
* 結合 inline 和 bloack 的優點，對外可以併排，對內可以調整各種屬性  
* `<button>、<input>、<select>`  

## 請問 position: static, relative, absolute 跟 fixed 的差別是什麼？  
### position: static :  
* 「不會被特別定位」，是預設的值  
*  最基本的網頁定位方法，「按照順序」一直排下去   
*  會動到其他元素  
### position: relative :   
* 「相對定位」  
*  根據「原本的定位點」做相對的移動   
*  其他元素都不會動、只會動到他自己
### position: fixed :   
*  「固定定位」   
*  相對於瀏覽器做定位  
*  不管怎麼滾都會停留在同一個位置  
### position: absolute :   
*  「絕對定位」  
*  針對「某個參考點」進行定位
*  往上找不是 static （預設）的元素就會是參考點

  

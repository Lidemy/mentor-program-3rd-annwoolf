## 什麼是 DOM？  
DOM 全名為 Document Object Model 中文翻譯為 文件物件模型，  
簡單來說就是把 Document 轉換成 Object，讓我們可以選取物件  
透過 JS 拿到 DOM 物件節點，針對每個節點做改變，例如增加CSS樣式，按鈕點擊事件  

## 事件傳遞機制的順序是什麼；什麼是冒泡，什麼又是捕獲？  
事件傳遞機制經過3個順序，由上往下，再由下往上，先補貨、再冒泡
capture phase 捕獲階段，從 Window 節點往下傳到點擊的 element ，這就是捕獲   
target phase 目標階段，事件傳遞到 element 本身  
bubbling phase 冒泡階段，事件從 element 傳遞到 Window ，這個時候叫做 bubbling phase 階段 ，這就是冒泡
  
## 什麼是 event delegation，為什麼我們需要它？  
中文翻譯是事件指派，因為如果有一百個按鈕，就要有一百的 eventlistener，因樣會沒有效率
如果透過冒泡機制，事件冒泡到上層元素，在上層元素加上 eventlistener ，就可以處理「所有的」和「新增的」監聽事件

## event.preventDefault() 跟 event.stopPropagation() 差在哪裡，可以舉個範例嗎？  
event.preventDefault() 是終止預設行為（Stop Event Flow)，例如超連結的預設是「導向連結」，如果加上event.preventDefault()，點擊超連結就不會再進行導頁的動作，因為已經停止超連結的預設行為。又如 form 的 submit 可以阻止送出表單， input 的 keypress 可以阻止輸入按鍵。如果那個element沒有預設行為，就不會作用。
```
const element = document.querySelector('a')
element.addEventListener('click', funciton(e){
    e.preventDefault()
})
```
上面這段程式碼讓a超連結的預設行為，跳頁到新的連結，不會有任何作用  

event.stopPropagation() 是終止事件傳導，如果加上之後就不會向上傳遞、不會經過冒泡階段，可以任意的加在捕獲階段或冒泡階段。  
```
window.addEventListener('click, function(e){  
    e.stopPropagation()
}, true)
``` 
上面這段程式碼在捕獲階段就會被阻止了 






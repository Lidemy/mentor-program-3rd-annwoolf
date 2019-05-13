const request = require('request');
const process = require('process');

const booksObj = {
  printBooksList(bookLimit = 20) {
    request.get(
      `https://lidemy-book-store.herokuapp.com/books?_limit=${bookLimit}`,
      (error, response, body) => {
        const data = JSON.parse(body);
        data.forEach((item) => {
          console.log(`${item.id} ${item.name}`);
        });
      },
    );
  },

  findBook(id) {
    request.get(
      `https://lidemy-book-store.herokuapp.com/books/${id}`,
      (error, response, body) => {
        const data = JSON.parse(body);
        if (Object.keys(data).length > 0 && response.statusCode === 200) {
          console.log(`${data.id} ${data.name}`);
        } else {
          console.log('沒有值');
        }
      },
    );
  },

  deleteBook(id) {
    request.delete(
      `https://lidemy-book-store.herokuapp.com/books/${id}`,
      (error, response) => {
        if (error === null && response.statusCode === 200) {
          console.log('書籍資料已刪除');
        } else {
          console.log(`發生錯誤！狀態碼 ${response.statusCode} 錯誤訊息 ${error}`);
        }
      },
    );
  },

  creatBook(bookName) {
    const obj = {
      url: 'https://lidemy-book-store.herokuapp.com/books/',
      form: {
        name: bookName,
      },
    };
    request.post(obj, (error, response) => {
      if (error === null && response.statusCode === 201) {
        console.log(`新增書籍成功，書名:${bookName}`);
      } else {
        console.log(`發生錯誤！狀態碼 ${response.statusCode} 錯誤訊息 ${error}`);
      }
    });
  },

  updateBook(id, bookName) {
    const obj = {
      url: `https://lidemy-book-store.herokuapp.com/books/${id}`,
      form: {
        name: bookName,
      },
    };
    request.patch(obj, (error, response) => {
      if (error === null && response.statusCode === 200) {
        console.log(`更新書籍成功，id:${id} 書名:${bookName}`);
      } else {
        console.log(`發生錯誤！狀態碼 ${response.statusCode} 錯誤訊息 ${error}`);
      }
    });
  },
};

switch (process.argv[2]) {
  case 'list':
    if (process.argv[3]) booksObj.printBooksList(parseInt(process.argv[3], 10));
    else booksObj.printBooksList();
    break;
  case 'read':
    booksObj.findBook(process.argv[3]);
    break;
  case 'delete':
    booksObj.deleteBook(process.argv[3]);
    break;
  case 'create':
    booksObj.creatBook(process.argv[3]);
    break;
  case 'update':
    booksObj.updateBook(process.argv[3], process.argv[4]);
    break;
  default:
    console.log('無法判斷，請重新輸入');
    break;
}

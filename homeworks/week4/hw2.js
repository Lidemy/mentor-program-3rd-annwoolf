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
};

switch (process.argv[2]) {
  case 'list':
    booksObj.printBooksList();
    break;
  case 'read':
    booksObj.findBook(process.argv[3]);
    break;
  default:
    console.log('無法判斷，請重新輸入');
    break;
}

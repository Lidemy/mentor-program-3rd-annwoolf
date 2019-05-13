const request = require('request');

const Obj = {
  url: 'https://api.twitch.tv/helix/games/top',
  headers: {
    'Client-ID': 'k82mk4f45qsu85bqg9oqgrdon0pf80',
  },
};

request.get(Obj, (error, response, body) => {
  const result = JSON.parse(body);
  result.data.forEach((item) => {
    console.log(`${item.id} ${item.name}`);
  });
});

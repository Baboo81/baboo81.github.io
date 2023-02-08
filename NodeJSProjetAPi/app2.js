const express = require('express');
const fs = require('fs');

let app = express();
app.use('/', express.static(__dirname + "/asset"));

app.set('view engine', 'ejs');

let fileContent;

fileContent = fs.readFileSync('./data/weatherForecast.json');
let weatherForecast = JSON.parse(fileContent);
let temperature6pmVariable = weatherForecast.hourly.temperature_2m[18];

fileContent = fs.readFileSync('./data/airQuality.json');
let airQuality = JSON.parse(fileContent);
let airQuality6pmVariable = airQuality.hourly.pm10[18];

fileContent = fs.readFileSync('./data/FloatRates.json');
let floatRates = JSON.parse(fileContent);

fileContent = fs.readFileSync('./data/concert.json');
let concertsArray = JSON.parse(fileContent);

fileContent = fs.readFileSync('./data/musiqueLeMonde.json');
let newsArray = JSON.parse(fileContent);



app.listen(8000, function() {
    console.log('Listening on port 8000');
   });

app.get('/', function(request, response) {
    let dataToEJS = {
        temperature6pm : temperature6pmVariable,
        airQuality6pm : airQuality6pmVariable,
        floatRates : floatRates,
        concerts : concertsArray,
        items : newsArray.rss.channel[0].item
    };
    response.setHeader('Content-Type' , "text/html; charset=utf-8");
    response.render('index.ejs', dataToEJS);
});
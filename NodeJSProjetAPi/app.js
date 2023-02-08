const express = require('express');//package permet de faire le routage, les templates(c'est ds le fichier ejs grâce à render=fusion),...
const fs = require('fs');//package qui permet d'écrire, créer des fichiers
let app = express();


app.use('/', express.static(__dirname + "/asset"));
app.set('view engine', 'ejs');


//API Weather
let fileContent;
fileContent = fs.readFileSync('./data/weatherForecast.json');
let weatherForecast = JSON.parse(fileContent);
let temperature6pmVariable = weatherForecast.hourly.temperature_2m[18];

//API airQuality
fileContent = fs.readFileSync('./data/airQuality.json');
let airQuality = JSON.parse(fileContent);
let airQuality6pmVariable = airQuality.hourly.pm10[18];

//API Floats Rate
fileContent = fs.readFileSync('./data/FloatRates.json');
let floatRates = JSON.parse(fileContent);
let floatRateUSDVariable = floatRates.usd.rate;

//API Concert
fileContent = fs.readFileSync('./data/concert.json');
let concertsArray = JSON.parse(fileContent);

//iRail
fileContent = fs.readFileSync('./data/iRail.json');
let iRailArray = JSON.parse(fileContent);

//Le monde
fileContent = fs.readFileSync('./data/musiqueLeMonde.json');
let leMondeArray = JSON.parse(fileContent);
//console.log(leMondeArray.rss.channel[0].item);

app.listen(8000, function() {
    console.log('Listening on port 8000');
   });
app.get('/', function(request, response) {
    console.log(concertsArray);
    let dataToEJS = {
        temperature6pm : temperature6pmVariable,
        airQuality6pm : airQuality6pmVariable,
        floatRateUSD : floatRateUSDVariable.toFixed(2),
        concerts : concertsArray,
        iRail : iRailArray,
        items : leMondeArray.rss.channel[0].item
    };
    response.setHeader('Content-Type' , "text/html; charset=utf-8");
    response.render('index.ejs', dataToEJS);//Process de fusion 
});
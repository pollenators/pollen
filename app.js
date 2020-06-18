var express = require('express'),
    http = require('http'),
    path = require('path'),

    // Use php-express and config it
    phpExpress = require('../')({
        binPath: '/usr/bin/php'
    });

// Init Express js
var app = express();
app.set('port', process.env.PORT || 3000);

// Body parser is required
app.use(express.bodyParser());

// Set view engine to php-express
app.set('views', path.join(__dirname, 'views'));
app.engine('php', phpExpress.engine);
app.set('view engine', 'php');
app.use(app.router);
app.use(express.static(path.join(__dirname, 'public')));

// Routing all .php file to php-express
app.all(/.+\.php$/, phpExpress.router);

http.createServer(app).listen(app.get('port'), function(){
  console.log('Pollen app listening on port ' + app.get('port'));
});

//const path = require('path');
//const express = require('express');
//const app = express();

//const router = express.Router();
//const phpExpress = require('php-express')({
//  binPath: 'php'
//});

//const bodyParser = require('body-parser');
//app.use(bodyParser.json());

//app.set('port', (process.env.PORT || 3000));

//app.use('/', express.static(__dirname, ));

//app.set('views', path.join(__dirname, '/views'));
//app.engine('php', phpExpress.engine);
//app.set('view engine', 'php');

//app.all(/.+\.php$/, phpExpress.router);

//router.get('/',function(req,res){
//  res.sendFile(path.join(__dirname + '/public/index.php'));
//});

//router.get('/about',function(req,res){
//  res.sendFile(path.join(__dirname+'/views/about.html'));
//});

//app.use('/', router);

//app.use(express.static('public'));

//app.listen(app.get('port'), function() {
//  console.log('Pollen app is running on port', app.get('port'));
//});
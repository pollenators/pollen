var express = require('express');
var app = express();

// Use php-express
var phpExpress = require('php-express')({
  binPath: 'php'
});

// Set view engine to php-express
app.set('views', './views');
app.engine('php', phpExpress.engine);
app.set('view engine', 'php');

// Routing all php files to php-express
app.all(/.+\.php$/, phpExpress.router);

// Create server
var server = app.listen(3000, function () {
  var port = server.address().port;
  console.log('Pollen app listening at on %s', port);
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
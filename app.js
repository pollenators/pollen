// Use php-express buildpack to connect to Heroku's server
var phpExpress = require('php-express')({
  binPath: 'php'
});

// Set engine
app.set('views', './public');
app.engine('php', phpExpress.engine);
app.set('view engine', 'php');

// Routing all php files to php-express
app.all(/.+\.php$/, phpExpress.router);

// Create server and connect via port 3000
var server = app.listen(3000, function () {
  var port = server.address().port;
  console.log('Pollen app listening at on %s', port);
});
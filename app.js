const express = require('express');
const app = express();
const path = require('path');

const router = express.Router();
const phpExpress = require('php-express')({
  binPath: 'php'
});

const bodyParser = require('body-parser');
app.use(bodyParser.json());

app.set('port', (process.env.PORT || 3000));

app.use('/', express.static(__dirname));

app.set('views', path.join(__dirname, '/views'));
app.engine('php', phpExpress.engine);
app.set('view engine', 'php');

app.all(/.+\.php$/, phpExpress.router);

router.get('/',function(req,res){
  res.sendFile(path.join(__dirname+'/views/index.html'));
});

router.get('/about',function(req,res){
  res.sendFile(path.join(__dirname+'/views/about.html'));
});

app.use('/', router);

app.listen(process.env.PORT || 3000);

//app.use(express.static('public'));
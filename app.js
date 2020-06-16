const express = require('express');
const app = express();
const path = require('path');
const router = express.Router();

const phpExpress = require('php-express')({
  binPath: 'php'
});

router.get('/',function(req,res){
  res.sendFile(path.join(__dirname+'/public/index.html'));
});

router.get('/about',function(req,res){
  res.sendFile(path.join(__dirname+'/public/about.html'));
});

router.get('/challenge',function(req,res){
  res.sendFile(path.join(__dirname+'/public/challenge.php'));
});

app.set('views', './public'));
app.engine('php', phpExpress.engine);
app.set('view engine', 'php');

app.all(/.+\.php$/, phpExpress.router);

//app.use(express.static('public'));

app.use('/', router);

app.listen(process.env.PORT || 3000);

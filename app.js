const express = require('express');
const app = express();
const path = require('path');
const router = express.Router();

router.get('/',function(req,res){
  res.sendFile(path.join(__dirname+'/index.html'));
});

router.get('/about',function(req,res){
  res.sendFile(path.join(__dirname+'/about.html'));
});

router.get('/challenge',function(req,res){
  res.sendFile(path.join(__dirname+'/challenge.html'));
});

app.use('/', router);

app.listen(process.env.port || 3000);

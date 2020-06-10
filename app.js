// create ejs
var engine = require('ejs-locals');
app.engine('ejs', engine);
app.set('files', './files');
app.set('view engine', 'ejs');

// modify router use file name
app.get('/', function(req, res){
  res.render('index');
});

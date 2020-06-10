const express = require('express')
const app = express()
const port = process.env.PORT || 3000

var bodyParser = require('body-parser');
app.use(bodyParser.json())




app.get('/', function (req, res) {
  res.sendFile("index.html", { root: __dirname })
})

app.listen(port)

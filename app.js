const express = require('express')
const app = express()

app.use(express.static('public'))

//app.use('/public/about.html', express.static(__dirname + '/public/about.html'));

app.listen(process.env.port || 3000)

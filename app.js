const http = require('http')
const fs = require('fs')

const port = process.env.PORT || 3000

http.createServer((req, res) => {
  const path = __dirname + (req.url === '/' ? '/index.html' : req.url)
  fs.readFile(path, (err, data) => {
    if (err) {
      res.writeHead(404)
      res.end(JSON.stringify(err))
      return
    }
    res.writeHead(200)
    res.end(data)
  })
}).listen(port)

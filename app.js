// Declare variables to create server
const http = require('http')
const fs = require('fs')
const port = process.env.PORT || 3000

// Declare variables for express server
const express = require('express')
const bodyParser = require('body-parser')
const cors = require('cors')
const { pool } = require('./config')
const app = express()

// Create app
app.use(bodyParser.json())
app.use(bodyParser.urlencoded({ extended: true }))
app.use(cors())


// Create server
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

// Get story from database
const getStory = (request, response) => {
  pool.query('SELECT * FROM story', (error, results) => {
    if (error) {
      throw error
    }
    response.status(200).json(results.rows)
  })
}

// Post story to database
const addStory = (request, response) => {
  const { author, title } = request.body

  pool.query('INSERT INTO story (author, title) VALUES ($1, $2)', [author, title], error => {
    if (error) {
      throw error
    }
    response.status(201).json({ status: 'success', message: 'Story added.' })
  })
}

// Endpoints
app
  .route('/story')
  // GET endpoint
  .get(getStory)
  // POST endpoint
  .post(addStory)

// Start server
app.listen(process.env.PORT || 5000, () => {
  console.log(`Server listening`)
})

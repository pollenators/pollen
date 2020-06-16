const express = require('express');
const app = express();

app.use(express.static('public'));

app.get('/public/about.html', (request, response) => {
	response.sendFile(path.join(__dirname, 'public', 'about.html'));
});

app.listen(process.env.PORT || 3000);

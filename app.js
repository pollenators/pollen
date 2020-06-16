const express = require('express');
const app = express();

if (process.env.NODE_ENV === 'production') {
	app.use(express.static('public'));
}

app.get('*', (request, response) => {
	response.sendFile(path.join(__dirname, 'public'));
});

app.listen(process.env.PORT || 3000);

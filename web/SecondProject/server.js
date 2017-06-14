var express = require('express');
var app = express();
var bodyParser = require('body-parser');

app.set('port', (process.env.PORT || 5000));

app.use(express.static(__dirname + '/public'));
app.use(bodyParser.json());
app.use(bodyParser.urlencoded({ extended: true}));

// views is directory for all template files
app.set('views', __dirname + '/views');
app.set('view engine', 'ejs');

app.get('/', function(request, response) {
  response.sendFile(__dirname + '/public/letter.html');
});

app.get('/math', function(req, res) {
	res.sendFile(__dirname + '/public/static.html');
});

app.post('/math', function(req, res) {
	calculate(req.body.num1, req.body.num2, req.body.symbol, showResult);
	function showResult(err, result) {
		if (err == null) {
			res.render('public/results');
			
		}
		else {
			res.sendFile(__dirname + '/public/static.html');
		}
	}
});

function calculate(num1, num2, symbol, callback) {
	num1 = parseInt(num1);
	num2 = parseInt(num2);

	if (symbol == "Add") {
		callback(null, num1 + num2);
		return;
	}
	else if (symbol == "Subtract") {
		callback(null, num1 - num2);
		return;
	}
	else if (symbol == "Divide") {
		callback(null, num1 / num2);
		return;
	}
	else if (symbol == "Multiply") {
		callback(null, num1 * num2);
		return;
	}
	else {
		callback("Unable to finish request", "Invalid");
		return;
	}
};

app.listen(app.get('port'), function() {
  console.log('Node app is running on port', app.get('port'));
});
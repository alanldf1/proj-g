const express = require("express")
const app = express()
const handlebars = require("express-handlebars")
const bodyParser = require("body-parser")

//template engine
app.engine("handlebars", handlebars({defaultLayout: "main"}))
app.set("view engine", "handlebars")

//body parser
app.use(bodyParser.urlencoded({extended: false}))
app.use(bodyParser.json())

//Rotas Get
app.get("/", function(req, res){
	res.render("home");
})

app.get("/cadastro", function(req, res){
	res.render("cadastro");
})

//Rotas Post
app.post("/usuarios", function(req, res){
	res.send("Nome Completo: " + req.body.firstname + " " + req.body.lastname +
		"<br>CPF: " + req.body.docs);
})

app.listen(8081, function(){
	console.log("Servidor está rodando na url localhost:8081")
})
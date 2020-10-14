const express = require("express")
const app = express()
const handlebars = require("express-handlebars")
const bodyParser = require("body-parser")
const usuarios = require("./models/usuarios")

//Link CSS
app.use("/assets", express.static('assets'));

//template engine
app.engine("handlebars", handlebars({defaultLayout: "main"}))
app.set("view engine", "handlebars")

//body parser
app.use(bodyParser.urlencoded({extended: false}))
app.use(bodyParser.json())

//Rota Get
app.get("/", function(req, res){
	res.render("home");
})

app.get("/formulario", function(req, res){
	res.render("formulario");
})

//Rotas Post
app.post("/cadastro", function(req, res){
	usuarios.create({
		firstname: req.body.firstname,
		lastname: req.body.lastname
	}).then(function(){
		res.send("Usuário criado com sucesso")
	}).catch(function(erro){
		res.send("Não foi possível criar o usuário, erro: " + erro)
	})
})

app.listen(8081, function(){
	console.log("Servidor está rodando na url localhost:8081")
})
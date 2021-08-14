const express = require('express');
const server = express();

const routes = require('./routes')
const path = require('path')


//ejs
//server.set('view engine', 'ejs')

//redefinindo a rota da engine
//server.set('views', path.join(__dirname, 'views'))

//passar o css para a pagina
server.use(express.static("public", '/public/'));


server.use(express.urlencoded({ extended: true }))

server.use(routes);

server.listen(3000, () => console.log("server Funcionando"))
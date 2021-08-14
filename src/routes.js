const express = require('express')

const routes = express.Router()

//chamadas das rotas
routes.get("/", (req, res) => res.sendFile(__dirname + "/views/index.html"))
routes.get("/Welcome", (req, res) => res.sendFile(__dirname + "/views/Menu.html"))
routes.get("/Menu", (req, res) => res.sendFile(__dirname + "/views/Welcome.html"))



module.exports = routes
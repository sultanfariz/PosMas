const express = require("express");
const app = express();
const db = require('./config/db.js');
// const { get } = require("./routes/get");
// const session = require("express-session");

// let whiteList = [
//     'http://localhost:3000',
//     'http://localhost:4500'
// ];

const get = require('./routes/get');
// const login = require('./routes/login');
// const {
//     PORT = process.env.PORT || 4500,
//     NODE_ENV = 'development',
//     SESS_SECRET = 'ssh! quiet, it is a secret!',
//     SESS_NAME = 'sid',
//     SESS_LIFETIME = 1000*60*60*2
// } = process.env;

db.authenticate().then(() => console.log("successfully connected to database"));

app.use(express.urlencoded({ extended: true }));

app.use(get);
// app.use(login);


app.listen(4500, () => console.log(`Server is running at http://localhost:4500`))

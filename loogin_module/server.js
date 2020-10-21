var express = require('express');
var cookieParser = require('cookie-parser');
var session = require('express-session');
var app = express();
const mongoose = require("mongoose")

// const server = '127.0.0.1:27017'; // REPLACE WITH YOUR DB SERVER
// const database = 'svelotose'; 
mongoose.connect('mongodb://127.0.0.1:27017/svelotose');
mongoose.Promise = global.Promise;
const db = mongoose.connection;
db.on('error', console.error.bind(console, 'MongoDB connection error:'));

// app.set('view engine', 'html');

const log_session = require("./routes/social_login")
const forget_option = require("./routes/forget_pass")

app.use("/",log_session)
app.use('/',forget_option)

app.use(cookieParser());
app.use(session({secret: "Shh, its a secret!"}));

app.listen(3000);

const express = require('express');
const mongoose = require('mongoose');
var bodyParser = require('body-parser')
var fs = require("fs")
var redis = require("redis");
var nodemailer = require("nodemailer")
const jwt = require('jsonwebtoken');
const cors = require('cors')
// const schema = mongoose.Schema
// require('mongoose-type-url')
// const course_image = new schema({
//     image: { 
//         data: Buffer, 
//         contentType: String
//     }
// });

// // const a = require('./uploads')
// const img = mongoose.model('in_Images',course_image)

const path = require('path')
const facebookStrategy = require("passport-facebook").Strategy;
var passport = require("passport")
var googleStrategy = require("passport-google-oauth20").Strategy;
const bcrypt = require('bcryptjs');
const cookieParser = require('cookie-parser');
var session = require('express-session');
var redisStore = require('connect-redis')(session);
var client = redis.createClient();
var multer = require("multer");
const PDFDocument = require('pdfkit');

// // const {
// //   response
// // } = require('express');
// const {
//   findOne
// } = require('./models/user_schema');
const app = express();
// app.use(express.static(path.join(__dirname, 'views')));
// app.set('view engine', 'ejs');
// app.use(express.static(path.join(__dirname, 'ookul_web/elearning')));
const PORT = process.env.PORT || 3000;
app.use(cookieParser())
app.use(cors());
app.set("views", path.join(__dirname, "views"))
app.set("view engine", "ejs")

// app.use('/ookul_web/elearning', express.static('elearning'))
app.use(session({
  secret: 'ssshhhhh',
  // create new redis store.
  store: new redisStore({
    host: 'localhost',
    port: 6379,
    client: client,
    ttl: 260
  }),
  saveUninitialized: false,
  resave: false
}));
app.use(bodyParser.urlencoded({
  extended: false
}));

// var storage = multer.diskStorage({
//   destination: (req, file, cb) => {
//     cb(null, './uploads/')
//   },
//   filename: (req, file, cb) => {
//     cb(null, file.fieldname + '-' + Date.now())
//   }
// });

// var upload = multer({ storage: storage });

app.get("/data_reading",(req,res)=>{
    res.sendFile(path.join(__dirname + '/jqery.html'));

})

app.post("/demo_test_post",(req,res)=>{
    console.log(req.body)
    res.send(req.body)
})

app.listen(4000,()=>{
    console.log("app listioning")
})
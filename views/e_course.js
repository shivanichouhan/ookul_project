
const express = require('express');
const mongoose = require('mongoose');
var bodyParser = require('body-parser')
var fs = require("fs")
var redis = require("redis");
var nodemailer = require("nodemailer")
const jwt = require('jsonwebtoken');
const cors = require('cors')
{/* <img src="data:uploads/<%=error.teachers.image.contentType%>;base64,<%=error.teachers.image.data.toString('base64')%>"> */}
// const a = d.length
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
const categorySchema = require("../models/category_course")

const router = express.Router();
// router.use(express.static(path.join(__dirname, 'views')));
// router.set('view engine', 'ejs');
// app.use(express.static(path.join(__dirname, 'ookul_web/elearning')));
// const PORT = process.env.PORT || 3000;
// app.use(cookieParser())
// app.use(cors());
// app.set("views", path.join(__dirname, "views"))
// app.set("view engine", "ejs")

// // app.use('/ookul_web/elearning', express.static('elearning'))
// app.use(session({
//   secret: 'ssshhhhh',
//   // create new redis store.
//   store: new redisStore({
//     host: 'localhost',
//     port: 6379,
//     client: client,
//     ttl: 260
//   }),
//   saveUninitialized: false,
//   resave: false
// }));
// app.use(bodyParser.urlencoded({
//   extended: false
// }));


router.get("/data_reading", (req, res) => {
    res.sendFile(path.join(__dirname + '/ookul_course_2.html'));

})



// app.listen(4000,()=>{
//     console.log("app listioning")
// })
module.exports = router


// <script>
// 	function repeate_chepter() {
// 		$(document).ready(function () {
// 			

// 			// var data = $('#NicEdit').val();
// 			// var option12 = $("#NicEdit1").val()
// 			// var option22 = $("#NicEdit2").val()
// 			// var option33 = $("#NicEdit3").val()
// 			// var option44 = $("#NicEdit4").val()
// 			// var option55 = $("#NicEdit5").val()
// 			// var option66 = $("#NicEdit6").val()
// 			// console.log(data)
// 			// $.ajax({
// 			// 	url: "/elearning/create_exam_paper",
// 			// 	data: { si: data },
// 			// 	method: "POST",
// 			// 	contentType: "application/x-www-form-urlencoded",
// 			// 	success: function (res) {
// 			// 		alert(res.form)
// 			// 	}, error: function (err) {
// 			// 		alert(err)
// 			// 	}
// 			// })
// 			$("form#files").submit(function (e) {
// 				e.preventDefault();
// 				var formData = new FormData(this);

// 				$.ajax({
// 					url: "/added_chepters",
// 					method: 'POST',
// 					data: { a: "s" },
// 					success: function (data) {
// 						alert(data)
// 					},
// 					cache: false,
// 					contentType: false,
// 					processData: false
// 				});
// 			});
// 		})


// 		// })
// 	}
// </script>
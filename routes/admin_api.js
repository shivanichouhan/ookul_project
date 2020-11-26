const express = require('express');
const router = express.Router();
const userController = require('./userController');
const bodyParser = require('body-parser')
const urlencodedParser = bodyParser.urlencoded({
  extended: false
});
const facebookStrategy = require("passport-facebook").Strategy;
const path = require('path');
var passport = require("passport")
var googleStrategy = require("passport-google-oauth20").Strategy;
const exam_question = require("../models/teacher_questions")
const uploadController = require("./upload");
const homeController = require("./home");
const GridFsStorage = require("multer-gridfs-storage")
var fileUpload = require('express-fileupload');
const multer = require("multer")
const user_data = require("./user_details")
router.use(fileUpload());

router.get("/desboards",(req,res,next)=>{
    res.send("oooooooooooo")
})


module.exports = router
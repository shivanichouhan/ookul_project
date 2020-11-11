// var imgModel = require("../models/user_schema")

const mongoose = require("mongoose")
const schema = mongoose.Schema
require('mongoose-type-url')
const course_image = new schema({
    image: { 
        data: Buffer, 
        contentType: String
    }
});

// const a = require('./uploads')
const imgModel = mongoose.model('Images',course_image)

var express = require("express")
const router = express.Router()
const LocalStorage = require('node-localstorage').LocalStorage;

var fs = require('fs'); 
var path = require('path'); 
var multer = require('multer'); 
// const mongoose = require("mongoose")
const bodyParser = require("body-parser")
var urlencodedParser = bodyParser.urlencoded({
  extended: false
})



var storage = multer.diskStorage({ 
    destination: (req, file, cb) => { 
        cb(null, 'uploads') 
    }, 
    filename: (req, file, cb) => { 
        cb(null, file.fieldname + '-' + Date.now()) 
    } 
}); 
  
var upload = multer({ storage: storage }); 


// Uploading the image 
router.post('/image_uploads', upload.single('filenames'), (req, res, next) => { 
    var obj = { 
        image: { 
            data: fs.readFileSync(path.join(__dirname + '/uploads/' + req.file.filename)), 
            contentType: 'image/png'
        } 
    } 
    console.log(obj)
    let localStorage = new LocalStorage('./scratch');
    const user_data = localStorage.getItem("user_details")
    console.log(user_data,"**********************")
}); 

module.exports = router
// var imgModel = require('../models/image'); 

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
const img = mongoose.model('Image',course_image)

var express = require("express")
var router = express.Router()
var bodyParser = require("body-parser");
const parser = bodyParser.urlencoded({
    extended: false
})
var fs = require('fs'); 
var path = require('path'); 
var multer = require('multer'); 
  
var storage = multer.diskStorage({ 
    destination: (req, file, cb) => { 
        cb(null, './uploads/') 
    }, 
    filename: (req, file, cb) => { 
        cb(null, file.fieldname + '-' + Date.now()) 
    } 
}); 
  
var upload = multer({ storage: storage }); 


// var fileUpload = require('express-fileupload');
// router.use(fileUpload());

// a = require('../uploads')

// const parser = bodyParser.urlencoded({
router.post('/images_upload', upload.single('filenames'), parser,(req, res, next) => {
    // res.send("cammeeeee")
    const body_data = req.body
    let file = req.file.filenames
    // .team_image;
    console.log(file,"++++++++++++++++++")
    console.log(body_data,"*******************")
    console.log(req.file)
    var obj = {
      image: {
        data: fs.readFileSync(path.join(__dirname + '../uploads/' + req.file.filename)),
        contentType: 'image/png'
      }
    }
    const course_images =new img(obj);
    course_images.save()
    .then((result)=>{
        console.log(obj)
        // let localStorage = new LocalStorage('./scratch');
        // const user_data = localStorage.getItem("user_details")
        // console.log(user_data, "**********************")
        console.log("file uploaded");
        res.send(result);
    })

  });
  
module.exports = router
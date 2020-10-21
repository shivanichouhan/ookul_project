var imgModel = require('./models/image'); 
var express = require("express")
var app = express()
var fs = require('fs'); 
var path = require('path'); 
var multer = require('multer'); 
const mongoose = require("mongoose")
const bodyParser = require("body-parser")
mongoose
  .connect('mongodb://localhost:27017/sveltose', {
    useUnifiedTopology: true,
    useNewUrlParser: true
  })
  .then(() => {
    console.log('Connected to the Database successfully');
  });
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


app.get('/', (req, res) => { 
    imgModel.find({}, (err, items) => { 
        if (err) { 
            console.log(err); 
        } 
        else { 
            res.sendFile(path.join(__dirname + '/views/index.html'));
        } 
    }); 
}); 


// Uploading the image 
app.post('/', upload.single('image'), (req, res, next) => { 
  
    var obj = { 
        name: req.body.name, 
        desc: req.body.desc, 
        img: { 
            data: fs.readFileSync(path.join(__dirname + '/uploads/' + req.file.filename)), 
            contentType: 'image/png'
        } 
    } 
    imgModel.create(obj, (err, item) => { 
        if (err) { 
            console.log(err); 
        } 
        else { 
            // item.save(); 
            res.send("data inserted"); 
        } 
    }); 
}); 

app.listen('3000' || process.env.PORT, err => { 
    if (err) 
        throw err 
    console.log('Server started') 
}) 
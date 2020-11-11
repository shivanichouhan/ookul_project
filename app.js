var express = require("express")
var app = express()
const imgModel = require("./models/user_schema")
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
const TodoTask = require("./models/todo_schema")

app.set("view engine", "ejs")
app.set("views", path.join(__dirname, "views"))

var storage = multer.diskStorage({ 
    destination: (req, file, cb) => { 
        cb(null, 'uploads') 
    }, 
    filename: (req, file, cb) => { 
        cb(null, file.fieldname + '-' + Date.now()) 
    } 
}); 
  
var upload = multer({ storage: storage }); 

app.post('/image_upload', upload.single('filename'), (req, res, next) => { 
  
    var obj = { 
        img: { 
            data: fs.readFileSync(path.join(__dirname + '/uploads/' + req.file.filename)), 
            contentType: 'image/png'
        } 
    } 
    console.log(obj);
    res.send(obj)
    // imgModel.create(obj, (err, item) => { 
    //     if (err) { 
    //         console.log(err); 
    //     } 
    //     else { 
    //         // item.save(); 
    //         res.send("data inserted"); 
    //     } 
    // }); 
}); 



app.post('/', async (req, res) => {
  const todoTask = new TodoTask({
    content: req.body.content
  });
  try {
    await todoTask.save();
    res.redirect("/");
  } catch (err) {
    res.redirect("/");
  }
});


app.get("/data", (req, res) => {
  TodoTask.find({}, (err, tasks) => {
    res.render("todo.ejs", { todoTasks: tasks });
  });
});


app
  .route("/edit/:id")
  .get((req, res) => {
    const id = req.params.id;
    TodoTask.find({}, (err, tasks) => {
      res.render("todoEdit.ejs", { todoTasks: tasks, idTask: id });
    });
  })
  .post((req, res) => {
    const id = req.params.id;
    TodoTask.findByIdAndUpdate(id, { content: req.body.content }, err => {
      if (err) return res.send(500, err);
      res.redirect("/");
    });
  });

  app.route("/remove/:id").get((req, res) => {
    const id = req.params.id;
    TodoTask.findByIdAndRemove(id, err => {
    if (err) return res.send(500, err);
    res.redirect("/");
    });
    });



app.get('/admin', (req, res) => {
    console.log(req.session.id)
    res.sendFile(path.join(__dirname + '/elearning/index.html'));
  });
  
  
  app.get("/confirm_otp", (req, res) => {
    res.sendFile(path.join(__dirname + '/elearning/confirm_otp.html'));
  
  })
  app.get("/index", (req, res) => {
    res.sendFile(path.join(__dirname + '/index1.html'));
  
  })
  app.get('/teacher', (req, res) => {
    res.sendFile(path.join(__dirname + '/elearning/index.html'));
  });
  
  app.get('/student', (req, res) => {
    res.sendFile(path.join(__dirname + '/elearning/index.html'));
  });
  
  app.get('/', (req, res) => {
    res.sendFile(path.join(__dirname + '/signup.html'));
  });
  
  app.post("/data", (req, res) => {
    res.send("hii")
  })
  app.get("/s", (req, res) => {
    res.sendFile(path.join(__dirname + '/view/login.html'));
  
  })
  app.get("/teacher_creation", (req, res) => {
    res.sendFile(path.join(__dirname + '/view/teacher_create_by_admin.html'));
  })
  app.get("/home", (req, res) => {
    res.sendFile(path.join(__dirname + '/ookulprojet/index.html'));
  })
  app.get("/addCourse", (req, res) => {
    res.sendFile(path.join(__dirname + '/view/e_bookr.html'));
  })
app.listen('3000' || process.env.PORT, err => { 
    if (err) 
        throw err 
    console.log('Server started') 
}) 




// const lessions = new courseSchema(new_course)
//             await lessions.save()
//                 .then((result) => {
//                     categoriSchema.chepter.findOne({
//                             'chepter_name': req.body.chepter
//                         })
//                         .then((chepters) => {
//                             if (chepters.length != 0) {
//                                 const chepter = new categoriSchema.chepter({
//                                     chepter_name: req.body.chepter,
//                                     chepter_title: chepter_titl
//                                 })

//                             } else {
//                                 // const chepter = new chepters;
//                                 console.log(typeof (chepters))
//                                 console.log(chepters, "******************")
//                                 chepters.chepter_lession.push(result)
//                                 return chepter.save()
//                                     .then(function (resp) {
//                                         const sub = req.body.sub
//                                         console.log(resp, "chepter Added sucessfuly");
//                                         const subjects = new categoriSchema.sb_details({
//                                             course_name: sub
//                                         })
//                                         subjects.course_chepters.push(resp)
//                                         return subjects.save()
//                                     })
//                             }
//                         });
//                 })
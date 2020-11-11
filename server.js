// // server/server.js
const LocalStorage = require('node-localstorage').LocalStorage;
const upload_image = require("./routes/update_profile")
const express = require('express');
const mongoose = require('mongoose');
var bodyParser = require('body-parser')
var fs = require("fs")
var redis = require("redis");
var nodemailer = require("nodemailer")
const jwt = require('jsonwebtoken');
const cors = require('cors')
const TodoTask = require("./models/todo_schema");
const subscribe_details = require("./models/subscribe_schema")
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

const createExam = require("./models/exam_schema")
const path = require('path')
const facebookStrategy = require("passport-facebook").Strategy;
var passport = require("passport")
var googleStrategy = require("passport-google-oauth20").Strategy;
const bcrypt = require('bcryptjs');
const User = require('./models/user_schema')
const routes = require('./routes/routes');
const cookieParser = require('cookie-parser');
var session = require('express-session');
var redisStore = require('connect-redis')(session);
var client = redis.createClient();
const images = require('./routes/img');
var forgot_password = require("./routes/forget_pass");
var admin = require("./routes/admin")
var multer = require("multer");
const PDFDocument = require('pdfkit');
const ejs = require("ejs")
// // const {
// //   response
// // } = require('express');
const {
  findOne
} = require('./models/user_schema');
const app = express();
// const User = require("./models/user_schema")
app.use(express.static(path.join(__dirname, 'views')));
// app.set('view engine', 'ejs');
app.use(express.static(path.join(__dirname, 'ookul_web/elearning')));
const PORT = process.env.PORT || 3000;
app.use(cookieParser())
app.use(cors());
app.set("views", path.join(__dirname, "views"))
app.set("view engine", "ejs")
app.engine('html', require('ejs').renderFile);

app.set('view engine', 'html');
app.use(express.static(path.join(__dirname, "static")));

app.use('/ookul_web/elearning', express.static('elearning'))
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

var storage = multer.diskStorage({
  destination: (req, file, cb) => {
    cb(null, './uploads/')
  },
  filename: (req, file, cb) => {
    cb(null, file.fieldname + '-' + Date.now())
  }
});

var upload = multer({ storage: storage });

app.get('/show_e_notes', (req, res) => {
  res.sendFile(path.join(__dirname + '/ookul_web/elearning/e_notes.html'));

})

const categorySchema = require("./models/category_course")
const course = require("./views/e_course");
const { RSA_NO_PADDING } = require('constants');
const { json } = require('body-parser');


//ejs file
// app.engine('html', require('ejs').renderFile);
// app.set('view engine', 'html');
// app.set('views', __dirname);

app.get('/update_user_profile', (req, res, next) => {
  res.render('u_account')
})
mongoose.set('useFindAndModify', false);

mongoose
  .connect('mongodb://localhost:27017/sveltose', {
    useUnifiedTopology: true,
    useNewUrlParser: true
  })
  .then(() => {
    console.log('Connected to the Database successfully');
  });



app.post("/generateReport", (req, res) => {
  console.log(res.body.text_data)
  // var foo = require('./view/shivi.json');
  ejs.renderFile(path.join(__dirname, './views/', "report-template.ejs"), {
    students: foo
  }, (err, data) => {
    if (err) {
      res.send(err);
    } else {
      let options = {
        "height": "11.25in",
        "width": "8.5in",
        "header": {
          "height": "20mm"
        },
        "footer": {
          "height": "20mm",
        },
      };
      pdf.create(data, options).toStream(function (err, stream2) {
        console.log(err);
        stream2.pipe(res);
        stream2.on('end', function () {
          try {
            fs.unlink(mergeFileRes)
          } catch (err) {
            console.log(3090, "Did not delete file");
          }
        })
      })
    }
  });
})


passport.use(
  new facebookStrategy({
    clientID: "333309537952117",
    clientSecret: "0c10639980efc88d7e3a377a5de5bdd6",
    callbackURL: "http://localhost:3000/auth/facebook"
  },
    function (profile) {
      console.log("profile", profile);
    })
)

passport.use(
  new googleStrategy({
    clientID: "885334681327-gprmljcjmgt3mocucgqk4cdu8j5fuc2g.apps.googleusercontent.com",
    clientSecret: "Rw8x7EuYufm-Rxc5VKkAidYA",
    callbackURL: "/student"
  },
    function (accessToken, refreshToken, profile, done) {
      console.log("access token", accessToken);
      console.log("refress token", refreshToken);
      console.log("profile", profile);
      console.log("done", done)
    })

)

//admin routes

app.get("/ookul", (req, res, next) => {
  res.render('ookul_course_2');
  // res.sendFile(path.join(__dirname + '/ookul_web/elearning/ookul_admin/index.html'));
});
app.get("/admin/teacher_creation", (req, res) => {
  res.sendFile(path.join(__dirname + '/ookul_web/elearning/ookul_admin/teacher_asign.html'));
})

app.get('/logout', function (req, res) {
  req.session.destroy(function (err) {
    if (err) {
      console.log(err);
    } else {
      res.redirect('/');
    }
  });
});

//user routes


// app.get('/update_image', (req, res) => {
//   console.log("for profile", req.session.id)
//   res.sendFile(path.join(__dirname + '/elearning/u_account.html'));

// })


app.get("/ookul/student/playvideo", (req, res, next) => {
  res.sendFile(path.join(__dirname + '/ookul_web/elearning/ookul_admin/e_playvideo.html'));
});

app.get("/auth/facebook", passport.authenticate("facebook", {
  scope: ["profile", "email"]
}))

app.get("/auth/facebook/login/callback", passport.authenticate("facebook", {

}))

app.get("/auth/google", passport.authenticate("google", {
  scope: ["profile", "email"]
}));


app.get("/confirm_otp", (req, res) => {
  res.sendFile(path.join(__dirname + '/views/confirm_otp.html'));

})

app.get("/reset_pass/:otps", (req, res) => {
  res.sendFile(path.join(__dirname + '/views/reset_password.html'));
})

app.get("/index", (req, res) => {
  res.sendFile(path.join(__dirname + '/index1.html'));

})
app.get('/teacher', (req, res) => {
  res.sendFile(path.join(__dirname + '/ookul_web/elearning/index1.html'));
});



app.get('/', (req, res) => {
  res.sendFile(path.join(__dirname + '/signup.html'));
});

app.get("/home", (req, res) => {
  res.sendFile(path.join(__dirname + '/views/index_ookul.html'));
})

app.get('/student', (req, res) => {
  res.render('index1.ejs')
  // res.sendFile(path.join(__dirname + '/views/index1.html'));
});
// app.get("/addCourse", (req, res) => {
//   res.sendFile(path.join(__dirname + '/view/e_bookr.html'));
// })
app.get("/auth/google", passport.authenticate("google", {
  scope: ["profile", "email"]
}));

app.post('/update_profile', (req, res, next) => {
  try {
    console.log(req.body)
    const data = {};
    if (req.body.subject) {
      data.subject = req.body.subject
    }
    if (req.body.firstname) {
      data.name = req.body.firstname
    }
    if (req.body.country) {
      data.country = req.body.country
    }
    if (req.body.lastname) {
      data.sername = req.body.lastname
    }
    if (req.body.Phone_Number) {
      data.mob_number = req.body.Phone_Number
    }
    if (req.body.E_Mail) {
      data.email = req.body.E_Mail
    }
    if (req.body.State) {
      data.state = req.body.State
    }
    // if (req.body.country) {
    //   data.country = req.body.country

    // }
    if (req.body.City) {
      data.city = req.body.City
    }
    if (req.body.district) {
      data.district = req.body.district
    }
    let localStorage = new LocalStorage('./scratch');
    const user_data = localStorage.getItem("user_details")
    var obj = JSON.parse(JSON.stringify(user_data))
    User.findByIdAndUpdate(obj, {
      $set: data
    })
      .then((result) => {
        console.log(result)
        res.send("Profile updated sucessfuly")
      }).catch((err) => {
        console.log(err)
        res.send(err)
      })
  } catch (error) {
    console.log(error)
    next(error);
  }
});

async function hashPassword(password) {
  return await bcrypt.hash(password, 10);
}


app.post('/images_upload', upload.single('filenames'), (req, res, next) => {
  const body_data = req.file
  const user_email = req.session.email
  console.log(body_data, "*******************")
  console.log(req.file)
  var obj = {
    image: {
      data: fs.readFileSync(path.join(__dirname + '/uploads/' + req.file.filename)),
      contentType: 'image/png'
    }
  }

  User.updateOne({ email: user_email }, obj)
    .then((result) => {
      console.log(obj)
      console.log("file uploaded");
      res.send(result);
    }).catch((err) => {
      res.send(err)
      console.log(err)
    });

});

// <!-- <h2> Added Task <%=data%> </h2> -->



app.post('/endpoint', function (req, res) {
  var obj = {};
  var requestData = '';
  requestData.a = req.body;
  console.log('body: ' + JSON.stringify(req.body));
  res.send(JSON.stringify(requestData));
});


app.get('/tttt', function (req, res) {
  res.render('index');
});


var task = ["buy socks", "practise with nodejs"];



app.post('/addtask', function (req, res) {
  var newTask = req.body.newtask;
  //add the new task from the post route into the array
  task.push(newTask);
  //after adding to the array go back to the root route
  res.redirect("/shivic");
  // res.render('todo_app_list')
});
// <!-- <% for( var i = 0; i < data.length; i++){ %> -->
//   <!-- <li><input type="checkbox" name="check" value="<%= task[i] %>" /> <%= task[i] %> </li>
//   <% } %> -->
app.get("/shivic", function (req, res) {
  console.log(task)
  res.render("index", { data: task });
});

app.post("/s", (req, res, next) => {
  console.log(req.body)
  res.send(req.body)
})

// Uploading the image 



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



app.get("/", (req, res) => {
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




app.get("/first_exam_paper", (req, res, next) => {
  res.sendFile(path.join(__dirname + '/ookul_web/elearning/ookultest.html'));
});

app.post("/test_paper", (req, res, next) => {
  const a = req.body.p1
  console.log(a)
  res.send("data")
});


app.post('/friend_signup', async (req, res, next) => {
  const {
    name,
    sername,
    email,
    password,
    role,
    ref_code
  } = req.body
  const response1 = await User.find({
    email: req.body.email
  })
  if (response1.length == 0) {
    const find_code = await User.find({
      user_saring_code: ref_code
    })
    var hashedPassword = await hashPassword(password);
    if (find_code.length != 0) {
      console.log(find_code)
      let u_code = find_code[0].user_saring_code
      let u_wallet = find_code[0].wallet + 10
      User.updateOne({
        user_saring_code: u_code
      }, {
        $set: {
          wallet: u_wallet
        }
      })
        .then((update_coin) => {
          console.log(update_coin)
          console.log(find_code, "---------")
          var code = randomString(8, 'PICKCHAR45SFROM789THI123SSET');
          console.log(code)
          console.log(hashPassword)
          const newUser = new User({
            email: email,
            password: hashedPassword,
            role: role,
            sername: sername,
            name: name,
            user_saring_code: code
          });
          if (req.body.role === "teacher") {
            user_roles = 2
          } else if (req.body.role == "student") {
            user_roles = 3
          }
          newUser.user_role_status = user_roles
          let localStorage = new LocalStorage('./scratch');
          localStorage.setItem('user_details', newUser._id);
          const accessToken = jwt.sign({
            userId: newUser._id
          }, 'shivaniji', {
            expiresIn: "1d"
          });
          res.cookie('token', accessToken, {
            httpOnly: true
          });
          newUser.accessToken = accessToken;
          newUser.session = req.session.id
          newUser.save()
            .then((data) => {
              if (data.role == "student") {
                console.log("student/" + data._id)
                res.redirect('/student')
              } else {
                res.send("You put wrong role")
              }
            })
        })
    } else {
      res.send("You used wrong reffrence code")
    }

  } else {
    res.send("You already sign up. You cant signup again")
  }
});

app.get("/card_payment", (req, res) => {
  res.sendFile(path.join(__dirname + '/ookul_web/elearning/ookul_cheakout.html'));

})


app.post("/generateReport", (req, res) => {
  var foo = require('./view/shivi.json');
  ejs.renderFile(path.join(__dirname, './views/', "report-template.ejs"), {
    students: foo
  }, (err, data) => {
    if (err) {
      res.send(err);
    } else {
      let options = {
        "height": "11.25in",
        "width": "8.5in",
        "header": {
          "height": "20mm"
        },
        "footer": {
          "height": "20mm",
        },
      };
      pdf.create(data, options).toStream(function (err, stream2) {
        console.log(err);
        stream2.pipe(res);
        stream2.on('end', function () {
          try {
            fs.unlink(mergeFileRes)
          } catch (err) {
            console.log(3090, "Did not delete file");
          }
        })
      })
    }
  });
})


// razor api key == "rzp_test_W54b4si9jPQp34"
// razor secret key === "pTR3omS1FoRtOWKNWufIftEt"

// var options = {
//   amount: 50000,  // amount in the smallest currency unit
//   currency: "INR",
//   receipt: "order_rcptid_11"
// };
// instance.orders.create(options, function(err, order) {
//   console.log(order);
// });


// pk_test_51HflLmLWv2gcyfWHwGMSXphoNhrjXCABrJPGaHBjNHNsnG3tvBtMyTNo1ZPrfQjuTGBQUp1B4mXwjMyh7lVNwbPJ00cxq2gKNN
const stripe = require('stripe')('sk_test_51HflLmLWv2gcyfWHgVF6AF82bc6zNrTXQrL6cCJEwTGP5LenAMOceFNu87uB1F9dqCzmyIjKXGttUlK6S8Yy3AgG00kH0kwfg7');

// app.post('/create_checkout_session', async (req, res) => {
//   const token = req.body.stripeToken
//   console.log(token)
//   const session = await stripe.checkout.sessions.create({
//     payment_method_types: ['card'],
//     line_items: [{
//       price_data: {
//         currency: 'INR',
//         product_data: {
//           name: 'T-shirt',
//         },
//         unit_amount: 2000,
//       },
//       quantity: 1,
//     }, ],
//     mode: 'payment',
//     success_url: 'https://example.com/success',
//     cancel_url: 'https://example.com/cancel',
//   });

//   res.json({
//     id: session.id
//   });
// });

app.get("pay", (req, res) => {
  res.sendFile(path.join(__dirname + '/ookul_web/elearning/payment.html'));
})

app.post('/payment', function (req, res) {
  stripe.customers.create({
    email: req.body.stripeEmail,
    source: req.body.stripeToken,
    name: 'Gourav Hammad',
    address: {
      line1: 'TC 9/4 Old MES colony',
      postal_code: '452331',
      city: 'Indore',
      state: 'Madhya Pradesh',
      country: 'India',
    }
  })
    .then((customer) => {

      return stripe.charges.create({
        amount: 2500, // Charing Rs 25 
        description: 'Web Development Product',
        currency: 'INR',
        customer: customer.id
      });
    })
    .then((charge) => {
      res.send("Success") // If no error occurs 
    })
    .catch((err) => {
      res.send(err) // If some error occurs 
    });
})

app.get('/user_friend_sinup', (req, res, next) => {
  res.sendFile(path.join(__dirname + '/elearning/friend_signup.html'));

})

app.post('/invite_friend', (req, res, next) => {
  console.log("--------", req.session.email)
  if (req.session.email) {
    let friend_email = req.body.e_mail
    let user_mail = req.session.email;
    console.log(user_mail, friend_email)
    User.findOne({
      email: user_mail
    })
      .then((result) => {

        let mailTransporter = nodemailer.createTransport({
          service: 'gmail',
          auth: {
            user: 'shivanic18@navgurukul.org',
            pass: 'Chouhan18@'
          }
        });
        let my_code = result.user_saring_code
        let mailDetails = {
          from: 'shivanic18@navgurukul.org',
          to: friend_email,
          subject: 'invitation For ookul aplication',
          html: '<h3 style="font-weight:bold;">Your friend have invite you to join ookul aplication. </h3><h3>This is you reffrence code <br>' + my_code + '<br><a href="http://localhost:3000/user_friend_sinup">click</a>'
        };
        mailTransporter.sendMail(mailDetails, function (err, data) {
          if (err) {
            console.log(err)
            console.log('Error Occurs');
          } else {
            console.log('Email sent successfully');
            res.send("You invited your friend")
          }
        });


      }).catch((err) => {
        console.log(err)
        res.send(err)
      })
  } else {
    res.send("you are note login")

  }

})

// app.use(async (req, res, next) => {
//   const Token = await User.find({
//     'role': 'admin'
//   });
//   next();
//   if (Token[0].accessToken) {
//     const {
//       userId,
//       exp
//     } = await jwt.verify(Token[0].accessToken, "shivaniji");
//     if (exp < Date.now().valueOf() / 1000) {
//       return res.status(401).json({
//         error: "JWT token has expired, please login to obtain a new one"
//       });
//     }
//     res.locals.loggedInUser = await User.findById(userId)
//   } else {
//     next();
//   }
// });

// app.use('/update_user_pic', upload_image)

app.post("/course_data", (req, res) => {
  const data = req.body

  console.log(data)
  categorySchema.sb_details.findOne({
    course_name:
      data.course_name
  }).populate(
    {
      path: 'course_chepters',
      populate: {
        path: 'chepter_lession',
        model: 'Lessions'
      }
    }
  )
    .then((result) => {
      console.log(result, "&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&&")
      app.set('data', result);
      res.redirect("/all_courses")
      res.end()

      // res.render("ookul_course_2",{result})
    })
})

app.get('/all_courses', (req, res, next) => {
  var a = app.get('data')
  console.log(typeof (a))
  console.log(a, "*&&&&&&&&&&&&&&&&&&&&")
  const body = {
    "course_chepters": [
      {
        "chepter_name": "chepter1",
        "chepter_title": "aptitute learning",
        "chepter_lession": [
          {
            "lession_name": "aptitute intro",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "url": "https://www.youtube.com/watch?v=BFPgIoPDsts"

          },
          {
            "lession_name": "aptitute basic",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "content": "Storybook helps you document components for reuse and automatically visually test your components to prevent bugs. Extend Storybook with an ecosystem of addons that help you do things like fine tune responsive layouts or verify accessibility Storybook integrates with most popular JavaScript UI frameworks and (experimentally) supports server-rendered component frameworks such as Ruby on Rails."
            ,
            "url": ""
          },
          {
            "lession_name": "apptitude advance",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "url": "",
            "image": "c2.jpg"
          },
          {
            "lession_name": "aptitute advanced pro max",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "url": "",
            "image": "c1.jpg"

          }
        ]

      }, {
        "chepter_name": "chepter 2",
        "chepter_title": "gk",
        "chepter_lession": [
          {
            "lession_name": "aptitute intro",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "url": "https://www.youtube.com/watch?v=BFPgIoPDsts"

          },
          {
            "lession_name": "aptitute basic",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "content": "Storybook helps you document components for reuse and automatically visually test your components to prevent bugs. Extend Storybook with an ecosystem of addons that help you do things like fine tune responsive layouts or verify accessibility Storybook integrates with most popular JavaScript UI frameworks and (experimentally) supports server-rendered component frameworks such as Ruby on Rails."
            ,
            "url": ""
          },
          {
            "lession_name": "apptitude advance",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "url": "",
            "image": "c2.jpg"
          },
          {
            "lession_name": "aptitute advanced pro max",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "url": "",
            "image": "c1.jpg"

          }
        ]

      }
    ],
    "desciption": "this is the course for uppsc and we will teach you nicely so that you will grow up.",
    "course_name": "javscript from basics in easy way.",
    "course_title": "The modern JavaScript course for everyone! Master JavaScript with projects, challenges and theory. Many courses in one!",
    "course_price": 450,
    "course_type": "free",
    "teacher_name": "shivani chouhan",
    "teacherEmail": "shivani1232@gmail.com",
    "Date": "2020-11-02 10: 44: 39.499"
  }
  // const json_str = JSON.parse(body)
  res.render("ookul_course_12.ejs", { error: body })
  // res.render('/examplePage.ejs', {retrievedData : app.get('data')});

  // res.render("ookul_course_2.html")
})

app.post("/lession_details", (req, res, next) => {
  const les_detail = req.body;
  console.log(les_detail, "%%%%%%%%%%%%%%%%%%%")
  app.set('lession_data', les_detail);
  res.redirect("/lession_view")
  res.end()
})

app.get("/lession_view", (req, res) => {
  var play_lession = app.get('lession_data');
  console.log(typeof (play_lession))
  const body = {
    "course_chepters": [
      {
        "chepter_name": "chepter1",
        "chepter_title": "aptitute learning",
        "chepter_lession": [
          {
            "lession_name": "aptitute intro",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "url": "https://www.youtube.com/watch?v=BFPgIoPDsts"

          },
          {
            "lession_name": "aptitute basic",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "content": "Storybook helps you document components for reuse and automatically visually test your components to prevent bugs. Extend Storybook with an ecosystem of addons that help you do things like fine tune responsive layouts or verify accessibility Storybook integrates with most popular JavaScript UI frameworks and (experimentally) supports server-rendered component frameworks such as Ruby on Rails."
            ,
            "url": ""
          },
          {
            "lession_name": "apptitude advance",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "url": "",
            "image": "c2.jpg"
          },
          {
            "lession_name": "aptitute advanced pro max",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "url": "",
            "image": "c1.jpg"

          }
        ]

      }, {
        "chepter_name": "chepter 2",
        "chepter_title": "gk",
        "chepter_lession": [
          {
            "lession_name": "aptitute intro",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "url": "https://www.youtube.com/watch?v=BFPgIoPDsts"

          },
          {
            "lession_name": "aptitute basic",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "content": "Storybook helps you document components for reuse and automatically visually test your components to prevent bugs. Extend Storybook with an ecosystem of addons that help you do things like fine tune responsive layouts or verify accessibility Storybook integrates with most popular JavaScript UI frameworks and (experimentally) supports server-rendered component frameworks such as Ruby on Rails."
            ,
            "url": ""
          },
          {
            "lession_name": "apptitude advance",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "url": "",
            "image": "c2.jpg"
          },
          {
            "lession_name": "aptitute advanced pro max",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499",
            "url": "",
            "image": "c1.jpg"

          }
        ]

      }
    ],
    "desciption": "this is the course for uppsc and we will teach you nicely so that you will grow up.",
    "course_name": "javscript from basics in easy way.",
    "course_title": "The modern JavaScript course for everyone! Master JavaScript with projects, challenges and theory. Many courses in one!",
    "course_price": 450,
    "course_type": "free",
    "teacher_name": "shivani chouhan",
    "teacherEmail": "shivani1232@gmail.com",
    "Date": "2020-11-02 10: 44: 39.499"

  }
  // const json_str = JSON.parse(body)
  // console.log(play_lession)
  // body.les = play_lession.lesn_name
  console.log(body)
  res.render("ookul_coursevideo1.html", { error: body })
  // console.log(a)
  // res.send("lession get successfully");
})

app.get("/create_exam_intru", (req, res) => {
  res.sendFile(path.join(__dirname + '/views/ookul_examcreateform.html'));
})

app.post("/exam_related_details", (req, res) => {
  const teacher_name = req.session.email
  var a = "shivani1232@gmail.com"
  User.find({ email: a })
    .then((teacher_resp) => {
      console.log(req.body)
      const q_no = parseInt(req.body.total_questions);
      const exam_due = parseInt(req.body.exam_duration);
      const exam_start = parseInt(req.body.exam_start_time);
      const q_mark = parseInt(req.body.questions_marks);
      const wrong_q_mark = parseInt(req.body.wrong_q_mark);
      const e_date = parseInt(req.body.exam_date);
      // console.log(typeof(q_no))
      // console.log(teacher_resp)
      if (teacher_resp.length != 0) {
        if (teacher_resp[0].role == "teacher") {
          const exam_detail = req.body
          console.log(exam_detail)
          const create_inst = new createExam({
            testName: req.body.testName,
            total_questions: q_no,
            exam_duration: exam_due,
            exam_start_time: exam_start,
            questions_marks: q_mark,
            wrong_q_mark: wrong_q_mark,
            exam_date: e_date,
            instruction: req.body.instruction
          })
          create_inst.save()
            .then((ins_resp) => {

              res.render("e_exam_qus.html", { questionNum: q_no })
              console.log(ins_resp);
              // console.log(exam_detail, teacher_name)

            }).catch((err) => {
              console.log(err)
            })

        } else {
          res.send("Your email not ragister for teacher profile")
        }

      } else {
        res.send("You are not teacher. please sign up as A teacher")
      }

    })


})


app.get("/exam_questions", (req, res) => {
  res.render("e_exam_qus.html")
})

app.get("/add_course", (req, res, next) => {
  res.sendFile(path.join(__dirname + '/views/ookul_courseupload.html'));

})

app.post("/add_course_in_database_by_teacher", upload.single('filenames'), (req, res, next) => {
  const { title, subtitle, desc, language, course_type, category } = req.body
  // teacherName: course_category,
  // teacherEmail: req.session.email
  const a = "shivani1232@gmail.com"
  User.findOne({ email: a })
    .then((teacher_resp) => {

      if (Object.keys(teacher_resp).length === 0) {
        res.send("You are not ragister as a teacher");
      } else {
        const teacher_name = teacher_resp.name
        const categry = category;
        categorySchema.categories.findOne({ course_category: categry })
          .then((cate_resp) => {
            console.log(cate_resp)
            categorySchema.sb_details.find({ course_name: title })
              .then((course_resp) => {
                console.log(course_resp)
                if (course_resp.length == 0) {
                  const category_id = cate_resp._id
                  console.log("category id", category_id)
                  const new_course = {
                    course_name: title,
                    course_title: subtitle,
                    description: desc,
                    language: language,
                    catagory: category,
                    courseType: course_type,
                    course_image: {
                      data: fs.readFileSync(path.join(__dirname + '/uploads/' + req.file.filename)),
                      contentType: 'image/png'
                    }
                  }
                  new_course.teacherEmail = a
                  new_course.teacherName = teacher_name

                  const create_course = new categorySchema.sb_details(new_course)
                  create_course.save()
                    .then((added_resp) => {
                      app.set('course_id', added_resp._id);

                      console.log(cate_resp)
                      categorySchema.categories.findOneAndUpdate(cate_resp._id,{$push:{courses:added_resp._id}})
                        .then((cate_resp) => {
                          console.log(req.body)
                          res.redirect("/add_chepters")
                        })

                    })
                } else {
                  res.send("This course already added if you want to update then use update course")
                }
              })

          }).catch((err) => {
            res.send(err)
          })

      }
    }).catch((err) => {
      console.log(err)
    })

})

app.get("/add_chepters",(req,res,next)=>{
  res.sendFile(path.join(__dirname + '/views/ookul_course_Curriculum.html'));

})

app.post("/added_chepters",(req,res)=>{
  const body = req.body
  const a = JSON.stringify(body)
  console.log(a)
  res.send("data aa gya")
})


// app.post("create_exam_paper",(req,))
app.post("/example", (req, res) => {
  const teacher = req.body
  console.log(req.body)
  const teacher_email = teacher.teacher_name
  categorySchema.sb_details.find({ teacherEmail: teacher_email }).populate({
    path: 'course_chepters',
    populate: {
      path: 'chepter_lession',
      model: 'Lessions'
    }
  })
    .then((teacher_course) => {
      app.set('teacher_course', teacher_course);
      subscribe_details.subscriber.find({ teacher_email: teacher_email })
        .then((teacher_subs) => {
          console.log(teacher_course)
          console.log(teacher_subs)
          res.redirect("/view_teacher_details")
        })

    })
  // res.render('e_usersubscriber.ejs', { data: "shivani" })
});

app.get("/view_teacher_details", (req, res, next) => {
  const te_course = app.get("teacher_course");
  console.log(te_course)
  res.render("e_usersubscriber.ejs", { teacher_data: te_course })
})

app.get("/data_reading", (req, res) => {
  res.sendFile(path.join(__dirname + '/views/e_course.html'));

  // res.sendFile(path.join(__dirname + 'e_course.html'));

})


function randomString(len, charSet) {
  charSet = charSet || 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  var randomString = '';
  for (var i = 0; i < len; i++) {
    var randomPoz = Math.floor(Math.random() * charSet.length);
    randomString += charSet.substring(randomPoz, randomPoz + 1);
  }
  return randomString;
};


app.post('/city', (req, res) => {
  const body = {
    "course_chepters": [
      {
        "chepter_name": "chepter1",
        "chepter_title": "aptitute learning",
        "chepter_lession": [
          {
            "lession_name": "aptitute intro",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499"
          },
          {
            "lession_name": "aptitute basic",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499"
          },
          {
            "lession_name": "apptitude advance",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499"
          },
          {
            "lession_name": "aptitute advanced pro max",
            "title": "aptitute se hoga",
            "description": "aptitue se behter kuchh nhi",
            "course_type": "free",
            "teacherEmail": "shivanic178@gmail.com",
            "Date": "2020-11-02 10: 44: 39.499"
          }
        ]

      }
    ],
    "desciption": "this is the course for uppsc and we will teach you nicely so that you will grow up.",
    "course_name": "gee",
    "course_price": 450,
    "course_type": "free",
    "teacherEmail": "shivanic144@gmail.com"
  }

  const a = new categorySchema.sb_details(body);
  a.save()
    .then(response => {
      console.log('saved to mongo db', response);
      res.json(response);
    })
    .catch(error => {
      console.log('error in saving to mongo db', error);
      res.json(error);
    });
});

app.use('/image_upload', images)
app.use('/admin', admin)
app.use('/elearning', routes);
app.use('/forget_pass', forgot_password)
// app.use("/user_course",course)
app.listen(PORT, () => {
  console.log('Server is listening on Port:', PORT)
})
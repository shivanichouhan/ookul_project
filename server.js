// server/server.js
const LocalStorage = require('node-localstorage').LocalStorage;
const upload_image = require("./routes/update_profile")
const express = require('express');
const mongoose = require('mongoose');
var bodyParser = require('body-parser')
var fs = require("fs")
var redis   = require("redis");

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
var client  = redis.createClient();

var forgot_password = require("./routes/forget_pass");
var multer = require("multer")
const app = express();
app.use(express.static(path.join(__dirname, 'elearning')));
app.set('view engine', 'ejs');
app.use(express.static(path.join(__dirname, 'ookulprojet')));
const PORT = process.env.PORT || 3000;
app.use(cookieParser())
app.use(session({
  secret: 'ssshhhhh',
  // create new redis store.
  store: new redisStore({ host: 'localhost', port: 6379, client: client,ttl :  260}),
  saveUninitialized: false,
  resave: false
}));
app.use(bodyParser.urlencoded({
  extended: false
}));

mongoose
  .connect('mongodb://localhost:27017/sveltose', {
    useUnifiedTopology: true,
    useNewUrlParser: true
  })
  .then(() => {
    console.log('Connected to the Database successfully');
  });

passport.use(
  new googleStrategy({
      clientID: "732164575367-ob4c3sv91cmbj8n9fni0jbk6d7gkgc1m.apps.googleusercontent.com",
      clientSecret: "sB9-OudRO3mTRWLRdm1wlLp_",
      callbackURL: "/auth/google/return"
    },
    function (accessToken, refreshToken, profile, done) {
      console.log("access token", accessToken);
      console.log("refress token", refreshToken);
      console.log("profile", profile);
      console.log("done", done)

    })

)

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

// app.get('/update_image', (req, res) => {
//   console.log("for profile", req.session.id)
//   res.sendFile(path.join(__dirname + '/elearning/u_account.html'));

// })

app.get('/logout',function(req,res){
  req.session.destroy(function(err){
      if(err){
          console.log(err);
      } else {
          res.redirect('/');
      }
  });
});

app.get("/auth/facebook", passport.authenticate("facebook", {
  scope: ["profile", "email"]
}))

app.get("/auth/facebook/login/callback", passport.authenticate("facebook", {

}))

app.get("/auth/google", passport.authenticate("google", {
  scope: ["profile", "email"]
}));


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
app.get("/reset_pass/:otps", (req, res) => {
  res.sendFile(path.join(__dirname + '/elearning/reset_password.html'));
})

app.post("/reset_password", async (req, res, next) => {
  let localStorage = new LocalStorage('./scratch');
  let u_email = JSON.parse(JSON.stringify(localStorage.getItem('forget_email')));
  console.log(typeof(u_email))
  console.log(req.body)
  const pass = req.body.password
  const confirm_pass = req.body.confirm_pass
  if (pass === confirm_pass) {
    const otp_data = await User.findOne({
      email: u_email
    })
    console.log(otp_data)
    let u_email = localStorage.setItem('user_data', otp_data);
    const hashedPassword = await hashPassword(pass);
    console.log(hashPassword)
    User.updateOne({
        email: u_email
      }, {
        $set: {
          password: hashedPassword
        }
      })
      .then((result) => {
        console.log(result)
        res.send("Your password is reset now you can login.")
      }).catch((err) => {
        res.send(err)
      })
  } else {
    res.send("Your Confirm Password Is wrong")
  }
})


app.post("/shivina", (req, res, next) => {
  console.log(req.body.name)
  res.send(req.body.name)
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
app.post('/image_upload', upload.single('filename'), (req, res, next) => { 
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
app.use('/elearning', routes);
app.use('/forget_pass', forgot_password)
app.listen(PORT, () => {
  console.log('Server is listening on Port:', PORT)
})
// server/server.js
const LocalStorage = require('node-localstorage').LocalStorage;
const upload_image = require("./routes/update_profile")
const express = require('express');
const mongoose = require('mongoose');
var bodyParser = require('body-parser')
var fs = require("fs")
var redis = require("redis");
var nodemailer = require("nodemailer")
const jwt = require('jsonwebtoken');

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

var forgot_password = require("./routes/forget_pass");
var multer = require("multer");
const {
  response
} = require('express');
const { findOne } = require('./models/user_schema');
const app = express();
app.use(express.static(path.join(__dirname, 'elearning')));
app.set('view engine', 'ejs');
app.use(express.static(path.join(__dirname, 'ookul_elearning/elearning')));
const PORT = process.env.PORT || 3000;
app.use(cookieParser())
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

//ejs file
app.engine('html', require('ejs').renderFile);
app.set('view engine', 'html');
app.set('views', __dirname);


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

app.get('/logout', function (req, res) {
  req.session.destroy(function (err) {
    if (err) {
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


// app.get('/admin', (req, res) => {
//   console.log(req.session.id)
//   res.sendFile(path.join(__dirname + '/elearning/index.html'));
// });


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
  res.sendFile(path.join(__dirname + '/ookul_elearning/elearning/index.html'));
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
  res.sendFile(path.join(__dirname + '/ookul_elearning/elearning/index_ookul.html'));
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
    if(req.body.country){
      data.country=req.body.country

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
app.get("/reset_pass/:otps", (req, res) => {
  res.sendFile(path.join(__dirname + '/elearning/reset_password.html'));
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

var upload = multer({
  storage: storage
});


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
  console.log(user_data, "**********************")
});

app.get("/first_exam_paper",(req,res,next)=>{
  res.sendFile(path.join(__dirname + '/ookul_elearning/elearning/ookultest.html'));
});

app.post("/test_paper",(req,res,next)=>{
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

app.get("/card_payment",(req,res)=>{
  res.sendFile(path.join(__dirname + '/ookul_elearning/elearning/ookul_cheakout.html'));

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

app.post('/create_checkout_session', async (req, res) => {
  const token = req.body.stripeToken
  console.log(token)
  const session = await stripe.checkout.sessions.create({
    payment_method_types: ['card'],
    line_items: [
      {
        price_data: {
          currency: 'INR',
          product_data: {
            name: 'T-shirt',
          },
          unit_amount: 2000,
        },
        quantity: 1,
      },
    ],
    mode: 'payment',
    success_url: 'https://example.com/success',
    cancel_url: 'https://example.com/cancel',
  });

  res.json({ id: session.id });
});

app.get("pay",(req,res)=>{
  res.sendFile(path.join(__dirname + '/ookul_elearning/elearning/payment.html'));
})

app.post('/payment', function(req, res){ 
  
  // Moreover you can take more details from user 
  // like Address, Name, etc from form 
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
          amount: 2500,     // Charing Rs 25 
          description: 'Web Development Product', 
          currency: 'INR', 
          customer: customer.id 
      }); 
  }) 
  .then((charge) => { 
      res.send("Success")  // If no error occurs 
  }) 
  .catch((err) => { 
      res.send(err)       // If some error occurs 
  }); 
})

app.get('/user_friend_sinup', (req, res, next) => {
  res.sendFile(path.join(__dirname + '/elearning/friend_signup.html'));

})

app.post('/invite_friend', (req, res, next) => {
  res.send("*********************************")
  if (req.session.email) {
    let friend_email = req.body.e_mail
    let user_mail = req.session.email;
    console.log(user_mail,friend_email)
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
          from: user_mail,
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

  // res.send('error')
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





function randomString(len, charSet) {
  charSet = charSet || 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
  var randomString = '';
  for (var i = 0; i < len; i++) {
    var randomPoz = Math.floor(Math.random() * charSet.length);
    randomString += charSet.substring(randomPoz, randomPoz + 1);
  }
  return randomString;
}


app.use('/elearning', routes);
app.use('/forget_pass', forgot_password)
app.listen(PORT, () => {
  console.log('Server is listening on Port:', PORT)
})
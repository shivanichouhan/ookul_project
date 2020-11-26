
// server/routes/route.js
const express = require('express');
const router = express.Router();
const userController = require('./userController');
const bodyParser = require('body-parser')
const urlencodedParser = bodyParser.urlencoded({
  extended: false
});
const bcrypt = require('bcryptjs');
const jwt = require("jsonwebtoken");
const LocalStorage = require('node-localstorage').LocalStorage;

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
const User = require("../models/user_schema")
router.use(fileUpload());


router.post('/signup', urlencodedParser, userController.signup);

router.post('/login', urlencodedParser, userController.login);

router.get('/user/:userId', urlencodedParser, userController.getUser);

router.get('/users/:userId', urlencodedParser, userController.getUsers);

router.put('/user/:userId', urlencodedParser, userController.updateUser);
// router.post('/add_ebook_course',urlencodedParser,userController)
router.delete('/user/:userId', urlencodedParser, userController.deleteUser);
router.post('/insertCourse', urlencodedParser, userController.add_courses)
router.get("/admin/allcourses", userController.get_all_courses)
router.post('/courses', userController.user_course)
router.post('/category_courses', userController.get_courses_by_category);
router.post('/admin/add/course', userController.add_course_by_admin)
router.post("/admin/add_course", userController.course_added)
// router.get('/courses',userController.get_all_courses)
router.get("/index", (req, res) => {
  res.sendFile(path.join(__dirname + '/view/index1.html'));

})
router.post('/ebook_data', user_data.user_library)

router.post('/add_to_cart', user_data.insert_in_cart)
router.get('/get_cart', user_data.get_cart)
router.post('/get_libraries', user_data.search_library)
router.get('/trending_course', user_data.trending_filter)
router.post('/price_filter', user_data.price_filter)
router.post('/user/subscribe', user_data.user_subscribe);
router.get('/users/teacher/subscriber', user_data.for_user_subscribe_list)

router.get('/user_details/todos', user_data.add_todo)
router.get("/example", user_data.example)
router.post("/teacher/add_course", user_data.add_courses_by_teacher)
// router.post('/social_sharing',user_data.sharing_to_friend)

// router.post("/reset_pass",urlencodedParser,userController.ResetPassword)

// var admin_auth = function (req, res, next) {
//   if (req.session && req.session.email === "admin123@gmail.com" && req.session.admin)
//     return next();
//   else
//     return res.sendStatus(401);
// };

//admin


async function validatePassword(plainPassword, hashedPassword) {
  return await bcrypt.compare(plainPassword, hashedPassword);
}

router.post("/admin_login", async(req, res, next) => {
  try {
    const {
      email,
      password,
      role
    } = req.body;
    console.log(req.body.email)
    const user = await User.findOne({
      email
    });
    req.session.email = req.body.email;
    if (!user) return next(new Error('Email does not exist'));
    const validPassword = await validatePassword(password, user.password);
    if (!validPassword) return next(new Error('Password is not correct'))
    const accessToken = jwt.sign({
      userId: user._id
    }, 'shivaniji', {
      expiresIn: "1d"
    });
    await User.findByIdAndUpdate(user._id, {
      accessToken
    })
    const sessionId = req.session.id
    console.log(sessionId, user._id)
    await User.findByIdAndUpdate(user._id, {
      session: sessionId
    })
    // const userRole = await User.findOne({
    //     role
    // });
    let localStorage = new LocalStorage('./scratch');
    localStorage.setItem('user_login_id', user._id);
    console.log(user, "*************")
    localStorage.setItem('user_login_email', user.email);
    res.redirect("/deshboard_details")
  } catch (err) {
    console.log(err)
    res.send(err)
  }
})

router.post("/create_exam_paper", (req, res, next) => {
  try {
    let post = req.body;
    console.log(post)
    const session = "shivani1s322@gmail.com";
    // exam_question.find({questions: { "$in" :post.questions} })
    // .then((resp)=>{
    //   if(resp.length == 0){
    //     res.send("this question already exists")

    //   }else{
    exam_question.find({ teacher_name: session })
      .then((qu_resp) => {
        if (qu_resp.length === 0) {
          const data = {
            teacher_name: session,
            category: [post.category],
            Course_topic: [post.Course_topic],
            questions: [post.questions],
            opetion1: [post.opetion1],
            opetion2: [post.opetion2],
            opetion3: [post.opetion3],
            opetion4: [post.opetion4],
            opetion5: [post.opetion5],
            right_answer: [post.right_answer]
          }
          const question = new exam_question(data)
          question.save()
            .then((q_resp) => {
              console.log("new questions added sucessfuly");
              console.log(q_resp);
              res.redirect("/create_questions")

            })
        } else {
          const a = qu_resp[0]
          // qu_resp.questions.push(post.questions)
          exam_question.update({ _id: a._id }, { $push: { category: [post.category], Course_topic: [post.Course_topic], questions: [post.questions], opetion1: [post.opetion1], opetion2: [post.opetion2], opetion3: [post.opetion3], opetion4: [post.opetion4], opetion5: [post.opetion5], right_answer: [post.right_answer] } }, { multi: true })
            // {$set:{category:post.category}},
            // ,{ $push: { right_answer: post.right_answer } }, { $push: { opetion1: post.opetion1 } }, { $push: { opetion2: post.opetion2 } }, { $push: { opetion3: post.opetion3 } }, { $push: { opetion4: post.opetion4 } },{$push:{opetion5:post.opetion5}})
            .then((resp) => {
              console.log(resp)
              console.log("data added succesfully")
              res.redirect("/create_questions");
            })
        }

      })

    // 
    // }
    // })

  } catch (err) {
    res.send(err);
  }
})


passport.use(
  new facebookStrategy({
    clientID: "425048305152330",
    clientSecret: "0c10639980efc88d7e3a377a5de5bdd6",
    callbackURL: "http://localhost:3000/auth/facebook"
  },
    function (profile) {
      console.log("profile", profile);
    })
)
router.get("/auth/facebook", passport.authenticate("facebook", {
  scope: ["profile", "email"]
}))

router.get("/auth/facebook/login/callback", passport.authenticate("facebook", {

}))

// router.get('/auth/google/return', (req, res) => {
//     res.send("succcessfully login.")
// })


module.exports = router





//   const storage = new GridFsStorage({
//     url: 'mongodb://localhost:27017/sveltose',
//     file: (req, file) => {
//       return new Promise((resolve, reject) => {
//         crypto.randomBytes(16, (err, buf) => {
//           if (err) {
//             return reject(err)
//           }
//           const filename = file.originalname
//           const fileInfo = {
//             filename: filename,
//             bucketName: 'uploads',
//           }
//           resolve(fileInfo)
//         })
//       })
//     },
//   })

//   const upload = multer({ storage })

//   router.post('/myimage', upload.single('myfile'), (req, res, err) => {
//     console.log(req.file)
//     if (err) throw err
//     res.status(201).send("good work")
//   })
// module.exports = router;









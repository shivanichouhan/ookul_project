
// server/routes/route.js
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
  
const uploadController = require("./upload");
const homeController = require("./home");
const GridFsStorage= require("multer-gridfs-storage")
var fileUpload = require('express-fileupload');
const multer = require("multer")
const user_data =  require("./user_details")
router.use(fileUpload());


router.post('/signup',urlencodedParser, userController.signup);
 
router.post('/login',urlencodedParser, userController.login);
 
router.get('/user/:userId',urlencodedParser, userController.getUser);
 
router.get('/users/:userId',urlencodedParser, userController.getUsers);
 
router.put('/user/:userId',urlencodedParser, userController.updateUser);
// router.post('/add_ebook_course',urlencodedParser,userController)
router.delete('/user/:userId',urlencodedParser, userController.deleteUser);
router.post('/insertCourse',urlencodedParser,userController.insert_course)
router.get("/admin/allcourses",userController.getCourses)
router.get('/courses/:course',userController.user_course)
router.get('/course/cart',userController.addCourseInCart)
router.get("/index",(req,res)=>{
    res.sendFile(path.join(__dirname + '/view/index1.html'));
  
  })
router.post('/add_to_cart',user_data.insert_in_cart)

// router.post("/reset_pass",urlencodedParser,userController.ResetPassword)


passport.use(
  new facebookStrategy({
      clientID:"425048305152330",
      clientSecret:"0c10639980efc88d7e3a377a5de5bdd6",
      callbackURL:"http://localhost:3000/auth/facebook"
  },
  function(profile){
      console.log("profile",profile);
})
)
router.get("/auth/facebook",passport.authenticate("facebook",{
  scope:["profile","email"]
}))

router.get("/auth/facebook/login/callback",passport.authenticate("facebook",{

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
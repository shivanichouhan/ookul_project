// var express = require("express");
// var router = express.Router();
// const path = require('path');
// var passport = require("passport")
// const user_detail = require("../models/otp_schema")
// var googleStrategy = require("passport-google-oauth20").Strategy;


// router.post("/insert",(req,res)=>{
//     let mail = req.body.email
//     let pass=req.body.pass
//     let name = req.body.name
//     let details = {
//         email:mail,
//         age:age
//     }
//     let msg = new EmailModel(details)
//       msg.save()
//          .then(doc => {
//            console.log(doc)
//            res.send(doc)
//          })
//          .catch(err => {
//            console.error(err)
//            res.send(err)
//          })})

// passport.use(
//     new googleStrategy({
//             clientID: "732164575367-ob4c3sv91cmbj8n9fni0jbk6d7gkgc1m.apps.googleusercontent.com",
//             clientSecret: "sB9-OudRO3mTRWLRdm1wlLp_",
//             callbackURL: "/auth/google/return"
//         },
//         function (accessToken, refreshToken, profile, done) {
//             console.log("access token", accessToken);
//             console.log("refress token", refreshToken);
//             console.log("profile", profile);
//             console.log("done", done)

//         })
// )

// router.get('/auth/google/return', (req, res) => {
//     res.send("succcessfully login.")
// })

// router.get('/data', (req, res) => {
//     res.sendFile(path.join(__dirname + '/view/login.html'));
// })

// router.get("/auth/google", passport.authenticate("google", {
//     scope: ["profile", "email"]
// }));

// module.exports = router
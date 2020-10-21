var express = require("express");
var router = express.Router();
const path = require('path');
const user = require("../models/user_schema")
const ejs = require("ejs")
// var otpGenerator = require("otp-generator")
var nodemailer=require("nodemailer")
var bodyParser=require('body-parser')
const parser = bodyParser.urlencoded({
    extended: false
})
var otpGenerator = require("otp-generator")
let cookieParser = require('cookie-parser'); 

router.use(bodyParser.json());
router.use(cookieParser()); 

// router.use(express.static(path.join(__dirname, 'public')));
router.get("/data3",(req,res)=>{
    res.sendFile(path.join(__dirname + '/view/forget.html'));
})

router.get("/forgot_pass",(req,res)=>{
    res.sendFile(path.join(__dirname + '/view/email.html'));
});

router.get("/confirm_otp",(req,res)=>{
    res.sendFile(path.join(__dirname + '/view/confirm_otp.html'));
})

router.post('/sent_otp',parser,(req,res)=>{
    var otp = otpGenerator.generate(6,{upperCase:false,specialChars:false,alphabets:false})
    var emails = req.body.email
    const LocalStorage = require('node-localstorage').LocalStorage;
    let localStorage = new LocalStorage('./scratch');
    localStorage.setItem("forget_email",emails)
    
    console.log(emails)
    let mailTransporter = nodemailer.createTransport({ 
        service: 'gmail', 
        auth: { 
            user: 'shivanic18@navgurukul.org', 
            pass: 'Chouhan18@'
        } 
      });
      user.update({email:emails}, {$set: {otp:otp}})
      .then((respo)=>{
        let mailDetails = { 
            from: 'shivanic18@navgurukul.org', 
            to: emails, 
            subject: 'Your Otp', 
            html: "<h3>OTP for account verification is </h3>"  + "<h1 style='font-weight:bold;'>" + otp +"</h1>" 
          }; 
          mailTransporter.sendMail(mailDetails, function(err, data) { 
            if(err) { 
              console.log(err)
                console.log('Error Occurs'); 
            } else { 
                console.log('Email sent successfully');
                res.redirect('/confirm_otp')
            } 
          }); 
      })
     
})

router.post('/verify',parser,function(req,res){
    const user_otp = req.body.otp
    console.log(user_otp)
    user.findOne({otp:user_otp})
    .then((respo)=>{
        console.log(respo)
        console.log("----",req.body.otp)
        if(user_otp==respo.otp){
            res.redirect("/reset_pass/"+user_otp)
        }
        else{
            console.log("error found")
            res.send('otp',{msg : 'otp is incorrect'});
        }
    })
   
});  



module.exports = router


// const url = require('url');

// const current_url = new URL('http://usefulangle.com/preview?id=123&type=article');
// const search_params = current_url.searchParams;

// // true
// if(search_params.has('id')) {
//     const id = search_params.get('id');

//     console.log(id)
// }

// // false
// if(search_params.has('name')) {
//     console.log("name")
// }
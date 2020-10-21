var express = require("express");
var router = express.Router();
const path = require('path');
var otpGenerator = require("otp-generator")
var nodemailer=require("nodemailer")
var bodyParser=require('body-parser')
const parser = bodyParser.urlencoded({
    extended: false
})
router.use(bodyParser.json());


router.get("/data3",(req,res)=>{
    res.sendFile(path.join(__dirname + '/view/forget.html'));
})

router.get("/forgot_pass",(req,res)=>{
    res.sendFile(path.join(__dirname + '/view/email.html'));
});

router.get("/confirm_otp",(req,res)=>{
    res.sendFile(path.join(__dirname + '/view/confirm_otp.html'));
})

var otp = otpGenerator.generate(6,{upperCase:false,specialChars:false,alphabets:false})
var varify_otp = otp
router.post('/sent_otp',parser,(req,res)=>{
    // console.log("======",req.body,"--------")
    var emails = req.body.email
    console.log(emails)
    let mailTransporter = nodemailer.createTransport({ 
        service: 'gmail', 
        auth: { 
            user: 'shivanic18@navgurukul.org', 
            pass: 'Chouhan18@'
        } 
      });
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

router.post('/verify',parser,function(req,res){
    console.log(varify_otp)
    console.log("----",req.body.otp)
    if(req.body.otp==varify_otp){
        res.send("You has been successfully registered");
    }
    else{
        console.log("error found")
        res.send('otp',{msg : 'otp is incorrect'});
    }
});  



module.exports = router
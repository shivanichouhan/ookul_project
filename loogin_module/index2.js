var express = require("express");
var app = express();
var otpGenerator = require("otp-generator")
var nodemailer=require("nodemailer")

app.get("/otp",function(req,res){
})

let mailTransporter = nodemailer.createTransport({ 
  service: 'gmail', 
  auth: { 
      user: 'shivanic18@navgurukul.org', 
      pass: 'Chouhan18@'
  } 
});
var otp = otpGenerator.generate(6,{upperCase:false,specialChars:false,alphabets:false})
let mailDetails = { 
  from: 'shivanic18@navgurukul.org', 
  to: 'shivanichouhan144@gmail.com', 
  subject: 'Your Otp', 
  html: '<html><body><h3>This is your Forget password OTP.</h3></body></html>'+otp
}; 


mailTransporter.sendMail(mailDetails, function(err, data) { 
  if(err) { 
    console.log(err)
      console.log('Error Occurs'); 
  } else { 
      console.log('Email sent successfully'); 
  } 
}); 


app.listen(4000, () => console.log('server is listening 4000....'));
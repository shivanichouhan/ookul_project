var express = require("express");
var router = express.Router();
const path = require('path');
const user = require("../models/user_schema")
const ejs = require("ejs")
const LocalStorage = require('node-localstorage').LocalStorage;
const bcrypt = require('bcryptjs');

// var otpGenerator = require("otp-generator")
var nodemailer = require("nodemailer")
var bodyParser = require('body-parser')
const parser = bodyParser.urlencoded({
    extended: false
})
var otpGenerator = require("otp-generator")
let cookieParser = require('cookie-parser');
const {
    response
} = require("express");

router.use(bodyParser.json());
router.use(cookieParser());

//google celender API ID -
// 584600617439-t5squ8169219l242aqqldsg65bpopcga.apps.googleusercontent.com

// CLIENT SECERET = UbPjv0rrsCjEIL8S7jMN6_A_

router.post("/block_student", (req, res, next) => {
    const email = req.body.email;
    const block = req.body.is_allow
    user.find({
            email: email
        })
        .then((response) => {
            if (response.length == 0) {
                res.send("their is no user for block please write right name")
            } else {
                const res_data = response[0];

                if (block == "block") {
                    if (res_data.is_allow == 1) {
                        res.send("You already block this account")
                    } else {
                        user.findByIdAndUpdate(res_data._id, {
                                $set: {
                                    is_allow: 1
                                }
                            })
                            .then((update) => {
                                res.send(update)
                                console.log(update)
                            })
                    }
                } else {

                }


            }

        })
})

module.exports = router
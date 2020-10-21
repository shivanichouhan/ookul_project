const User = require('../models/user_schema');
const jwt = require('jsonwebtoken');
const bcrypt = require('bcryptjs');
var session = require('express-session');
var multer = require('multer');
const fs = require('fs')
const path = require('path')
const categorySchema = require('../models/category_course')
const courseSchema = require('../models/courses_schema')
// const user_cart = require("../models/cart_lession_schema");
const cart = require('../models/user_cart_course');

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



exports.user_add_course = async (req, res, next) => {
    try {
        const {
            chepter,
            chepter_titl,
        } = req.body
        const {
            lession,
            title,
            email,
            filename,
            date,
            course_type,
            course_categry
        } = req.body
        const new_course = {
            lession_name: lession,
            title: title,
            lession_category: course_categry,
            description: description,
            course_type: course_type,
            teacherEmail: email,
        }
    } catch (error) {
        next(error)
    }
}


const total_price = (cart_course) => {
    var total_price = 0.0
    for (var i = 0; i < cart_course.length; i++) {
        var course_price = cart_course[i]
        total_price = total_price + course_price
    }
    return total_price
}


exports.insert_in_cart = async (req, res, next) => {
            if (req.session.email) {
                var chepter = await categorySchema.sb_details.findOne({
                        course_name: req.body.course
                    })
                    .populate('chepters').populate('lessions')
                    .exec(function (error, results) {
                        if (error) return error;
                        cart.find()
                            .then((result) => {
                                cart.find({
                                        'cart.course_name': req.body.course
                                    })
                                    .then((data) => {
                                        var cart_course_price = total_price(data)
                                        var count_courses = result.length
                                        console.log(data)
                                        if (data.length == 0) {
                                            var new_cart_course = new cart({
                                                count_course: count_courses,
                                                cart_total_price: cart_course_price
                                            })
                                            console.log(new_cart_course)
                                            new_cart_course.cart.push(results)
                                            return new_cart_course.save()
                                                .then((resp) => {
                                                    console.log(resp)
                                                    res.send(resp)
                                                }).catch((err) => {
                                                    console.log(err)
                                                    res.send("error aai hai")
                                                })
                                        } else {
                                            res.send("you already add this course in cart")
                                        }
                                    })
                            });
                    });
            }else{
                console.log("you have to login first")
                res.send('/home')
            }
        }
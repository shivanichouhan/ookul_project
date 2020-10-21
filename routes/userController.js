const User = require('../models/user_schema');
const jwt = require('jsonwebtoken');
const bcrypt = require('bcryptjs');
var session = require('express-session');
var multer = require('multer');
const fs = require('fs')
const path = require('path')
var fileUpload = require('express-fileupload');
// const categorySchema = require('../models/category_course')
const LocalStorage = require('node-localstorage').LocalStorage;

const categoriSchema = require("../models/category_course")
const courseSchema = require('../models/courses_schema')

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

const {
    roles
} = require('../server/role');
const {
    json
} = require('body-parser');

async function hashPassword(password) {
    return await bcrypt.hash(password, 10);
}

async function validatePassword(plainPassword, hashedPassword) {
    return await bcrypt.compare(plainPassword, hashedPassword);
}

exports.signup = async (req, res, next) => {
    try {
        console.log(req.body, "-------")

        const {
            email,
            password,
            role,
            mob_number,
            sername,
            name,
        } = req.body
        const hashedPassword = await hashPassword(password);
        console.log(hashPassword)
        const newUser = new User({
            email: email,
            password: hashedPassword,
            role: role,
            mob_number: mob_number,
            sername: sername,
            name: name
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
        // localStorage.setItem("token",newUser)
        await newUser.save()
            .then((data) => {

                if (data.role == 'teacher') {
                    res.redirect('/teacher')
                    console.log("teacher")
                } else if (data.role == "student") {
                    console.log("student/" + data._id)
                    res.redirect('/student')
                }
            })
    } catch (error) {
        next(error)
    }
}


exports.login = async (req, res, next) => {
    try {
        const {
            email,
            password,
            role
        } = req.body;
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
        const userRole = await User.findOne({
            role
        });
        let localStorage = new LocalStorage('./scratch');
        localStorage.setItem('user_login_id', userRole._id);
        console.log(userRole, "*************")
        localStorage.setItem('user_login_email', userRole.email);
        if (userRole.role == "admin") {
            console.log("----admin")
            res.redirect('/admin')
        } else if (userRole.role == 'teacher') {
            res.redirect('/teacher')
            console.log("teacher")
        } else if (userRole.role == "student") {
            console.log("student/" + userRole._id)
            res.redirect('/student')
        }
        return userRole

    } catch (error) {
        next(error);
    }
}


exports.getUsers = async (req, res, next) => {
    const users = await User.find({});
    res.status(200).json({
        data: users
    });
}

exports.getUser = async (req, res, next) => {
    try {
        const userId = req.params.userId;
        const user = await User.findById(userId);
        if (!user) return next(new Error('User does not exist'));
        res.status(200).json({
            data: user
        });
    } catch (error) {
        next(error)
    }
}


exports.insert_course = async (req, res, next) => {
    try {
        // if (req.session.email) {
            const {
                lession_name,
                titles,
                lession_category,
                description,
                urls,
                image,
                course_type,
                teacher_name,
                teacher_email,
                chepter,
                chepter_titl,
                email
            } = req.body
            console.log(req.body)

            const new_course = {
                lession_name: lession_name,
                title: titles,
                lession_category: lession_category,
                description: description,
                urls: urls,
                course_type: course_type,
                image: image,
                teacherName: teacher_name,
                teacherEmail: teacher_email,

            }
            if (req.body.course_price != null) {
                new_course.new_course = req.body.course_price
            } else {
                const lessions = new courseSchema(new_course)
                await lessions.save()
                    .then((result) => {
                        // categoriSchema.chepter.findOne({'chepter_name':req.body.chepter})
                        // .then((chepters)=>{
                        //     if (chepters.length != 0){


                        //     }const chepter = chepters;

                        // })
                        const chepter = new categoriSchema.chepter({
                            chepter_name: req.body.chepter,
                            chepter_title: chepter_titl
                        })
                        chepter.chepter_lession.push(result)
                        return chepter.save()
                    }).then(function (resp) {
                        const sub = req.body.sub
                        console.log(resp, "chepter Added sucessfuly");
                        const subjects = new categoriSchema.sb_details({
                            course_name: sub
                        })
                        subjects.course_chepters.push(resp)
                        return subjects.save()
                    }).then((results) => {
                        console.log(results.course_name)
                        console.log(results._id)
                        let localStorage = new LocalStorage('./scratch');
                        const user_data = localStorage.setItem("course_id", results._id)
                        console.log(results, "subject added succesfully")
                        const categories = req.body.category
                        const category_detail = new categoriSchema.categories({
                            categoryName: categories
                        })
                        category_detail.uppsc.push(results)
                        return category_detail
                    }).then((respns) => {
                        console.log(respns._id)

                        console.log(respns, "categories added succesfully")
                        res.send(respns)
                    })
                    .catch(function (error) {
                        console.log(error);
                        res.send("hm nhi thik hue")
                    });
            }
        // }else{
        //     res.redirect('/home')
        //     // res.send("First You have to login page")
        // }
        } catch (error) {
            next(error)
        }
    
};




exports.updateUser = async (req, res, next) => {
    try {
        const update = req.body
        const userId = req.params.userId;
        await User.findByIdAndUpdate(userId, update);
        const user = await User.findById(userId)
        res.status(200).json({
            data: user,
            message: 'User has been updated'
        });
    } catch (error) {
        next(error)
    }
}

exports.deleteUser = async (req, res, next) => {
    try {
        const userId = req.params.userId;
        await User.findByIdAndDelete(userId);
        res.status(200).json({
            data: null,
            message: 'User has been deleted'
        });
    } catch (error) {
        next(error)
    }
}



exports.grantAccess = function (action, resource) {
    return async (req, res, next) => {
        try {
            const uid = req.params.userId
            const roleId = await User.findById(uid);
            next();
            const permission = roles.can(roleId.role)[action](resource);
            console.log(permission)
            if (!permission.granted) {
                return res.status(401).json({
                    error: "You don't have enough permission to perform this action"
                });
            }
            next()
        } catch (error) {
            next(error)
        }
    }
}


exports.getCourses = async (req, res, next) => {
    try {
        const courses = await User.find();
        res.status(200).json({
            data: courses,
            message: 'all Courses'
        });
    } catch (error) {
        next(error)
    }
}



exports.user_course = async (req, res, next) => {
    var filter = {$or:[{'course_name':{
        '$regex': req.params.course
    }},{'library':{'$regex':req.params.course}},{'teacherName':{'$regex':req.params.course}},{'teacherEmail':{'$regex':req.params.course}}]}
    const search_courses = await categoriSchema.sb_details.find(filter).populate('chepters')
    res.send(search_courses)
};


exports.addCourseInCart = async (req, res, next) => {
    try {
        const courseName = req.params.courseName;
        const categories = req.body.category;
        const cart = await categoriSchema.find({
            // 'course.course': courseName
        });

        res.status(200).json({
            data: cart,
            message: 'course Added in cart'
        });
    } catch (error) {
        next(error)
    }
}

exports.getCourses_for_user = (req, res, next) => {
    try {
        categoriSchema.aggregate([{
                "$match": {
                    "categoryName": req.body.course_name
                }
            }])
            .then((courses) => {
                res.status(200).json({
                    data: courses,
                    message: 'Courses'
                });
            }).catch((err) => {
                next(err)
            })

    } catch (error) {
        next(error)
    }
}

// exports.allowIfLoggedin = async (req, res, next) => {
//     try {
//         const user = res.locals.loggedInUser;
//         if (!user)
//             return res.status(401).json({
//                 error: "You need to be logged in to access this route"
//             });
//         req.user = user;
//         next();
//     } catch (error) {
//         next(error);
//     }
// }



// categoriSchema.sb_details.aggregate([{
//     '$match': {
//         'course': {
//             "$elemMatch": {
//                 '$or': [{
//                         'course': {
//                             '$regex': req.params.course
//                         }
//                     },
//                     {
//                         'categoryName': {
//                             '$regex': req.params.course
//                         }
//                     }, {
//                         'teacherName': {
//                             '$regex': req.params.course
//                         }
//                     }, {
//                         'teacherEmail': {
//                             '$regex': req.params.course
//                         }
//                     }
//                 ]
//             }
           
//         }
//     }
// }]).allowDiskUse(true)
// .exec(function (err, data) {
//     if (err) return console.log('err', err)
//     const course = data[0].course
//     res.send(course)
//     console.log('data', course);
// });
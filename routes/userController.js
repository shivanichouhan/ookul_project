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
const mongoose = require("mongoose")
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

function randomString(len, charSet) {
    charSet = charSet || 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    var randomString = '';
    for (var i = 0; i < len; i++) {
        var randomPoz = Math.floor(Math.random() * charSet.length);
        randomString += charSet.substring(randomPoz, randomPoz + 1);
    }
    return randomString;
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
        let user_roles = 0;
        if (req.body.role === "admin") {
            user_roles = 1
        } else if (req.body.role === "teacher") {
            user_roles = 2
        } else if (req.body.role == "student") {
            user_roles = 3
        }
        var randomValue = randomString(8, 'PICKCHAR45SFROM789THI123SSET');
        console.log(randomValue)
        const hashedPassword = await hashPassword(password);
        console.log(hashPassword)
        const newUser = new User({
            email: email,
            password: hashedPassword,
            role: role,
            mob_number: mob_number,
            sername: sername,
            name: name,
            user_saring_code: randomValue,
            user_role_status: user_roles
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

var auth = function (req, res, next) {
    if (req.session && req.session.email === "admin123@gmail.com" && req.session.admin)
        return next();
    else
        return res.sendStatus(401);
};

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
        // const userRole = await User.findOne({
        //     role
        // });
        let localStorage = new LocalStorage('./scratch');
        localStorage.setItem('user_login_id', user._id);
        console.log(user, "*************")
        localStorage.setItem('user_login_email', user.email);
        if (user.role == 'teacher') {
            res.redirect('/teacher')
            console.log("teacher")
        } else if (user.role == "student") {
            console.log("student/" + user._id)
            res.redirect('/student')
        }

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

exports.add_courses = async (req, res, next) => {
    try {
        const {
            lession_name,
            titles,
            lession_category,
            description,
            urls,
            image,
            course_type,
            c_price,
            teacher_name,
            teacher_email,
            chepter,
            chepter_titl,

            date,
            courseName
        } = req.body


        if (req.body.course_price != null) {
            new_course.new_course = req.body.course_price
        } else {
            const new_course = new categoriSchema.sb_details({
                course_name: courseName,
                course_price: c_price,
                teacherName: teacher_name,
                teacherEmail: teacher_email
            })
            await new_course.save()
                .then((result) => {
                    return result
                }).then((course) => {
                    const chepters = new categoriSchema.chepter({
                        chepter_name: chepter,
                        chepter_title: chepter_titl
                    })
                    chepters.save(chepters)
                        .then((chepters1) => {
                            categoriSchema.sb_details.findByIdAndUpdate(course._id, {
                                $push: {
                                    course_chepters: chepters1
                                }
                            }, {
                                new: true,
                                useFindAndModify: false
                            })
                                .then((chourse_chep) => {
                                    console.log(chourse_chep)
                                    return chourse_chep
                                }).then((chepter_details) => {
                                    console.log("chepters with lessions", chepter_details)
                                    const new_lession = new courseSchema({
                                        lession_name: lession_name,
                                        title: titles,
                                        lession_category: lession_category,
                                        description: description,
                                        course_type: course_type,
                                        image: image,
                                        teacherEmail: teacher_email
                                    })
                                    new_lession.save()
                                        .then((lessions) => {
                                            console.log(lessions)
                                            categoriSchema.chepter.findByIdAndUpdate(chepter_details._id, {
                                                $push: {
                                                    chepter_lession: lessions
                                                }
                                            }, {
                                                new: true,
                                                useFindAndModify: false
                                            }).then((chepters_detail) => {
                                                console.log(chepters_detail)
                                                res.send("course added succesfully")
                                            })
                                        })



                                })
                        })

                })
          






        }
    } catch (error) {
        next(error)
    }
}

exports.add_course_by_admin = async (req, res, next) => {
    try {
        const {
            lession,
            title,
            email,
            filename,
            date,
            course_type,
            course_category,


        } = req.body

        const new_course = {
            course_name: lession,
            course_price: title,
            teacherName: course_category,
            teacherEmail: course_type,
            description: email,
            language:lan,
            catagory:sub,
            course_image:img,
            courseType:type
        }
        const a = req.body.category_name

        console.log(a)
        const category = {
            categoryName: a
        }
        const lession_data = {
            lession_name: req.body.lessions,
            title: req.body.title,
            // lession_category: req.body.lession_categori,
            description: req.body.desc,
            course_type: req.body.type,
            teacherEmail: req.body.email
            // Date: req.body.date
        };

        const new_chepter = {
            chepter_name: req.body.chepter_name,
            chepter_title: req.body.chepterTitle
        }
        const obj = {}
        obj[a] = { $exists: true, $ne: null }
        console.log(obj, "OOOOOOOOOOOOOOOOOOO")
        categoriSchema.categories.find(obj)
            .then((category_exists) => {
                if (category_exists.length == 0) {
                    categoriSchema.sb_details.find({ course_name: lession })
                        .then((course_check) => {
                            if (course_check.length == 0) {
                                const create_course = new categoriSchema.sb_details(new_course);
                                create_course.save()
                                    .then((course_resp) => {
                                        console.log("course created", course_resp);
                                        const data = {}
                                        const ar = []
                                        ar.push(course_resp._id)
                                        data[a] = ar
                                        const add_in_category = new categoriSchema.categories(data)
                                        add_in_category.save()
                                            .then((course_added_category) => {
                                                const obj1 = {}
                                                const chepterName = req.body.chepter_name;
                                                obj[chepterName] = { $exists: true, $ne: null }
                                                console.log(obj1, "**^&&&&&&&&&&&&&&&&")
                                                categoriSchema.chepter.find(obj1)
                                                    .then((chepter_resp) => {
                                                        if (chepter_resp.length == 0) {
                                                            const lession = new courseSchema(lession_data)
                                                            lession.save()
                                                                .then((lesion_result) => {
                                                                    console.log(lesion_result, "lession added succesfuly");
                                                                    return lesion_result
                                                                }).then((les_resp) => {
                                                                    categoriSchema.chepter_details.find({ chepter_name: chepterName })
                                                                        .then((chepter_resp) => {
                                                                            if (chepter_resp.length == 0) {
                                                                                const chep_detail = new categoriSchema.chepter_details({
                                                                                    chepter_name: chepterName,
                                                                                    chepter_title: req.body.chepter_titl
                                                                                })
                                                                                chep_detail.save()
                                                                                    .then((che_added) => {
                                                                                        console.log(che_added, "%%%%%%%%%%%%%%%%%")
                                                                                        che_added.chepter_lession.push(les_resp._id)
                                                                                            .then((chepter_added_sucess) => {
                                                                                                console.log("chepter_details ", chepter_added_sucess)
                                                                                                const data1 = {}
                                                                                                const ar1 = []
                                                                                                ar1.push(chepter_added_sucess._id)
                                                                                                data1[chepterName] = ar
                                                                                                const new_chepter = new categoriSchema.chepter(data1)
                                                                                                new_chepter.save()
                                                                                                    .then((chepter_created) => {
                                                                                                        console.log("chepter created and added lession succes fully", chepter_created)
                                                                                                    })
                                                                                            })
                                                                                        // console.log("chepter_details_added", che_added)
                                                                                    })
                                                                            } else {
                                                                                const abc = chepter_resp[0]
                                                                                categoriSchema.chepter_details.findByIdAndUpdate(abc._id, { $push: { chepter_lession: les_resp } })
                                                                                    .then((chepter_detail_updated) => {
                                                                                        console.log("chepter details updated", chepter_detail_updated);
                                                                                    })

                                                                            }
                                                                        })
                                                                    // res.send(course_added_category)
                                                                })
                                                        } else {
                                                            const lession = new courseSchema(lession_data)
                                                            lession.save()
                                                                .then((lesion_result) => {
                                                                    console.log(lesion_result, "lession added succesfuly");
                                                                    return lesion_result
                                                                }).then((les_resp) => {
                                                                    categoriSchema.chepter_details.find({ chepter_name: req.body.chepter })
                                                                        .then((chepter_resp) => {
                                                                            if (chepter_resp.length != 0) {
                                                                                const abc = chepter_resp[0]
                                                                                categoriSchema.chepter_details.findByIdAndUpdate(abc._id, { $push: { chepter_lession: les_resp._id } })
                                                                                    .then((chepter_detail_updated) => {
                                                                                        console.log("chepter details updated", chepter_detail_updated);
                                                                                        const data1 = {}
                                                                                        const ar1 = []
                                                                                        ar1.push(chepter_detail_updated._id)
                                                                                        data1[chepterName] = ar
                                                                                        const new_chepter = new categoriSchema.chepter(data1)
                                                                                        new_chepter.save()
                                                                                            .then((chepter_created) => {
                                                                                                console.log("chepter created and added lession succes fully", chepter_created)
                                                                                            })
                                                                                    })
                                                                            }
                                                                            else {
                                                                                const abc = chepter_resp[0]
                                                                                categoriSchema.chepter_details.findByIdAndUpdate(abc._id, { $push: { chepter_lession: les_resp } })
                                                                                    .then((chepter_detail_updated) => {
                                                                                        console.log("chepter details updated", chepter_detail_updated);


                                                                                    })
                                                                            }

                                                                        })
                                                                })

                                                        }
                                                    })


                                            })

                                    })

                            } else {
                                res.send("this course already in course if You want to update then use update course query")
                            }
                        })

                } else {
                    console.log(category_exists);
                    const obj1 = {}
                    const chepterName = req.body.chepter_name;
                    obj[chepterName] = { $exists: true, $ne: null }
                    console.log(obj1, "**^&&&&&&&&&&&&&&&&")

                    categoriSchema.chepter.find(obj1)
                        .then((chepter_resp) => {
                            if (chepter_resp.length == 0) {
                                const lession = new courseSchema(lession_data)
                                lession.save()
                                    .then((lesion_result) => {
                                        console.log(lesion_result, "lession added succesfuly");
                                        return lesion_result
                                    }).then((les_resp) => {
                                        categoriSchema.chepter_details.find({ chepter_name: chepterName })
                                            .then((chepter_resp) => {
                                                if (chepter_resp.length == 0) {
                                                    const chep_detail = new categoriSchema.chepter_details({
                                                        chepter_name: chepterName,
                                                        chepter_title: req.body.chepter_titl
                                                    })
                                                    chep_detail.save()
                                                        .then((che_added) => {
                                                            console.log(che_added, "%%%%%%%%%%%%%%%%%")
                                                            che_added.chepter_lession.push(les_resp._id)
                                                                .then((chepter_added_sucess) => {
                                                                    console.log("chepter_details ", chepter_added_sucess)
                                                                    const data1 = {}
                                                                    const ar1 = []
                                                                    ar1.push(chepter_added_sucess._id)
                                                                    data1[chepterName] = ar
                                                                    const new_chepter = new categoriSchema.chepter(data1)
                                                                    new_chepter.save()
                                                                        .then((chepter_created) => {
                                                                            console.log("chepter created and added lession succes fully", chepter_created)
                                                                            categoriSchema.sb_details.findByIdAndUpdate(course_check._id, { $push: { course_chepters: chepter_created._id } })
                                                                                .then((resp_course) => {
                                                                                    console.log("updated_course", resp_course)
                                                                                    const categoris = category_exists[0]
                                                                                    const data = {}
                                                                                    const ar = []
                                                                                    ar.push(resp_course._id)
                                                                                    data[a] = ar
                                                                                    categoriSchema.categories.findOneAndUpdate(categoris._id, data)
                                                                                        .then((category_updated) => {
                                                                                            console.log("categori_updated", category_updated)
                                                                                            res.send(category_updated)
                                                                                        })
                                                                                })

                                                                        })
                                                                })
                                                            // console.log("chepter_details_added", che_added)
                                                        })
                                                } else {
                                                    const abc = chepter_resp[0]
                                                    categoriSchema.chepter_details.findByIdAndUpdate(abc._id, { $push: { chepter_lession: les_resp } })
                                                        .then((chepter_detail_updated) => {
                                                            console.log("chepter details updated", chepter_detail_updated);


                                                        })
                                                }
                                            })
                                        // res.send(course_added_category)
                                    })
                            } else {
                                const lession = new courseSchema(lession_data)
                                lession.save()
                                    .then((lesion_result) => {
                                        console.log(lesion_result, "lession added succesfuly");
                                        return lesion_result
                                    }).then((les_resp) => {
                                        categoriSchema.chepter_details.find({ chepter_name: req.body.chepters_name })
                                            .then((chepter_resp) => {
                                                if (chepter_resp.length != 0) {
                                                    const abc = chepter_resp[0]
                                                    categoriSchema.chepter_details.findByIdAndUpdate(abc._id, { $push: { chepter_lession: les_resp._id } })
                                                        .then((chepter_detail_updated) => {
                                                            console.log("chepter details------- updated", chepter_detail_updated);
                                                            const obj1 = {}
                                                            const chepterName = req.body.chepters_name;
                                                            obj1[chepterName] = { $exists: true, $ne: null }
                                                            categoriSchema.chepter.find(obj1)
                                                                .then((reslt) => {
                                                                    if (reslt.length == 0) {
                                                                        const data1 = {}
                                                                        const ar1 = []
                                                                        ar1.push(chepter_detail_updated._id)
                                                                        data1[chepterName] = ar1
                                                                        console.log(data1, "shiiiiiiiiiiiiiiiiiiiiiii")
                                                                        const new_chepter = new categoriSchema.chepter(data1)
                                                                        new_chepter.save()
                                                                            .then((chepter_created) => {
                                                                                console.log("chepter created and added lession succes fully", chepter_created)
                                                                                categoriSchema.sb_details.findByIdAndUpdate(course_check._id, { $push: { course_chepters: chepter_created._id } })
                                                                                    .then((resp_course) => {
                                                                                        console.log("***********", resp_course)
                                                                                        const categoris = category_exists[0]
                                                                                        const data = {}
                                                                                        const ar = []
                                                                                        ar.push(resp_course._id)
                                                                                        data[a] = ar
                                                                                        categoriSchema.categories.findOneAndUpdate(categoris._id, data)
                                                                                            .then((category_updated) => {
                                                                                                console.log("categori_updated", category_updated)
                                                                                                res.send(category_updated)
                                                                                            })

                                                                                    })
                                                                            })
                                                                    } else {
                                                                        const d = reslt[0]
                                                                        categoriSchema.chepter.findByIdAndUpdate(d._id, {
                                                                            $push: {
                                                                                chepter2: chepter_detail_updated._id
                                                                            }
                                                                        }).then((rejlt) => {
                                                                            console.log("dataa ka chepter_updatd", rejlt)
                                                                        })
                                                                    }

                                                                })

                                                        })
                                                }
                                                else {
                                                    const abc = chepter_resp
                                                    console.log(abc)
                                                    categoriSchema.chepter_details.findByIdAndUpdate(abc._id, { $push: { chepter_lession: les_resp } })
                                                        .then((chepter_detail_updated) => {
                                                            console.log("chepter details updated", chepter_detail_updated);


                                                        })
                                                }
                                            })
                                    })

                            }
                        })

                }
            })
    } catch (err) {
        console.log(err);
        res.send(err);
    }
}

exports.course_added = async (req, res, next) => {
    try {
        const {
            lession,
            title,
            email,
            filename,
            date,
            course_type,
            course_category,


        } = req.body
        const a = req.body.category_name

        const new_course = {
            course_name: lession,
            course_price: title,
            teacherName: course_category,
            course_type: 'free',
            teacherEmail: email,
        }


        if (!req.body.category_name) {
            res.send("you didn't choose any category")
        } else if (!req.body.lession) {
            res.send("please choose course name")
        } else if (!req.body.title) {
            res.send("please choose course title")
        }
        console.log(a)
        const category = {
            categoryName: a
        }
        const lession_data = {
            lession_name: req.body.lessions,
            title: req.body.title,
            // lession_category: req.body.lession_categori,
            description: req.body.desc,
            course_type: req.body.type,
            teacherEmail: req.body.email
            // Date: req.body.date
        };

        const new_chepter = {
            chepter_name: req.body.chepter_name,
            chepter_title: req.body.chepterTitle
        }

        categoriSchema.sb_details.find({ course_name: lession })
            .then((course_check) => {
                if (course_check.length == 0) {

                    const obj = {}
                    obj[a] = { $exists: true, $ne: null }
                    console.log(obj, "OOOOOOOOOOOOOOOOOOO")
                    categoriSchema.categories.find(obj)
                        .then((category_result) => {
                            if (category_result.length == 0) {

                                const obj1 = {}
                                const chepterName = req.body.chepters_name;
                                console.log(chepterName)
                                obj1[chepterName] = { $exists: true, $ne: null }
                                console.log(obj1, "**^&&&&&&&&&&&&&&&&")
                                categoriSchema.chepter_details.find({ chepter_name: chepterName })
                                    .then((chepter_resp) => {
                                        if (chepter_resp.length == 0) {
                                            const lession = new courseSchema(lession_data)
                                            lession.save()
                                                .then((lesion_result) => {
                                                    console.log(lesion_result, "lession added succesfuly");
                                                    return lesion_result
                                                }).then((les_resp) => {
                                                    const chep_detail = new categoriSchema.chepter_details({
                                                        chepter_name: chepterName,
                                                        chepter_title: req.body.chepter_titl
                                                    })
                                                    chep_detail.save()
                                                        .then((che_added) => {
                                                            console.log(che_added, "%%%%%%%%%%%%%%%%%")
                                                            console.log(les_resp)
                                                            const create_course = new categoriSchema.sb_details(new_course);
                                                            create_course.save()
                                                                .then((course_resp) => {
                                                                    categoriSchema.sb_details.findByIdAndUpdate(course_resp._id, { $push: { course_chepters: che_added._id } })
                                                                        .then((cour_resp) => {
                                                                            const data = {}
                                                                            const ar = []
                                                                            ar.push(cour_resp._id)
                                                                            data[a] = ar
                                                                            const add_in_category = new categoriSchema.categories(data)
                                                                            add_in_category.save()
                                                                                .then((course_added_category) => {
                                                                                    res.send("course_added")
                                                                                    console.log(course_added_category)
                                                                                });
                                                                        })

                                                                })
                                                        })
                                                })
                                        } else {
                                            const lession = new courseSchema(lession_data)
                                            lession.save()
                                                .then((lesion_result) => {
                                                    console.log(lesion_result, "lession added succesfuly");
                                                    return lesion_result
                                                }).then((les_resp) => {
                                                    categoriSchema.chepter_details.find({ chepter_name: chepterName })
                                                        .then((chepter_resp) => {
                                                            if (chepter_resp.length != 0) {
                                                                const abc = chepter_resp[0]
                                                                categoriSchema.chepter_details.findByIdAndUpdate(abc._id, { $push: { chepter_lession: les_resp._id } })
                                                                    .then((chepter_detail_updated) => {
                                                                        console.log("chepter details updated", chepter_detail_updated);
                                                                        const create_course = new categoriSchema.sb_details(new_course);
                                                                        create_course.save()
                                                                            .then((course_resp) => {
                                                                                categoriSchema.sb_details.findByIdAndUpdate(course_resp._id, { $push: { course_chepters: chepter_detail_updated._id } })
                                                                                    .then((cour_resp) => {
                                                                                        res.send("course_added ***********", cour_resp)
                                                                                        const data = {}
                                                                                        const ar = []
                                                                                        ar.push(cour_resp._id)
                                                                                        data[a] = ar
                                                                                        const add_in_category = new categoriSchema.categories(data)
                                                                                        add_in_category.save()
                                                                                            .then((course_added_category) => {
                                                                                                res.send("course_added")
                                                                                                console
                                                                                            })

                                                                                    })

                                                                            })
                                                                    });
                                                            }

                                                        })
                                                })

                                        }
                                    })

                                
                            } else {

                                const obj1 = {}
                                const chepterName = req.body.chepters_name;
                                console.log(chepterName)
                                obj1[chepterName] = { $exists: true, $ne: null }
                                console.log(obj1, "**^&&&&&&&&&&&&&&&&")
                                categoriSchema.chepter_details.find({ chepter_name: chepterName })
                                    .then((chepter_resp) => {
                                        if (chepter_resp.length == 0) {
                                            const lession = new courseSchema(lession_data)
                                            lession.save()
                                                .then((lesion_result) => {
                                                    console.log(lesion_result, "lession added succesfuly");
                                                    return lesion_result
                                                }).then((les_resp) => {
                                                    const chep_detail = new categoriSchema.chepter_details({
                                                        chepter_name: chepterName,
                                                        chepter_title: req.body.chepter_titl
                                                    })
                                                    chep_detail.save()
                                                        .then((che_added) => {
                                                            console.log(che_added, "%%%%%%%%%%%%%%%%%")
                                                            console.log(les_resp)
                                                            const create_course = new categoriSchema.sb_details(new_course);
                                                            create_course.save()
                                                                .then((course_resp) => {
                                                                    categoriSchema.sb_details.findByIdAndUpdate(course_resp._id, { $push: { course_chepters: che_added._id } })
                                                                        .then((cour_resp) => {
                                                                            const data = {}
                                                                            const ar = []
                                                                            ar.push(cour_resp._id)
                                                                            data[a] = ar
                                                                            const category = category_result[0]
                                                                            categoriSchema.categories.findByIdAndUpdate(category._id, { $push: data })
                                                                            add_in_category.save()
                                                                                .then((course_added_category) => {
                                                                                    res.send("course_added")
                                                                                });
                                                                        })

                                                                })
                                                        })
                                                })
                                        } else {
                                            const lession = new courseSchema(lession_data)
                                            lession.save()
                                                .then((lesion_result) => {
                                                    console.log(lesion_result, "lession added succesfuly");
                                                    return lesion_result
                                                }).then((les_resp) => {
                                                    categoriSchema.chepter_details.find({ chepter_name: chepterName })
                                                        .then((chepter_resp) => {
                                                            if (chepter_resp.length != 0) {
                                                                const abc = chepter_resp[0]
                                                                categoriSchema.chepter_details.findByIdAndUpdate(abc._id, { $push: { chepter_lession: les_resp._id } })
                                                                    .then((chepter_detail_updated) => {
                                                                        console.log("chepter details updated", chepter_detail_updated);
                                                                        const create_course = new categoriSchema.sb_details(new_course);
                                                                        create_course.save()
                                                                            .then((course_resp) => {
                                                                                categoriSchema.sb_details.findByIdAndUpdate(course_resp._id, { $push: { course_chepters: chepter_detail_updated._id } })
                                                                                    .then((cour_resp) => {
                                                                                        const data = {}
                                                                                        const ar = []
                                                                                        ar.push(cour_resp._id)
                                                                                        data[a] = ar
                                                                                        const category = category_result[0]
                                                                                        categoriSchema.categories.findByIdAndUpdate(category._id, { $push: data })
                                                                                            .then((course_added_category) => {
                                                                                                res.send("course_added ***********")

                                                                                            })

                                                                                    })

                                                                            })
                                                                    })

                                                            }
                                                        })

                                                })


                                        }
                                    })
                            }
                        })
                } else {
                    res.send("this course already in course if You want to update then use update course query")
                }

            });
    } catch (err) {
        console.log(err)
        res.send(err)
    }

}



exports.update_courses_by_teacher = async (req, res, next) => {
    try {
        const {
            lession,
            title,
            email,
            filename,
            date,
            course_type,
            course_category,
        } = req.body

        const new_course = {
            course_name: lession,
            course_price: title,
            teacherName: course_category,
            teacherEmail: course_type,
            teacherEmail: email,
        }
        const a = req.body.category_name

        console.log(a)
        const category = {
            categoryName: a
        }
        const lession_data = {
            lession_name: req.body.lession,
            title: req.body.title,
            lession_category: req.body.lession_categori,
            description: req.body.desc,
            course_type: req.body.type,
            teacherEmail: req.body.email,
            Date: req.body.date
        };

        const new_chepter = {
            chepter_name: req.body.chepter_name,
            chepter_title: req.body.chepterTitle
        }

        const obj1 = {}
        const chepterName = req.body.chepter_name;
        obj[chepterName] = { $exists: true, $ne: null }
        console.log(obj1, "**^&&&&&&&&&&&&&&&&")
        categoriSchema.chepter_details.find({ chepter_name: chepterName })
            .then((chepter_resp) => {
                if (chepter_resp.length == 0) {
                    const lession = new courseSchema(lession_data)
                    lession.save()
                        .then((lesion_result) => {
                            console.log(lesion_result, "lession added succesfuly");
                            return lesion_result
                        }).then((les_resp) => {
                            const chep_detail = new categoriSchema.chepter_details({
                                chepter_name: chepterName,
                                chepter_title: req.body.chepter_titl
                            })
                            chep_detail.save()
                                .then((che_added) => {
                                    console.log(che_added, "%%%%%%%%%%%%%%%%%")
                                    che_added.chepter_lession.push(les_resp._id)
                                        .then((chepter_added_sucess) => {
                                            console.log("chepter created and added lession succes fully", chepter_created)
                                            const cour_id = course_check[0]
                                            categoriSchema.sb_details.findByIdAndUpdate(cour_id._id, chepter_created._id)
                                                .then((resp_course) => {
                                                    console.log("updated_course", resp_course)
                                                })

                                        })
                                })
                        })
                } else {
                    const lession = new courseSchema(lession_data)
                    lession.save()
                        .then((lesion_result) => {
                            const abc = chepter_resp[0]
                            categoriSchema.chepter_details.findByIdAndUpdate(abc._id, { $push: { chepter_lession: lesion_result._id } })
                                .then((chepter_detail_updated) => {
                                    console.log("chepter details updated", chepter_detail_updated);
                                })
                        })
                }
                //  else {
                //     const lession = new courseSchema(lession_data)
                //     lession.save()
                //         .then((lesion_result) => {
                //             console.log(lesion_result, "lession added succesfuly");
                //             return lesion_result
                //         }).then((les_resp) => {
                //             categoriSchema.chepter_details.find({ chepter_name: req.body.chepter })
                //                 .then((chepter_resp) => {
                //                     if (chepter_resp.length != 0) {
                //                         const abc = chepter_resp[0]
                //                         categoriSchema.chepter_details.findByIdAndUpdate(abc._id, { $push: { chepter_lession: les_resp._id } })
                //                             .then((chepter_detail_updated) => {
                //                                 console.log("chepter details updated", chepter_detail_updated);
                //                                 const data1 = {}
                //                                 const ar1 = []
                //                                 ar1.push(chepter_detail_updated._id)
                //                                 data1[chepterName] = ar
                //                                 const new_chepter = new categoriSchema.chepter(data1)
                //                                 new_chepter.save()
                //                                     .then((chepter_created) => {
                //                                         console.log("chepter created and added lession succes fully", chepter_created)
                //                                         const cour_id = course_check[0]

                //                                         categoriSchema.sb_details.findByIdAndUpdate(cour_id._id, chepter_created._id)
                //                                             .then((resp_course) => {
                //                                                 console.log("***********", resp_course)

                //                                             })
                //                                     })
                //                             })
                //                     } else {
                //                         const abc = chepter_resp[0]
                //                         categoriSchema.chepter_details.findByIdAndUpdate(abc._id, { $push: { chepter_lession: les_resp } })
                //                             .then((chepter_detail_updated) => {
                //                                 console.log("chepter details updated", chepter_detail_updated);


                //                             })
                //                     }
                //                     // sole.log("You have to create chepter")
                //                     // }

                //                 })
                //         })

                // }
            })

        // }
        // }).catch((err) => {
        //     console.log(err);
        //     res.send(err)
        // })



    } catch (e) {
        res.send(e)
    }
}


// try {
//     const {
//         lession,
//         title,
//         email,
//         filename,
//         date,
//         course_type,
//         course_category
//     } = req.body
//     const new_course = {
//         course_name: lession,
//         course_title: title,
//         course_category: course_category,
//         course_type: course_type,
//         teacherEmail: email,
//         date: date
//     }

//     if ("PDF" != "PDF") {
//         const pdf_data = teacher_ebook.pdfs(new_course)
//         pdf_data.save()
//             .then((pdf_resp) => {
//                 console.log("data added in pdf", pdf_resp);
//                 var pdf = pdf_resp
//                 return pdf
//             }).then((pdf_details) => {
//                 const category = "ds"
//                 teacher_ebook.lib_details.find({
//                     categories: category
//                 })
//                     .then((category_lib) => {
//                         if (category_lib.length == 0) {
//                             const lib_data = new teacher_ebook.lib_details({
//                                 categories: "ds"
//                             })
//                             lib_data.save()
//                                 .then((respns) => {
//                                     teacher_ebook.lib_details.findByIdAndUpdate(respns._id, {
//                                         $push: {
//                                             pdf: pdf_details
//                                         }
//                                     }, {
//                                         new: true,
//                                         useFindAndModify: false
//                                     })
//                                         .then((lib_resp) => {
//                                             console.log(lib_resp, "&&&&&&&&&&&&&&&&&&&&&&&&")
//                                         })
//                                 })
//                         } else {
//                             const library_detail = category_lib[0]
//                             teacher_ebook.lib_details.findByIdAndUpdate(library_detail._id, {
//                                 $push: {
//                                     pdf: pdf_details
//                                 }
//                             }, {
//                                 new: true,
//                                 useFindAndModify: false
//                             })
//                                 .then((lib_resp) => {
//                                     console.log(lib_resp, "%%%%%%%%%%%%%%%%%%")
//                                     res.send("library added succesfuly")
//                                 })
//                         }
//                     })
//             })



//         }
//     }
// }







exports.insert_course = async (req, res, next) => {
    try {
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



exports.user_course = async (req, res, next) => {
    try {
        console.log(req.body.courses)
        categoriSchema.sb_details.find({
            '$or': [{
                'course_name': {
                    '$regex': req.body.courses
                }
            },
            {
                'teacherName': {
                    '$regex': req.body.courses
                }
            }, {
                'teacherEmail': {
                    '$regex': req.body.courses
                }
            }
            ]
        }).populate({
            path: 'course_chepters',
            populate: {
                path: 'chepter_lession',
                model: 'Lessions'
            }
        })
            .then((resp) => {
                var a = JSON.stringify(resp)
                console.log(a)
                res.send(resp)
            }).catch((err) => {
                console.log(err)
                next(err)
            })
    } catch (error) {
        next(error)
    }
};


exports.get_all_courses = async (req, res, next) => {
    try {
        categoriSchema.sb_details.find({}).populate({
            path: 'course_chepters',
            populate: {
                path: 'chepter_lession',
                model: 'Lessions'
            }
        })
            .then((resp) => {
                console.log(resp)
                res.send(resp)
            }).catch((err) => {
                console.log(err)
                next(err)
            })
    } catch (error) {
        next(error)
    }
}


exports.get_courses_by_category = (req, res, next) => {
    try {
        categoriSchema.categories.find({ categoryName: req.body.category }).populate({
            path: 'uppsc',
            populate: {
                path: 'course_chepters',
                model: 'Chepters',
                populate: {
                    path: 'chepter_lession',
                    model: 'Lessions'
                }
            }
        })
            .then((resp) => {
                var a = JSON.stringify(resp)
                console.log(a)
                res.send(resp)
            }).catch((err) => {
                console.log(err)
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
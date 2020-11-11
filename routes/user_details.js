const User = require('../models/user_schema');
const jwt = require('jsonwebtoken');
const LocalStorage = require('node-localstorage').LocalStorage;
const teacher_subscribe = require("../models/subscribe_schema")
const bcrypt = require('bcryptjs');
var session = require('express-session');
var multer = require('multer');
const fs = require('fs')
const path = require('path')
const teacher_ebook = require('../models/library_schema')
const categorySchema = require('../models/category_course')
const todo = require('../models/todo_schema');
const courseSchema = require('../models/courses_schema')
// const user_cart = require("../models/cart_lession_schema");
const cart = require('../models/user_cart_course');
const {
    response
} = require('express');
const { subscribe } = require('./admin');

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

exports.user_library = async (req, res, next) => {
    try {
        const {
            lession,
            title,
            email,
            filename,
            date,
            course_type,
            course_category
        } = req.body
        const new_course = {
            course_name: lession,
            course_title: title,
            course_category: course_category,
            course_type: course_type,
            teacherEmail: email,
            date: date
        }

        if ("PDF" != "PDF") {
            const pdf_data = teacher_ebook.pdfs(new_course)
            pdf_data.save()
                .then((pdf_resp) => {
                    console.log("data added in pdf", pdf_resp);
                    var pdf = pdf_resp
                    return pdf
                }).then((pdf_details) => {
                    const category = "ds"
                    teacher_ebook.lib_details.find({
                        categories: category
                    })
                        .then((category_lib) => {
                            if (category_lib.length == 0) {
                                const lib_data = new teacher_ebook.lib_details({
                                    categories: "ds"
                                })
                                lib_data.save()
                                    .then((respns) => {
                                        teacher_ebook.lib_details.findByIdAndUpdate(respns._id, {
                                            $push: {
                                                pdf: pdf_details
                                            }
                                        }, {
                                            new: true,
                                            useFindAndModify: false
                                        })
                                            .then((lib_resp) => {
                                                console.log(lib_resp, "&&&&&&&&&&&&&&&&&&&&&&&&")
                                            })
                                    })
                            } else {
                                const library_detail = category_lib[0]
                                teacher_ebook.lib_details.findByIdAndUpdate(library_detail._id, {
                                    $push: {
                                        pdf: pdf_details
                                    }
                                }, {
                                    new: true,
                                    useFindAndModify: false
                                })
                                    .then((lib_resp) => {
                                        console.log(lib_resp, "%%%%%%%%%%%%%%%%%%")
                                        res.send("library added succesfuly")
                                    })
                            }
                        })
                })
        } else if ('Audio_book' != 'Audio_book') {
            const ebook_data = teacher_ebook.audio_schema(new_course)
            ebook_data.save()
                .then((audio_resp) => {
                    console.log("data added in Audio_book", audio_resp);
                    var audio = audio_resp

                    return audio
                }).then((audio_details) => {
                    const category = "ds"
                    teacher_ebook.lib_details.find({
                        categories: category
                    })
                        .then((category_lib) => {
                            if (category_lib.length == 0) {
                                const lib_data = new teacher_ebook.lib_details({
                                    categories: "ds"
                                })
                                lib_data.save()
                                    .then((respns) => {
                                        teacher_ebook.lib_details.findByIdAndUpdate(respns._id, {
                                            $push: {
                                                audioBook: audio_details
                                            }
                                        }, {
                                            new: true,
                                            useFindAndModify: false
                                        })
                                            .then((lib_resp) => {
                                                console.log(lib_resp, "&&&&&&&&&&&&&&&&&&&&&&&&")
                                            })
                                    })
                            } else {
                                const library_detail = category_lib[0]
                                teacher_ebook.lib_details.findByIdAndUpdate(library_detail._id, {
                                    $push: {
                                        audioBook: audio_details
                                    }
                                }, {
                                    new: true,
                                    useFindAndModify: false
                                })
                                    .then((lib_resp) => {
                                        console.log(lib_resp, "%%%%%%%%%%%%%%%%%%")
                                        res.send("library added succesfuly")
                                    })

                            }
                        })



                })

        } else if ('syllabus' != "syllabus") {
            const syllabus_data = teacher_ebook.syllabusSchema(new_course)
            syllabus_data.save()
                .then((syllbus_resp) => {
                    console.log("data added in syllabus", syllbus_resp);
                    var sylabus = syllbus_resp
                    return sylabus
                }).then((syllbus_details) => {
                    const category = "ds"
                    teacher_ebook.lib_details.find({
                        categories: category
                    })
                        .then((category_lib) => {
                            if (category_lib.length == 0) {
                                const lib_data = new teacher_ebook.lib_details({
                                    categories: "ds"
                                })
                                lib_data.save()
                                    .then((respns) => {
                                        teacher_ebook.lib_details.findByIdAndUpdate(respns._id, {
                                            $push: {
                                                syllabus: syllbus_details
                                            }
                                        }, {
                                            new: true,
                                            useFindAndModify: false
                                        })
                                            .then((lib_resp) => {
                                                console.log(lib_resp, "&&&&&&&&&&&&&&&&&&&&&&&&")
                                            })
                                    })
                            } else {
                                const library_detail = category_lib[0]
                                teacher_ebook.lib_details.findByIdAndUpdate(library_detail._id, {
                                    $push: {
                                        syllabus: syllbus_details
                                    }
                                }, {
                                    new: true,
                                    useFindAndModify: false
                                })
                                    .then((lib_resp) => {
                                        console.log(lib_resp, "%%%%%%%%%%%%%%%%%%")
                                        res.send("library added succesfuly")
                                    })

                            }
                        })



                })
        } else if ('Topper_copy' == 'Topper_copy') {
            const topper_copy_data = teacher_ebook.TopperSchema(new_course)
            topper_copy_data.save()
                .then((toperCopy_resp) => {
                    console.log("data added in toperCopy_resp", toperCopy_resp);
                    var toper_data = toperCopy_resp
                    return toper_data
                }).then((topper_details) => {
                    const category = "ds"
                    teacher_ebook.lib_details.find({
                        categories: category
                    })
                        .then((category_lib) => {
                            if (category_lib.length == 0) {
                                const lib_data = new teacher_ebook.lib_details({
                                    categories: "ds"
                                })
                                lib_data.save()
                                    .then((respns) => {
                                        teacher_ebook.lib_details.findByIdAndUpdate(respns._id, {
                                            $push: {
                                                topperCopy: topper_details
                                            }
                                        }, {
                                            new: true,
                                            useFindAndModify: false
                                        })
                                            .then((lib_resp) => {
                                                console.log(lib_resp, "&&&&&&&&&&&&&&&&&&&&&&&&")
                                            })
                                    })
                            } else {
                                const library_detail = category_lib[0]
                                teacher_ebook.lib_details.findByIdAndUpdate(library_detail._id, {
                                    $push: {
                                        topperCopy: topper_details
                                    }
                                }, {
                                    new: true,
                                    useFindAndModify: false
                                })
                                    .then((lib_resp) => {
                                        console.log(lib_resp, "%%%%%%%%%%%%%%%%%%")
                                        res.send("library added succesfuly")
                                    })
                            }
                        })
                })
        }
    } catch (error) {
        next(error)
    }
}


const total_price = (cart_course, price) => {
    var total_price = 0
    var cart_data = cart_course
    for (var i = 0; i < cart_course.length; i++) {
        var course_prices = cart_course[i]
        const cart_total_prices = course_prices.cart_total_price
        total_price = cart_total_prices + price
        // console.log(total_price,"++++++++++++++++++++++++++")
    }
    return total_price
}


exports.add_courses_by_teacher = async (req, res, next) => {
    try {
        const { Category, course_title, chepter_title, cars,chep_Number, lession_title, le_Number, w3review, text_data, } = req.body
        console.log(req.body)
        console.log(req.session.email)
        // res.send("course added")

        const email = req.session.email;
        console.log(email)
        User.findOne({ email: email })
            .then((user_resp) => {
                console.log(user_resp,"&&&&&&&&&&&&&&&&&")
                // if (user_resp.user_role_status == 2 && user_resp.user_role_status == 1) {
                  if(user_resp.role == 'teacher'){
                    const lession_data = {}

                    if (!req.body.Category) {
                        res.send("you didn't choose any category")
                    } else if (!req.body.course_title) {
                        res.send("please choose course name")
                    }else if(text_data){
                        lession_data.lession_detail = text_data
                    }
                    console.log(req.file)
                    // const a = req.body.Categ ory

                    const new_course = {
                        course_name: course_title,
                        teacherName: user_resp.name,
                        course_type: cars,
                        teacherEmail: user_resp.email,
                        description:w3review
                    }

                    // console.log(a)
                    // constcategoryName category = {
                    //     : a
                    // }
                    lession_data = {
                        lession_name:le_Number,
                        title: lession_title,
                    };

                    const new_chepter = {
                        chepter_name: chep_Number,
                        chepter_title: chepter_title
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

                                            // })
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


                                                        // })
                                                    }
                                                })
                                            // })


                                        }
                                    })
                            } else {
                                res.send("this course already in course if You want to update then use update course query")
                            }

                        });
                    }else{
                        res.send("You are not authorized for authentication");
                    }

                })


    } catch (err) {
        console.log(err)
        res.send(err)
    }
}



exports.trending_filter = async (req, res, next) => {
    var today = new Date();
    var dd = today.getDate();
    var mm = today.getMonth();
    var yyyy = today.getFullYear();

    let week_date = new Date(Date.now() - 7 * 24 * 60 * 60 * 1000)
    var d1 = week_date.getDate();
    var m1 = week_date.getMonth() + 1; //January is 0!
    var y1 = week_date.getFullYear();
    var days_before = y1 + "," + m1 + "," + d1
    var now_date = yyyy + "," + mm + "," + dd
    console.log(new Date(now_date), "+++++++++")
    console.log(new Date(days_before), "___________")
    categorySchema.sb_details.find({
        'start_date': {
            "$gte": new Date(now_date),
            "$lt": new Date(days_before)
        }
    }).populate({
        path: 'course_chepters',
        populate: {
            path: 'chepter_lession',
            model: 'Lessions'
        }
    })
        .then((result) => {
            res.send(result)
        })
}

exports.price_filter = async (req, res, next) => {
    const user_price = req.body.price_category;

    if (user_price == "low") {
        categorySchema.sb_details.find({
            course_price: {
                $lte: 400
            }
        }).populate({
            path: 'course_chepters',
            populate: {
                path: 'chepter_lession',
                model: 'Lessions'
            }
        })
            .then((result) => {
                res.send(result)
            })
    } else if (user_price == "hight_price_course") {
        categorySchema.sb_details.find({
            course_price: {
                $gte: 400
            }
        }).populate({
            path: 'course_chepters',
            populate: {
                path: 'chepter_lession',
                model: 'Lessions'
            }
        })
            .then((result) => {
                res.send(result)
            })
    }
};



exports.ratings_filter = async (req, res, next) => {
    const ratings = req.body.rating;
    if (ratings == 5) {
        categorySchema.sb_details.find({
            ratings: 5
        }).populate({
            path: 'course_chepters',
            populate: {
                path: 'chepter_lession',
                model: 'Lessions'
            }
        })
            .then((result) => {
                res.send(result)
            })
    } else if (ratings == 4) {
        categorySchema.sb_details.find({
            ratings: 4
        }).populate({
            path: 'course_chepters',
            populate: {
                path: 'chepter_lession',
                model: 'Lessions'
            }
        })
            .then((result) => {
                res.send(result)
            })
    } else if (ratings == 3) {
        categorySchema.sb_details.find({
            ratings: 3
        }).populate({
            path: 'course_chepters',
            populate: {
                path: 'chepter_lession',
                model: 'Lessions'
            }
        })
            .then((result) => {
                res.send(result)
            })
    } else if (ratings == 2) {
        categorySchema.sb_details.find({
            ratings: 2
        }).populate({
            path: 'course_chepters',
            populate: {
                path: 'chepter_lession',
                model: 'Lessions'
            }
        })
            .then((result) => {
                res.send(result)
            })
    } else if (ratings == 1) {
        categorySchema.sb_details.find({
            ratings: 1
        }).populate({
            path: 'course_chepters',
            populate: {
                path: 'chepter_lession',
                model: 'Lessions'
            }
        })
            .then((result) => {
                res.send(result)
            })
    }

}

exports.add_todo = async (req, res, next) => {
    // console.log(req.body)
    res.send("yyyyyyyyyyyyyy")
}

exports.user_subscribe = async (req, res, next) => {
    // const user = req.body.email;
    // let localStorage = new LocalStorage('./scratch');
    // const user_data = localStorage.getItem("user_login_id")
    // console.log(user_data)
    var user = "shivani12@gmail.com"
    const teacher_name = "shivani1232@gmail.com";
    User.find({ email: user })
        .then((result) => {
            if (result.length == []) {
                res.send("You didn't login first login.")
            } else {
                const user_details = result[0];
                const user_data = new teacher_subscribe.users({
                    user_name: user_details.name,
                    user_email: user_details.email,
                    user_image: user_details.image,
                    user_role: user_details.role
                })
                //{ $and: [{ 'subscriber_detail.user_email': user },
                user_data.save()
                    .then((resp) => {
                        var subscriber_id = resp
                        teacher_subscribe.subscriber.find(
                            { subscribe_name: user }).populate('subscriber_detail')
                            .then((user_resp) => {
                                if (user_resp.length != []) {
                                    console.log(user_resp, "***************************************")
                                    res.send("user already subscribe")
                                } else {
                                    console.log(subscriber_id, "))))))))))))))))")
                                    const subscribe_details = new teacher_subscribe.subscriber({
                                        subscribe_name: user,
                                        teacher_name: teacher_name
                                    })
                                    subscribe_details.save()
                                        .then((sub_data) => {

                                            teacher_subscribe.subscriber.findByIdAndUpdate(sub_data._id, {
                                                $push: { subscriber_detail: subscriber_id._id }
                                            }, { new: true }
                                            )
                                                .then((user_responsce) => {
                                                    User.findOne({ email: teacher_name })
                                                        .then((teacher_resp) => {

                                                            User.findByIdAndUpdate(teacher_resp._id, { $push: { subscriber: user_responsce._id } }, { new: true })
                                                                .then((sub_resp) => {
                                                                    console.log(sub_resp)
                                                                    res.send(sub_resp)
                                                                }).catch((err) => {
                                                                    console.log(err)
                                                                    res.send(err)
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

exports.for_user_subscribe_list = async (req, res, next) => {
    User.findOne({
        email: 'shivanic18@gmail.com'
    }
    ).populate('subscriber')
        .then((resp) => {
            const for_user = resp.subscriber
            const total_subscriber = for_user.length
            const data = {
                subscriber: total_subscriber
            }
            console.log(data)
            res.send(data)
        })
}

exports.search_library = async (req, res, next) => {
    try {
        teacher_ebook.lib_details.find({
            // '$or': [{
            //         'course_title': {
            //             '$regex': req.body.courses
            //         }
            //     },
            //     {
            //         'course_title': {
            //             '$regex': req.body.courses
            //         }
            //     }, {
            //         'course_title': {
            //             '$regex': req.body.courses
            //         }
            //     },{
            //         'course_title': {
            //             '$regex': req.body.courses
            //         }
            //     }
            // ]
        }).populate('pdf audioBook topperCopy syllabus')
            .then((resp) => {
                var a = JSON.stringify(resp)
                console.log(a)
                res.send(resp)
            }).catch((err) => {
                console.log(err)
                next(err)
            })
    } catch (err) {
        next(err)
    }
}


exports.insert_in_cart = async (req, res, next) => {
    if (req.session.email) {
        const course = req.body
        console.log(req.body)
        categorySchema.sb_details.findById("5f9f95bf519a320f9e6629b5").populate({
            path: 'course_chepters',
            populate: {
                path: 'chepter_lession',
                model: 'Lessions'
            }
        })
            .then((resp) => {
                console.log(resp, "))))))))))))")
                cart.find({
                    'cart.course_name': course.courseName
                }).populate({
                    path: 'cart',
                    populate: {
                        path: 'course_chepters',
                        model: 'Chepter_detail'
                    }
                })
                    .then((data) => {
                        console.log(data,"Cartttttttttttttttt")
                        if (data.length == 0) {
                            cart.find({
                                userEmail: req.session.email
                            }).populate({
                                path: 'cart',
                                populate: {
                                    path: 'course_chepters',
                                    model: 'Chepters'
                                }
                            })
                                .then((reslt) => {
                                    if (reslt.length != 0) {
                                        console.log("pehle se hi data hai", reslt)
                                        var a = reslt[0]
                                        console.log(reslt, "))))))))))))))))))))))))))))")
                                        var count = reslt[0].cart
                                        var cart_len = count.length + 1
                                        console.log(a, cart_len, "iddddddddddddddddddddddd")
                                        var cart_course_price = total_price(reslt, 230)
                                        console.log(resp,"KKKKKKKKKKKKKKKKKKKKK")
                                        cart.findByIdAndUpdate(a._id, {
                                            $set: {
                                                cart_total_price: cart_course_price,
                                                count_course: cart_len,
                                            }
                                        }, {
                                            new: true,
                                            useFindAndModify: false
                                        })
                                            .then((updated) => {
                                                cart.findByIdAndUpdate(a._id, {
                                                    $push: {
                                                        cart: resp._id
                                                    }
                                                })
                                                    .then((cart_update) => {
                                                        console.log(cart_update, "&&&&&&&&&&&&&&&&&&&&&&")
                                                        res.send("finaly update")
                                                    }).catch((err) => {
                                                        console.log(err)
                                                        next(err)
                                                    })

                                            }).catch((err) => {
                                                next(err)
                                            })
                                    } else if (reslt == 0) {
                                        var count_courses = 1
                                        // console.log(resp.course_price )
                                        var cart_course_price = 340
                                        console.log("cart khali hai")

                                        var new_cart_course = new cart({
                                            count_course: count_courses,
                                            cart_total_price: cart_course_price,
                                            userEmail: req.session.email
                                        })
                                        console.log(new_cart_course, ")))))))))))))")
                                        console.log(resp,"#####################")
                                        new_cart_course.cart.push(resp._id)
                                        return new_cart_course.save()
                                            .then((reressss) => {
                                                console.log(reressss)
                                                res.send(reressss)
                                            }).catch((err) => {
                                                console.log(err)
                                                res.send("error aai hai")
                                            })
                                    }
                                })
                        } else {
                            res.send("you already add this course in cart")
                        }
                    });
            });
    } else {
        console.log("error hai beta")
        res.redirect('/home')
    }
}








exports.get_cart = async (req, res, next) => {
    let localStorage = new LocalStorage('./scratch');
    const user_data = localStorage.getItem("user_details")
    console.log(user_data)
    cart.find({
        'userEmail': req.session.email
    }).populate({
        path: 'cart',
        populate: {
            path: 'course_chepters',
            model: 'Chepters',
            populate: {
                path: 'chepter_lession',
                model: 'Lessions'
            }
        }
    })
        .then((reslt) => {
            res.send(reslt)
        }).catch((err) => {
            res.send(err)
        });
}


exports.example = async (req, res, next) => {
    // const data = new User({shivani:"jeet"})
    // data.save()
    User.find({ 'email': { $exists: true, $ne: null } })
        .then((resp) => {
            console.log(resp)
            res.send(resp)
        }).catch((err) => {
            res.send(err)
        });

    //   });
}
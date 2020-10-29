const User = require('../models/user_schema');
const jwt = require('jsonwebtoken');
const LocalStorage = require('node-localstorage').LocalStorage;

const bcrypt = require('bcryptjs');
var session = require('express-session');
var multer = require('multer');
const fs = require('fs')
const path = require('path')
const teacher_ebook = require('../models/library_schema')
const categorySchema = require('../models/category_course')
const courseSchema = require('../models/courses_schema')
// const user_cart = require("../models/cart_lession_schema");
const cart = require('../models/user_cart_course');
const {
    response
} = require('express');

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
                                                console.log(lib_resp, "&&&&&&&&&&&&&&&&&&&&&&&&" )
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
}

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
        categorySchema.sb_details.findById("5f9164dbad0f5f20b374bc8f").populate({
                path: 'course_chepters',
                populate: {
                    path: 'chepter_lession',
                    model: 'Lessions'
                }
            })
            .then((resp) => {
                console.log(resp, "))))))))))))")
                cart.find({
                        'cart.course_name': req.body.course
                    }).populate({
                        path: 'cart',
                        populate: {
                            path: 'course_chepters',
                            model: 'Chepters'
                        }
                    })
                    .then((data) => {
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
                                        var cart_course_price = total_price(reslt, resp.course_price)
                                        console.log(resp)
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
                                                            cart: resp
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
                                        var cart_course_price = resp.course_price
                                        console.log("cart khali hai")

                                        var new_cart_course = new cart({
                                            count_course: count_courses,
                                            cart_total_price: cart_course_price,
                                            userEmail: req.session.email
                                        })
                                        console.log(new_cart_course, ")))))))))))))")
                                        new_cart_course.cart.push(resp)
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
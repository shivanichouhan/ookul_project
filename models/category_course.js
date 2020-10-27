const mongoose = require("mongoose")
const schema = mongoose.Schema
var Float = require('mongoose-float').loadType(mongoose);

// var librarySchema = new schema({
//     ebook: {
//         type: String,
//         lowercase: true
//     },
//     video: {
//         type: String,
//         createdDate: Date.now,
//         lowercase: true
//     },
//     Notes: {
//         type: String,
//         lowercase: true
//     }

// });

const chepters = new schema({
    chepter_name: {
        type: String,
        unique:true
    },
    chepter_title: {
        type: String,
        unique:true

    },
    chepter_lession: [{
        type: schema.Types.ObjectId,
        ref: 'Lessions'
    }]
});

const courses = new schema({
    course_name: {
        type: String,
        unique:true
    },
    course_chepters: [{
        type: schema.Types.ObjectId,
        ref: 'Chepters'
    }],
    library: [{
        type: schema.Types.ObjectId,
        ref: 'library'
    }],
    course_price:{
       type:Float,
    },
    teacherName: {
        type: String,
        lowercase: true,

    },
    teacherEmail: {
        type: String,
        lowercase: true,
    }

})


const catagory_schema = new schema({
    categoryName: String,
    uppsc: [{
        type: schema.Types.ObjectId,
        ref: "course"
    }],library:[{
        type:schema.Types.ObjectId,
        ref:"Library"
    }]
})
// var lib_details = mongoose.model("library", librarySchema)

var chepter = mongoose.model("Chepters", chepters, 'chepters')
var sb_details = mongoose.model("course", courses)
var categories = mongoose.model("Categories", catagory_schema)
module.exports = {
    sb_details,
    chepter,
    categories}
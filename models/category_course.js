const mongoose = require("mongoose")
const schema = mongoose.Schema
var Float = require('mongoose-float').loadType(mongoose);




const chepters_lession = new schema({
    chepter_number: {
        type: Number,
    },
    chepter_title: {
        type: String,
        // unique: true
    },
    chepter_lession: [{
        type: schema.Types.ObjectId,
        ref: 'Lessions'
    }]
}, { strict: false });

// const chepters = new schema({
//     chepter1: {
//         type: schema.Types.ObjectId,
//         ref: 'Chepter_detail'
//     }, chepter2: {
//         type: schema.Types.ObjectId,
//         ref: 'Chepter_detail'
//     }
// }, { strict: false });



const courses = new schema({
    course_name: {
        type: String,
    },course_title:{
        type:String
    },
    course_chepters: [{
        type: schema.Types.ObjectId,
        ref: 'Chepter_detail'
    }],
    course_price: {
        type:String
    }
    ,
    ratings: {
        type: Number
    }
    ,
    teacherName: {
        type: String,
        lowercase: true,

    },
    description: {
        type: String,
        required: true
    },language:{
        type:String
    },catagory:{
        type:String
    },
    teacherEmail: {
        type: String,
        lowercase: true,
    },
    start_date: { type: Date, default: Date.now },
    updateat: { type: Date, default: Date.now },
    suscriber: {
        type: schema.Types.ObjectId,
        ref: "subscriber"
    },
    course_image: {
        data: Buffer,
        contentType: String,
        default: ''
    },courseType:{
        type:String
    },course_category_by_type:{
        type:String
    }

}, { strict: false })


const catagory_schema = new schema({
    _id: { type: String },
    course_category:{type:String},
    courses: [{
        type: schema.Types.ObjectId,
        ref: "course"
    }]
}, { strict: false })
// var lib_details = mongoose.model("library", librarySchema)

var chepter_details = mongoose.model("Chepter_detail", chepters_lession)
// var chepter = mongoose.model("Chepters", chepters, 'chepters')
var sb_details = mongoose.model("course", courses)
var categories = mongoose.model("Categories", catagory_schema)
module.exports = {
    sb_details,
    // chepter,
    chepter_details,
    categories
}
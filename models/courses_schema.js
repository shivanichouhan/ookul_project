const mongoose = require("mongoose")
const schema = mongoose.Schema
require('mongoose-type-url')






const course_schema = new schema({
    lession_name: {
        type: String,
        trim: true,
        lowercase: true,
        unique:true
    },
    title: {
        type: String,
        required: true
    },
    lession_category: {
        type: String,
        required: true,
        lowercase: true,

        enum: ["public", "private"]
    },
    description: {
        type: String,
        required: true
    },
    course_price: {
        type: String,
        default: ''
    },
    course_type: {
        type: String,
        required: true,
        enum: ["paid", "free"]
    },
    image: { 
        data: Buffer, 
        contentType: String
    },
    teacherEmail: {
        type: String,
        lowercase: true,

    },
    Date: {
        type: String
    }
})



var course_schemas = mongoose.model("Lessions", course_schema,'lessions')

module.exports = 
    course_schemas
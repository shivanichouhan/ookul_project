const mongoose = require("mongoose")
const schema = mongoose.Schema
require('mongoose-type-url')






const course_schema = new schema({
    lession_name: [],
    lession_description: [],
    lesstion_Image: [{
        data: Buffer,
        contentType: String
    }], lession_video: [],
    lession_content: [],
    // lession_category: {
    //     type: String,
    //     required: true,
    //     lowercase: true,

    //     enum: ["public", "private"]
    // },
    tags: {
        type: Map,
        of: String
    },
    teacherEmail: {
        type: String,
        lowercase: true,

    },
    Date: { type: Date, default: Date.now }
})



var course_schemas = mongoose.model("Lessions", course_schema, 'lessions')

module.exports =
    course_schemas
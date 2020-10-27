const mongoose = require("mongoose")
const schema = mongoose.Schema
var Float = require('mongoose-float').loadType(mongoose);



const pdfSchema = new schema({
    course_name :{
        type : String,
        required: true
    },course_title:{
        type:String,
        required:true
    },date:{
        type:String
    },image:{
        data: Buffer, 
        contentType: String,
        default:"" 
    },Payment:{
        type:Float,
        default:0
    },course_type:{
        enum: ["public", "private"]
    },
    course_category:{
        enum:['paid','unpaid']
    },teacherEmail:{
        type:String
    }

})


const audioBookSchema = new schema({
    course_name :{
        type : String,
        required: true
    },course_title:{
        type:String,
        required:true
    },date:{
        type:String
    },image:{
        data: Buffer, 
        contentType: String,
        default:"" 
    },Payment:{
        type:Float
    },course_type:{
        enum: ["public", "private"]
    }

})


const topperSchema = new schema({
    course_name :{
        type : String,
        required: true
    },course_title:{
        type:String,
        required:true
    },date:{
        type:String
    },image:{
        data: Buffer, 
        contentType: String,
        default:"" 
    },Payment:{
        type:Float
    },course_type:{
        enum: ["public", "private"]
    }

})

var syllabus_chema=new schema({
    course_name :{
        type : String,
        required: true
    },course_title:{
        type:String,
        required:true
    },date:{
        type:String
    },image:{
        data: Buffer, 
        contentType: String,
        default:"" 
    },Payment:{
        type:Float
    },course_type:{
        enum: ["public", "private"]
    }
})


var librarySchema = new schema({
    pdf: [{
        type: schema.Types.ObjectId,
        ref:'Pdf'
    }],
    audioBook: [{
        type: schema.Types.ObjectId,
        ref:'AudioBook'
    }],
    topperCopy: [{
        type: schema.Types.ObjectId,
        ref:'TopperCopy'
    }],syllabus:[{
        type: schema.Types.ObjectId,
        ref:'Syllabus'
    }],categories:{
        type:String
    }
});


var lib_details = mongoose.model("Library", librarySchema)

var pdfs = mongoose.model('Pdf',pdfSchema)
var audio_schema = mongoose.model('AudioBook',audioBookSchema)
var TopperSchema = mongoose.model('TopperCopy',topperSchema)
var syllabusSchema = mongoose.model("Syllabus",syllabus_chema)
// var categories_lib = mongoose.model("Categories", catagory_schema)
module.exports = {
    pdfs,
    lib_details,
    TopperSchema,
    audio_schema,
    syllabusSchema}
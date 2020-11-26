const mongoose = require("mongoose")
const schema = mongoose.Schema
const mongoosePaginate = require('mongoose-paginate-v2');

const PostSchema = new schema({
    testName:{type:String},
    teacher_name:{type:String},
    total_questions:{type:Number},
    exam_duration:{type:Number},
    exam_start_time:{
        type:Number
    },exam_date:{
        type:String
    },questions_marks:{
        type:Number
    },
    wrong_q_mark:{
        type:Number
    },
    instruction:{
        type:String
    },questions:[],
    opetion1:[],
    opetion2:[],
    opetion3:[],
    opetion4:[],
    opetion5:[],
    right_answer:[],
    category:[],
    Course_topic:[],
    exam_questions:[]
})

PostSchema.plugin(mongoosePaginate)
module.exports = mongoose.model("user_exams",PostSchema);


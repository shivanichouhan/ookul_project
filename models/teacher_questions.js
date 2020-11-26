const mongoose = require("mongoose")
const schema = mongoose.Schema
const mongoosePaginate = require('mongoose-paginate-v2');

const PostSchema = new schema({
    // testName: { type: String },
    teacher_name: { type: String },
    questions: [],
    opetion1: [],
    opetion2: [],
    opetion3: [],
    opetion4: [],
    opetion5: [],
    right_answer: [],
    category:[],
    Course_topic:[],
    Date: { type: Date, default: Date.now }
})

PostSchema.plugin(mongoosePaginate)
module.exports = mongoose.model("teacher_questions", PostSchema);


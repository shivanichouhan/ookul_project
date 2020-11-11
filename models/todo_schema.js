const mongoose = require("mongoose")
const schema = mongoose.Schema
var Float = require('mongoose-float').loadType(mongoose);

const todo_schema = new schema({
    student_email: {
        type: String,
        required: true
    },
    subjects: {
        type: String,
        required: true
    }, Date: {
        type: String, required: true
    }, Tags: {
        type: String,
        required: true
    }, Notes: {
        type: String,
        required: true
    }, Time: {
        type: String,
        required: true
    }, Status: {
        type: String,
        required: true
    }
})

var TODO_detail = mongoose.model("TodoTask", todo_schema)
module.exports = TODO_detail


// const mongoose = require('mongoose');
// const todoTaskSchema = new mongoose.Schema({
//     content: {
//         type: String,
//         required: true
//     },
//     date: {
//         type: Date,
//         default: Date.now
//     }
// })
// module.exports = mongoose.model('TodoTask', todoTaskSchema);
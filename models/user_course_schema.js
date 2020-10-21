const mongoose = require("mongoose")
const schema = mongoose.Schema


const chepters = new schema({
        chepter_name: {
            type:String,
        },chepter_title:{
            type:String
        },chepter_lession:[{type:schema.Types.ObjectId,ref:'Lessions'}]
    
});

const subjects = new schema({
    user_email:{
        type:String,
        required:true
    },
    course_id:{
        type:String,
        required:true
    },
    course_name:{
        type:String
    },
    course_data: [{
        type: schema.Types.ObjectId,
        ref: 'Chepters'
    }],
})


catagory_schema = new schema({
    subjectName: String,
    uppsc: [{
        type: schema.Types.ObjectId,
        ref: "course"
    }]

})

var chepter = mongoose.model("Chepters", chepters)
var sb_details = mongoose.model("course", subjects)
var categories = mongoose.model("Categories", catagory_schema)
module.exports = {
    sb_details,
    chepter,
    categories
}
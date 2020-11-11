const mongoose = require("mongoose")
const schema = mongoose.Schema
var Float = require('mongoose-float').loadType(mongoose);


const user_detail = new schema({
    user_name: {
        type: String
    }, user_email: {
        type: String
    }, user_image: {
        type: String
    },
    user_role: {
        type: String
    }
})

const user_subscribe = new schema({
    subscribe_name: { type: String },
    teacher_name :{type:String},
    teacher_email:{type:String},
    subscriber_detail: [{
        type: schema.Types.ObjectId,
        ref: 'subscribe_user'
    }]
});

var users = mongoose.model("subscribe_user", user_detail)
var subscriber = mongoose.model("subscriber", user_subscribe);

module.exports = { users, subscriber }

const mongoose = require("mongoose")
const schema = mongoose.Schema
var Float = require('mongoose-float').loadType(mongoose);

var user_cart = new schema({
    count_course: {
        type: Number
    },
    cart: [{
        type: mongoose.Schema.Types.ObjectId,
        ref:'course',
    }],
    cart_total_price:{
        type:Float
    },userEmail:{
        type:String,
        required:true,

    }
});



var cart = mongoose.model("user_cart", user_cart)
module.exports = cart
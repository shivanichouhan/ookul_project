const mongoose = require("mongoose");
const Schema = mongoose.Schema;


const otpSchema = new Schema({
    name: {
        type: String,
        required: true,
        unique: true
    },
    email: {
        type: String,
        required: true
    },
    password: {
        type: String,
        required: true
    },
    otp: {
        type: String,
        default: ''
    }
});


module.exports = mongoose.model("user_detail", otpSchema);
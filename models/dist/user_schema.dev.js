"use strict";

var mongoose = require("mongoose");

var schema = mongoose.Schema;
var user_login_schema = new schema({
  name: {
    type: String,
    required: true
  },
  sername: {
    type: String,
    required: true
  },
  mob_number: {
    type: String,
    required: true
  },
  role: {
    type: String,
    "default": 'student',
    "enum": ["student", "teacher", "admin"]
  },
  email: {
    type: String,
    trim: true,
    lowercase: true,
    unique: true,
    required: 'Email address is required',
    match: [/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/, 'Please fill a valid email address']
  },
  password: {
    type: String,
    required: true
  },
  otp: {
    type: String,
    "default": ''
  }
});
var detail = mongoose.model("users  ", user_login_schema);
module.exports = detail;
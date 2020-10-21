
// var express = require("express");
// var app = express();
// const facebookStrategy = require("passport-facebook").Strategy;
// var passport = require("passport")

// passport.use(
//     new facebookStrategy({
//         clientID:"333309537952117",
//         clientSecret:"0c10639980efc88d7e3a377a5de5bdd6",
//         callbackURL:"http://localhost:5000/auth/facebook"
//     },
//     function(profile){
//         console.log("profile",profile);
// })
// )
// app.get("/auth/facebook",passport.authenticate("facebook",{
//     scope:["profile","email"]
// }))

// app.get("/auth/facebook/login/callback",passport.authenticate("facebook",{

// }))

// app.listen(5000,()=>{
//     console.log("server is listning on 5000...")
// })

var mongoose = require('mongoose')

mongoose.set('useNewUrlParser', true);
mongoose.set('useFindAndModify', false);
mongoose.set('useCreateIndex', true);
mongoose
  .connect('mongodb://localhost:27017/sveltose')
  .then(() => {
    console.log('Connected to the Database successfully');
  });
  
const Schema = mongoose.Schema

var eventSchema = Schema({
    title     : String,
    location  : String,
    startDate : Date,
    endDate   : Date
});

var personSchema = Schema({
    firstname: String,
    lastname: String,
    email: String,
    gender: {type: String, enum: ["Male", "Female"]},
    dob: Date,
    city: String,
    interests: [],
    eventsAttended: [{ type: Schema.Types.ObjectId, ref: 'Event' }]
});

var Event  = mongoose.model('Event', eventSchema);
var Person = mongoose.model('Person', personSchema);

var aaron = new Person({firstname: 'vaibhav'})
var event1 = new Event({title: 'Hackathon', location: 'foo'})

event1.save()
.then((result)=>{
    aaron.eventsAttended.push(result);
    aaron.save()
    .then((results)=>{
        console.log("data saved",results)
    }).catch((err)=>{
        console.log("error found",err)
    })
})


Person
.findOne({ firstname: 'Aaron' })
.populate('eventsAttended') // only works if we pushed refs to person.eventsAttended
.exec(function(err, person) {
    if (err) return handleError(err);
    console.log(person);
});




{
    "uppsc": [
        {
            "course_chepters": [
                {
                    "chepter_lession": [
                        {
                            "urls": [
                                "http://localhost:3000/insertCourse"
                            ],
                            "course_price": "",
                            "_id": "5f8eeccfb49f245cfb75e1fb",
                            "lession_name": "introduction of php",
                            "title": "php devlopments",
                            "lession_category": "public",
                            "description": "this is the course for php for backend",
                            "course_type": "paid",
                            "teacherName": "shivi",
                            "teacherEmail": "shivi@gmail.com",
                            "__v": 0
                        }
                    ],
                    "_id": "5f8eeccfb49f245cfb75e1fc",
                    "chepter_name": "chepter3",
                    "chepter_title": "learning mongodb",
                    "__v": 0
                }
            ],
            "library": [],
            "_id": "5f8eeccfb49f245cfb75e1fe",
            "course_name": "data stucture",
            "__v": 0
        }
    ],
    "_id": "5f8eecd0b49f245cfb75e200",
    "categoryName": "uppsc"
}
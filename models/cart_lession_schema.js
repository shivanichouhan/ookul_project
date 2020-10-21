const mongoose = require("mongoose")
const schema = mongoose.Schema



// [{"course":"python elearning","title":"python course",
// "course_category":"private","description":"good to see",
// "urls":"https://www.youtube.com/watch?v=OTmQOjsl0eg"
// ,"course_type":"paid"}]


const cart_schema = new schema({
    lession_name: {
        type: String,
        required: true
    },
    title: {
        type: String,
        required: true
    },
    course_category: {
        type: String,
        required: true,
        lowercase: true,
        enum: ["public", "private"]
    },
    description: {
        type: String,
        required: true
    },

    course_price: {
        type: String,
        default: ''
    },
    categoryName: {
        type: String,
        lowercase: true,
    },
    course_type: {
        type: String,
        required: true,
        enum: ["paid", "free"]
    },
    image: {
        type: String
    },
    teacherName: {
        type: String,
        lowercase: true,

    },
    teacherEmail: {
        type: String,
        lowercase: true,
        unique: true,

    }
})
var Cart = mongoose.model("Cart  ", cart_schema)
module.exports = Cart
// if (course_type == 'course_type') {
//   const newCourse = new courseSchema({
//     course: courses,
//     title: title,
//     course_category: course_category,
//     description: description,
//     urls: urls,
//     course_type: course_type,
//     course_price: req.body.price
//   })
//   let file = req.files
//   console.log(file, "====____-----")
//   newCourse.image.data = fs.readFileSync(req.files.myfile.path)
//   newCourse.image.contentType = 'image/png';
//   newCourse.save()
//     .then((result) => {
//       console.log(result._id)

//     }).catch((err) => next(err))
// }
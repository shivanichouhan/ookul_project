const PostSchema = new Schema({
    body: String
})

PostSchema.plugin(mongoosePaginate)
const Post = mongoose.model('Post', PostSchema);

async postCreate(req, res, next) {
    let post = new Post(req.body.post);
    post.body = req.body.post.body;
    await post.save();
  }
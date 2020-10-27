<?php include"header.php"; ?>
<style>
	
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
.box1{
  width: 100%;
  float: left;  
}

</style>
  <div class="box1">
	                                                      <div class="container">
	                                                          <h2 style="font-size:25px; text-align:center; padding:20px 0px;"> Your Account</h2>
                                                              <form action="update_profile_sub.php" method="POST" enctype="multipart/form-data">
                                                                   <input type="hidden" value="<?php echo $user['id']; ?>" name="id" >
                                                                <div class="row">
                                                                  <div class="col-25">
                                                                    <label for="fname">First Name</label>
                                                                  </div>
                                                                  <div class="col-75">
                                                                    <input type="text" id="fname" name="fname" value="<?php echo $user['fname']; ?>" placeholder="Your name..">
                                                                  </div>
                                                                </div>
                                                                <div class="row">
                                                                  <div class="col-25">
                                                                    <label for="lname">Last Name</label>
                                                                  </div>
                                                                  <div class="col-75">
                                                                    <input type="text" id="lname" name="lname" value="<?php echo $user['lname']; ?>" placeholder="Your last name..">
                                                                  </div>
                                                                  <div class="col-25">
                                                                    <label for="lname">E-Mail</label>
                                                                  </div>
                                                                  <div class="col-75">
                                                                    <input type="text" id="lname" name="email" placeholder="E-Mail" value="<?php echo $user['email']; ?>">
                                                                  </div>
                                                                  <div class="col-25">
                                                                    <label for="lname">Phone Number</label>
                                                                  </div>
                                                                  <div class="col-75">
                                                                    <input type="text" id="lname" name="phone" value="<?php echo $user['phone']; ?>" placeholder="Phone Number">
                                                                  </div>
                                                                  
                                                                </div>
                                                                <div class="row">
                                                                  <div class="col-25">
                                                                    <label for="country">Address</label>
                                                                  </div>
                                                                  <div class="col-75">
                                                                  <input type="text" name="address"  value="<?php echo $user['address']; ?>" placeholder="Address">
                                                                  </div>
                                                                <div class="row">
                                                                  <div class="col-25">
                                                                    <label for="country">Country</label>
                                                                  </div>
                                                                  <div class="col-75">
                                                                    <select id="country" name="country">
                                                                        <option <?php if($user['country']=="India"){ ?>selected="selected" <?php } ?> value="India">India</option>
                                                                      <option <?php if($user['country']=="australia"){ ?>selected="selected" <?php } ?> value="australia">Australia</option>
                                                                      <option <?php if($user['country']=="canada"){ ?>selected="selected" <?php } ?> value="canada">Canada</option>
                                                                      <option <?php if($user['country']=="usa"){ ?>selected="selected" <?php } ?> value="usa">USA</option>
                                                                      
                                                                    </select>
                                                                  </div>
                                                                  <div class="col-25">
                                                                    <label for="lname">State</label>
                                                                  </div>
                                                                  <div class="col-75">
                                                                    <input type="text" id="lname"  value="<?php echo $user['state']; ?>" name="state" placeholder="State">
                                                                  </div>
                                                                  <div class="col-25">
                                                                    <label for="lname">City</label>
                                                                  </div>
                                                                  <div class="col-75">
                                                                    <input type="text" id="lname" value="<?php echo $user['city']; ?>" name="city" placeholder="City">
                                                                  </div>
                                                                  <div class="col-25">
                                                                    <label for="lname">District</label>
                                                                  </div>
                                                                  <div class="col-75">
                                                                    <input type="text" id="lname" value="<?php echo $user['district']; ?>" name="district" placeholder="District">
                                                                  </div>
                                                                </div>
                                                                <div class="row">
                                                                  <div class="col-25">
                                                                    <label for="subject">Subject</label>
                                                                  </div>
                                                                  <div class="col-75">
                                                                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"><?php echo $user['subject']; ?></textarea>
                                                                  </div>
                                                                </div>
                                                                <div class="row">
                                                                  <div class="col-25">
                                                                    <label for="subject">Image</label>
                                                                  </div>
                                                                  <div class="col-75">
                                                                   <input type="file" name="image" >
                                                                    <input type="hidden" value="<?php echo $user['picture']; ?>" name="limg" >
                                                                    <img src="admin/upload/<?php echo $user['picture']; ?>" style="width:150px;">
                                                                  </div>
                                                                </div>
                                                                <div class="row row1">
                                                                  <input type="submit" value="Submit">
                                                                </div>
                                                              </form>
                                                            </div>
                                                     </div>
<?php include"footer.php"; ?>

<!-- sidebar with tab -->
<style>
.sidebar {
height: 100%;
width:20%;
float: left;
z-index: 1;
top: 0;
left: 0;
background-color: #202020;
overflow-x: hidden;
padding-top: 16px;
}

.sidebar a {
padding: 25px 8px 25px 16px;
text-decoration: none;
font-size: 20px;
color: #949494;
display: block;
}
</style>
<div class="mainsidebar">

<!-- useraccount  -->
<div class="box1">
<div class="container">
  <h2 style="font-size:25px; text-align:center; padding:20px 0px;"> Your Account</h2>
    <div class="imagebox">
      <img src="<?php echo base_url('/admin/upload/'.$user['picture']) ?>" alt="profileimage" style="width:100px; height:150px; padding:15px 0;">  
    </div>
  <form action="<?php echo base_url('home/updateprofile');?>" method="post" enctype="multipart/form-data">
  	 <div class="image_upload">
  	       <input type="file" id="myFile" name="picture">
      </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">First Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="fname" value="<?php  echo $user['fname'];?>" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Last Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="lname" value="<?php  echo $user['fname'];?>" placeholder="Your last name..">
      </div>
      <div class="col-25">
        <label for="lname">E-Mail</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname"  value="<?php  echo $user['email'];?>" name="email" placeholder="E-Mail">
      </div>
      <div class="col-25">
        <label for="lname">Phone Number</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="phone" value="<?php  echo $user['phone'];?>" placeholder="Phone Number">
      </div>
      
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Country</label>
         </div>
         <div class="col-75">
          <input type="text" id="Country" name="country" value="<?php  echo $user['country'];?>" placeholder="Country">
      </div>
      </div>
      <div class="row">
     
      <div class="col-25">
        <label for="lname">State</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname"  value="<?php  echo $user['state'];?>" name="state" placeholder="State">
      </div>
      <div class="col-25">
        <label for="lname">City</label>
      </div>
      <div class="col-75">
        <input type="text" id="city" name="city" value="<?php  echo $user['city'];?>" placeholder="City">
      </div>
      <div class="col-25">
        <label for="lname">District</label>
      </div>
      <div class="col-75">
        <input type="text" id="district" name="district" value="<?php  echo $user['district'];?>" placeholder="District">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Subject</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"><?php  echo $user['subject'];?></textarea>
      </div>
    </div>
    <div class="row row1">
      <input type="submit" value="Submit" name="submit">
    </div>
  </form>
</div>
</div>
<!-- useraccount End -->

</div>


<link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,900&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://rawgit.com/dbrekalo/attire/master/dist/css/build.min.css">
<script src="https://rawgit.com/dbrekalo/attire/master/dist/js/build.min.js"></script>

<link rel="stylesheet" href="dist/fastselect.min.css">
<script src="dist/fastselect.standalone.js"></script>

        <style>

            .fstElement { font-size: 1.10em; }
            .fstToggleBtn { min-width: 16.5em; }

            .submitBtn { display: none; }

            .fstMultipleMode { display: block; }
            .fstMultipleMode .fstControls { width: 100%; }

        </style>  
 <?php
include"../include/database.php";
$obj= new database();

if($_GET['id']==1)
{
	?>
	<div class="form-group">
<label for="exampleInputEmail1">Class</label>

<select class="form-control" data-placeholder="Choose a city..." id="class"  name="class" onChange="pp(this.value);" required>
<option value="">Class</option>
<?php
   $row=$obj->fetchAllDetailByStatus("class");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option value="<?php echo $rs['id'];?>"><?php echo $rs['class'];?></option>
   <?php }}?>

</select>
							  

</div>
	
	
	
	
<?php }
elseif($_GET['id']==2){
	
	
	?>
	
	
	<div class="form-group">
											  <label for="exampleInputEmail1"> Executive Supervisor</label>

												<select class="form-control" data-placeholder="Choose a city..." id="class" multiple  name="agent[]" required>
													<option value=""> -- Executive Supervisor --</option>
														<?php
	
	
	
	    $row=$obj->fetchAllDetailByStatus("agent");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option selected="selected" value="<?php echo $rs['id'];?>"><?php echo $rs['name'];?></option>
   <?php }}?>
												</select>
							  
											</div>

   <?php
}elseif($_GET['id']==5){
	
	
	?>
	
	
	<div class="form-group">
											  <label for="exampleInputEmail1"> Block Supervisor</label>

												<select class="multipleSelect" data-placeholder="Choose a city..." id="class" multiple  name="blocksupervioser[]" required>
													<option value=""> -- Block Supervisor --</option>

<?php
	
	
	
	    $row=$obj->fetchAllDetailByStatus("subagent");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option selected="selected" value="<?php echo $rs['id'];?>"><?php echo $rs['name'];?></option>
   <?php }}?>
												</select>
							  
											</div>

   <?php
} elseif($_GET['id']==4){
	
	
	?>
	
	
	<div class="form-group">
											  <label for="exampleInputEmail1"> Relationship Manager</label>

												<select class="multipleSelect" data-placeholder="Choose a city..." id="class" multiple  name="refferalagent[]" required>
													<option value=""> -- Refferal --</option>
														<?php
	
	
	
	    $row=$obj->fetchAllDetailByStatus("referal_agent");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option selected="selected" value="<?php echo $rs['id'];?>"><?php echo $rs['username'];?></option>
   <?php }}?>
												</select>
							  
											</div>

   <?php
}elseif($_GET['id']==6){ ?>
	<div class="form-group">
											  <label for="exampleInputEmail1"> Free Access User</label>

												<select class="multipleSelect" data-placeholder="Choose a city..." id="class" multiple  name="free_access[]" required>
													<option value=""> -- Free Access User --</option>
														<?php
	
	
	
	    $row=$obj->fetchAllDetailByIdByStatus(1,"user_register","pstatus",0,"status");
	    //fetchAllDetail("free_acess");
  if($row){
      
  while($rs=mysqli_fetch_assoc($row)){
  if($rs['fcm_token']){?>
  
    <option selected="selected" value="<?php echo $rs['id'];?>"><?php echo $rs['name'];?></option>
   <?php } else{ }}}?>
												</select>
							  
											</div>
<?php } 
elseif($_GET['id']==7) { ?>

<div class="form-group">
											  <label for="exampleInputEmail1"> Unpaid User</label>

												<select class="multipleSelect" data-placeholder="Choose a city..." id="class" multiple  name="unpaid[]" required>
													<option value=""> -- Unpaid User --</option>
														<?php
	
	
	
	    $row=$obj->fetchAllDetailById(0,"user_register","ptatus");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option selected="selected" value="<?php echo $rs['id'];?>"><?php echo $rs['name'];?></option>
   <?php }}?>
												</select>
							  
											</div>
<?php } 
elseif($_GET['id']==3){ ?>
	<div class="form-group">
											  <label for="exampleInputEmail1">Agent</label>

												<select class="multipleSelect" data-placeholder="Choose a city..." id="userall"  multiple name="agent[]"  required>
													<option value="all">Agent</option>
													<?php




   $row=$obj->fetchAllDetailByStatus("agent");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option selected="selected"   value="<?php echo $rs['id'];?>"><?php echo $rs['name'];?></option>
   <?php }}?>
												</select>
							  
											</div>
											<div class="form-group">
											  <label for="exampleInputEmail1">Sub Agent</label>

												<select class="multipleSelect" data-placeholder="Choose a city..." id="userall"  multiple name="subagent[]"  required>
													<option value="all">Sub Agent</option>
													<?php




   $row=$obj->fetchAllDetailByStatus("subagent");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option selected="selected"   value="<?php echo $rs['id'];?>"><?php echo $rs['name'];?></option>
   <?php }}?>
												</select>
							  
											</div>
											<div class="form-group">
											  <label for="exampleInputEmail1">Refferal Agent</label>

												<select class="multipleSelect" data-placeholder="Choose a city..." id="userall"  multiple name="refferal[]"  required>
													<option value="all">Refferal Agent</option>
													<?php




   $row=$obj->fetchAllDetailByStatus("referal_agent");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option selected="selected"   value="<?php echo $rs['id'];?>"><?php echo $rs['username'];?></option>
   <?php }}?>
												</select>
							  
											</div>

											<div class="form-group">
											  <label for="exampleInputEmail1">User</label>

												<select class="multipleSelect" data-placeholder="Choose a city..." id="userall"  multiple name="student[]"  required>
													<option value="all">User</option>
													<?php




   $row=$obj->fetchAllDetailByStatus("user_register");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option selected="selected"   value="<?php echo $rs['id'];?>"><?php echo $rs['name'];?></option>
   <?php }}?>
												</select>
							  
											</div>
<?php }


	?>
<?php 	if($_GET['id']==8)
{?>
	<div class="form-group">
											  <label for="exampleInputEmail1">PRO </label>

												<select  class="multipleSelect" data-placeholder="Choose a PRO..." id="userall"  multiple name="pro[]"  required>
													<option value="">PRO</option>
													<?php
   $row=$obj->fetchAllDetailByStatus("pro_register");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option value="<?php echo $rs['id'];?>"><?php echo $rs['pro_id'];?> | <?php echo $rs['name'];?></option>
   <?php }}?>
												</select>
							  
											</div>
	
<?php }
	?>
	<?php 	if($_GET['id']==9)
{?>
<div class="form-group">
<label for="exampleInputEmail1">E-Government </label>
<select  class="multipleSelect" data-placeholder="Choose a PRO..." id="userall"  multiple name="egov[]"  required>
<option value="">E-Government</option>
<?php
   $row=$obj->fetchDetailByid(0,"user_register_goverment","pstatus");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option selected="selected" value="<?php echo $rs['id'];?>"> <?php echo $rs['name'];?></option>
   <?php }}?>
												</select>
							  
											</div>
	
<?php }

	if($_GET['id']==10)
{?>
	<div class="form-group">
											  <label for="exampleInputEmail1">E-Government </label>

												<select  class="multipleSelect" data-placeholder="Choose a PRO..." id="userall"  multiple name="egov[]"  required>
													<option value="">E-Government</option>
													<?php
   $row=$obj->fetchDetailByid(1,"user_register_goverment","pstatus");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){?>
    <option value="<?php echo $rs['id'];?>" selected="selected"> <?php echo $rs['name'];?></option>
   <?php }}?>
												</select>
							  
											</div>
	
<?php }
	?>
 <script>

                $('.multipleSelect').fastselect();

            </script>	  

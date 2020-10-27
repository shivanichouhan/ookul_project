<?php include"header.php";
include"menu.php"; 
$b=explode('/',$a);
 $_GET['id']=$b['6']; 
 

$user=$obj->fetchById($_GET['id'],"user_register","id");
$block=$obj->fetchById($user['block'],"block","id");
?>            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="header-title">
                                <h1>User </h1>
                                <small>Add User <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="<?php echo $base1; ?>deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="<?php echo $base1; ?>user_list.php">User List</a></li>
                                    <li class="active">User</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
						<form data-toggle="validator" action="<?php echo $base1; ?>edit_user_sub.php" method="post" enctype="multipart/form-data">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add User</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
										<div class="form-group">
                                                <label for="inputName" class="control-label">Name</label>
                                                <input type="text" class="form-control" id="inputName" name="name" placeholder="name" value="<?php echo $user['name']; ?>" required>
                                        </div>
										<div class="form-group">
                                                <label for="inputName" class="control-label">Email</label>
                                                <input type="email" class="form-control" id="inputName" name="email" placeholder="email"  value="<?php echo $user['email']; ?>"  required>
                                        </div>
										<div class="form-group">
                                                <label for="inputName" class="control-label">Mobile Number</label>
                                                <input type="text" class="form-control" id="inputName" name="mobile" placeholder="Mobile"  value="<?php echo $user['mobile']; ?>"  required>
                                        </div>
										<div class="form-group">
                                                <label for="inputName" class="control-label">Password</label>
                                                <input type="text" class="form-control" id="inputName" name="password" placeholder="Password"  value="<?php echo $user['password']; ?>"  required>
                                        </div>
										<div class="form-group">
                                                <label for="inputName" class="control-label">Session Expiry Date</label>
                                                <input type="date" class="form-control" id="inputName" name="expriy_date" placeholder="Expiry Date" required  value="<?php echo $user['expriy_date']; ?>" >
                                        </div>

										<div class="form-group">
                                                <label for="exampleSelect1">District</label>
												
                                                <select class="form-control" id="exampleSelect1" name="city"  id="city" onChange="blok(this.value);" >
												 <option value="">District</option>
												<?php
													$table='city';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option  <?php if($user['city_id']==$row['id']) { ?> selected="selected" <?php } ?> value="<?php echo $row['id']; ?>"><?php echo $row['city'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
												
														
                                        </div>
										 <div class="form-group">
                                                <label for="inputName" class="control-label">Block Name</label>
                                                 <select class="form-control" data-placeholder="Choose a block..." id="block" name="block_id" required >
														 <option value="<?php $user['block']; ?>"><?php $block['block']; ?></option>
															</select>
													
                                            </div>	
										<div class="form-group">
                                                <label for="inputName" class="control-label">Address</label>
												
                                                <textarea class="form-control" id="inputName" name="address" required><?php echo $user['address']; ?></textarea>
											</div>
											<div class="form-group">Gender</label>
												<label class="form-check-label">
                                                        <input type="radio" name="gender" checked="checked" id="optionsRadios2"  value="<?php echo $user['gender']; ?>" >Male
														<input type="radio" name="gender" id="optionsRadios2" checked="checked"  value="<?php echo $user['gender']; ?>" >Female  
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Date Of Birth</label>
                                                <input type="date" class="form-control" id="inputName" name="dob" placeholder="dob" required  value="<?php echo $user['dob']; ?>" >
                                            </div>
											
											<div class="form-group">
											<label for="exampleSelect1">Select Class</label>
												<select class="form-control" id="exampleSelect1" name="class"  id="class">
												 <option value="">Class</option>
												<?php
													$table='class';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option <?php if($user['class']==$row['id']) { ?> selected="selected" <?php } ?> value="<?php echo $row['id']; ?>"><?php echo $row['class'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
											</div>
											<div class="form-group">
                                                <label for="exampleInputFile">Photo</label>
                                                <input type="file" name="photo" id="exampleInputFile" aria-describedby="fileHelp">
												<input type="hidden" class="form-control" name="limg" value="<?php echo $admin['image'];?>">
                                               
                                            </div>
									
											
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
						</form>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
			<script>
 function blok(b){
				 alert(b);
				 $("#block").load("blockAjax.php?id="+b);
				  }
</script>				
       <?php include"footer.php"; ?>
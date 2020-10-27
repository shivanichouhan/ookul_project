<?php include"header.php";
include"menu.php"; 
$b=explode('/',$a);
 $_GET['id']=$b['5']; 
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
                                <h1>Executive Supervisor </h1>
                                <small>Edit Executive Supervisor <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="agent_list">Executive Supervisor List</a></li>
                                    <li class="active">Executive Supervisor</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
						<form data-toggle="validator" action="<?php echo $base1; ?>edit_agent_sub.php" method="post" enctype="multipart/form-data">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Edit Executive Supervisor</h4>
                                        </div>
                                    </div>
									<?php $aa=$obj->fetchById($_GET['id'],"agent","id");
											//$cut=$obj->fetchById($aa['city_id'],"city","id");	
										
										
										?>
                                    <div class="panel-body">
                                        <input type="hidden" class="form-control" id="inputName" name="id" value="<?php echo $_GET['id']; ?>" placeholder="name" required>
										<div class="form-group">
                                                <label for="inputName" class="control-label">Name</label>
                                                <input type="text" class="form-control" id="inputName" name="name" value="<?php echo $aa['name']; ?>" placeholder="name" required>
                                        </div>
										<div class="form-group">
                                                <label for="inputName" class="control-label">Email</label>
                                                <input type="email" class="form-control" id="inputName" name="email" placeholder="email" value="<?php echo $aa['email']; ?>" required>
                                        </div>
										<div class="form-group">
                                                <label for="inputName" class="control-label">Password</label>
                                                <input type="password" class="form-control" id="inputName" name="password" placeholder="password" value="<?php echo $aa['password']; ?>" required>
                                        </div>
										<div class="form-group">
                                                <label for="inputName" class="control-label">Mobile Number</label>
                                                <input type="text" class="form-control" id="inputName" name="mobile" placeholder="Mobile" value="<?php echo $aa['mobile']; ?>" required>
                                        </div>
										<div class="form-group">
                                                <label for="inputName" class="control-label">Amount</label>
                                                <input type="text" class="form-control" id="inputName" name="amount" placeholder="amount" value="<?php echo $aa['amount']; ?>" required>
                                        </div>
										<div class="form-group">
                                                <label for="exampleSelect1">Block Supervisor</label>
												
                                            <select class="form-control" id="exampleSelect1" name="block_supervisor_id[]" multiple>
												 <option disabled >(Name | Block)</option>
												 
												<?php
													//$table='subagent';
													
															
															$u=explode(",",$aa['block_supervisor_id']);
	
//$u=explode(",",$coupan);
		foreach($u as $uu =>$value)
			{
				$r=$u[$uu];
				$blk=$obj->fetchById($r,"subagent","id");
															?>
															
                                                    <option   value="<?php echo $blk['id']; ?>" selected="selected"><?php echo $blk['name'];  ?> | <?php echo $blk['block_id']; ?> </option>
													<?php } 
													
							$rs=$obj->fetchAllDetailByStatus0004("subagent");
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
													?>
													   <option   value="<?php echo $row['id']; ?>"><?php echo $row['name'];  ?> | <?php echo $row['block_id']; ?> </option>
												
													<?php 
													} 
													
													}
													?>
													
                                                </select>
														
                                            </div>
                                         
                                            <!--<div class="form-group">
                                                <label for="inputName" class="control-label">City Name</label>
                                                 <select class="form-control" data-placeholder="Choose a City..." id="city" name="city_id" required onChange="sc(this.value);">
														 <option value="<?php echo $aa['city_id']; ?>"><?php echo $cut['city']; ?></option>
															</select>
													
                                            </div>-->
												
											<div class="form-group">
                                                <label for="inputName" class="control-label">Address</label>
												
                                                <textarea class="form-control" id="inputName" name="address" required><?php echo $aa['address']; ?></textarea>
											</div>
									<!--	<div class="form-group">
                                                <label for="inputName" class="control-label">Expiry Date</label>
                                                <input type="date" class="form-control" id="inputName" name="expriy_date" value="<?php echo $aa['expriy_date']; ?>" placeholder="Expiry Date" required>
                                        </div>-->
										<div class="form-group">
                                                <label for="inputName" class="control-label">Adhar Card Number</label>
                                                <input type="text" class="form-control" id="inputName" name="adhar_no" placeholder="Adhar Card Number" value="<?php echo $aa['adhar_no']; ?>" required>
                                        </div>
											<div class="form-group">
                                                <label for="exampleInputFile">Upload document</label>
                                                <input type="file" name="document" id="exampleInputFile" aria-describedby="fileHelp">
													<input type="hidden" class="form-control" name="limg1" value="<?php echo $aa['document'];?>">
                                               
                                            </div>
											<div class="form-group">
                                                <label for="exampleInputFile">Photo</label>
                                                <input type="file" name="photo" id="exampleInputFile" aria-describedby="fileHelp">
												<input type="hidden" class="form-control" name="limg" value="<?php echo $aa['photo'];?>">
                                               
                                            </div>
                                            <div class="form-group">
                                            <p style="padding: 20px; background-color: #f44336; color: white;">Bank Account Details</p>
                                            </div>
                                            	<div class="form-group">
                                                <label for="inputName" class="control-label">Account Holder Name</label>
                                                <input type="text" class="form-control" id="inputName" name="account_holder_name" value="<?php echo $aa['account_holder_name'];?>" placeholder="Account Holder Name" required>
                                        </div>
                                        	<div class="form-group">
                                                <label for="inputName" class="control-label">Account Number</label>
                                                <input type="text" class="form-control" id="inputName" name="account_number" value="<?php echo $aa['account_number'];?>" placeholder="Account Number" required>
                                        </div>
                                        	<div class="form-group">
                                                <label for="inputName" class="control-label">IFC Code</label>
                                                <input type="text" class="form-control" id="inputName" name="ifc_code" value="<?php echo $aa['ifc_code'];?>" placeholder="IFC Code" required>
                                        </div>
                                        <div class="form-group">
                                                <label for="inputName" class="control-label">Branch Name</label>
                                                <input type="text" class="form-control" id="inputName" name="branch_name" value="<?php echo $aa['branch_name'];?>" placeholder="Branch Name" required>
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
 function ct(a){
				// alert(a);
				 $("#city").load("city_Ajax.php?id="+a);
				  }
				  </script>
				  			 <script>
 function sc(a){
				 alert(a);
				 $("#school").load("schoolAjax.php?id="+a);
				  }
				  </script>
       <?php include"footer.php"; ?>
<?php include"header.php";
include"menu.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <div class="content-wrapper">
                <div class="container">
                    <div class="content">
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="header-title">
                                <h1> Royality Program </h1>
                                <small>Add Royality Program <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="royality_list.php"> Royality Program List</a></li>
                                    <li class="active">Add Royality Programn</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4> Add Royality Program</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form  action="royality_sub.php" enctype="multipart/form-data"  method="post">
                                           
											<div class="form-group">
                                                <label for="inputName" class="control-label"> Name</label>
                                                <input type="text" class="form-control" id="inputName" name="name" placeholder=" Name " required>
											</div>
											
											<div class="form-group">
                                                <label for="inputName" class="control-label"> Level</label>
                                           <select class="form-control" id="exampleSelect1" name="level_id"  >
												 <option value="">--Level--</option>
												<?php
													$table='royal_level';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['level'];  ?></option>
													<?php } 
													}
													?>
                                                </select>											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Start Date </label>
                                                <input type="date" class="form-control" id="inputName" name="start_date" placeholder="start date" required>
											</div>
											
											<div class="form-group">
                                                <label for="inputName" class="control-label">End Date </label>
                                                <input type="date" class="form-control" id="inputName" name="end_date" placeholder="End Date" required>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Target Student </label>
                                                <input type="text" class="form-control" id="inputName" name="t_student" placeholder="Target Student" required>
											</div>
											
											 <div class="form-group">
                                                <label for="exampleSelect1">User Name</label>
                                                <select class="form-control" id="exampleSelect1" name="user_name">
                                                 <option value="">User Name</option>
                                                  <option value="1">Block Supervisor </option>
                                                 <option value="2">Executive Supervisor</option>
                                              <option value="3">RelationShip  manager</option>
										<option value="4">Public  Relationship  Officer</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> 
       <?php include"footer.php"; ?>
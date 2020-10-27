<?php include"header.php";
include"menu.php"; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <!-- /.content-wrapper -->
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
                                <h1>School </h1>
                                <small>Add School <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="school_list.php">School List</a></li>
                                    <li class="active">School</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add School</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="add_school_sub.php" method="post">
											<div class="form-group">
                                                <label for="inputName" class="control-label">School Name</label>
                                                <input type="text" class="form-control" id="inputName" name="school" placeholder="school" required>
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
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['city'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
														
                                        </div>
                                        
										<div class="form-group">
                                                <label for="inputName" class="control-label">Block Name</label>
                                                 <select class="form-control" data-placeholder="Choose a block..." id="block" name="block"  >
														 <option value=""> -- Block --</option>
															</select>
													
                                            </div>
                                            
											<!--<div class="form-group">
                                                <label for="inputName" class="control-label">Upload (CSV)</label>
											  <input type="file" name="filename" />
											</div>-->
											<!--<div class="form-group">
                                                <label for="inputName" class="control-label">Start Date</label>
                                                <input type="date" class="form-control" id="inputName" name="start_year" placeholder="class" required>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">End Date </label>
                                                <input type="date" class="form-control" id="inputName" name="end_date" placeholder="class" required>
											</div>-->
											
											<!--<div class="form-group">
                                                <label for="inputName" class="control-label">City</label>
													<select class="form-control" data-placeholder="Choose a City..." id="city" name="city" required>
														 <option value=""> -- City --</option>
															</select>
				  
                                               <!-- <input type="text" class="form-control" id="inputName" name="state" placeholder="State" required>-->
                                            <!--</div>-->
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
            </div> <!-- /.
			-wrapper -->
            <!-- start footer -->
                   <?php include"footer.php"; ?>
			 <script>
 function ct(a){
				 alert(a);
				 $("#city").load("city_Ajax.php?id="+a);
				  }
				  </script>
				  
	<script>
 function blok(b){
				 //alert(b);
				 $("#block").load("schoolbloackAjax.php?id="+b);
				  }
</script>
<?php include"header.php";
include"menu.php"; 

$b=explode('/',$a);
 $_GET['id']=$b['5'];
$us=$obj->fetchById($_GET['id'],"routine","id");
$us1=$obj->fetchById($us['day'],"days","id");
?>
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
                                <h1>Routine </h1>
                                <small>Edit Routine <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="routing_list.php">Routine List</a></li>
                                    <li class="active">Routine</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Edit Topic</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="<?php echo $base1; ?>edit_routing_sub" method="post" enctype="multipart/form-data">
											<div class="form-group">
											    <input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">
                                                <label for="inputName" class="control-label">Days</label>
                                                <select class="form-control" id="exampleSelect1" name="day"  >
												 
												<?php
													$table='days';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option <?php if($row['id']==$us['day']) { ?> selected='selected'  <?php } ?> value="<?php echo $row['id']; ?>"><?php echo $row['days'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
                                            </div>
           <!--                                 <div class="form-group">-->
           <!--                                     <label for="inputName" class="control-label">Level</label>-->
											<!--		<select class="form-control" data-placeholder="Choose a subject..." id="plan" name="level" required onChange="da(this.value);">-->
											<!--			 <option value=""> -- Level --</option>-->
											<!--				</select>-->
                                               
											<!--</div>-->
										
										
	
    <div class="form-group">
        <label for="inputName" class="control-label">Description</label>
        <input type="text" class="form-control"  name="description" placeholder="description" value="<?php echo $us['description']; ?>" required>
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
            </div> <!-- /.
			-wrapper -->
            <!-- start footer -->
					 <script>
 function clas(a){
				 //alert(a);
				 $("#plan").load("planAjax.php?id="+a);
				  }
				  </script>
				  	 <script>
 function da(a){
				// alert(a);
				 $("#topic").load("daysAjax.php?id="+a);
				  }
				  </script>
				  
       <?php include"footer.php"; ?>
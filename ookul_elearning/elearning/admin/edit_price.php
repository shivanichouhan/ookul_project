<?php include"header.php";
include"menu.php";
$b=explode('/',$a);
 $_GET['id']=$b['6'];
$subj=$obj->fetchById($_GET['id'],"price_plan","id");

$cla=$obj->fetchById($subj['class'],"class","id");
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
                                <h1>Price </h1>
                                <small>Edit Price <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="subject_list">Price List</a></li>
                                    <li class="active">Price</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Edit Price</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="<?php echo $base1; ?>edit_price_sub.php" method="post">
										<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
											<div class="form-group">
                                                <label for="inputName" class="control-label">Class Name</label>
												<select class="form-control" id="exampleSelect1" name="class"  >
												 <option value="">--Class--</option>
												<?php
													$table='class';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option <?php if($subj['class']==$row['id']) { ?> selected="selected" <?php } ?>  value="<?php echo $row['id']; ?>"><?php echo $row['class'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Full Price</label>
                                                <input type="text" class="form-control" id="subject" name="price" placeholder="price" value="<?php echo $subj['price']; ?>" >
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Full GST</label>
                                                <input type="text" class="form-control" id="subject" name="gst" placeholder="gst" value="<?php echo $subj['gst']; ?>" >
											</div>
											
				<div class="form-group">
                                                <label for="inputName" class="control-label">Normal Price</label>
                                                <input type="text" class="form-control" id="subject" name="nprice" placeholder="normal price" value="<?php echo $subj['nprice']; ?>" >
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Normal GST</label>
                                                <input type="text" class="form-control" id="subject" name="ngst" placeholder="normal gst" value="<?php echo $subj['ngst']; ?>" >
											</div>							
											
											
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Edit Price</button>
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
 function ct(a){
				 //alert(a);
				 $("#city").load("city_Ajax.php?id="+a);
				  }
				  </script>
				  			 <script>
 function sub(a){
				 alert(a);
				 $("#subject").load("subjectAjax.php?id="+a);
				  }
				  </script>
				  			 <script>
 function sc(a){
				// alert(a);
				 $("#school").load("schoolAjax.php?id="+a);
				  }
				  </script>

       <?php include"footer.php"; ?>
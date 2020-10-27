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
                                <i class="fa fa-inr" aria-hidden="true"></i>
                            </div>
                            <div class="header-title">
                                <h1>Price </h1>
                                <small>Add Price <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="pro_price_list">Referal Price List</a></li>
                                    <li class="active">Referal Price</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add Price</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="pro_price_sub" method="post">
											<div class="form-group">
                                                <label for="exampleSelect1">Class</label>
												
                                                <select class="form-control" id="exampleSelect1" name="class"   >
												 <option value="">--Class--</option>
												 <?php $rs=$obj->fetchAllDetail("class");
								if($rs)
							  {$i=0;
							  while($row=mysqli_fetch_assoc($rs))
							  {
							  $i++; ?>
											        <option value="<?php echo $row['id']; ?>"><?php echo $row['class']; ?></option>
											        <?php } } ?>
											        
											       <option value="0">Goverment Exam</option>
											       <!-- <option value="2">Public Relaction offer</option>-->
											       <!-- <option value="4">Refered by executive supervisor</option>-->
												</select>
														
                                            </div>
											<div class="form-group">
                                                <label for="exampleSelect1">Type</label>
												
                                                <select class="form-control" id="exampleSelect1" name="type_user"   >
												 <option value="">--Type--</option>
												    <option value="1">Relationship Manager</option>
												    <option value="2">Executive Supervisor</option>
												    <option value="3">PRO</option>
												    <option value="4">Block Supervioser</option>
												    <option value="5">Refered By</option>
											        <!--<option value="1">Block Supervioser</option>-->
											       <!--<option value="3">Referal Block Supervioser</option>-->
											        <!--<option value="2">Public Relaction offer</option>-->
											        
											        
											       
											        <!--<option value="6">Refered by Executive Supervisor</option>-->
												</select>
														
                                            </div>
                                            	<!--<div class="form-group">
                                                <label for="inputName" class="control-label">User Name</label>
													<select class="form-control" data-placeholder="Choose a subject..." id="users" name="user_name" required >
														 <option value=""> -- User Name --</option>
															</select>
                                               
											</div>-->					
										
											<div class="form-group">
                                                <label for="inputName" class="control-label">Price </label>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="Price" required>
											</div>
											<!--<div class="form-group">
                                                <label for="inputName" class="control-label">GST(TAX) </label>
                                                <input type="text" class="form-control" id="gst" name="gst" placeholder="gst" required>
											</div>-->
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" style="    background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Add Price</button>
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
 function user(a){
				 alert(a);
				 $("#users").load("proAjax.php?id="+a);
				  }
				  </script>

       <?php include"footer.php"; ?>
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
                                <h1>Price </h1>
                                <small>Add Price <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="gover_plan_list.php">Price List</a></li>
                                    <li class="active">Price</li>
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
                                        <form data-toggle="validator" action="gov_price_sub.php" method="post">
											<div class="form-group">
                                                <!--<label for="exampleSelect1">Plan</label>-->
									  <input type="hidden" class="form-control" id="price" name="plan_id" value="1" required>

                                                <!--<select class="form-control" id="exampleSelect1" name="plan_id"  >-->
												 <!--<option value="">--Paln--</option>-->
												<?php
												// 	$table='gov_plan';
												// 	$rs=$obj->fetchAllDetailByStatus($table);
												// 	if($rs)
												// 	{	$i=0;
												// 		while($row=mysqli_fetch_assoc($rs))
												// 		{	$i++;
      
															?>
                                             <?php //echo $row['id']; //echo $row['plan_name'];  ?>
													<?php //} 
												//	}
													?>
                                                </select>
														
                                            </div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Price </label>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="Price" required>
											</div>
										<div class="form-group">
                                                <label for="inputName" class="control-label">GST(TEX) </label>
                                                <input type="text" class="form-control" id="gst" name="gst" placeholder="gst" required>
											</div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Add Price</button>
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
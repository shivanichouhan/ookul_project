<?php include"header.php";
include"menu.php"; 

 $b=explode('/',$a);
 $_GET['id']=$b['5'];
?> <!-- /. main header -->
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
                                <h1>popular Video</h1>
                                <small>Edit popular Video</small>
                                <ol class="breadcrumb">
                                    <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="ppl.php">popular Video List</a></li>
                                    <li class="active">Edit popular  Video</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
						<?php $con=$obj->fetchById($_GET['id'],"parent_papular_video","id"); ?>
                        <div class="row">
                            <div class="col-sm-12">
							<form data-toggle="validator" action="<?php echo $base1; ?>edit_ppl_sub.php" method="post" enctype="multipart/form-data">
                        
                                <div class="panel panel-bd lobidrag">
									
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Edit popular Video </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
									<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" >
									
									<div class="form-group">
									<label for="inputName" class="control-label">Headding</label>
									<input type="text" class="form-control" name="heading" value="<?php echo $con['heading'];?>">
									</div>
									<div class="form-group">
									<label for="inputName" class="control-label">Thumbnail</label>
									<input type="file" class="form-control" id="exampleInputEmail1" name="thumbnail" placeholder="thumbnail">
									<input type="hidden" class="form-control" name="limg1" value="<?php echo $con['thumbnail'];?>">
												
									</div>
									<div class="form-group">
									<label for="inputName" class="control-label">Video</label>
										<input type="file" class="form-control" id="exampleInputEmail1" name="video" placeholder="video">
												<input type="hidden" class="form-control" name="limg" value="<?php echo $con['video'];?>">
									</div>
										
									
										<div class="form-group">
										<button type="submit" class="btn btn-primary">Update popular</button>
										</div>
                                    </div>
                                </div>
								</form>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
       <?php include"footer.php"; ?>
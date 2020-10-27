<?php include"header.php";
include"menu.php"; ?> <!-- /. main header -->
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
                                <h1>Popular Video</h1>
                                <small>Add Papular Video</small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="govermnt_popular_video.php">Popular Video List</a></li>
                                    <li class="active">Add popular Video</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
							<form data-toggle="validator" action="g_pap_video_sub.php" method="post" enctype="multipart/form-data">
                        
                                <div class="panel panel-bd lobidrag">
									
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add Popular Video </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
											
                                    <div class="form-group">
                                        <label for="exampleSelect1">App Type</label>
                                        
                                        <select class="form-control" id="exampleSelect1" name="app_type">
                                        <option value="">--App Type--</option>
                                        <option value="1">Paid</option>
                                        <option value="2">Free Access</option>
                                        
                                        </select>
                                    
                                    </div>       
											
									<div class="form-group">
									<label for="inputName" class="control-label">Heading</label>
										<input type="text" name="heading" class="form-control">
									</div>	
									<div class="form-group">
									<label for="inputName" class="control-label">Thumbnail<p  style="background: #da0f3e;  color: #e8dede; ">(200*200)</p></label>
										<input type="file" name="thumbnai" class="form-control">
									</div>										
									<div class="form-group">
									<label for="inputName" class="control-label">Video <p style="    background: #da0f3e;
    color: #e8dede;">(All mobile divice support mp4 format  and  format some mobile device mkv format)</p></label>
										<input type="file" name="video" class="form-control">
									</div>
						
										
									<!--<div class="form-group">
										<label for="inputName" class="control-label">Contant</label>
										<textarea id="summernote" name="contant"></textarea>
										</div>-->
										<div class="form-group">
										<button type="submit" class="btn btn-primary">Add popular</button>
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
	   <!-- jQuery -->
        
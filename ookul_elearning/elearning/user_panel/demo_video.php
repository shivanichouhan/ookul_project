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
                               <i class="fa fa-laptop" aria-hidden="true"></i>
                            </div>
                            <div class="header-title">
                                <h1>Demo Video</h1>
                                <small>Add Demo Video</small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="front_video_list">Demo Video List</a></li>
                                    <li class="active">Add Demo Video</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
							<form data-toggle="validator" action="demo_video_sub" method="post" enctype="multipart/form-data">
                        
                                <div class="panel panel-bd lobidrag">
									
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add Demo Video </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
											
                                            
											
									<div class="form-group">
									<label for="inputName" class="control-label">Heading</label>
										<input type="text" name="heading" class="form-control">
									</div>		
									<div class="form-group">
									<label for="inputName" class="control-label">Video</label>
										<input type="file" name="video" class="form-control">
									</div>
									<div class="form-group">
										<label for="inputName" class="control-label">Contant</label>
										<textarea id="summernote" name="contant"></textarea>
										</div>
												
									
										<div class="form-group">
										<button type="submit" class="btn btn-primary" style="    background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Add Contant</button>
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
        
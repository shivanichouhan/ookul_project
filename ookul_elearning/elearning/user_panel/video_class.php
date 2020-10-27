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
                                <h1>Video Class </h1>
                                <small>Add Video Class <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="video_class_list.php">Video Class List</a></li>
                                    <li class="active">Topic</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add Video Class</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form action="video_class_sub.php" method="post" enctype="multipart/form-data">
													
											<div class="form-group">
                                                <label for="inputName" class="control-label">Days</label>
                                                <select class="form-control" id="exampleSelect1" name="days" >
												 <option value="">--Days--</option>
												<?php
													$table='days';
													$rs=$obj->fetchDetailByStatus(0,"days","assign");
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['days'];  ?></option>
													<?php } 
													}
													?>
                                                </select></div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Title Name</label>
                                                <input type="text" class="form-control"  name="topic" placeholder="Topic" required>
											</div>
											<div class="form-group">
    										<label for="inputName" class="control-label">Description</label>
    										<textarea id="summernote" name="description"></textarea>
    										</div>
										<!---	<div class="form-group">
                                                <label for="inputName" class="control-label">Image </label>
                                                <input type="file" class="form-control"  name="topic_pic" placeholder="Topic" required>
											</div>
											<div class="form-group">
									<label for="inputName" class="control-label">Document</label>
										<input type="file" name="doucment" class="form-control">
									</div>--->
										<div class="form-group">
                                                <label for="inputName" class="control-label">Thumbnail </label>
                                                <input type="file" class="form-control"  name="thumbnail" placeholder="Thumbnail" required>
											</div>
											<div class="form-group">
									<label for="inputName" class="control-label">Video</label>
										<input type="file" name="video" class="form-control" required>
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
				 $("#subject").load("subjectAjax.php?id="+a);
				  }
				  </script>
				  	 <script>
 function subj(a){
				// alert(a);
				 $("#chapter").load("chapterAjax.php?id="+a);
				  }
				  </script>
				  
       <?php include"footer.php"; ?>
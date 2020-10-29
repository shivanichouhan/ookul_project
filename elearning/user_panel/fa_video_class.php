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
                                    <li><a href="fa_video_class_list.php">Video Class List</a></li>
                                    <li class="active">Video Class</li>
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
                                        <form data-toggle="validator" action="fa_video_class_sub.php" method="post" enctype="multipart/form-data">
											<div class="form-group">
                                                <label for="inputName" class="control-label">Subject Name</label>
											 <select class="form-control" id="subject" name="subject"  onChange="mytopic(this.value)" >
												 <option value="">--Subject--</option>
												<?php
													$table='gov_subject';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
                                                            if($row['id']=='5')
                                                            {}
                                                            else
                                                            {
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['subject'];  ?></option>
													<?php }
														    
														} 
													}
													?>
                                                </select>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Topic Name</label>
                                                <!--<input type="text" class="form-control"  name="topic" placeholder="Topic" required>-->
        											 <select class="form-control" id="topic" name="topic"  >
        												 <option value="">--Topic--</option>
        												
                                                        </select>
											</div>
										<div class="form-group">
                                                <label for="inputName" class="control-label">Title </label>
                                                <input type="text" class="form-control"  name="title" placeholder="title" required>
											</div>
											<!---	<div class="form-group">
									<label for="inputName" class="control-label">Document</label>
										<input type="file" name="doucment" class="form-control">
									</div>--->
										<div class="form-group">
                                                <label for="inputName" class="control-label">Thumbnail </label>
                                                <input type="file" class="form-control"  name="thumbnail" placeholder="Thumbnail" required>
											</div>
											<div class="form-group">
									<label for="inputName" class="control-label">Video</label>
										<input type="file" name="video" class="form-control">
									</div>
								<!---	<div class="form-group">
										<label for="inputName" class="control-label">Contant</label>
										<textarea id="summernote" name="contant"></textarea>
										</div>-->
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
    function mytest(a)
    {
        var http=new XMLHttpRequest();
						http.onreadystatechange=function()
						{	
						if(http.readyState==4 && http.status==200)
						{
					 	document.getElementById("subject").innerHTML=http.responseText;
						}
						//alert(http.responseText);
						}
						
						http.open("GET","day_wise_subjectAjax.php?id="+a,true);
						http.send();
    }
    function mytopic(a)
    {
        var http=new XMLHttpRequest();
						http.onreadystatechange=function()
						{	
						if(http.readyState==4 && http.status==200)
						{
					 	document.getElementById("topic").innerHTML=http.responseText;
						}
						//alert(http.responseText);
						}
						
						http.open("GET","topic_subjectAjax.php?id="+a,true);
						http.send();
    }
    
</script>
				  
       <?php include"footer.php"; ?>
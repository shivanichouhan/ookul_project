<?php include"header.php";
include"menu.php";
$b=explode('/',$a);
 $_GET['id']=$b['5'];
$ass=$obj->fetchById($_GET['id'],"gover_topic","id");

$rs11=$obj->fetchById($ass['subject'],"assign_subject","id");
$use44=$obj->fetchById($rs11['subject'],"gov_subject","id");

$rs110=$obj->fetchById($ass['topic'],"day_wise_topic","id");
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
                                <h1>Video Class </h1>
                                <small>Add Video Class <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="gove_assing_list.php">Video Class List</a></li>
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
                                        <form data-toggle="validator" action="<?php echo $base1; ?>edit_video_class_sub" method="post" enctype="multipart/form-data">
										<input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">
											<div class="form-group">
                                                <label for="exampleSelect1">Days</label>
												
                                                <select class="form-control" id="exampleSelect1" name="days"  onChange="mytest(this.value)"  >
												 <option value="">--Day--</option>
												<?php
													$table='days';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option <?php if($ass['days']==$row['id']) {  ?> selected="selected" <?php } ?> value="<?php echo $row['id']; ?>"><?php echo $row['days'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
														
                                            </div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Subject Name</label>
											 <select class="form-control" id="subject" name="subject"  onChange="mytopic(this.value)" >
												 <!--<option value="">--Subject--</option>-->
												<option value="<?php echo $ass['subject']; ?>"><?php echo $use44['subject']; ?></option>
                                                </select>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Topic Name</label>
                                                <!--<input type="text" class="form-control"  name="topic" placeholder="Topic" required>-->
        											 <select class="form-control" id="topic" name="topic"  >
        												 <!--<option value="">--Topic--</option>-->
        												 <option value="<?php echo $ass['topic']; ?>"><?php echo $rs110['topic']; ?></option>
        												 
        												
                                                        </select>
											</div>
									<div class="form-group">
                                                <label for="inputName" class="control-label">Title </label>
                                                <input type="text" class="form-control"  name="title" placeholder="Title" required value="<?php echo $ass['title']; ?>">
											</div>
												<!---	<div class="form-group">
									<label for="inputName" class="control-label">Document</label>
										<input type="file" name="doucment" class="form-control">
									</div>--->
										<div class="form-group">
                                                <label for="inputName" class="control-label">Thumbnail </label>
                                                <input type="file" class="form-control"  name="thumbnail" placeholder="Thumbnail" required>
												<input type="hidden" class="form-control" name="limg11" value="<?php echo $ass['thumbnail'];?>">
											</div>
											<div class="form-group">
									<label for="inputName" class="control-label">Video</label>
										<input type="file" name="video" class="form-control">
										<input type="hidden" class="form-control" name="limg12" value="<?php echo $ass['video'];?>">

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
						
						http.open("GET","day_wise_topicAjax.php?id="+a,true);
						http.send();
    }
    
</script>
				  
       <?php include"footer.php"; ?>
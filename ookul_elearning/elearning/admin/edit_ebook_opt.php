<?php include"header.php";
include"menu.php"; 
$b=explode('/',$a);
 $_GET['id']=$b['5'];
 
  $ass=$obj->fetchById($_GET['id'],"ebook_option","id");
 
 $rs11=$obj->fetchById($ass['subject'],"optional_subject","id");
$use44=$obj->fetchById($ass['topic'],"optional_chapter","id");
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
                                <h1>E-Book </h1>
                                <small>Edit E-Book <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="ebook_list">E-Book List</a></li>
                                    <li class="active">E-Book</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Edit E-Book</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="<?php echo $base1; ?>edit_ebook_sub_opt" method="post" enctype="multipart/form-data">
										<input type="hidden" value="<?php echo $_GET['id']; ?>" name="id">
										<div class="form-group">
                                                <label for="inputName" class="control-label">Subject</label>
                                                    <select class="form-control" data-placeholder="Choose a subject..." id="subject" name="subject" required onChange="subj(this.value);">
                                                        <option value="">--Subject--</option>
												<?php
													$table='optional_subject';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option <?php if($ass['subject']==$row['id']) { ?> selected="selected" <?php }  ?> value="<?php echo $row['id']; ?>"><?php echo $row['subject'];  ?></option>
													<?php } 
													}
													?>
                                                            </select>
                                               
                                            </div>
										<div class="form-group">
                                                <label for="inputName" class="control-label">Chapter</label>
                                                <select class="form-control" data-placeholder="Choose a chapter..." name="topic" id="topic" required >
                                                         <option value="<?php echo $ass['topic']; ?>"> <?php echo $use44['chapter']; ?></option>
                                                            </select>
                                            </div>  
											<div class="form-group">
									<label for="inputName" class="control-label">Document</label>
										<input type="file" name="document" class="form-control">
										<input type="hidden" name="limg" class="form-control" value="<?php echo $ass['document']; ?>">
									</div>
										
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Update</button>
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
    
</script>
				  
       <?php include"footer.php"; ?>
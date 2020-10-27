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
                                <h1>Question </h1>
                                <small>Add Question <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="question_answer_list.php">Question List</a></li>
                                    <li class="active">Question</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add Question</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form  action="question_answer_new_sub.php" method="post" enctype="multipart/form-data">
											<div class="form-group">
                                                <label for="exampleSelect1">Class</label>
												
                                                <select class="form-control" id="exampleSelect1" name="class_id"  onChange="clas(this.value);">
												 <option value="">--Class--</option>
												<?php
													$table='class';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['class'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
														
                                            </div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Subject</label>
													<select class="form-control" data-placeholder="Choose a subject..." id="subjects" name="subject" required onChange="subj(this.value);">
														 <option value=""> -- Subject --</option>
															</select>
                                               
											</div>					
											<div class="form-group">
                                                <label for="inputName" class="control-label">Chapter</label>
                                                <select class="form-control" data-placeholder="Choose a subject..." name="chapter" id="chapter" required onChange="chap(this.value);" >
														 <option value=""> -- Chapter --</option>
															</select>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Topic</label>
                                                <select class="form-control" data-placeholder="Choose a subject..." name="topic" id="topic" required  >
														 <option value=""> -- Topic --</option>
															</select>
											</div>
                                    	<div class="form-group">
                                                <label for="exampleSelect1">Type</label>
												
                                                <select class="form-control" id="exampleSelect1" name="type"  onChange="qusa11(this.value);">
													<option value="">--Type--</option>
													<option value="1">Text</option>
													<option value="2">PDF</option>
                                                </select>
														
                                            </div>
											<div id="type">
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
	function qusa11(a){
				 //alert(a);
				 $("#type").load("question_answer_view.php?id="+a);
				  }
</script>
<script>
	function clas(a){
				// alert(a);
				 $("#subjects").load("subjectAjax.php?id="+a);
				  }
</script>
<script>
 function subj(a){
				// alert(a);
				 $("#chapter").load("chapterAjax.php?id="+a);
				  }
				  
				  
				  </script>
<script>
 function chap(a){
				// alert(a);
				 $("#topic").load("topicAjax25.php?id="+a);
				  }
				  
				  
				  </script>
				
		

       <?php include"footer.php"; ?>
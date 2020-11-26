<?php include"header.php";
include"menu.php"; 


 
 $b=explode('/',$a);
 $_GET['id']=$b['5'];
 
$que=$obj->fetchById($_GET['id'],"multiple_question","id");
$que12=$obj->fetchById($que['subject'],"subject","id");
$cha12=$obj->fetchById($que['chapter'],"chapter","id");
$top=$obj->fetchById($que['topic'],"topic","id");

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
                                <h1> Multipal Question And Answer </h1>
                                <small>Multipal Question <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="mlutipal_question_list.php"> Multipal Question List</a></li>
                                    <li class="active"> Multipal Question</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Multipal Question Answer</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                       
                                        <form  action="<?php echo $base1; ?>edit_multipal_question_sub.php" method="post">
											<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
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
                                                    <option <?php if($que['class_id']==$row['id']) { ?> selected="selected"  <?php } ?> value="<?php echo $row['id']; ?>"><?php echo $row['class'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
														
                                            </div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Subject</label>
													<select class="form-control" data-placeholder="Choose a subject..." id="subject" name="subject" required onChange="subj(this.value);">
														 <option value="<?php echo $que['subject']; ?>"><?php echo $que12['subject']; ?></option>
															</select>
                                               
											</div>					
											<div class="form-group">
                                                <label for="inputName" class="control-label">Chapter</label>
                                                <select class="form-control" data-placeholder="Choose a subject..." name="chapter" id="chapter" required  onChange="chap(this.value);" >
														 <option value="<?php echo $que['chapter']; ?>"><?php echo $cha12['chapter']; ?></option>
															</select>
											</div>
												<div class="form-group">
                                                <label for="inputName" class="control-label">Topic</label>
                                                <select class="form-control" data-placeholder="Choose a subject..." name="topic" id="topic" required  >
														 <option value=""> <?php echo $top['topic']; ?></option>
															</select>
											</div>
											<div class="form-group">
                                                <label for="exampleSelect1">Type</label>
												
                                                <select class="form-control" id="exampleSelect1" name="type"  onChange="qimage(this.value);">
												 <option value="">--Type--</option>
												<option value="1">Text</option>
												<option value="2">Image</option>
                                                </select>
														
                                            </div>
											<div id="mcq">
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
            </div> 
     
            					 <script>
 function qimage(a){
				 alert(a);
				 $("#mcq").load("https://app.bongosikha.com/admin/edit_image_mcq.php?id="+a);
				  }
				  </script>
		  					 <script>
 function clas(a){
				 //alert(a);
				 $("#subject").load("https://app.bongosikha.com/admin/subjectAjax.php?id="+a);
				  }
				  </script>
				  	 <script>
 function subj(a){
				// alert(a);
				 $("#chapter").load("https://app.bongosikha.com/admin/chapterAjax.php?id="+a);
				  }
				  </script>
<script>
 function chap(a){
				// alert(a);
				 $("#topic").load("https://app.bongosikha.com/admin/topicAjax25.php?id="+a);
				  }
				  
				  
				  </script>
				  

       <?php include"footer.php"; ?>
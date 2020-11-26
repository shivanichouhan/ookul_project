<?php include"header.php";
include"menu.php";
 $b=explode('/',$a);
 $_GET['id']=$b['6'];
$ques=$obj->fetchById($_GET['id'],"true_false_question","id");
$sub=$obj->fetchById($ques['subject'],"subject","id");
$chap=$obj->fetchById($ques['chapter'],"chapter","id");
$topi=$obj->fetchById($ques['topic'],"topic","id");
 ?>

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
                                <h1>  True False Question And Answer  </h1>
                                <small> True False Question And Answer  <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="true_false_list.php"> True False Question List</a></li>
                                    <li class="active">  True False Question And Answer </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4> True False Question And Answer </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="<?php echo $base1; ?>edit_question_tru_false_sub.php" method="post">
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
                                                    <option <?php if($ques['class_id']==$row['id']) { ?> selected="selected" <?php } ?> value="<?php echo $row['id']; ?>"><?php echo $row['class'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
														
                                            </div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Subject</label>
													<select class="form-control" data-placeholder="Choose a subject..." id="subject" name="subject" required onChange="subj(this.value);">
														 <option value="<?php echo $ques['subject']; ?>"><?php echo $sub['subject']; ?></option>
															</select>
                                               
											</div>					
											<div class="form-group">
                                                <label for="inputName" class="control-label">Chapter</label>
                                                <select class="form-control" data-placeholder="Choose a subject..." name="chapter" id="chapter" required onChange="chap(this.value);"  >
														 <option value="<?php echo $ques['chapter']; ?>"><?php echo $chap['chapter']; ?></option>
															</select>
											</div>
												<div class="form-group">
                                                <label for="inputName" class="control-label">Topic</label>
                                                <select class="form-control" data-placeholder="Choose a subject..." name="topic" id="topic" required  >
														 <option value="<?php echo $ques['topic']; ?>"><?php echo $topi['topic']; ?></option>
															</select>

											<div class="form-group">
                                                <label for="inputName" class="control-label">Question</label>
                                                <input type="text" class="form-control" id="inputName" name="question" placeholder="question" value="<?php echo $ques['question']; ?>" required>
											</div>
										    <div class="form-group">
                                                <label for="inputName" class="control-label">Answer</label>
                                                <input type="radio" id="inputName" name="answer" <?php  if($ques['answer']=="True") { ?>  checked="checked" <?php } ?>   value="<?php echo $ques['answer']; ?>" required>True
												<input type="radio" id="inputName" name="answer"  <?php  if($ques['answer']=="False") { ?>  checked="checked" <?php } ?>  value="<?php echo $ques['answer']; ?>" required>False
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
				  <script>
 function chap(a){
				// alert(a);
				 $("#topic").load("topicAjax25.php?id="+a);
				  }
				  
				  
				  </script>
				  

       <?php include"footer.php"; ?>
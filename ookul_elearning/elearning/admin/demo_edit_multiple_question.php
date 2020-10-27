<?php include"header.php";
include"menu.php"; 
 $b=explode('/',$a);
 $_GET['id']=$b['5'];
$que=$obj->fetchById($_GET['id'],"demo_mutiple","id");
$que12=$obj->fetchById($que['subject'],"demo_subject","id");

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
                                <h1> Demo Multipal Question And Answer </h1>
                                <small> Demo Multipal Question <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="demo_mcq_list"> Demo Multipal Question List</a></li>
                                    <li class="active"> Demo Multipal Question</li>
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
                                       
                                        <form data-toggle="validator" action="<?php echo $base1; ?>demo_edit_multiple_question_sub" method="post">
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
														 <option value=""> -- Subject --</option>
															</select>
                                               
											</div>					
											<div class="form-group">
                                                <label for="inputName" class="control-label">Chapter</label>
                                                <select class="form-control" data-placeholder="Choose a subject..." name="chapter" id="chapter" required  >
														 <option value=""> -- Chapter --</option>
															</select>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Question</label>
                                                <input type="text" class="form-control" id="inputName" name="question" placeholder="question" value="<?php  echo $que['question'] ?>" required>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">option(1)</label>
                                                <input type="text" class="form-control" id="inputName" name="option1" placeholder="option 1" value="<?php  echo $que['option1'] ?>"  required>
											</div>
											
											<div class="form-group">
                                                <label for="inputName" class="control-label">option(2)</label>
                                                <input type="text" class="form-control" id="inputName" name="option2" value="<?php  echo $que['option2'] ?>"  placeholder="option 2" required>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">option(3)</label>
                                                <input type="text" class="form-control" id="inputName" value="<?php  echo $que['option3'] ?>"  name="option3" placeholder="option 3" required>
											</div>
                                            
											<div class="form-group">
                                                <label for="inputName" class="control-label">option(4)</label>
                                                <input type="text" class="form-control" id="inputName" name="option4" placeholder="option 4" value="<?php  echo $que['option4'] ?>"  required>
											</div>
                                           <div class="form-group">
                                                <label for="inputName" class="control-label">Answer</label>
                                              
												<select class="form-control" id="exampleSelect1" name="answer" >
													<option value="">Answer</option>
												    <option <?php if($que['answer']==1) { ?> selected="selected" <?php } ?> value="1" >Question1 </option>
												    <option <?php if($que['answer']==2) { ?> selected="selected" <?php } ?> value="2">Question2</option>
												    <option <?php if($que['answer']==3) { ?> selected="selected" <?php } ?> value="3">Question3</option>
												    <option <?php if($que['answer']==4) { ?> selected="selected" <?php } ?> value="4">Question4</option>
                                                </select>
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
				 $("#subject").load("https://app.bongosikha.com/admin/subjectAjax.php?id="+a);
				  }
				  </script>
				  	 <script>
 function subj(a){
				// alert(a);
				 $("#chapter").load("https://app.bongosikha.com/admin/chapterAjax.php?id="+a);
				  }
				  </script>
				  

       <?php include"footer.php"; ?>
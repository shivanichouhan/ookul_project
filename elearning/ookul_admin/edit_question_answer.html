<?php include"header.php";
include"menu.php";

 $b=explode('/',$a);
 $_GET['id']=$b['6'];
 
$op=$obj->fetchById($_GET['id'],"answer","id");
$sub=$obj->fetchById($op['subject'],"subject","id");
$chap=$obj->fetchById($op['chapter'],"chapter","id");
$topi=$obj->fetchById($op['topic'],"topic","id");
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
                                <h1>Question </h1>
                                <small>Add Question <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="question_answer_list.php"> Question and Answer List</a></li>
                                    <li class="active"> Question and Answer</li>
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
                                        <form action="<?php echo $base1; ?>edit_question_answer_sub.php" method="post">
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
                                                    <option <?php if($op['class_id']==$row['id'])  { ?> selected="selected"  <?php } ?> value="<?php echo $row['id']; ?>"><?php echo $row['class'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
														
                                            </div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Subject</label>
													<select class="form-control" data-placeholder="Choose a subject..." id="subject" name="subject" required onChange="subj(this.value);">
														 <option value="<?php echo $op['subject']; ?>"> <?php echo $sub['subject']; ?></option>
															</select>
                                               
											</div>					
											<div class="form-group">
                                                <label for="inputName" class="control-label">Chapter</label>
                                                <select class="form-control" data-placeholder="Choose a subject..." name="chapter" id="chapter" required  onChange="chap(this.value);" >
														 <option value="<?php echo $op['chapter']; ?>"> <?php echo $chap['chapter']; ?></option>
															</select>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Topic</label>
                                                <select class="form-control" data-placeholder="Choose a subject..." name="topic" id="topic" required  >
														 <option value="<?php echo $op['topic']; ?>"><?php echo $topi['topic']; ?></option>
															</select>
											</div>
											<div class="form-group">
                                                <label for="exampleSelect1">Type</label>
												
                                                <select class="form-control" id="exampleSelect1" name="type"  onChange="qusa11(this.value);">
												 <option value="">--Type--</option>
												  <option value="1" <?php if($op['type']==1){ ?> selected="selected" <?php } ?>>Text</option>
												  <option value="2" <?php if($op['type']==2){ ?> selected="selected" <?php } ?>>PDF</option>
											
                                                </select>
														
                                            </div>
                                            <div id="type">
                                                <?php if($op['type']==1){ ?>
                                                

<div class="form-group">
    <label for="inputName" class="control-label">Question</label>
	<textarea id="summernote1" name="question" required="" style="display: none;"><?php echo $op['question']; ?></textarea>
	
</div>
<div class="form-group">
    <label for="inputName" class="control-label">Answer</label>
    <textarea id="summernote" name="answer" required="" style="display: none;"><?php echo $op['answer']; ?></textarea>
    
</div>

				   <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>
		 <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote1').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>

											
		
  		  
                                                <?php } ?>
                                                <?php if($op['type']==2){ ?>
                                                <div class="form-group">
	  <label for="inputName" class="control-label">PDF Upload</label>
			<input type="file" class="form-control"   name="pdf11">
			<input type="hidden" value="<?php echo $op['pdf']; ?>" name="limg">
	  </div>
                                                <?php } ?>
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
	function qusa11(a){
				 //alert(a);
				 $("#type").load("question_answer_view.php?id="+a);
				  }
</script>
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
				
				   <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>
		 <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote1').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>

       <?php include"footer.php"; ?>
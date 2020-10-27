<?php include"header.php";
include"menu.php";
$b=explode('/',$a);
 $_GET['id']=$b['5']; 
 
$op=$obj->fetchById($_GET['id'],"demo_qa","id");
$sub=$obj->fetchById($op['subject'],"subject","id");
$chap=$obj->fetchById($op['chapter'],"chapter","id");
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
                                <h1> Edit Demo Question And Answer </h1>
                                <small>Edit Demo Question And Answer <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="demo_question_answer_list">Demo Question And Answer List</a></li>
                                    <li class="active">Edit Demo Question And Answer</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Edit Demo Question And Answer</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="<?php echo $base1; ?>edit_demoquestion_answer_sub" method="post">
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
                                                <select class="form-control" data-placeholder="Choose a subject..." name="chapter" id="chapter" required  >
														 <option value="<?php echo $op['chapter']; ?>"> <?php echo $chap['chapter']; ?></option>
															</select>
											</div>
											
											<div class="form-group">
                                                <label for="inputName" class="control-label">Question</label>

												<textarea id="summernote1" name="question"   required><?php echo $op['question'];  ?></textarea>
											</div>
                                           
											<div class="form-group">
                                                <label for="inputName" class="control-label">Answer</label>
                              <textarea type="text" class="form-control" id="editor1" placeholder="question" name="question"><?php echo $op['answer'];  ?></textarea>

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
                 $("#subject").load("https://app.bongosikha.com/admin/demosubjectAjax.php?id="+a);
                  }
                  </script>
                     <script>
 function subj(a){
                // alert(a);
                 $("#chapter").load("https://app.bongosikha.com/admin/demochapterAjax.php?id="+a);
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
        <script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
    //bootstrap WYSIHTML5 - text editor
    $(".textarea").wysihtml5();
  });
</script>

       <?php include"footer.php"; ?>
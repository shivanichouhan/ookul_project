<?php include"header.php";
include"menu.php";
$b=explode('/',$a);
 $_GET['id']=$b['5']; 
 
$subj=$obj->fetchById($_GET['id'],"demo_subject","id");

//$cla=$obj->fetchById($subj['class'],"class","id");
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
                                <h1>Demo Subject </h1>
                                <small>Demo Edit Subject <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="demo_subject_list">Demo Subject List</a></li>
                                    <li class="active">Demo Subject</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Edit Demo Subject</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="<?php echo $base1; ?>demo_edit_subject_sub" method="post">
										<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
											<div class="form-group">
                                                <label for="inputName" class="control-label">Class Name</label>
												<select class="form-control" id="exampleSelect1" name="class">
												 
											<?php if($subj['class']==1)
                                            {
                                                ?>
                                                <option value="<?php echo $subj['class']?>">9th</option>
                                                  <option value="2">10th</option>
                                            <?php }if ($subj['class']==2) {
                                                ?>
                                                <option value="<?php echo $subj['class']?>">10th</option>
                                                             <option value="1">9th</option>
                                                <?php
                                            } else {
                                               
                                            }
                                             ?>
                                                </select>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Subject Name</label>
                                                <input type="text" class="form-control" id="subject" name="subject" placeholder="subject" value="<?php echo $subj['subject']; ?>" >
											</div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Demo Edit Subject</button>
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
 function ct(a){
				 //alert(a);
				 $("#city").load("city_Ajax.php?id="+a);
				  }
				  </script>
				  			 <script>
 function sub(a){
				 alert(a);
				 $("#subject").load("subjectAjax.php?id="+a);
				  }
				  </script>
				  			 <script>
 function sc(a){
				// alert(a);
				 $("#school").load("schoolAjax.php?id="+a);
				  }
				  </script>

       <?php include"footer.php"; ?>
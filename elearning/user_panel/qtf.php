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
                            <i class="ti-close"></i>
                            </div>
                            <div class="header-title">
                                <h1> Demo True False  Question And Answer </h1>
                                <small>Demo True False Question Question <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="demo_true"> Demo True False Question List</a></li>
                                    <li class="active"> Demo True False Question</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Demo True False Question  Answer</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="demoqtf" method="post">
											
											
											<div class="form-group">
                                                <label for="exampleSelect1">Class</label>
												
                                                <select class="form-control" id="exampleSelect1" name="class_id"  onChange="clas(this.value);">
												 <option value="">--Class--</option>
												<option value="1">Class 9th</option>
												<option value="2">Class 10th </option>
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
                                                <input type="text" class="form-control" id="inputName" name="question" placeholder="question" required>
											</div>
										    <div class="form-group">
                                                <label for="inputName" class="control-label">Answer</label>
                                                <input type="radio" id="inputName" name="answer" value="True" required>True
												<input type="radio" id="inputName" name="answer" value="False" required>False
											</div>
                                             
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" style="    background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Submit</button>
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
				  

       <?php include"footer.php"; ?>
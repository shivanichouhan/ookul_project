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
                               <i class="fa fa-book" aria-hidden="true"></i>
                            </div>
                            <div class="header-title">
                                <h1>Chemistry Lab </h1>
                                <small>Chemistry Lab Item add<a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Chemistry Lab</a></li>
                                    <li><a href="chemistry_list">Chemistry Lab List</a></li>
                                    <li class="active">Chemistry Lab</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>School </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="school_csv_sub" method="post" name="upload_excel">
                                            
											
											<div class="form-group">
                                                <label for="inputName" class="control-label">Upload (CSV)</label>
											  <input type="file" name="filename" />
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

				  		
                  

		

       <?php include"footer.php"; ?>
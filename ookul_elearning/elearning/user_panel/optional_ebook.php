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
                                <h1>E-Book </h1>
                                <small>Add E-Book <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="ebook_opt">E-Book List</a></li>
                                    <li class="active">E-Book</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add E-Book</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="ebook_sub_opt.php" method="post" enctype="multipart/form-data">
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
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['subject'];  ?></option>
													<?php } 
													}
													?>
                                                            </select>
                                               
                                            </div>
										<div class="form-group">
                                                <label for="inputName" class="control-label">Chapter</label>
                                                <select class="form-control" data-placeholder="Choose a chapter..." name="topic" id="chapter" required >
                                                         <option value=""> -- Chapter --</option>
                                                            </select>
                                            </div>  
											
											<!--<div class="form-group">-->
           <!--                                     <label for="inputName" class="control-label">Title</label>-->
           <!--                                     <input type="text" class="form-control"  name="title" placeholder="Title" required>-->
											<!--</div>-->
											
											<div class="form-group">
									<label for="inputName" class="control-label">Document</label>
										<input type="file" name="document" class="form-control">
									</div>
										
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Add Topic</button>
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
            function subj(a){
            
                     $("#chapter").load("optchapterAjax.php?id="+a);
            
            }
        </script>
				  
       <?php include"footer.php"; ?>
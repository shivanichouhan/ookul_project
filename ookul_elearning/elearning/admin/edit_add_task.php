<?php include"header.php";

include"menu.php"; ?>
						<?php $con=$obj->fetchById($_GET['id'],"add_task","id"); ?>
 <!-- /. main header -->
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
                                <h1>Edit Task</h1>
                                <small>Edit Task</small>
                                <ol class="breadcrumb">
                                    <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="task_list.php">Task List</a></li>
                                    <li class="active"> Edit Task </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->

                        <div class="row">
                            <div class="col-sm-12">
							<form data-toggle="validator" action="edit_task_sub.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>" >
									
                                <div class="panel panel-bd lobidrag">
									
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Edit Task  </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
											
                                            
											
									<div class="form-group">
									<label for="inputName" class="control-label"> Task</label>
										<input type="text" name="add_task" class="form-control" value="<?php echo $con['add_task'];?>">
									</div>		
									
										<div class="form-group">
										<button type="submit" class="btn btn-primary">Submit</button>
										</div>
                                    </div>
                                </div>
								</form>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
       <?php include"footer.php"; ?>
	   <!-- jQuery -->
        
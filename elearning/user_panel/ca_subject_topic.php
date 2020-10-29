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
                             <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                            </div>
                            <div class="header-title">
                                <h1>Current Affairs Topic</h1>
                                <small>Topic<a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="ca_topic_list">Current Affairs List</a></li>
                                    <li class="active">Current Affairs</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Current Affairs</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="ca_topic_sub" method="post" enctype="multipart/form-data">
											<div class="form-group">
                                                <label for="inputName" class="control-label">Subject Name</label>
                                                <!--<input type="text" class="form-control" id="subject" name="subject" placeholder="subject" required>-->
											 <select class="form-control" id="exampleSelect1" name="subject"  >
												 <option value="">--Subject--</option>
												<?php
											
													$rs=$obj->fetchAllDetail("current_affairs_subject");
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['subject_name'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
											</div>
											
											<div class="form-group">
                                                <label for="inputName" class="control-label">Topic</label>
                                                <input type="text" class="form-control" id="inputName" name="topic" placeholder="Topic" required>
											</div>
											<!--<div class="form-group">-->
           <!--                                     <label for="inputName" class="control-label">Image</label>-->
           <!--                                     <input type="file" class="form-control" id="inputName" name="image" placeholder="image" required>-->
											<!--</div>-->
											
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



       <?php include"footer.php"; ?>
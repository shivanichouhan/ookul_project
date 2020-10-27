<?php include"header.php";
include"menu.php";
?>            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon"><img src="../admin/upload/<?php echo $admin['image'];?>" width="50px"></div>
                            <div class="header-title">
                                <h1>Admin Profile</h1>
                                <small>Admin Profile Update</small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i>Home</a></li>
                                    <li><a href="#">UI Elements</a></li>
                                    <li class="active">Profile</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12 col-md-4">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-header-menu">
                                            <i class="fa fa-bars"></i>
                                        </div>
                                        <img src="../admin/upload/<?php echo $admin['image'];?>" style="width: 100px; height: 100px; border-radius: 50%;">
                                    </div>
                                    <div class="card-content">
                                        <div class="card-content-member">
                                            <h4 class="m-t-0"><?php echo $admin['user_name'];?></h4>
                                            <p class="m-0"><i class="pe-7s-map-marker"></i><?php echo $admin['address'];?></p>
                                        </div>
                                        <div class="card-content-languages">
                                            <div class="card-content-languages-group">
                                                <div>
                                                    <h4>Email Id:</h4>
                                                </div>
                                                <div> <p><?php echo $admin['email'];?></p></div>
                                            </div>
                                            <div class="card-content-languages-group">
                                                <div>
                                                    <h4>Phone:</h4>
                                                </div>
                                                <div><?php echo $admin['phone'];?></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <div class="card-footer-stats">
                                            <div>
                                                <p>PROJECTS:</p><i class="fa fa-users"></i><span>241</span>
                                            </div>
                                            <div>
                                                <p>MESSAGES:</p><i class="fa fa-coffee"></i><span>350</span>
                                            </div>
                                            <div>
                                                <p>Last online</p><span class="stats-small">3 days ago</span>
                                            </div>
                                        </div>
                                        <div class="card-footer-message">
                                            <h4><i class="fa fa-comments"></i> Message me</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-12 col-md-8">
                                <div class="row">
                                  
                                <div class="review-block">
								    <form action="profile_sub.php" method="post" enctype="multipart/form-data">
													<input name="id" id="exampleInputFile" type="hidden" value="<?php echo $_SESSION['admin_id'];?>">
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <div class="review-block-name"><a href="#">User Name</a></div>
                                        </div>
                                        <div class="col-sm-10">
											<div class="form-group">
											<input type="text" class="form-control" id="exampleInputEmail1" name="user_name" placeholder="First Name" value="<?php echo $admin['user_name'];?>"  >
                                               
                                            </div>
											
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-2">
                                            <div class="review-block-name"><a href="#">Email</a></div>
                                        </div>
                                        <div class="col-sm-10">
                                      
											<div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="email" placeholder="email" value="<?php echo $admin['email'];?>" required>
                                            </div>
											
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-2">
                                            <div class="review-block-name"><a href="#">Phone</a></div>
                                        </div>
                                        <div class="col-sm-10">
											<div class="form-group">
                                               
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="phone" placeholder="Phone" value="<?php echo $admin['phone'];?>">
                                               
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-2">
                                            <div class="review-block-name"><a href="#">Profile Pic</a></div>
                                        </div>
                                        <div class="col-sm-10">
											<div class="form-group">
                                               
                                                <input type="file" class="form-control" id="exampleInputEmail1" name="image" placeholder="image">
												<input type="hidden" class="form-control" name="limg" value="<?php echo $admin['image'];?>">
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-2">
                                            <div class="review-block-name"><a href="#">Address</a></div>
                                        </div>
                                        <div class="col-sm-10">
											<div class="form-group">
											<textarea name="address" class="form-control" required><?php echo $admin['address'];?></textarea>
                                               
                                            </div>
                                        </div>
                                    </div>
									<div class="row">
                                        <div class="col-sm-10">
											<div class="form-group">
												<button type="submit" class="btn btn-success btn-sm" >
                                                Submit
                                            </button>
                                            </div>
                                        </div>
                                    </div>
									  
									</form>
                                </div>
                            </div>
                        </div> 
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
       <?php include"footer.php"; ?>
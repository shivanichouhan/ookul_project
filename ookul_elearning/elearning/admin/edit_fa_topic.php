<?php include"header.php";
include"menu.php";
 
 $uu=$obj->fetchById($_GET['id'],"fag_topic","id");
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
                                <i class="fa fa-table"></i>
                            </div>
                            <div class="header-title">
                                <h1>Topic </h1>
                                <small>Add Topic <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="fa_topic_list">Free Access  Topic List</a></li>
                                    <li class="active">Free Access Topic</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add  Free Access Topic</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="edit_fa_topic_sub" method="post">
										
											<div class="form-group">
                                                <label for="inputName" class="control-label">Subject Name</label>
                                                <!--<input type="text" class="form-control" id="subject" name="subject" placeholder="subject" required>-->
											 <select class="form-control"  name="subject" >
												 <option value="">--Subject--</option>
												<?php
													$table='gov_subject';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option <?php if($uu['subject']==$row['id']){ ?> selected="selected"  <?php } ?> value="<?php echo $row['id']; ?>"><?php echo $row['subject'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
												
                                                </select>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Topic Name</label>
                                                <input type="text" class="form-control"  name="topic" placeholder="Topic" value="<?php echo $uu['topic']; ?>" required>
											 </div>
											
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" style="    background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Add Subject</button>
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
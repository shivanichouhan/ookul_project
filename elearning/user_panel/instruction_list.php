<?php include"header.php";
include"menu.php"; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- /. main header -->
            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            </div>
                            <div class="header-title">
                                <h1>Instruction List</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="add_instruction"> Add Instruction</a></li>
                                    <li class="active"> Instruction List</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Instruction List</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
													    <th>App Type</th>
                                                        <th>Image</th>
                                                        <th style="width:400; ">Contant</th>
                                                    
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													$table='instruction';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															
															?>
                                                    <tr>
    												<td> 
    												    <?php if($row['app_type']=='1'){ echo "Bongoshikha"; } ?>
    												    <?php if($row['app_type']=='2'){ echo "E-Goverment Free Access"; } ?>
    												</td>
                                                        <td>
                                                            <?php if($row['app_type']=='1'){ ?>
															
															<img src="upload/<?php  echo $row['image'];?>" style="width: 100px; height: 100px;" >
														<?php } if($row['app_type']=='2') { ?>
														<img src="gov_upload/<?php  echo $row['image'];?>" style="width: 100px; height: 100px;" >
														<?php } ?>
														</td>
                                                        <td><?php  echo $row['contant'];?></td>
                                                        
                                                       <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="edit_instruction.php/<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
    <li><a href="delete.php/<?php echo $row['id'];?>/instruction/id/instruction_list" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
  
  
     </ul>
</div></td>
                                                    </tr>
													<?php }} ?>
                                                  
                                                 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
           <?php include"footer.php"; ?> <!-- /. footer -->
        </div> <!-- ./wrapper -->
        <!-- jQuery -->
        
    </body>

<!-- Mirrored from thememinister.com/bootstrap-admin-template/template/theme/adminpage_v1.0/dataTables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Aug 2018 05:44:38 GMT -->
</html>
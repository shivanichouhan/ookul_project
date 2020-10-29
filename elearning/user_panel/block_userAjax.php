<?php       include"../include/database.php";


$obj= new database();
$web_info=$obj->fetchByIdTable("website_details");
 ?> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4> User List</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
														<th>Name</th>
														<th>Email</th>
														<th>Mobile Number</th>
														<th>Class</th>
														<th>District</th>
														<th>Block</th>
														
														<th>Address</th>
														<th>Gender</th>
														<th>Date Of Birth</th>
														<th>Payment Type</th>
														<th>Register Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												
 <?php


   $row=$obj->fetchDetailById($_GET['id'],"user_register","block");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){
	   $class=$obj->fetchById($rs['class'],"class","id");
	  $cit=$obj->fetchById($rs['city_id'],"city","id");
	  $block=$obj->fetchById($rs['block'],"block","id");
												?>
                                                    <tr>
													<td><?php echo $rs['name']; ?></td>
													<td><?php echo $rs['email']; ?></td>
													<td><?php echo $rs['mobile']; ?></td>
													<td><?php echo $class['class']; ?></td>
                                                    <td><?php echo $cit['city']; ?></td>
													 <td><?php echo $block['block']; ?></td>
													<td><?php echo $rs['address']; ?></td>
													<td><?php echo $rs['gender']; ?></td>
													<td><?php echo $rs['dob']; ?></td>
													
													<td><?php
													if( $rs['pstatus']==1)
													{
														if( $rs['payment_type']==1)
														{
															?>
															<button type="button" class="btn btn-success" style="border-color: #f64565!important;
													background: #f64565;">Paid ( Online )</button>
															<?php
														} 
														if( $rs['payment_type']==3)
														{
															?>
															<button type="button" class="btn btn-success" style="border-color: #f64565!important;
													background: #f64565;">Paid ( Coupan )</button>
															<?php 
														} 
													}
													else {
														?>
														<button type="button" class="btn btn-success" style="border-color: #f64565!important;
													background: #f64565;">UnPaid</button>
														<?php 
														
													}
													
													
													?></td>
														<td><?php echo $rs['register_date']; ?></td>
	
														<!--<td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="edit_user.php?id=<?php echo $rs['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
    <li><a href="delete.php?id=<?php echo $rs['id'];?>&table=user_register&field=id&page=user_list" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
   <?php if($rs['status']==1){?>
   <li><a href="updateStatus.php?id=<?php echo $rs['id'];?>&status=0&table=user_register&statusField=status&field=id&page=user_list">Deactive</a></li><?php } ?>
	 <?php if($rs['status']==0){?><li><a href="updateStatus.php?id=<?php echo $rs['id'];?>&status=1&table=user_register&statusField=status&field=id&page=user_list" >Active</a></li><?php } ?>
  
     </ul>
</div></td>-->
                                                    </tr>
															<?php 
														}
													} ?>
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
       
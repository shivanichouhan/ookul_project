<?php 
 include"../include/database.php";
 include"../include/session.php";
 include"isValid.php";
 $obj=new database();
$id=$_GET['id'];
 ?>

 <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
														<th>Name</th>
														<th>Email</th>
														<th>Mobile Number</th>
														<th>Password</th>
														<th>Action</th>
															<th>View Package</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													
													$rs7=$obj->fetchDetailByIdByStatus($id,"exam_orderinfo","packageid","status",1);
													if($rs7)
													{	$i=0;
														while($row7=mysqli_fetch_assoc($rs7))
														{	$i++;
											$row=$obj->fetchById($row7['userid'],"register","id");
															?>
                                                    <tr>
													<td><?php echo $row['name']; ?></td>
													<td><?php echo $row['email']; ?></td>
													<td><?php echo $row['phone']; ?></td>
													<td><?php echo $row['password']; ?></td>
													
														<td>	<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="  background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
   
    <li><a href="delete.php?id=<?php echo $row['id'];?>&table=register&field=id&page=user_list_generals" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>

	<?php if($row['status']==1){?>
   <li><a href="statusuptate_user.php?id=<?php echo $row['id'];?>&status=0&table=register&statusField=status&field=id&page=user_list_generals">Deactive</a></li><?php } ?>
	 <?php if($row['status']==0){?><li><a href="statusuptate_user.php?id=<?php echo $row['id'];?>&status=1&table=register&statusField=status&field=id&page=user_list_generals" >Active</a></li><?php } ?>
  
 
  
     </ul>
</div></td>
<td><a href="user_list_package.php?id=<?php echo $row['id'];?>"> <button class="btn btn-primary dropdown-toggle" type="button"  style="  background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">View Package
 </button></a></td>
                                                    </tr>
															<?php 
														}
													} ?>
                                                </tbody>
                                            </table>
                                        </div>
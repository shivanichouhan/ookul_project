<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");
 $id=$_GET['id'];
  $status=$_GET['status'];
$us=$obj->update_exa($id,$status);

?>
 <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Exam Update Notification</th>
														<th>Category</th>
													<th>SubCategory</th>
													<th>Title</th>
													<th>Description</th>
													<th>URL</th>
														<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													$table='exam_update';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
											$row7=$obj->fetchById($row['category'],"category_exam_update","id");			
												$row78=$obj->fetchById($row['subcategory'],"subcategory_exam_update","id");			?>
                                                    <tr>
                                                        <td>
                                                            <?php  if($row['notification']=='1'){ ?>
                                        <input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','0')" checked="checked">
                                                            <?php } else{ ?>
                                                            <input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','1')"> <?php } ?></td>
                                                        <td><?php echo $row7['category']; ?></td>
														   <td><?php echo $row78['subcategory']; ?></td>
													 <td><?php echo $row['title']; ?></td>
													  <td><?php echo $row['discription']; ?></td>
													   <td><?php echo $row['url']; ?></td>
													
														<td>
														<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="  background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="edit_exam_update.php?id=<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
    <li><a href="delete.php?id=<?php echo $row['id'];?>&table=exam_update&field=id&page=exam_update_list" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
	<?php if($row['status']==1){?>
   <li><a href="updateStatus.php/<?php echo $row['id'];?>/0/exam_update/status/id/exam_update_list">Deactive</a></li><?php } ?>
	 <?php if($row['status']==0){?><li><a href="updateStatus.php/<?php echo $row['id'];?>/1/exam_update/status/id/exam_update_list" >Active</a></li><?php } ?>
  
 
  
     </ul>
</div></td>
                                                    </tr>
															<?php 
														}
													} ?>
                                                </tbody>
                                            </table>
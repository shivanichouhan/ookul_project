<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");

    $id=$_GET['id'];
    $status=$_GET['status'];
    $us=$obj->update_topic_status($id,$status);

?>

 <div class="panel-body">
                                        <div class="table-responsive">
                                             <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th></th>
													 <th>Class</th>
													  <th>Subject</th>
													  	<th>Title</th>
													  	<th>Thumbnail</th>
													  	<th>Type</th>
														<th>File</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													$table='virtual_lab_topic';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
																
																$cit=$obj->fetchById($row['class'],"class","id");
																$sch=$obj->fetchById($row['subject'],"virtual_lab_subject","id");
															?>
                                                    <tr>

  <td>
<?php  if($row['status']=='1'){ ?>
<input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','0')" checked="checked">
<?php } else{ ?>

<input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','1')"> <?php } ?></td>                                    
                                                        
													<td><?php  echo $cit['class'];?></td>
													<td><?php  echo $sch['subject'];?></td>

														<td><?php  echo $row['title'];?></td>
														<td><img src="upload/Virtual_lab/<?php  echo $row['thumbnail'];?>" style="width: 217px; height: 225px;"></td>
													<td><?php if($row['type']=='1'){ echo"html"; } else{ echo"SWF"; } ?></td>
                                                 <td><a href="upload/Virtual_lab/<?php  echo $row['image'];?>">File Download</a></td>

                                                       
                                                       
                                                       <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="vlab_add_edit.php/<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
    <li><a href="delete.php/<?php echo $row['id'];?>/virtual_lab_topic/id/vlab_list" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
  
     </ul>
</div></td>
                                                    </tr>
													<?php }} ?>
                                                  
                                                 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
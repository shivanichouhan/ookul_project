<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");

    $id=$_GET['id'];
    $status=$_GET['status'];
    $us=$obj->update_video_free_video($id,$status);

?>
<div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th> </th>
														<th>Class</th>
														<th>Subject</th>
														<th>Chapter</th>
														<th>Topic</th>
														<th>Video Name</th>
														<th>Thumbnail-1</th>
														<th>vedio-1</th>
														
														<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													$table='topic_wise_video';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															$op3=$obj->fetchById($row['class'],"class","id");
															$op4=$obj->fetchById($row['subject'],"subject","id");
																$op5=$obj->fetchById($row['chapter'],"chapter","id");
																$op6=$obj->fetchById($row['topic'],"topic","id");
															?>
                                                    <tr>
                                                       
                                                       <td>
<?php  if($row['free_status']=='1'){ ?>
<input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','0')" checked="checked">
<?php } else{ ?>

<input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','1')"> <?php } ?></td>
                                                       
                                                       
                                                       
														   <td><?php echo $op3['class']; ?></td>
														    <td><?php echo $op4['subject']; ?></td>
														
															  <td><?php echo $op5['chapter']; ?></td>
															   <td><?php echo $op6['topic']; ?></td>
															   <td><?php echo $row['video_name']; ?></td>
															   
															    <td><img  src="upload/<?php echo $row['thaminal1']; ?>" style="width:100%"></td>
																 <td><video width="400" controls>
															<source src="upload/<?php  echo $row['vedio1'];?>" type="video/mp4">
															<source src="upload/<?php  echo $row['vedio1'];?>" type="video/ogg">
															</video>
														</td>
														
																  
															   
														<td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="edit_topic_wise11.php/<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
    <li><a href="delete.php/<?php echo $row['id'];?>/topic_wise_video/id/topic_wise_list.php" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>

     </ul>
</div></td>
                                                    </tr>
															<?php 
														}
													} ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
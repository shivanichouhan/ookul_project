<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");
 $id=$_GET['id'];
  $status=$_GET['status'];
$us=$obj->update_current_affair_video($id,$status);

?>
<div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        
														<th>Subject</th>
														<th>Topic</th>
														<th>Title</th>
														<th>Image</th>
														<th>Video</th>
														<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													$table='ca_video_class';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															$uy=$obj->fetchById($row['subject'],"current_affairs_subject","id");
															$uy1=$obj->fetchById($row['topic'],"ca_topic","id");
															?>
                                                    <tr>
                                                         <td>
                                                            <?php  if($row['free_status']=='1'){ ?>
                                        <input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','0')" checked="checked">
                                                            <?php } else{ ?>
                                                            <input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','1')"> <?php } ?></td>
														   <td><?php echo $uy['subject_name']; ?></td>
														   <td><?php echo $uy1['topic']; ?></td>
														   <td><?php echo $row['title']; ?></td>
												<td><img src="gov_upload/<?php  echo $row['image'];?>" style=" width: 400px;
    height: 223px;"></td>
                                                        <td><video width="400" controls>
															<source src="gov_upload/<?php  echo $row['video'];?>" type="video/mp4">
															<source src="gov_upload/<?php  echo $row['video'];?>" type="video/ogg">
															</video>
														</td>
														<td>
														<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="  background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="edit_ca_video_class.php/<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
   <li><a href="delete.php/<?php echo $row['id'];?>/ca_video_class/id/ca_video_class_list" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
 
  
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
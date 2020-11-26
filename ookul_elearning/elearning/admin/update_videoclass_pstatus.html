<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");
  
  $id=$_GET['id'];
  $status=$_GET['status'];
  
$us=$obj->update_video_pstatus_video($id,$status);

?>

<div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
												<!-- /.<th>Days</th> -->
												        <th>Check</th>
												 	    <th>Subject</th>
													  	<th>Topic</th>
														<th>Title</th>
														<th>Video</th>
														
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													
													$rs=$obj->fetchAllDetail("gover_topic");
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
																
								$cit=$obj->fetchById($row['days'],"days","id");
									$sch55=$obj->fetchById($row['subject'],"assign_subject","id");
								
								$sch=$obj->fetchById($sch55['subject'],"gov_subject","id");
									$sch1=$obj->fetchById($row['topic'],"day_wise_topic","id");
								//$sch45=$obj->fetchById($row['chapter'],"chapter","id");
															?>
                                                    <tr>
												
													<!---/. <td><?php  echo $cit['days'];?></td> ---->
													
													
													<td>
<?php  if($row['pstatus']=='1'){ ?>
<input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','0')" checked="checked">
<?php } else{ ?>

<input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','1')"> <?php } ?></td>
													
													

													<td><?php echo $sch['subject'];?></td>
	                                                <td><?php  echo $sch1['topic'];?></td>
	                                                <td><?php  echo $row['title'];?></td>
	                                                <td><img src="gov_upload/<?php  echo $row['thumbnail'];?>" style=" width: 400px; height: 223px;"></td>
                                                    <td><video width="400" controls>
													<source src="gov_upload/<?php  echo $row['video'];?>" type="video/mp4">
													<source src="gov_upload/<?php  echo $row['video'];?>" type="video/ogg">
													</video>
													</td>
                                                   
                                                       
                                                       
                                                       <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="edit_video_class.php/<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
    <li><a href="delete.php/<?php echo $row['id'];?>/gover_topic/id/gove_assing_list" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
   <?php if($row['status']==1){?>
   <li><a href="updateStatus.php/<?php echo $row['id'];?>/0/gover_topic/status/id/gove_assing_list">Deactive</a></li><?php } ?>
	 <?php if($row['status']==0){?><li><a href="updateStatus.php/<?php echo $row['id'];?>/1/gover_topic/status/id/gove_assing_list" >Active</a></li><?php } ?>
     </ul>
</div></td>
                                                    </tr>
													<?php }} ?>
                                                  
                                                 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
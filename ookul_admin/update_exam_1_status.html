<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");

    $id=$_GET['id'];
    $status=$_GET['status'];
    $us=$obj->update_exam_free_video_status($id,$status);

?>
<div class="panel-body">
                                     <div class="table-responsive">
      <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
									 <th>Show Status</th>
									 <th>#</th>
									 <th>Exam Name</th>
                                     <th>Class </th>
									 <th>Subject Name</th>
									 <th>Time duration</th>
									  
									  <th>Number Of Question</th>
                                     <th>Total Marks</th>
                                     <th>Each Question Mark(+)</th>
                                     
									 <th>Action</th>
									     </tr>
								         </thead>
								           <tbody>
												<?php
													$table='school_exam';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
										
															
												?>
                                                    <tr>
                                       	<td>
<?php  if($row['free_status']=='1'){ ?>
<input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','0')" checked="checked">
<?php } else{ ?>

<input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','1')"> <?php } ?></td>                 
                                                        
										<td><?php echo $i;?></td>
                                        <td><?php echo $row['exam_name']; ?></td>
                                    
										
										<td>
										
										
										<?php 	$row10=$obj->fetchById($row['exam_type'],"class","id");
										
										echo $row10['class'];
										
										?>
										
										
										
										</td>
										<td><?php 
										$res=explode(",",$row['subject']);
										
                                        foreach ($res as $u => $value) 
                                        {
                                        $chap4=$obj->fetchById($res[$u],"subject","id");
                                        echo	$chap4['subject'];
                                        echo",";
                                        }
										?></td>
										<td><?php echo $row['time_dur']; ?></td>
										
										<td><?php echo $row['numbers_of_que']; ?></td>
                                        <td><?php echo $row['total_marks']; ?></td>
                                        <td><?php echo $row['q_marks_pluse']; ?></td>
                                        
														<td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="    background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="edit_schl_exam_time.php/<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
    <li><a href="delete.php/<?php echo $row['id'];?>/school_exam/id/school_exam_schedule_list" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>

  
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
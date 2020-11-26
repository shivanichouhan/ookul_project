
 <?php
include"../include/database.php";
$obj= new database();

//$agent_type=$_GET['id'];
 $agent=$_GET['agent'];


?>
<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
													<th> Name </th>
													<th>Block </th>
                                                        <th>Coupan</th>
                                                        <th>Class</th>
                                                        <th>User Name</th>
 <th>Status</th>	
	 
														<!--<th>Action</th>-->
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													$table='asign_coupan';
													$rs=$obj->fetchDetailByIdByStatus($agent,$table,"agent","status",1);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
													
															//$code12=$obj->fetchById($row['code'],"coupan_class","coupan_code");
														//	$user12=$obj->fetchById($row['code'],"class_order","coupan_code");
																
															
															?>
                                                    
														<?php 
														
														  $us="";
				    $u=explode(",",$row['coupan']);
				    foreach($u as $uu =>$value)
				    {
				      $code12=$obj->fetchById($u[$uu],"coupan_class","id");
				        	$user12=$obj->fetchById($code12['code'],"class_order","coupan_code");
							$use=$obj->fetchById($user12['user_id'],"user_register","id");
		
		
		 ?>
			
			<tr>
													<td>
														<?php
														$op3=$obj->fetchById($agent,"subagent","id");
														echo 	$op3['name'];
													
													?></td>

													<td><?php 
													$op4=$obj->fetchById($op3['block_id'],"block","id");

													echo $op4['block']; ?></td>

			
			<td><?php echo $code12['code']; ?></td>
			<td><?php
				$cls=$obj->fetchById($code12['class'],"class","id");
			 echo $cls['class']; ?></td>
											<td><?php echo $use['name']; ?></td>			 
										<td><?php if($user12['status']==1) 
										{?>
									<button type="button" class="btn btn-danger">Used</button>
										<?php } else { ?>
										<button type="button" class="btn btn-success">Unused</button>
								
<?php										}?></td>
												
														
													
                                                  
															<?php 
														} 		    }
													} ?>
                                                </tbody>
													
                                               
                                            </table>
<?php include"header.php";
include"menu.php"; ?>
<!-- /. main header -->
<!-- /.content-wrapper -->
<div class="content-wrapper">
    <div class="container">
        <!-- main content -->
        <div class="content">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-box1"></i>
                </div>
                <div class="header-title">
                    <h1>Relactionship Manager Report</h1>
                    <small>Relactionship Manager Report </a></small>
                    <ol class="breadcrumb">
                        <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                        <li><a href="referal_agent.php"></a></li>
                        <li class="active">Relactionship Manager Report List</li>
                    </ol>
                </div>
				
            </div>

			<!-- /. Content Header (Page header) -->
             <!-- /. Content Header (Page header) -->
			 <?php 
			if(@$_SESSION['rm_report']=='0') 
			 {
				 ?>
				 <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Relactionship Manager Report List </h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
						<form action="final_report_rm.php" method="GET" >
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="rm_id" >
                                    <option value="">Relactionship Manager</option>
									<option value="0">All</option>
                                    <?php
													$table='referal_agent';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                    <option value="<?php echo $row['id']; ?>">
                                        <?php echo $row['username'];  ?>
                                    </option>
                                    <?php } 
													}
													?>
                                </select>

                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="sdate" >
                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="edate">
                            </div>
							<div class="col-md-3">
								<input type="submit"  class="form-control" value="submit">
                            </div>
                           </form>
                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Relactionship Manager Name</th>
                                            <th style="width: 280.021px;">Executive Supervisor Name</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                           
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                           <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

													$table='referal_agent';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															
															?>


                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['username'];  ?>
                                            </td>
                                            <td>
                                                <?php $u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													echo"(";	echo $block['name'];  echo"),";
															}
														 ?>
                                            </td>

                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?> </td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
											<td><?php echo $row['account_number']; ?></td>
                                            <td><?php 
											$skamount=$row['amount'];
											$usersk=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=	$block['block_supervisor_id'];
												
													 $sk=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk as $sk0=>$value) 
													  { $sk00=$sk[$sk0]; 
														$blocksk=$obj->fetchById($sk00,"`subagent`","id"); 
														// $block['block_id'];
														$ask=$obj->fetchDetailByIdByStatusByblock02($blocksk['block_id'],"user_register","block","status",1,"pstatus",1);
														if($ask) 
															{ $aask=0; while($rowsk=mysqli_fetch_assoc($ask)) 
																{ $aask++;
																	$usersk=$usersk+1;
																}
															}
													  }
													 }
														 echo $usersk;	
														 ?>
														 </td>
                                            <td><?php echo $usersk*$skamount; ?></td>
                                            <td><?php
											$usersk1=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=$block['block_supervisor_id'];
												
													 $sk1=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk1 as $sk01=>$value) 
													  { $sk001=$sk1[$sk01]; 
														$blocksk1=$obj->fetchById($sk001,"`subagent`","id"); 
														// $block['block_id'];
														$ask1=$obj->fetchDetailByIdByStatusByblock03($blocksk1['block_id'],"user_register","block","status",1,"pstatus",1,"payment_type",3);
														if($ask1) 
															{ $aask1=0; while($rowsk1=mysqli_fetch_assoc($ask1)) 
																{ $aask1++;
																	$usersk1=$usersk1+1;
																}
															}
													  }
													 }
														 echo $usersk1;	

											?></td>
											<td><?php
													$usersk2=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=$block['block_supervisor_id'];
												
													 $sk2=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk2 as $sk02=>$value) 
													  { $sk002=$sk2[$sk02]; 
														$blocksk2=$obj->fetchById($sk002,"`subagent`","id"); 
														// $block['block_id'];
														$ask2=$obj->fetchDetailByIdByStatusByblock03($blocksk2['block_id'],"user_register","block","status",1,"pstatus",1,"payment_type",1);
														if($ask2) 
															{ $aask2=0; while($rowsk2=mysqli_fetch_assoc($ask2)) 
																{ $aask2++;
																	$usersk2=$usersk2+1;
																}
															}
													  }
													 }
														 echo $usersk2;	
												?></td>
                                            <td><?php
													$usersk3=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=$block['block_supervisor_id'];
												
													 $sk3=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk3 as $sk03=>$value) 
													  { $sk003=$sk3[$sk03]; 
														$blocksk3=$obj->fetchById($sk003,"`subagent`","id"); 
														// $block['block_id'];
														$ask3=$obj->fetchDetailByIdByStatusByblock03($blocksk3['block_id'],"user_register","block","status",1,"pstatus",1,"class",2);
														if($ask3) 
															{ $aask3=0; while($rowsk3=mysqli_fetch_assoc($ask3)) 
																{ $aask3++;
																	$usersk3=$usersk3+1;
																}
															}
													  }
													 }
														 echo $usersk3;	
												?></td>
											<td><?php $usersk4=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=$block['block_supervisor_id'];
												
													 $sk4=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk4 as $sk04=>$value) 
													  { $sk004=$sk4[$sk04]; 
														$blocksk4=$obj->fetchById($sk004,"`subagent`","id"); 
														// $block['block_id'];
														$ask4=$obj->fetchDetailByIdByStatusByblock03($blocksk4['block_id'],"user_register","block","status",1,"pstatus",1,"class",1);
														if($ask4) 
															{ $aask4=0; while($rowsk4=mysqli_fetch_assoc($ask4)) 
																{ $aask4++;
																	$usersk4=$usersk4+1;
																}
															}
													  }
													 }
														 echo $usersk4;
														 ?></td>
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php 
			}
			elseif(@$_SESSION['rm_report']=='1')
			 {
				$date1= @$_GET['sdate'];
				 ?>
				 <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Relactionship Manager Report List </h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
						<form action="final_report_rm.php" method="GET" >
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="rm_id" >
                                    <option value="">Relactionship Manager </option>
									<option value="0">All</option>
                                    <?php
													$table='referal_agent';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                    <option value="<?php echo $row['id']; ?>">
                                        <?php echo $row['username'];  ?>
                                    </option>
                                    <?php } 
													}
													?>
                                </select>

                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="sdate" >
                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="edate">
                            </div>
							<div class="col-md-3">
								<input type="submit"  class="form-control" value="submit">
                            </div>
                           </form>
                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Relactionship Manager Name</th>
                                            <th style="width: 280.021px;">Executive Supervisor Name</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                           
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                           <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

													$table='referal_agent';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															
															?>


                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['username'];  ?>
                                            </td>
                                            <td>
                                                <?php $u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													echo"(";	echo $block['name'];  echo"),";
															}
														 ?>
                                            </td>

                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?> </td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
											<td><?php echo $row['account_number']; ?></td>
                                            <td><?php  $skamount=$row['amount'];
											$usersk=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=	$block['block_supervisor_id'];
												
													 $sk=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk as $sk0=>$value) 
													  { $sk00=$sk[$sk0]; 
														$blocksk=$obj->fetchById($sk00,"`subagent`","id"); 
														// $block['block_id'];
														$ask=$obj->fetchDetailByIdByStatusByblockfeb02($blocksk['block_id'],"user_register","block","status",1,"pstatus",1,"payment_success_date",$date1);
														if($ask) 
															{ $aask=0; while($rowsk00=mysqli_fetch_assoc($ask)) 
																{ $aask++;
																	$usersk=$usersk+1;
																}
															}
													  }
													 }
														 echo $usersk;	?>
														 </td>
                                            <td><?php echo $usersk*$skamount; ?></td>
                                            <td><?php $usersk22=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=	$block['block_supervisor_id'];
												
													 $sk22=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk22 as $sk022=>$value) 
													  { $sk0022=$sk22[$sk022]; 
														$blocksk22=$obj->fetchById($sk0022,"`subagent`","id"); 
														// $block['block_id'];
														$ask22=$obj->fetchDetailByIdByStatusByblocktypefeb04($blocksk22['block_id'],"user_register","block","status",1,"pstatus",1,"payment_success_date",$date1,"payment_type",3);
														if($ask22) 
															{ $aask22=0; while($rowsk22=mysqli_fetch_assoc($ask22)) 
																{ $aask22++;
																	$usersk22=$usersk22+1;
																}
															}
													  }
													 }
														 echo $usersk22;?></td>
											<td><?php 
													$usersk23=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=	$block['block_supervisor_id'];
												
													 $sk23=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk23 as $sk023=>$value) 
													  { $sk0023=$sk23[$sk023]; 
														$blocksk23=$obj->fetchById($sk0023,"`subagent`","id"); 
														// $block['block_id'];
														$ask23=$obj->fetchDetailByIdByStatusByblocktypefeb04($blocksk23['block_id'],"user_register","block","status",1,"pstatus",1,"payment_success_date",$date1,"payment_type",1);
														if($ask23) 
															{ $aask23=0; while($rowsk23=mysqli_fetch_assoc($ask23)) 
																{ $aask23++;
																	$usersk23=$usersk23+1;
																}
															}
													  }
													 }
														 echo $usersk23;
											?></td>
                                            <td><?php $usersk24=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=	$block['block_supervisor_id'];
												
													 $sk24=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk24 as $sk024=>$value) 
													  { $sk0024=$sk24[$sk024]; 
														$blocksk24=$obj->fetchById($sk0024,"`subagent`","id"); 
														// $block['block_id'];
														$ask24=$obj->fetchDetailByIdByStatusByblocktypefeb04($blocksk24['block_id'],"user_register","block","status",1,"pstatus",1,"payment_success_date",$date1,"class",2);
														if($ask24) 
															{ $aask24=0; while($rowsk24=mysqli_fetch_assoc($ask24)) 
																{ $aask24++;
																	$usersk24=$usersk24+1;
																}
															}
													  }
													 }
														 echo $usersk24; ?></td>
											<td><?php 
											$usersk25=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=	$block['block_supervisor_id'];
												
													 $sk25=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk25 as $sk025=>$value) 
													  { $sk0025=$sk25[$sk025]; 
														$blocksk25=$obj->fetchById($sk0025,"`subagent`","id"); 
														// $block['block_id'];
														$ask25=$obj->fetchDetailByIdByStatusByblocktypefeb04($blocksk25['block_id'],"user_register","block","status",1,"pstatus",1,"payment_success_date",$date1,"class",1);
														if($ask25) 
															{ $aask25=0; while($rowsk25=mysqli_fetch_assoc($ask25)) 
																{ $aask25++;
																	$usersk25=$usersk25+1;
																}
															}
													  }
													 }
														 echo $usersk25; ?></td>
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			
			 <?php  } elseif(@$_SESSION['rm_report']=='2')
			 {
				$sdate= @$_GET['sdate'];
				$edate= @$_GET['edate'];
				 ?>
				  <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Relactionship Manager Report List </h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
						<form action="final_report_rm.php" method="GET" >
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="rm_id" >
                                    <option value="">Relactionship Manager </option>
									<option value="0">All</option>
                                    <?php
													$table='referal_agent';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                    <option value="<?php echo $row['id']; ?>">
                                        <?php echo $row['username'];  ?>
                                    </option>
                                    <?php } 
													}
													?>
                                </select>

                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="sdate" >
                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="edate">
                            </div>
							<div class="col-md-3">
								<input type="submit"  class="form-control" value="submit">
                            </div>
                           </form>
                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Relactionship Manager Name</th>
                                            <th style="width: 280.021px;">Executive Supervisor Name</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                           
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                           <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

													$table='referal_agent';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															
															?>


                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['username'];  ?>
                                            </td>
                                            <td>
                                                <?php $u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													echo"(";	echo $block['name'];  echo"),";
															}
														 ?>
                                            </td>

                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?> </td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
											<td><?php echo $row['account_number']; ?></td>
                                            <td><?php  $tu1=0;
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
																	//echo $block['id'];  
																	//echo"</br>";
																	$use=explode( ",",$block['block_supervisor_id']); 
																	  //$u=explode( ",",$coupan); 
																	  foreach($use as $useu=>$value) 
																	  { $rse=$use[$useu]; 
																		$blocse=$obj->fetchById($rse,"`subagent`","id"); 
																		$blockse=$blocse['block_id'];
																		
																		
																		$abb=$obj->fetchtodateblock858585858("user_register",$blockse);
                        												if($abb)
                        												{	$aa=0;
                        													while($rowabb=mysqli_fetch_assoc($abb))
                        													{	$aa++;
                        														if(strtotime($rowabb['payment_success_date'])<=strtotime($edate))
                                												 {
                                    												if(strtotime($sdate)<=strtotime($rowabb['payment_success_date']))
                                    												{ 
                                    												  
                                    												     
                                    														 $tu1=$tu1+1;
                                    												}
                        													    }
                        													}
                        												}
																			
																	  }
															}
											echo $tu1;
											?>
														 </td>
                                            <td><?php echo $tu1*$row['amount']; ?></td>
                                            <td><?php $tu2=0;
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
																	//echo $block['id'];  
																	//echo"</br>";
																	$use1=explode( ",",$block['block_supervisor_id']); 
																	  //$u=explode( ",",$coupan); 
																	  foreach($use1 as $useu1=>$value) 
																	  { $rse1=$use1[$useu1]; 
																		$blocse1=$obj->fetchById($rse1,"`subagent`","id"); 
																		$blockse1=$blocse1['block_id'];
																			$rsp42=$obj->fetchtodateblockclass("user_register",$blockse1,3,"payment_type");
                            												if($rsp42)
                            												{	$s2=0;
                            													while($rowsk=mysqli_fetch_assoc($rsp42))
                            													{	$s2++;
                            														if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
                            														{
                            															if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
                            															{ 
                            																$tu2=$tu2+1;
                            															}
                            														}
                            													}
                            												}
																		
																		
																			
																	  }
															}
											echo $tu2; ?></td>
											<td><?php 
												$tu3=0;
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
																	//echo $block['id'];  
																	//echo"</br>";
																	$use2=explode( ",",$block['block_supervisor_id']); 
																	  //$u=explode( ",",$coupan); 
																	  foreach($use2 as $useu2=>$value) 
																	  { $rse2=$use2[$useu2]; 
																		$blocse2=$obj->fetchById($rse2,"`subagent`","id"); 
																		$blockse2=$blocse2['block_id'];
																		
																			$rsp43=$obj->fetchtodateblockclass("user_register",$blockse2,1,"payment_type");
                            												if($rsp43)
                            												{	$s3=0;
                            													while($rowsk=mysqli_fetch_assoc($rsp43))
                            													{	$s3++;
                            														if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
                            														{
                            															if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
                            															{ 
                            																$tu3=$tu3+1;
                            															}
                            														}
                            													}
                            												}
																		
																	  }
															}
											echo $tu3;
											?></td>
                                            <td><?php

												$tu4=0;
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
																	//echo $block['id'];  
																	//echo"</br>";
																	$use3=explode( ",",$block['block_supervisor_id']); 
																	  //$u=explode( ",",$coupan); 
																	  foreach($use3 as $useu3=>$value) 
																	  { $rse3=$use3[$useu3]; 
																		$blocse3=$obj->fetchById($rse3,"`subagent`","id"); 
																		$blockse3=$blocse3['block_id'];
																		
																		
																				$abb4=$obj->fetchtodateblockclass("user_register",$blockse3,2,"class");
        												if($abb4)
        												{	$s4=0;
        													while($rowsk=mysqli_fetch_assoc($abb4))
        													{	$s4++;
        														if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
        														{
        															if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
        																{ 
        																	$tu4=$tu4+1;
        																}
        														}
        													}
        												}
echo $ty1;
																			
																	  }
															}
											echo $tu4;

											?></td>
											<td><?php 
											
											$tu5=0;
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
																	//echo $block['id'];  
																	//echo"</br>";
																	$use4=explode( ",",$block['block_supervisor_id']); 
																	  //$u=explode( ",",$coupan); 
																	  foreach($use4 as $useu4=>$value) 
																	  { $rse4=$use4[$useu4]; 
																		$blocse4=$obj->fetchById($rse4,"`subagent`","id"); 
																		$blockse4=$blocse4['block_id'];
																		
																		
																			$abb5=$obj->fetchtodateblockclass("user_register",$blockse4,1,"class");
												if($abb5)
												{	$s5=0;
													while($rowsk=mysqli_fetch_assoc($abb5))
													{	$s5++;
        												 if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
        												 {
            												if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
            												{ 
            												  
            												     
            														 $tu5=$tu5+1;
            												}
													    }
													}
												}
																			
																	  }
															}
											echo $tu5;
											?></td>
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				 
				 <?php
			 } elseif(@$_SESSION['rm_report']=='3') 
			 { 
			  $id=@$_GET['id'];
			 ?>
			 <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Relactionship Manager Report List </h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
						<form action="final_report_rm.php" method="GET" >
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="rm_id" >
                                    <option value="">Relactionship Manager </option>
									<option value="0">All</option>
                                    <?php
													$table='referal_agent';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                    <option value="<?php echo $row['id']; ?>">
                                        <?php echo $row['username'];  ?>
                                    </option>
                                    <?php } 
													}
													?>
                                </select>

                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="sdate" >
                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="edate">
                            </div>
							<div class="col-md-3">
								<input type="submit"  class="form-control" value="submit">
                            </div>
                           </form>
                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Relactionship Manager Name</th>
                                            <th style="width: 280.021px;">Executive Supervisor Name</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                           
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                           <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
													$rs=$obj->fetchDetailByIdByStatus($id,"referal_agent","id","status",1);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															
															?>


                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['username'];  ?>
                                            </td>
                                            <td>
                                                <?php $u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													echo"(";	echo $block['name'];  echo"),";
															}
														 ?>
                                            </td>

                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?> </td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
											<td><?php echo $row['account_number']; ?></td>
                                            <td><?php $total31=0;	
													$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													//echo"(";	echo $block['name'];  echo"),";
																		$u31=explode( ",",$block['block_supervisor_id']); 
																	foreach($u31 as $uu31=>$value) 
																			  { $r31=$u31[$uu31]; 
																				$block31=$obj->fetchById($r31,"`subagent`","id"); 
																				 $bl31=$block31['block_id'];						; 
																				$rsp31=$obj->fetchDetailByIdByStatus(1,"user_register","status","block",$bl31);
																				if($rsp31) 
																				{ $iy31=0; while($rowp31=mysqli_fetch_assoc($rsp31)) 
																					{ $iy31++;
																						$total31=$total31+1;
																					}
																				}
																				
																			  }
															}
												echo $total31;
											?>
														 </td>
                                            <td><?php  echo $total31*$row['amount'];?></td>
                                            <td><?php $total32=0;	
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
												
											$u32=explode( ",",$block['block_supervisor_id']); 
											foreach($u32 as $uu32=>$value) 
													  { $r32=$u32[$uu32]; 
														$block32=$obj->fetchById($r32,"`subagent`","id"); 
														 $bl32=$block32['block_id'];						; 
														$rsp32=$obj->fetchDetailByIdByStatus1110(1,"user_register","status","block",$bl32,"payment_type",3);
														if($rsp32) 
														{ $iy32=0; while($rowp32=mysqli_fetch_assoc($rsp32)) 
															{ $iy32++;
																$total32=$total32+1;
															}
														}
														
													  }
													  
												
															}  echo $total32; ?></td>
											<td><?php $total33=0;	
											$u=explode(",",$row['executive_id']);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																
											$u33=explode( ",",$block['block_supervisor_id']); 
											foreach($u33 as $uu33=>$value) 
													  { $r33=$u33[$uu33]; 
														$block33=$obj->fetchById($r33,"`subagent`","id"); 
														 $bl33=$block33['block_id'];						; 
														$rsp33=$obj->fetchDetailByIdByStatus1110(1,"user_register","status","block",$bl33,"payment_type",1);
														if($rsp33) 
														{ $iy33=0; while($rowp33=mysqli_fetch_assoc($rsp33)) 
															{ $iy33++;
																$total33=$total33+1;
															}
														}
														
													  }
													  
													
															} echo $total33; ?></td>
                                            <td><?php $total34=0;	
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													
											$u34=explode( ",",$block['block_supervisor_id']); 
											foreach($u34 as $uu34=>$value) 
													  { $r34=$u34[$uu34]; 
														$block34=$obj->fetchById($r34,"`subagent`","id"); 
														 $bl34=$block34['block_id'];						; 
														$rsp34=$obj->fetchDetailByIdByStatus1110(1,"user_register","status","block",$bl34,"class",2);
														if($rsp34) 
														{ $iy34=0; while($rowp34=mysqli_fetch_assoc($rsp34)) 
															{ $iy34++;
																$total34=$total34+1;
															}
														}
														
													  }
													 
													
															}  echo $total34; ?></td>
											<td><?php $total35=0;	
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																
											$u35=explode( ",",$block['block_supervisor_id']); 
											foreach($u35 as $uu35=>$value) 
													  { $r35=$u35[$uu35]; 
														$block35=$obj->fetchById($r35,"`subagent`","id"); 
														 $bl35=$block35['block_id'];						; 
														$rsp35=$obj->fetchDetailByIdByStatus1110(1,"user_register","status","block",$bl35,"class",1);
														if($rsp35) 
														{ $iy35=0; while($rowp34=mysqli_fetch_assoc($rsp35)) 
															{ $iy35++;
																$total35=$total35+1;
															}
														}
														
													  }
													 
													
															} echo $total35; 
															?></td>
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			 <?php } elseif(@$_SESSION['rm_report']=='4')
			 { 
				$id=@$_GET['id'];
				  $sdate11=@$_GET['sdate'];
				   //$edate11=@$_GET['edate'];
			?>
				 
			 <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Relactionship Manager Report List </h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
						<form action="final_report_rm.php" method="GET" >
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="rm_id" >
                                    <option value="">Relactionship Manager </option>
									<option value="0">All</option>
                                    <?php
													$table='referal_agent';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                    <option value="<?php echo $row['id']; ?>">
                                        <?php echo $row['username'];  ?>
                                    </option>
                                    <?php } 
													}
													?>
                                </select>

                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="sdate" >
                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="edate">
                            </div>
							<div class="col-md-3">
								<input type="submit"  class="form-control" value="submit">
                            </div>
                           </form>
                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Relactionship Manager Name</th>
                                            <th style="width: 280.021px;">Executive Supervisor Name</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                           
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                           <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
													$rs=$obj->fetchDetailByIdByStatus($id,"referal_agent","id","status",1);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															
															?>


                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['username'];  ?>
                                            </td>
                                            <td>
                                                <?php $u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													echo"(";	echo $block['name'];  echo"),";
															}
														 ?>
                                            </td>

                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?> </td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
											<td><?php echo $row['account_number']; ?></td>
                                            <td><?php $total41=0;	
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																
														$u41=explode( ",",$block['block_supervisor_id']); 
											foreach($u41 as $uu41=>$value) 
													  { $r41=$u41[$uu41]; 
														$block41=$obj->fetchById($r41,"`subagent`","id"); 
														 $bl41=$block41['block_id'];						; 
														$rsp41=$obj->fetchDetailByIdByStatusByDate0029(1,"user_register","status","block",$bl41,"payment_success_date ",$sdate11);
														if($rsp41) 
														{ $iy41=0; while($rowp41=mysqli_fetch_assoc($rsp41)) 
															{ $iy41++;
																$total41=$total41+1;
															}
														}
														
													  }
															}
															  echo $total41;	
															?></td>
                                            <td><?php  echo $total41*$row['amount']; ?></td>
											<td><?php $total42=0;	
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
																
											$u42=explode( ",",$block['block_supervisor_id']); 
											foreach($u42 as $uu42=>$value) 
													  { $r42=$u42[$uu42]; 
														$block42=$obj->fetchById($r42,"`subagent`","id"); 
														 $bl42=$block42['block_id'];						; 
														$rsp42=$obj->fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl42,"payment_success_date ",$sdate11,"payment_type",3);
														if($rsp42) 
														{ $iy42=0; while($rowp42=mysqli_fetch_assoc($rsp42)) 
															{ $iy42++;
																$total42=$total42+1;
															}
														}
														
													  }
													} echo $total42; ?></td>
                                            <td><?php $total43=0;	
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
																
																$u43=explode( ",",$block['block_supervisor_id']); 
																foreach($u43 as $uu43=>$value) 
																		  { $r43=$u43[$uu43]; 
																			$block43=$obj->fetchById($r43,"`subagent`","id"); 
																			 $bl43=$block43['block_id'];						; 
																			$rsp43=$obj->fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl43,"payment_success_date ",$sdate11,"payment_type",1);
																			if($rsp43) 
																			{ $iy43=0; while($rowp43=mysqli_fetch_assoc($rsp43)) 
																				{ $iy43++;
																					$total43=$total43+1;
																				}
																			}
																			
																		  }
													
													
															}   echo $total43; ?></td>
											<td><?php $u=explode(",",$row['executive_id']);
	$total44=0;	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
																
											$u44=explode( ",",$block['block_supervisor_id']); 
											foreach($u44 as $uu44=>$value) 
													  { $r44=$u44[$uu44]; 
														$block44=$obj->fetchById($r44,"`subagent`","id"); 
														 $bl44=$block44['block_id'];						; 
														$rsp44=$obj->fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl44,"payment_success_date ",$sdate11,"class",2);
														if($rsp44) 
														{ $iy44=0; while($rowp44=mysqli_fetch_assoc($rsp44)) 
															{ $iy44++;
																$total44=$total44+1;
															}
														}
														
													  }
													  
													
															} echo $total44;  ?></td>
											<td><?php $total45=0;	
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
																
																$u45=explode( ",",$block['block_supervisor_id']); 
																foreach($u45 as $uu45=>$value) 
																		  { $r45=$u45[$uu45]; 
																			$block45=$obj->fetchById($r45,"`subagent`","id"); 
																			 $bl45=$block45['block_id'];						; 
																			$rsp45=$obj->fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl45,"payment_success_date ",$sdate11,"class",1);
																			if($rsp45) 
																			{ $iy45=0; while($rowp45=mysqli_fetch_assoc($rsp45)) 
																				{ $iy45++;
																					$total45=$total45+1;
																				}
																			}
																			
																		  }
																		  
															} echo $total45; ?></td>
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php  }
			elseif(@$_SESSION['rm_report']=='5')
			{
				$id=@$_GET['id'];
				  $sdate11=@$_GET['sdate'];
				   $edate11=@$_GET['edate'];
				?>
				
			 <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Relactionship Manager Report List </h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
						<form action="final_report_rm.php" method="GET" >
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="rm_id" >
                                    <option value="">Relactionship Manager </option>
									<option value="0">All</option>
                                    <?php
													$table='referal_agent';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                    <option value="<?php echo $row['id']; ?>">
                                        <?php echo $row['username'];  ?>
                                    </option>
                                    <?php } 
													}
													?>
                                </select>

                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="sdate" >
                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="edate">
                            </div>
							<div class="col-md-3">
								<input type="submit"  class="form-control" value="submit">
                            </div>
                           </form>
                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Relactionship Manager Name</th>
                                            <th style="width: 280.021px;">Executive Supervisor Name</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                           
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                           <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
													$rs=$obj->fetchDetailByIdByStatus($id,"referal_agent","id","status",1);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															
															?>


                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['username'];  ?>
                                            </td>
                                            <td>
                                                <?php $u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													echo"(";	echo $block['name'];  echo"),";
															}
														 ?>
                                            </td>

                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?> </td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
											<td><?php echo $row['account_number']; ?></td>
                                            <td><?php	$total41=0;
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
																	$u41=explode( ",",$block['block_supervisor_id']); 
											foreach($u41 as $uu41=>$value) 
													  { $r41=$u41[$uu41]; 
														$block41=$obj->fetchById($r41,"`subagent`","id"); 
														 $bl41=$block41['block_id'];						; 
														//$sk=$obj->fetchtodateblock($table1,$sdate1,$edate1,$bloc);
													//	$rsp41=$obj->fetchtodateblock("user_register",$sdate11,$edate11,$bl41);
													//	if($rsp41) 
														//{ $iy41=0; while($rowp41=mysqli_fetch_assoc($rsp41)) 
														//	{ $iy41++;
															//	$total41=$total41+1;
															//}
														//}
															$rsp41=$obj->fetchtodateblock858585858("user_register",$bl41);
            												if($rsp41)
            												{	$s=0;
            													while($rowsk=mysqli_fetch_assoc($rsp41))
            													{	$s++;
                    												 if(strtotime($rowsk['payment_success_date'])<=strtotime($_GET['edate']))
                    												 {
                        												if(strtotime($_GET['sdate'])<=strtotime($rowsk['payment_success_date']))
                        												{ 
                        												  
                        												     
                        														 $total41=$total41+1;
                        												}
            													    }
            													}
            												}
														
														
														
													  }
															}  echo $total41; ?></td>
                                            <td><?php   	
											
													  	 echo $total41*$row['amount']; ?></td>
											<td><?php  $total42=0;	
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																	$u42=explode( ",",$block['block_supervisor_id']); 
											foreach($u42 as $uu42=>$value) 
													  { $r42=$u42[$uu42]; 
														$block42=$obj->fetchById($r42,"`subagent`","id"); 
														 $bl42=$block42['block_id'];						; 
														//$rsp42=$obj->fetchtodatecuopan2009("user_register",$sdate11,$edate11,$bl42,3);
														//fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl42,"register_date ",$sdate11,"payment_type",3);
														//if($rsp42) 
													//	{ $iy42=0; while($rowp42=mysqli_fetch_assoc($rsp42)) 
														//	{ $iy42++;
															//	$total42=$total42+1;
															//}
														//}
														$rsp42=$obj->fetchtodateblockclass("user_register",$bl42,3,"payment_type");
														if($rsp42)
        												{	$s2=0;
        													while($rowsk=mysqli_fetch_assoc($rsp42))
        													{	$s2++;
        														if(strtotime($rowsk['payment_success_date'])<=strtotime($_GET['edate']))
        														{
        															if(strtotime($_GET['sdate'])<=strtotime($rowsk['payment_success_date']))
        															{ 
        																$total42=$total42+1;
        															}
        														}
        													}
        												}
													  }
													
															}  echo $total42;	 ?></td>
                                            <td><?php $total43=0;	
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																$u43=explode( ",",$block['block_supervisor_id']); 
											foreach($u43 as $uu43=>$value) 
													  { $r43=$u43[$uu43]; 
														$block43=$obj->fetchById($r43,"`subagent`","id"); 
														 $bl43=$block43['block_id'];						; 
													//	$rsp43=$obj->fetchtodatecuopan2009("user_register",$sdate11,$edate11,$bl43,1);
														//fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl43,"register_date ",$sdate11,"payment_type",1);
													//	if($rsp43) 
														//{ $iy43=0; while($rowp43=mysqli_fetch_assoc($rsp43)) 
															//{ $iy43++;
															//	$total43=$total43+1;
															//}
														//}
														
															$rsp43=$obj->fetchtodateblockclass("user_register",$bl43,1,"payment_type");
        												if($rsp43)
        												{	$s3=0;
        													while($rowsk=mysqli_fetch_assoc($rsp43))
        													{	$s3++;
        														if(strtotime($rowsk['payment_success_date'])<=strtotime($_GET['edate']))
        														{
        															if(strtotime($_GET['sdate'])<=strtotime($rowsk['payment_success_date']))
        															{ 
        																$total43=$total43+1;
        															}
        														}
        													}
        												}
														
													  }
															}   echo $total43; ?></td>
											<td><?php  $total44=0;	
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																$u44=explode( ",",$block['block_supervisor_id']); 
											foreach($u44 as $uu44=>$value) 
													  { $r44=$u44[$uu44]; 
														$block44=$obj->fetchById($r44,"`subagent`","id"); 
														 $bl44=$block44['block_id'];						; 
														//$rsp44=$obj->fetchtodateclass2009("user_register",$sdate11,$edate11,$bl44,2);
														//fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl44,"register_date ",$sdate11,"class",2);
														//if($rsp44) 
													//	{ $iy44=0; while($rowp44=mysqli_fetch_assoc($rsp44)) 
														//	{ $iy44++;
															//	$total44=$total44+1;
														//	}
														//}
														$rsp44=$obj->fetchtodateblockclass("user_register",$bl44,2,"class");
												if($rsp44)
												{	$s4=0;
													while($rowsk=mysqli_fetch_assoc($rsp44))
													{	$s4++;
														if(strtotime($rowsk['payment_success_date'])<=strtotime($_GET['edate']))
														{
															if(strtotime($_GET['sdate'])<=strtotime($rowsk['payment_success_date']))
																{ 
																	$total44=$total44+1;
																}
														}
													}
												}
														
														
													  }
												
															}   echo $total44; ?></td>
											<td><?php $total45=0;
											$u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
															$u45=explode( ",",$block['block_supervisor_id']); 
											foreach($u45 as $uu45=>$value) 
													  { $r45=$u45[$uu45]; 
														$block45=$obj->fetchById($r45,"`subagent`","id"); 
														 $bl45=$block45['block_id'];						; 
														//$rsp45=$obj->fetchtodateclass2009("user_register",$sdate11,$edate11,$bl45,1);
														//fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl45,"register_date ",$sdate11,"class",1);
														//if($rsp45) 
													//	{ $iy45=0; while($rowp45=mysqli_fetch_assoc($rsp45)) 
														//	{ $iy45++;
																//$total45=$total45+1;
															//}
														//}
															$rsp45=$obj->fetchtodateblockclass("user_register",$bl45,1,"class");
            												if($rsp45)
            												{	$s5=0;
            													while($rowsk=mysqli_fetch_assoc($rsp45))
            													{	$s5++;
            														if(strtotime($rowsk['payment_success_date'])<=strtotime($_GET['edate']))
            														{
            															if(strtotime($_GET['sdate'])<=strtotime($rowsk['payment_success_date']))
            															{ 
            																$total45=$total45+1;
            															}
            														}
            													}
            												}
														
													  }
															}  echo $total45;  ?></td>
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				<?php
			}
			 else {
			 ?>
			 
			 
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Relactionship Manager Report List</h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
						<form action="final_report_rm.php" method="GET" >
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="rm_id" >
                                    <option value="">Relactionship Manager</option>
									<option value="0">All</option>
                                    <?php
													$table='referal_agent';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                    <option value="<?php echo $row['id']; ?>">
                                        <?php echo $row['username'];  ?>
                                    </option>
                                    <?php } 
													}
													?>
                                </select>

                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="sdate" >
                            </div>
							<div class="col-md-3">
							<input type="date"  class="form-control" name="edate">
                            </div>
							<div class="col-md-3">
								<input type="submit"  class="form-control" value="submit">
                            </div>
                           </form>
                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Relactionship Manager Name</th>
                                            <th style="width: 280.021px;">Executive Supervisor Name</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                           
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                           <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

													$table='referal_agent';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															
															?>


                                        <tr>
                                            <td>
                                                <?php echo $i; ?>
                                            </td>
                                            <td>
                                                <?php echo $row['username']; ?>
                                            </td>
                                            <td>
                                                <?php $u=explode(",",$row['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u as $uu =>$value)
															{
																 $r=$u[$uu]; 
																$block=$obj->fetchById($r,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													echo"(";	echo $block['name'];  echo"),";
															}
														 ?>
                                            </td>

                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?> </td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
											<td><?php echo $row['account_number']; ?></td>
                                            <td><?php 
											$skamount=$row['amount'];
											$usersk=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=	$block['block_supervisor_id'];
												
													 $sk=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk as $sk0=>$value) 
													  { $sk00=$sk[$sk0]; 
														$blocksk=$obj->fetchById($sk00,"`subagent`","id"); 
														// $block['block_id'];
														$ask=$obj->fetchDetailByIdByStatusByblock02($blocksk['block_id'],"user_register","block","status",1,"pstatus",1);
														if($ask) 
															{ $aask=0; while($rowsk=mysqli_fetch_assoc($ask)) 
																{ $aask++;
																	$usersk=$usersk+1;
																}
															}
													  }
													 }
														 echo $usersk;	
														 ?>
														 </td>
                                            <td><?php echo $usersk*$skamount; ?></td>
                                            <td><?php
											$usersk1=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=$block['block_supervisor_id'];
												
													 $sk1=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk1 as $sk01=>$value) 
													  { $sk001=$sk1[$sk01]; 
														$blocksk1=$obj->fetchById($sk001,"`subagent`","id"); 
														// $block['block_id'];
														$ask1=$obj->fetchDetailByIdByStatusByblock03($blocksk1['block_id'],"user_register","block","status",1,"pstatus",1,"payment_type",3);
														if($ask1) 
															{ $aask1=0; while($rowsk1=mysqli_fetch_assoc($ask1)) 
																{ $aask1++;
																	$usersk1=$usersk1+1;
																}
															}
													  }
													 }
														 echo $usersk1;	

											?></td>
											<td><?php
													$usersk2=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=$block['block_supervisor_id'];
												
													 $sk2=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk2 as $sk02=>$value) 
													  { $sk002=$sk2[$sk02]; 
														$blocksk2=$obj->fetchById($sk002,"`subagent`","id"); 
														// $block['block_id'];
														$ask2=$obj->fetchDetailByIdByStatusByblock03($blocksk2['block_id'],"user_register","block","status",1,"pstatus",1,"payment_type",1);
														if($ask2) 
															{ $aask2=0; while($rowsk2=mysqli_fetch_assoc($ask2)) 
																{ $aask2++;
																	$usersk2=$usersk2+1;
																}
															}
													  }
													 }
														 echo $usersk2;	
												?></td>
                                            <td><?php
													$usersk3=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=$block['block_supervisor_id'];
												
													 $sk3=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk3 as $sk03=>$value) 
													  { $sk003=$sk3[$sk03]; 
														$blocksk3=$obj->fetchById($sk003,"`subagent`","id"); 
														// $block['block_id'];
														$ask3=$obj->fetchDetailByIdByStatusByblock03($blocksk3['block_id'],"user_register","block","status",1,"pstatus",1,"class",2);
														if($ask3) 
															{ $aask3=0; while($rowsk3=mysqli_fetch_assoc($ask3)) 
																{ $aask3++;
																	$usersk3=$usersk3+1;
																}
															}
													  }
													 }
														 echo $usersk3;	
												?></td>
											<td><?php $usersk4=0;
											$u=explode(",",$row['executive_id']);
											foreach($u as $uu =>$value)
											{
												$r=$u[$uu]; 
												$block=$obj->fetchById($r,"`agent`","id");
												$block_supervisor_id=$block['block_supervisor_id'];
												
													 $sk4=explode( ",",$block_supervisor_id); 
													  //$u=explode( ",",$coupan); 
													  foreach($sk4 as $sk04=>$value) 
													  { $sk004=$sk4[$sk04]; 
														$blocksk4=$obj->fetchById($sk004,"`subagent`","id"); 
														// $block['block_id'];
														$ask4=$obj->fetchDetailByIdByStatusByblock03($blocksk4['block_id'],"user_register","block","status",1,"pstatus",1,"class",1);
														if($ask4) 
															{ $aask4=0; while($rowsk4=mysqli_fetch_assoc($ask4)) 
																{ $aask4++;
																	$usersk4=$usersk4+1;
																}
															}
													  }
													 }
														 echo $usersk4;
														 ?></td>
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php } ?>
			
			
        </div> <!-- /.main content -->
    </div> <!-- /.container -->
</div> <!-- /.content-wrapper -->
<!-- start footer -->
<script>
    function clas(a) {
        //	 alert(a);
        $("#agent").load("relactionship_manager_report.php?id=" + a);
    }
</script>
<script>
    function amou(a) {
        // alert(a);
        $("#amount").load("amount_desit_Ajax.php?amount=" + a);
    }
</script>


<?php include"footer.php"; ?>
</div> <!-- ./wrapper -->
<!-- jQuery -->
<script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
<!-- jquery-ui -->
<script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<!-- Bootstrap js -->
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!-- lobipanel js -->
<script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
<!-- animsition js -->
<script src="assets/plugins/animsition/js/animsition.min.js" type="text/javascript"></script>
<!-- bootsnav js -->
<script src="assets/plugins/bootsnav/js/bootsnav.js" type="text/javascript"></script>
<!-- SlimScroll js -->
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<!-- FastClick js-->
<script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<!-- End Core Plugins
        =====================================================================-->
<!-- Start Page Lavel Plugins
        =====================================================================-->
<!-- dataTables js -->
<script src="assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
<!-- Start Theme label Script
        =====================================================================-->
<!-- Dashboard js -->
<script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
<!-- End Theme label Script
        =====================================================================-->
<script>
    $(document).ready(function() {

        "use strict"; // Start of use strict

        $('#dataTableExample1').DataTable({
            "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
            "lengthMenu": [
                [6, 25, 50, -1],
                [6, 25, 50, "All"]
            ],
            "iDisplayLength": 6
        });

        $("#dataTableExample2").DataTable({
            dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            buttons: [{
                    extend: 'copy',
                    className: 'btn-sm'
                },
                {
                    extend: 'csv',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                },
                {
                    extend: 'excel',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                },
                {
                    extend: 'pdf',
                    title: 'ExampleFile',
                    className: 'btn-sm'
                },
                {
                    extend: 'print',
                    className: 'btn-sm'
                }
            ]
        });

    });
</script>
</body>

<!-- Mirrored from thememinister.com/bootstrap-admin-template/template/theme/adminpage_v1.0/dataTables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Aug 2018 05:44:38 GMT -->

</html>
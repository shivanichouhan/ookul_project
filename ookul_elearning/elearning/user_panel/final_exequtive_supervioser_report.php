
<?php include "header.php"; include "menu.php"; ?>
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
                    <h1>Executive Supervisor Report</h1>
                    <small>Executive Supervisor Report Weekly,Monthly,Yearly</a></small>
                    <ol class="breadcrumb">
                        <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a>
                        </li>
                        <li>
                            <a href="add_agent.php"></a>
                        </li>
                        <li class="active">Executive Supervisor Report List</li>
                    </ol>
                </div>
            </div>
            <!-- /. Content Header (Page header) -->
			<?php if(@$_SESSION['ex_report']=='0') {   ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Executive Supervisor List</h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
                          <form action="final_report_ex.php" method="GET">
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="exequtive_id">
                                    <option value="">Executive Supervisor</option>
									<option value="0" >All</option>
                                    <?php $table='agent'; 
										  $rs=$obj->fetchAllDetailByStatus($table);
										  if($rs) 
										  { 
											  $i=0; 
											  while($row=mysqli_fetch_assoc($rs)) 
											  {  $i++; 
									?>
												<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> </option>
                                    <?php } } ?>
                                </select>
                            </div>
							 <div class="col-md-3">
								<input type="date" name="sdate" class="form-control">
                            </div>
							 <div class="col-md-3">
								<input type="date" name="edate" class="form-control">
                            </div>
							<div class="col-md-3">
                               <input type="submit" value="submit" class="form-control" style="background-color: #b007e1;">
                            </div>
                           </form>

                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                            <th>Executive Supervisor Name</th>
                                            <th style="width: 280.021px;">Block Supervisor (Name | Block)</th>

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
                                        <?php $table='agent' ;
											$rs=$obj->fetchAllDetailByStatus($table); 
											if($rs) 
												{ $i=0; while($rowaja=mysqli_fetch_assoc($rs)) 
													{ $i++; 
										?>
										<tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $rowaja[ 'name']; ?></td>
                                            <td><?php $u=explode( ",",$rowaja['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u as $uu=>$value) 
													  { $r=$u[$uu]; 
														$block=$obj->fetchById($r,"`subagent`","id"); 
														$block11=$obj->fetchById($block['block_id'],"`block`","id"); 
														echo"("; echo $block['name']; echo" | "; echo $block11['block']; echo"),";
													  } ?>
                                            </td>
											<td><?php echo $rowaja['branch_name']; ?></td>
                                            <td><?php echo $rowaja['ifc_code']; ?></td>
											<td><?php echo $rowaja['account_holder_name']; ?></td>
                                            <td><?php echo $rowaja['account_number']; ?></td>
											<td><?php $examount=$rowaja['amount'];		
												
						   $rowu4p=0;
			$rsu11=$obj->fetchByIdByStatusjkljkl($rowaja['id'],"pro_register","refer_ex","referby",'distric_holder');
					 if($rsu11)
							{	$i=0;
								while($uuaa=mysqli_fetch_assoc($rsu11))
								{
					  if($uuaa['pro_id']=='')
					  { 
					     
					      
					  }
					  else
					  {
 
 
					$rsu=$obj->fetchDetailByIdByStatus($uuaa['pro_id'],"user_register","pro_id","status",1);
					//fetchDetailByIdByStatus($uuaa['pro_id'],"user_register","pro_id","pstatus",1);
					
						if($rsu)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rsu))
								{	$i++;
									$rowu4p=$rowu4p+1;
								}
							}
					  }
								}}
 	$rowu4p;
		$totalaa4p=0;
  $block_supervisor_id=$rowaja['block_supervisor_id'];

 $u=explode(",",$block_supervisor_id);
foreach($u as $uu =>$value)
	{
		$user=$obj->fetchById($value,"subagent","id");
		$us=$user['id'];
		$block=$user['block_id'];
		$rs=$obj->fetchDetailByIdByStatus($block,"user_register","block","status",1);
			if($rs)
				{	$i=0;
					while($row=mysqli_fetch_assoc($rs))
					{	$i++;
					 $id=$row['id'];
					
					 if($row['pro_id']){
					$rs11=$obj->fetchDetailById($block,"pro_register","block_id");
			if($rs11)
				{	$i=0;
					while($row11=mysqli_fetch_assoc($rs11))
					{	$i++;
						 if($row11['pro_id']==$row['pro_id']){
						      	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaa4p=$totalaa4p+1;
								}
							}  
						 }else{
						     
						 }
					}}
					 }else{
					    	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaa4p=$totalaa4p+1;
								}
							}  
					 }
					}
				}
	}
$rsu11=$obj->fetchByIdByStatusjkljkl($rowaja['id'],"pro_register","refer_ex","referby",'distric_holder');
					 if($rsu11)
							{	$i=0;
								while($uuaa=mysqli_fetch_assoc($rsu11))
								{
					  if($uuaa['pro_id']=='')
					  { 
					      
					  }
					  else
					  {

					$rsu=$obj->fetchDetailByIdByStatus($uuaa['pro_id'],"user_register","pro_id","pstatus",1);
					//$rs21=$obj->fetchDetailById($id,"class_order","user_id");
						if($rsu)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rsu))
								{	$i++;
									$totalaa=$totalaa+1;
								}
							}
					  }
								}}
					  $block_supervisor_id77=$rowaja['block_supervisor_id'];

 $u1=explode(",",$block_supervisor_id77);
foreach($u1 as $uu1 =>$value1)
	{ 
		$user1=$obj->fetchById($value1,"subagent","id");
		$us=$user['id'];
		$block1=$user1['block_id'];
	
					$rs11=$obj->fetchDetailById($block1,"pro_register","block_id");
			if($rs11)
				{	$i=0;
					while($row11=mysqli_fetch_assoc($rs11))
					{	$i++;
					
	$rs=$obj->fetchDetailByIdByStatus($row11['pro_id'],"user_register","pro_id","status",1);
			if($rs)
				{	$i=0;
					while($row=mysqli_fetch_assoc($rs))
					{	$i++;
					if($row['block']==$block1){
					    
					}else{
						      	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaa4p=$totalaa4p+1;
								}
							}  
					}
					}
				}
					}}
	}
 
 $totalaa4p;					

	echo	$tot=	$totalaa4p; ?>
											</td>
                                            <td><?php 
										
												$to=$rowu4p*15;
						 		$tot4=	$tot*$examount;
						 		echo $to+$tot4;
								
													  //echo $tuser1*$examount;
												?></td>
											<td><?php 
													$tuser2=0;
													 $u2=explode( ",",$rowaja['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u2 as $uu2=>$value) 
													  { $r2=$u2[$uu2]; 
														$block2=$obj->fetchById($r2,"`subagent`","id"); 
														// $block['block_id'];
														$a2=$obj->fetchDetailByIdByStatusBycouser($block2['block_id'],"user_register","block","status",1,"payment_type",3);
														if($a2) 
															{ $cc=0; while($rowc=mysqli_fetch_assoc($a2)) 
																{ $cc++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$tuser2=$tuser2+1;
																}
															}
													  }
													  echo $tuser2;
												?></td>
                                            <td><?php $tuser3=0;
													 $u3=explode( ",",$rowaja['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u3 as $uu3=>$value) 
													  { $r3=$u3[$uu3]; 
														$block3=$obj->fetchById($r3,"`subagent`","id"); 
														// $block['block_id'];
														$a3=$obj->fetchDetailByIdByStatusBycouser($block3['block_id'],"user_register","block","status",1,"payment_type",1);
														if($a3) 
															{ $dd=0; while($rowd=mysqli_fetch_assoc($a3)) 
																{ $dd++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$tuser3=$tuser3+1;
																}
															}
													  }
													  echo $tuser3; ?></td>
											<td><?php 
													$tuser4=0;
													 $u4=explode( ",",$rowaja['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u4 as $uu4=>$value) 
													  { $r4=$u4[$uu4]; 
														$block4=$obj->fetchById($r4,"`subagent`","id"); 
														// $block['block_id'];
														$a4=$obj->fetchDetailByIdByStatusBycouser($block4['block_id'],"user_register","block","status",1,"class",2);
														if($a4) 
															{ $ee=0; while($rowe=mysqli_fetch_assoc($a4)) 
																{ $ee++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$tuser4=$tuser4+1;
																}
															}
													  }
													  echo $tuser4;
												?></td>
                                            <td><?php $tuser5=0;
													 $u5=explode( ",",$rowaja['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u5 as $uu5=>$value) 
													  { $r5=$u5[$uu5]; 
														$block5=$obj->fetchById($r5,"`subagent`","id"); 
														// $block['block_id'];
														$a5=$obj->fetchDetailByIdByStatusBycouser($block5['block_id'],"user_register","block","status",1,"class",1);
														if($a5) 
															{ $ff=0; while($rowf=mysqli_fetch_assoc($a5)) 
																{ $ff++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$tuser5=$tuser5+1;
																}
															}
													  }
													  echo $tuser5; ?></td>
                                            
                                        </tr>

                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
						<!--End Loop-->
                    </div>
                </div>
            </div>
			<?php }  elseif(@$_SESSION['ex_report']=='1') {   ?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Executive Supervisor List</h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
                          <form action="final_report_ex.php" method="GET">
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="exequtive_id">
                                    <option value="">Executive Supervisor</option>
									<option value="0" >All</option>
                                    <?php $table='agent'; 
										  $rs=$obj->fetchAllDetailByStatus($table);
										  if($rs) 
										  { 
											  $i=0; 
											  while($row=mysqli_fetch_assoc($rs)) 
											  {  $i++; 
									?>
												<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> </option>
                                    <?php } } ?>
                                </select>
                            </div>
							 <div class="col-md-3">
								<input type="date" name="sdate" class="form-control">
                            </div>
							 <div class="col-md-3">
								<input type="date" name="edate" class="form-control">
                            </div>
							<div class="col-md-3">
                               <input type="submit" value="submit" class="form-control" style="background-color: #b007e1;">
                            </div>
                           </form>

                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                            <th>Executive Supervisor Name</th>
                                            <th style="width: 280.021px;">Block Supervisor (Name | Block)</th>

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
										@$date0=$_GET['sdate'];
										$table='agent' ;
											$rs2=$obj->fetchAllDetailByStatus($table); 
											if($rs2) 
												{ $i1=0; while($row1=mysqli_fetch_assoc($rs2)) 
													{ $i1++; 
										?>
										<tr>
                                            <td><?php echo $i1; ?></td>
                                            <td><?php echo $row1['name']; ?></td>
                                            <td><?php $u=explode( ",",$row1['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u as $uu=>$value) 
													  { $r=$u[$uu]; 
														$block=$obj->fetchById($r,"`subagent`","id"); 
														$block11=$obj->fetchById($block['block_id'],"`block`","id"); 
														echo"("; echo $block['name']; echo" | "; echo $block11['block']; echo"),";
													  } ?>
                                            </td>
											<td><?php echo $row1['branch_name']; ?></td>
                                            <td><?php echo $row1['ifc_code']; ?></td>
											<td><?php echo $row1['account_holder_name']; ?></td>
                                            <td><?php echo $row1['account_number']; ?></td>
											<td><?php $examount1=$row1['amount'];
											
												// 		$uuser=0;
												// 	 $ut=explode( ",",$row1['block_supervisor_id']); 
												// 	  //$u=explode( ",",$coupan); 
												// 	  foreach($ut as $uut=>$value) 
												// 	  { $rr=$ut[$uut]; 
												// 		$ublock=$obj->fetchById($rr,"`subagent`","id"); 
												// 		// $block['block_id'];
												// 		$au1=$obj->fetchDetailByIdByStatusBycouser($ublock['block_id'],"user_register","block","status",1,"payment_success_date",$date0);
												// 		if($au1) 
												// 			{ $aa1=0; while($rowua=mysqli_fetch_assoc($au1)) 
												// 				{ $aa1++;
												// 					//echo $rowa['block'];
												// 					//echo "</br>";
												// 					$uuser=$uuser+1;
												// 				}
												// 			}
												// 	  }
												// 	  echo $uuser;
												
														  // $amount=$agent['amount'];
		$rsu11=$obj->fetchByIdByStatusjkljkl($row1['id'],"pro_register","refer_ex","referby",'distric_holder');
					 if($rsu11)
							{	$i=0;
								while($uuaa=mysqli_fetch_assoc($rsu11))
								{
								    if($uuaa['pro_id']=='')
					  { 
					     
					  }
					  else
					  {
 $rowu100=0;
					$rsu=$obj->fetchDetailByIdByStatusBycouser($uuaa['pro_id'],"user_register","pro_id","pstatus",1,"payment_success_date",$date0);
					//fetchDetailByIdByStatus($uuaa['pro_id'],"user_register","pro_id","pstatus",1);
					
						if($rsu)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rsu))
								{	$i++;
								
									   $id161=$row21['id'];
									 
                                        
                                        
                                        $rsu11=$obj->fetchDetailByIdByStatus($id161,"class_order","user_id","status",1);
                                        
                                        if($rsu11)
                                        {	$i=0;
                                        while($rowpay0=mysqli_fetch_assoc($rsu11))
                                        {	$i++;
                                            $rowu100=$rowu100+1;
                                        
                                        }
                                        }
                                        
                                        
                                        
                                	
									
								}
							}
					  }}}
 
 	$rowu100;
 //---------------------
 	$totalaa11=0;
							   $block_supervisor_id=$row1['block_supervisor_id'];

 $u=explode(",",$block_supervisor_id);
foreach($u as $uu =>$value)
	{
		$user=$obj->fetchById($value,"subagent","id");
		$us=$user['id'];
		$block=$user['block_id'];
		$rs=$obj->fetchDetailByIdByStatusBycouser($block,"user_register","block","pstatus",1,"payment_success_date",$date0);
		//fetchDetailByIdByStatus($block,"user_register","block","status",1);
			if($rs)
				{	$i=0;
					while($row=mysqli_fetch_assoc($rs))
					{	$i++;
					 $id=$row['id'];
					 if($row['pro_id']){
					$rs11=$obj->fetchDetailById($block,"pro_register","block_id");
			if($rs11)
				{	$i=0;
					while($row11=mysqli_fetch_assoc($rs11))
					{	$i++;
						 if($row11['pro_id']==$row['pro_id']){
						    
						      	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaa11=$totalaa11+1;
								}
							} 
						 }else{
						     
						 }
					}}
					 }else{
					     
					    	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaa11=$totalaa11+1;
								}
							}  

					 }
					}
				}
	}
$rsu11=$obj->fetchByIdByStatusjkljkl($row1['id'],"pro_register","refer_ex","referby",'distric_holder');
					 if($rsu11)
							{	$i=0;
								while($uuaa=mysqli_fetch_assoc($rsu11))
								{
								    if($uuaa['pro_id']=='')
					  { 
					      
					  }
					  else
					  {

					$rsu=$obj->fetchDetailByIdByStatusBycouser($uuaa['pro_id'],"user_register","pro_id","pstatus",1,"payment_success_date",$date0);
					//fetchDetailByIdByStatus($uuaa['pro_id'],"user_register","pro_id","pstatus",1);
					//$rs21=$obj->fetchDetailById($id,"class_order","user_id");
						if($rsu)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rsu))
								{	$i++;

									$totalaa11=$totalaa11+1;

								}
							}
					  }
								}}
					  $block_supervisor_id77=$row1['block_supervisor_id'];

 $u1=explode(",",$block_supervisor_id77);
foreach($u1 as $uu1 =>$value1)
	{ 
		$user1=$obj->fetchById($value1,"subagent","id");
		$us=$user['id'];
		$block1=$user1['block_id'];
	
					$rs11=$obj->fetchDetailById($block1,"pro_register","block_id");
			if($rs11)
				{	$i=0;
					while($row11=mysqli_fetch_assoc($rs11))
					{	$i++;
					
	$rs=$obj->fetchDetailByIdByStatusBycouser($row11['pro_id'],"user_register","pro_id","pstatus",1,"payment_success_date",$date0);
	//fetchDetailByIdByStatus($row11['pro_id'],"user_register","pro_id","status",1);
			if($rs)
				{	$i=0;
					while($row=mysqli_fetch_assoc($rs))
					{	$i++;
					if($row['block']==$block1){
					    
					}else{
					    	$register_date161=$row['register_date'];
                                         $dddd1=explode("-",$register_date161);
                                         $yy2=$dddd1['1'];
                                        
                                        
                                        	$date=date("Y-m-d");
                                        $dd=explode("-",$date);
                                        $yy1=$dd['1'];
                                        
                                        
if($yy2==$yy1)
{
						      	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaa11=$totalaa11+1;
								}
							} 
}else{
    
}
					}
					}
				}
					}}
	}
		$totalaa11;	
		echo $rowu100+$totalaa11;
												?>
											</td>
                                            <td><?php 
								// 			$uuser1=0;
								// 					 $ut1=explode( ",",$row1['block_supervisor_id']); 
								// 					  //$u=explode( ",",$coupan); 
								// 					  foreach($ut1 as $uut1=>$value) 
								// 					  { $rr1=$ut1[$uut1]; 
								// 						$ublock1=$obj->fetchById($rr1,"`subagent`","id"); 
								// 						// $block['block_id'];
								// 						$au2=$obj->fetchDetailByIdByStatusBycouser($ublock1['block_id'],"user_register","block","status",1,"payment_success_date",$date0);
								// 						if($au2) 
								// 							{ $aa2=0; while($rowub=mysqli_fetch_assoc($au2)) 
								// 								{ $aa2++;
								// 									//echo $rowa['block'];
								// 									//echo "</br>";
								// 									$uuser1=$uuser1+1;
								// 								}
								// 							}
								// 					  }
								// 					  echo $uuser1*$examount1;
									$yy= $rowu100*15;
							 	$yy1= $totalaa11*$examount1;
							 	echo $yy+$yy1;
												?></td>
											<td><?php 
													$uuser2=0;
													 $ut2=explode( ",",$row1['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($ut2 as $uut2=>$value) 
													  { $rr2=$ut2[$uut2]; 
														$ublock2=$obj->fetchById($rr2,"`subagent`","id"); 
														// $block['block_id'];
														$au3=$obj->fetchDetailByIdByStatusBycouser_type($ublock2['block_id'],"user_register","block","status",1,"payment_success_date",$date0,"payment_type",3);
														if($au3) 
															{ $aa3=0; while($rowuc=mysqli_fetch_assoc($au3)) 
																{ $aa3++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$uuser2=$uuser2+1;
																}
															}
													  }
													  echo $uuser2;
												?></td>
                                            <td><?php $uuser3=0;
													 $ut3=explode( ",",$row1['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($ut3 as $uut3=>$value) 
													  { $rr3=$ut3[$uut3]; 
														$ublock3=$obj->fetchById($rr3,"`subagent`","id"); 
														// $block['block_id'];
														$au4=$obj->fetchDetailByIdByStatusBycouser_type($ublock3['block_id'],"user_register","block","status",1,"payment_success_date",$date0,"payment_type",1);
														if($au4) 
															{ $aa4=0; while($rowud=mysqli_fetch_assoc($au4)) 
																{ $aa4++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$uuser3=$uuser3+1;
																}
															}
													  }
													  echo $uuser3;  ?></td>
											<td><?php $uuser4=0;
													 $ut4=explode( ",",$row1['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($ut4 as $uut4=>$value) 
													  { $rr4=$ut4[$uut4]; 
														$ublock4=$obj->fetchById($rr4,"`subagent`","id"); 
														// $block['block_id'];
														$au5=$obj->fetchDetailByIdByStatusBycouser_type($ublock4['block_id'],"user_register","block","status",1,"payment_success_date",$date0,"class",2);
														if($au5) 
															{ $aa5=0; while($rowue=mysqli_fetch_assoc($au5)) 
																{ $aa5++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$uuser4=$uuser4+1;
																}
															}
													  }
													  echo $uuser4;  ?></td>
                                            <td><?php 
													 $uuser5=0;
													 $ut5=explode( ",",$row1['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($ut5 as $uut5=>$value) 
													  { $rr5=$ut5[$uut5]; 
														$ublock5=$obj->fetchById($rr5,"`subagent`","id"); 
														// $block['block_id'];
														$au6=$obj->fetchDetailByIdByStatusBycouser_type($ublock5['block_id'],"user_register","block","status",1,"payment_success_date",$date0,"class",1);
														if($au6) 
															{ $aa6=0; while($rowuf=mysqli_fetch_assoc($au6)) 
																{ $aa6++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$uuser5=$uuser5+1;
																}
															}
													  }
													  echo $uuser5; 
											?></td>
                                            
                                        </tr>

                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
						<!--End Loop-->
                    </div>
                </div>
            </div>
			<?php } elseif(@$_SESSION['ex_report']=='2') { 
			 
			?>
			<div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Executive Supervisor List</h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
                          <form action="final_report_ex.php" method="GET">
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="exequtive_id">
                                    <option value="">Executive Supervisor</option>
									<option value="0" >All</option>
                                    <?php $table='agent'; 
										  $rs=$obj->fetchAllDetailByStatus($table);
										  if($rs) 
										  { 
											  $i=0; 
											  while($row=mysqli_fetch_assoc($rs)) 
											  {  $i++; 
									?>
												<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> </option>
                                    <?php } } ?>
                                </select>
                            </div>
							 <div class="col-md-3">
								<input type="date" name="sdate" class="form-control">
                            </div>
							 <div class="col-md-3">
								<input type="date" name="edate" class="form-control">
                            </div>
							<div class="col-md-3">
                               <input type="submit" value="submit" class="form-control" style="background-color: #b007e1;">
                            </div>
                           </form>

                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                            <th>Executive Supervisor Name</th>
                                            <th style="width: 280.021px;">Block Supervisor (Name | Block)</th>

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
										
										@$sdate=$_GET['sdate'];
										@$edate=$_GET['edate'];
										@$table='agent';
											$rs20=$obj->fetchAllDetail($table); 
											if($rs20) 
												{ $i=0; while($row20=mysqli_fetch_assoc($rs20)) 
													{ $i++; 
										?>
										<tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row20[ 'name']; ?></td>
                                            <td><?php $u=explode( ",",$row20['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u as $uu=>$value) 
													  { $r=$u[$uu]; 
														$block=$obj->fetchById($r,"`subagent`","id"); 
														$block11=$obj->fetchById($block['block_id'],"`block`","id"); 
														echo"("; echo $block['name']; echo" | "; echo $block11['block']; echo"),";
													  } ?>
                                            </td>
											<td><?php echo $row20['branch_name']; ?></td>
                                            <td><?php echo $row20['ifc_code']; ?></td>
											<td><?php echo $row20['account_holder_name']; ?></td>
                                            <td><?php echo $row20['account_number']; 
											$amo20=$row20['amount']; ?></td>
											<td><?php 
											
											
											$tu1=0;
											$u=explode( ",",$row20['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u as $uu=>$value) 
													  { $r=$u[$uu]; 
														$bloc=$obj->fetchById($r,"`subagent`","id"); 
														$block1=$bloc['block_id'];
														
														
											
													  
													  	$totalaa=0;
							   $block_supervisor_id=$row20['block_supervisor_id'];

 $u=explode(",",$block_supervisor_id);
foreach($u as $uu =>$value)
	{
		$user=$obj->fetchById($u[$uu],"subagent","id");
		$us=$user['id'];
		 $block=$user['block_id'];
	//	echo"</br>";
		$rs=$obj->fetchtodateblock858585858("user_register",$block);
			if($rs)
				{	$i=0;
					while($row=mysqli_fetch_assoc($rs))
					{	$i++;
					
					if(strtotime($row['payment_success_date'])<=strtotime($edate))
        			 {
            			if(strtotime($sdate)<=strtotime($row['payment_success_date']))
            				{ 
					 $id=$row['id']; 
				
					 if($row['pro_id']){
					$rs11=$obj->fetchDetailById($block,"pro_register","block_id");
			if($rs11)
				{	$i=0;
					while($row11=mysqli_fetch_assoc($rs11))
					{	$i++;
						 if($row11['pro_id']==$row['pro_id']){
						      	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
								
									$totalaa=$totalaa+1;
								}
							}  
						 }else{
						     
						 }
					}
				    	// echo $totalaa;
				}
					 }
				
					 else{
					    	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaa=$totalaa+1;
								}
							}  
					 }
					}
				}
					}}
	}
$rsu11=$obj->fetchByIdByStatusjkljkl($row20['id'],"pro_register","refer_ex","referby",'distric_holder');
					 if($rsu11)
							{	$i=0;
								while($uuaa=mysqli_fetch_assoc($rsu11))
								{
					  if($uuaa['pro_id']=='')
					  { 
					      
					  }
					  else
					  {

					$rsu=$obj->fetchtodateblockpro858585858("user_register",$uuaa['pro_id']);
					//fetchtodateblockpro858585858($uuaa['pro_id'],"user_register","pro_id","pstatus",1);
					//$rs21=$obj->fetchDetailById($id,"class_order","user_id");
						if($rsu)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rsu))
								{	$i++;
													if(strtotime($row21['payment_success_date'])<=strtotime($edate))
        			 {
            			if(strtotime($sdate)<=strtotime($row21['payment_success_date']))
            				{ 
									$totalaa=$totalaa+1;
            				}
        			 }
								}
							}
					  }
						}
							    
							}
					  
					  $block_supervisor_id77=$row20['block_supervisor_id'];

 $u1=explode(",",$block_supervisor_id77);
foreach($u1 as $uu1 =>$value1)
	{ 
		$user1=$obj->fetchById($value1,"subagent","id");
		$us=$user['id'];
		$block1=$user1['block_id'];
	
					$rs11=$obj->fetchDetailById($block1,"pro_register","block_id");
			if($rs11)
				{	$i=0;
					while($row11=mysqli_fetch_assoc($rs11))
					{	$i++;
					
	$rs=$obj->fetchtodateblockpro858585858("user_register",$row11['pro_id']);
	//fetchDetailByIdByStatus($row11['pro_id'],"user_register","pro_id","status",1);
			if($rs)
				{	$i=0;
					while($row=mysqli_fetch_assoc($rs))
					{	$i++;
					
					if(strtotime($row['payment_success_date'])<=strtotime($edate))
        			 {
            			if(strtotime($sdate)<=strtotime($row['payment_success_date']))
            				{ 
					if($row['block']==$block1){
					    
					}
					else{
						      	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaa=$totalaa+1;
								}
							}  
					}
            				}
        			 }
					}
				}
					}}
	}

													  }		echo  $totalaa; 					  
													  
													  ?></td>
                                            <td><?php 
											  // $tu1*$amo20;
											  	$yy= $rowu100*15;
							 	$yy1= $totalaa*$amo20;
							 	echo $yy+$yy1;
											  ?></td>
											<td><?php $tu22=0;
												$u22=explode( ",",$row20['block_supervisor_id']); 
														  //$u=explode( ",",$coupan); 
														  foreach($u22 as $uu22=>$value) 
														  { $r22=$u22[$uu22]; 
															$bloc22=$obj->fetchById($r22,"`subagent`","id"); 
															$block22=$bloc22['block_id'];
															
																$rsp42=$obj->fetchtodateblockclass("user_register",$block22,3,"payment_type");
        												if($rsp42)
        												{	$s2=0;
        													while($rowsk=mysqli_fetch_assoc($rsp42))
        													{	$s2++;
        														if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
        														{
        															if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
        															{ 
        																$tu22=$tu22+1;
        															}
        														}
        													}
        												}
																
														  } echo $tu22;
											
											?></td>
                                            <td><?php $tu23=0;
											$u23=explode( ",",$row20['block_supervisor_id']); 
														  //$u=explode( ",",$coupan); 
														  foreach($u23 as $uu23=>$value) 
														  { $r23=$u23[$uu23]; 
															$bloc23=$obj->fetchById($r23,"`subagent`","id"); 
															$block23=$bloc23['block_id'];
															$rsp43=$obj->fetchtodateblockclass("user_register",$block23,1,"payment_type");
												if($rsp43)
												{	$s3=0;
													while($rowsk=mysqli_fetch_assoc($rsp43))
													{	$s3++;
														if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
														{
															if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
															{ 
																$tu23=$tu23+1;
															}
														}
													}
												}
															
																
																
														  } echo $tu23; ?></td>
											<td><?php 
											$tu24=0;
											$u24=explode( ",",$row20['block_supervisor_id']); 
														  //$u=explode( ",",$coupan); 
														  foreach($u24 as $uu24=>$value) 
														  { $r24=$u24[$uu24]; 
															$bloc24=$obj->fetchById($r24,"`subagent`","id"); 
															$block24=$bloc24['block_id'];
																$abb4=$obj->fetchtodateblockclass("user_register",$block24,2,"class");
        												if($abb4)
        												{	$s4=0;
        													while($rowsk=mysqli_fetch_assoc($abb4))
        													{	$s4++;
        														if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
        														{
        															if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
        																{ 
        																	$tu24=$tu24+1;
        																}
        														}
        													}
        												}
															
																
														  } echo $tu24;?></td>
                                            <td><?php 
											$tu25=0;
											$u25=explode( ",",$row20['block_supervisor_id']); 
														  //$u=explode( ",",$coupan); 
														  foreach($u25 as $uu25=>$value) 
														  { $r25=$u25[$uu25]; 
															$bloc25=$obj->fetchById($r25,"`subagent`","id"); 
															$block25=$bloc25['block_id'];
																														
																$abb5=$obj->fetchtodateblockclass("user_register",$block25,1,"class");
												if($abb5)
												{	$s5=0;
													while($rowsk=mysqli_fetch_assoc($abb5))
													{	$s5++;
        												 if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
        												 {
            												if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
            												{ 
            												  
            												     
            														 $tu25=$tu25+1;
            												}
													    }
													}
												}
														  } echo $tu25;  ?></td>
                                            
                                        </tr>

                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
						<!--End Loop-->
                    </div>
                </div>
            </div>
			<?php
			} elseif(@$_SESSION['ex_report']=='3') 
			{
				 $id=@$_GET['id'];
			?>
			<div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Executive Supervisor List</h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
                          <form action="final_report_ex.php" method="GET">
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="exequtive_id">
                                    <option value="">Executive Supervisor</option>
									<option value="0" >All</option>
                                    <?php $table='agent'; 
										  $rs=$obj->fetchAllDetailByStatus($table);
										  if($rs) 
										  { 
											  $i=0; 
											  while($row=mysqli_fetch_assoc($rs)) 
											  {  $i++; 
									?>
												<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> </option>
                                    <?php } } ?>
                                </select>
                            </div>
							 <div class="col-md-3">
								<input type="date" name="sdate" class="form-control">
                            </div>
							 <div class="col-md-3">
								<input type="date" name="edate" class="form-control">
                            </div>
							<div class="col-md-3">
                               <input type="submit" value="submit" class="form-control" style="background-color: #b007e1;">
                            </div>
                           </form>

                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                            <th>Executive Supervisor Name</th>
                                            <th style="width: 280.021px;">Block Supervisor (Name | Block)</th>

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
										$rs=$obj->fetchDetailByIdByStatus($id,"agent","id","status",1); 
											if($rs) 
												{ $i=0; while($rowss0=mysqli_fetch_assoc($rs)) 
													{ $i++; 
										?>
										<tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $rowss0[ 'name']; ?></td>
                                            <td><?php $u=explode( ",",$rowss0['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u as $uu=>$value) 
													  { $r=$u[$uu]; 
														$block=$obj->fetchById($r,"`subagent`","id"); 
														$block11=$obj->fetchById($block['block_id'],"`block`","id"); 
														echo"("; echo $block['name']; echo" | "; echo $block11['block']; echo"),";
													  } ?>
                                            </td>
											<td><?php echo $rowss0['branch_name']; ?></td>
                                            <td><?php echo $rowss0['ifc_code']; ?></td>
											<td><?php echo $rowss0['account_holder_name']; ?></td>
                                            <td><?php echo $rowss0['account_number']; ?></td>
								 			<td><?php 
								//$total31=0;	
								// 			$u31=explode( ",",$row['block_supervisor_id']); 
								// 			foreach($u31 as $uu31=>$value) 
								// 					  { $r31=$u31[$uu31]; 
								// 						$block31=$obj->fetchById($r31,"`subagent`","id"); 
								// 						 $bl31=$block31['block_id'];						; 
								// 						$rsp31=$obj->fetchDetailByIdByStatus(1,"user_register","status","block",$bl31);
								// 						if($rsp31) 
								// 						{ $iy31=0; while($rowp31=mysqli_fetch_assoc($rsp31)) 
								// 							{ $iy31++;
								// 								$total31=$total31+1;
								// 							}
								// 						}
														
								// 					  }
								// 					  echo $total31;	
								
								
											  // $amount=$agent['amount'];
											  
											  
							 $rowushe5=0;
			$rsu11=$obj->fetchByIdByStatusjkljkl($rowss0['id'],"pro_register","refer_ex","referby",'distric_holder');
					 if($rsu11)
							{	$i=0;
								while($uuaa=mysqli_fetch_assoc($rsu11))
								{
					  if($uuaa['pro_id']=='')
					  { 
					     
					      
					  }
					  else
					  {
 
 
					$rsu=$obj->fetchDetailByIdByStatus($uuaa['pro_id'],"user_register","pro_id","pstatus",1);
					
						if($rsu)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rsu))
								{	$i++;
									$rowushe5=$rowushe5+1;
								}
							}
					  }
								}}
 	$rowushe5;
					
			$totalsheaa=0;
  $block_supervisor_id=$rowss0['block_supervisor_id'];

 $u=explode(",",$block_supervisor_id);
foreach($u as $uu =>$value)
	{
		$user=$obj->fetchById($value,"subagent","id");
		$us=$user['id'];
		$block=$user['block_id'];
		$rs=$obj->fetchDetailByIdByStatus($block,"user_register","block","status",1);
			if($rs)
				{	$i=0;
					while($row=mysqli_fetch_assoc($rs))
					{	$i++;
					 $id=$row['id'];
					
					 if($row['pro_id']){
					$rs11=$obj->fetchDetailById($block,"pro_register","block_id");
			if($rs11)
				{	$i=0;
					while($row11=mysqli_fetch_assoc($rs11))
					{	$i++;
						 if($row11['pro_id']==$row['pro_id']){
						      	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalsheaa=$totalsheaa+1;
								}
							}  
						 }else{
						     
						 }
					}}
					 }else{
					    	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalsheaa=$totalsheaa+1;
								}
							}  
					 }
					}
				}
	}
$rsu11=$obj->fetchByIdByStatusjkljkl($rowss0['id'],"pro_register","refer_ex","referby",'distric_holder');
					 if($rsu11)
							{	$i=0;
								while($uuaa=mysqli_fetch_assoc($rsu11))
								{
					  if($uuaa['pro_id']=='')
					  { 
					      
					  }
					  else
					  {

					$rsu=$obj->fetchDetailByIdByStatus($uuaa['pro_id'],"user_register","pro_id","pstatus",1);
					//$rs21=$obj->fetchDetailById($id,"class_order","user_id");
						if($rsu)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rsu))
								{	$i++;
									$totalsheaa=$totalsheaa+1;
								}
							}
					  }
								}}
					  $block_supervisor_id77=$rowss0['block_supervisor_id'];

 $u1=explode(",",$block_supervisor_id77);
foreach($u1 as $uu1 =>$value1)
	{ 
		$user1=$obj->fetchById($value1,"subagent","id");
		$us=$user['id'];
		$block1=$user1['block_id'];
	
					$rs11=$obj->fetchDetailById($block1,"pro_register","block_id");
			if($rs11)
				{	$i=0;
					while($row11=mysqli_fetch_assoc($rs11))
					{	$i++;
					
	$rs=$obj->fetchDetailByIdByStatus($row11['pro_id'],"user_register","pro_id","status",1);
			if($rs)
				{	$i=0;
					while($row=mysqli_fetch_assoc($rs))
					{	$i++;
					if($row['block']==$block1){
					    
					}else{
						      	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalsheaa=$totalsheaa+1;
								}
							}  
					}
					}
				}
					}}
	}
 
 $totalsheaa;
	echo	$tot=	$totalsheaa;
					?>
											</td>
                                            <td><?php $amt= $rowss0['amount'];
											// $total31*$amt; 
												$to=$rowushe5*15;
						 		$tot=	$totalsheaa*$amt;
						 		echo $to+$tot;
								
											?></td>
											<td><?php 
											$total32=0;	
											$u32=explode( ",",$rowss0['block_supervisor_id']); 
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
													  echo $total32;
											
											?></td>
                                            <td><?php 
												$total33=0;	
											$u33=explode( ",",$rowss0['block_supervisor_id']); 
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
													  echo $total33;
											?></td>
											<td><?php $total34=0;	
											$u34=explode( ",",$rowss0['block_supervisor_id']); 
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
													  echo $total34;?></td>
                                            <td><?php
													$total35=0;	
											$u35=explode( ",",$rowss0['block_supervisor_id']); 
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
													  echo $total35;
												?></td>
                                            
                                        </tr>

                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
						<!--End Loop-->
                    </div>
                </div>
            </div>
			

			<?php	} elseif(@$_SESSION['ex_report']=='4') 
			{
				  $id=@$_GET['id'];
				  $sdate11=@$_GET['sdate'];

				 ?>
				 
<div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Executive Supervisor List</h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
                          <form action="final_report_ex.php" method="GET">
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="exequtive_id">
                                    <option value="">Executive Supervisor</option>
									<option value="0" >All</option>
                                    <?php $table='agent'; 
										  $rs=$obj->fetchAllDetailByStatus($table);
										  if($rs) 
										  { 
											  $i=0; 
											  while($row=mysqli_fetch_assoc($rs)) 
											  {  $i++; 
									?>
												<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> </option>
                                    <?php } } ?>
                                </select>
                            </div>
							 <div class="col-md-3">
								<input type="date" name="sdate" class="form-control">
                            </div>
							 <div class="col-md-3">
								<input type="date" name="edate" class="form-control">
                            </div>
							<div class="col-md-3">
                               <input type="submit" value="submit" class="form-control" style="background-color: #b007e1;">
                            </div>
                           </form>

                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                            <th>Executive Supervisor Name</th>
                                            <th style="width: 280.021px;">Block Supervisor (Name | Block)</th>

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
                                        <?php //$table='agent' ;
											$rs=$obj->fetchDetailByIdByStatus($id,"agent","id","status",1); 
										
											if($rs) 
												{ $i=0; while($rowaag=mysqli_fetch_assoc($rs)) 
													{ $i++; 
										?>
										<tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $rowaag[ 'name']; ?></td>
                                            <td><?php $u=explode( ",",$rowaag['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u as $uu=>$value) 
													  { $r=$u[$uu]; 
														$block=$obj->fetchById($r,"`subagent`","id"); 
														$block11=$obj->fetchById($block['block_id'],"`block`","id"); 
														echo"("; echo $block['name']; echo" | "; echo $block11['block']; echo"),";
													  } ?>
                                            </td>
											<td><?php echo $rowaag['branch_name']; ?></td>
                                            <td><?php echo $rowaag['ifc_code']; ?></td>
											<td><?php echo $rowaag['account_holder_name']; ?></td>
                                            <td><?php echo $rowaag['account_number']; ?></td>
											<td><?php  
									
								// 			$total41=0;	
								// 			$u41=explode( ",",$row['block_supervisor_id']); 
								// 			foreach($u41 as $uu41=>$value) 
								// 					  { $r41=$u41[$uu41]; 
								// 						$block41=$obj->fetchById($r41,"`subagent`","id"); 
								// 						 $bl41=$block41['block_id'];						; 
								// 						$rsp41=$obj->fetchDetailByIdByStatusByDate0029(1,"user_register","status","block",$bl41,"register_date ",$sdate11);
								// 						if($rsp41) 
								// 						{ $iy41=0; while($rowp41=mysqli_fetch_assoc($rsp41)) 
								// 							{ $iy41++;
								// 								$total41=$total41+1;
								// 							}
								// 						}
														
								// 					  }
								// 					  echo $total41;
								
								
										 $rowuaa=0;
			$rsu11=$obj->fetchByIdByStatusjkljkl($rowaag['id'],"pro_register","refer_ex","referby",'distric_holder');
					 if($rsu11)
							{	$i=0;
								while($uuaa=mysqli_fetch_assoc($rsu11))
								{
					  if($uuaa['pro_id']=='')
					  { 
					     
					      
					  }
					  else
					  {
 
 
					$rsu=$obj->fetchDetailByIdByStatusByDate0029(1,"user_register","pstatus","pro_id",$uuaa['pro_id'],"payment_success_date ",$sdate11);
					//fetchDetailByIdByStatus($uuaa['pro_id'],"user_register","pro_id","pstatus",1);
					
						if($rsu)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rsu))
								{	$i++;
									$rowuaa=$rowuaa+1;
								}
							}
					  }
								}}
								
								//-------------
								$totalaauu=0;
  $block_supervisor_id=$rowaag['block_supervisor_id'];

 $u=explode(",",$block_supervisor_id);
foreach($u as $uu =>$value)
	{
		$user=$obj->fetchById($value,"subagent","id");
		$us=$user['id'];
		$block=$user['block_id'];
		$rs=$obj->fetchDetailByIdByStatusByDate0029(1,"user_register","pstatus","$block",$block,"payment_success_date ",$sdate11);
	//	fetchDetailByIdByStatus($block,"user_register","block","status",1);
			if($rs)
				{	$i=0;
					while($row=mysqli_fetch_assoc($rs))
					{	$i++;
					 $id=$row['id'];
					
					 if($row['pro_id']){
					$rs11=$obj->fetchDetailById($block,"pro_register","block_id");
			if($rs11)
				{	$i=0;
					while($row11=mysqli_fetch_assoc($rs11))
					{	$i++;
						 if($row11['pro_id']==$row['pro_id']){
						      	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaauu=$totalaauu+1;
								}
							}  
						 }else{
						     
						 }
					}}
					 }else{
					    	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaauu=$totalaauu+1;
								}
							}  
					 }
					}
				}
	}
$rsu11=$obj->fetchByIdByStatusjkljkl($rowaag['id'],"pro_register","refer_ex","referby",'distric_holder');
					 if($rsu11)
							{	$i=0;
								while($uuaa=mysqli_fetch_assoc($rsu11))
								{
					  if($uuaa['pro_id']=='')
					  { 
					      
					  }
					  else
					  {

					$rsu=$obj->fetchDetailByIdByStatusByDate0029(1,"user_register","pstatus","pro_id",$uuaa['pro_id'],"payment_success_date ",$sdate11);
					//fetchDetailByIdByStatus($uuaa['pro_id'],"user_register","pro_id","pstatus",1);
					//$rs21=$obj->fetchDetailById($id,"class_order","user_id");
						if($rsu)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rsu))
								{	$i++;
									$totalaauu=$totalaauu+1;
								}
							}
					  }
								}}
					  $block_supervisor_id77=$agent['block_supervisor_id'];

 $u1=explode(",",$block_supervisor_id77);
foreach($u1 as $uu1 =>$value1)
	{ 
		$user1=$obj->fetchById($value1,"subagent","id");
		$us=$user['id'];
		$block1=$user1['block_id'];
	
					$rs11=$obj->fetchDetailById($block1,"pro_register","block_id");
			if($rs11)
				{	$i=0;
					while($row11=mysqli_fetch_assoc($rs11))
					{	$i++;
					
	$rs=$obj->fetchDetailByIdByStatusByDate0029(1,"user_register","pstatus","pro_id",$uuaa['pro_id'],"payment_success_date ",$sdate11);
	//fetchDetailByIdByStatus($row11['pro_id'],"user_register","pro_id","status",1);
			if($rs)
				{	$i=0;
					while($row=mysqli_fetch_assoc($rs))
					{	$i++;
					if($row['block']==$block1){
					    
					}else{
						      	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaauu=$totalaauu+1;
								}
							}  
					}
					}
				}
					}}
	}
 
 $totalaauu;
	echo	$tot=	$totalaauu;
 
?>





											</td>
                                            <td><?php 
                                            $amo=$rowaag['amount']; 
                                            	$to1=$rowuaa*15;
						 		$tot=	$totalaauu*$amo;
						 		echo $to1+$tot2;
                                            //$amo=$row['amount']; echo $amo*$total41;  ?></td>
											<td><?php  $total42=0;	
											$u42=explode( ",",$rowaag['block_supervisor_id']); 
											foreach($u42 as $uu42=>$value) 
													  { $r42=$u42[$uu42]; 
														$block42=$obj->fetchById($r42,"`subagent`","id"); 
														 $bl42=$block42['block_id'];						; 
														$rsp42=$obj->fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl42,"register_date ",$sdate11,"payment_type",3);
														if($rsp42) 
														{ $iy42=0; while($rowp42=mysqli_fetch_assoc($rsp42)) 
															{ $iy42++;
																$total42=$total42+1;
															}
														}
														
													  }
													  echo $total42;	 ?></td>
                                            <td><?php 
													$total43=0;	
											$u43=explode( ",",$rowaag['block_supervisor_id']); 
											foreach($u43 as $uu43=>$value) 
													  { $r43=$u43[$uu43]; 
														$block43=$obj->fetchById($r43,"`subagent`","id"); 
														 $bl43=$block43['block_id'];						; 
														$rsp43=$obj->fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl43,"register_date ",$sdate11,"payment_type",1);
														if($rsp43) 
														{ $iy43=0; while($rowp43=mysqli_fetch_assoc($rsp43)) 
															{ $iy43++;
																$total43=$total43+1;
															}
														}
														
													  }
													  echo $total43;
											?></td>
											<td><?php $total44=0;	
											$u44=explode( ",",$rowaag['block_supervisor_id']); 
											foreach($u44 as $uu44=>$value) 
													  { $r44=$u44[$uu44]; 
														$block44=$obj->fetchById($r44,"`subagent`","id"); 
														 $bl44=$block44['block_id'];						; 
														$rsp44=$obj->fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl44,"register_date ",$sdate11,"class",2);
														if($rsp44) 
														{ $iy44=0; while($rowp44=mysqli_fetch_assoc($rsp44)) 
															{ $iy44++;
																$total44=$total44+1;
															}
														}
														
													  }
													  echo $total44;?></td>
                                            <td><?php $total45=0;	
											$u45=explode( ",",$rowaag['block_supervisor_id']); 
											foreach($u45 as $uu45=>$value) 
													  { $r45=$u45[$uu45]; 
														$block45=$obj->fetchById($r45,"`subagent`","id"); 
														 $bl45=$block45['block_id'];						; 
														$rsp45=$obj->fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl45,"register_date ",$sdate11,"class",1);
														if($rsp45) 
														{ $iy45=0; while($rowp45=mysqli_fetch_assoc($rsp45)) 
															{ $iy45++;
																$total45=$total45+1;
															}
														}
														
													  }
													  echo $total45; ?></td>
                                            
                                        </tr>

                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
						<!--End Loop-->
                    </div>
                </div>
            </div>

			<?php }  elseif(@$_SESSION['ex_report']=='5') 
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
                                <h4>Executive Supervisor List</h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
                          <form action="final_report_ex.php" method="GET">
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="exequtive_id">
                                    <option value="">Executive Supervisor</option>
									<option value="0" >All</option>
                                    <?php $table='agent'; 
										  $rs=$obj->fetchAllDetailByStatus($table);
										  if($rs) 
										  { 
											  $i=0; 
											  while($row=mysqli_fetch_assoc($rs)) 
											  {  $i++; 
									?>
												<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> </option>
                                    <?php } } ?>
                                </select>
                            </div>
							 <div class="col-md-3">
								<input type="date" name="sdate" class="form-control">
                            </div>
							 <div class="col-md-3">
								<input type="date" name="edate" class="form-control">
                            </div>
							<div class="col-md-3">
                               <input type="submit" value="submit" class="form-control" style="background-color: #b007e1;">
                            </div>
                           </form>

                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                            <th>Executive Supervisor Name</th>
                                            <th style="width: 280.021px;">Block Supervisor (Name | Block)</th>

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
                                        <?php //$table='agent' ;
											$rs=$obj->fetchDetailByIdByStatus($id,"agent","id","status",1); 
										
											if($rs) 
												{ $i=0; while($rowss1=mysqli_fetch_assoc($rs)) 
													{ $i++; 
										?>
										<tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $rowss1[ 'name']; ?></td>
                                            <td><?php $u=explode( ",",$rowss1['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u as $uu=>$value) 
													  { $r=$u[$uu]; 
														$block=$obj->fetchById($r,"`subagent`","id"); 
														$block11=$obj->fetchById($block['block_id'],"`block`","id"); 
														echo"("; echo $block['name']; echo" | "; echo $block11['block']; echo"),";
													  } ?>
                                            </td>
											<td><?php echo $rowss1['branch_name']; ?></td>
                                            <td><?php echo $rowss1['ifc_code']; ?></td>
											<td><?php echo $rowss1['account_holder_name']; ?></td>
                                            <td><?php echo $rowss1['account_number']; ?></td>
								 			<td><?php 
								//$total41=0;	
								// 			$u41=explode( ",",$row['block_supervisor_id']); 
								// 			foreach($u41 as $uu41=>$value) 
								// 					  { $r41=$u41[$uu41]; 
								// 						$block41=$obj->fetchById($r41,"`subagent`","id"); 
								// 						 $bl41=$block41['block_id'];						; 
								// 						//$sk=$obj->fetchtodateblock($table1,$sdate1,$edate1,$bloc);
													
								// 						$rsp41=$obj->fetchtodateblock858585858("user_register",$bl41);
								// 				if($rsp41)
								// 				{	$s=0;
								// 					while($rowsk=mysqli_fetch_assoc($rsp41))
								// 					{	$s++;
        // 												 if(strtotime($rowsk['payment_success_date'])<=strtotime($_GET['edate']))
        // 												 {
        //     												if(strtotime($_GET['sdate'])<=strtotime($rowsk['payment_success_date']))
        //     												{ 
            												  
            												     
        //     														 $total41=$total41+1;
        //     												}
								// 					    }
								// 					}
								// 				}
														
														
														
														
														
														
														
														
								// 					  }
								// 					  echo $total41;	
								
								
								 $rowuss1=0;
			$rsu11=$obj->fetchByIdByStatusjkljkl($rowss1['id'],"pro_register","refer_ex","referby",'distric_holder');
					 if($rsu11)
							{	$i=0;
								while($uuaa=mysqli_fetch_assoc($rsu11))
								{
					  if($uuaa['pro_id']=='')
					  { 
					     
					      
					  }
					  else
					  {
 
 
					$rsu=$obj->fetchDetailByIdByStatus($uuaa['pro_id'],"user_register","pro_id","pstatus",1);
					
						if($rsu)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rsu))
								{	$i++;
									$rowuss1=$rowuss1+1;
								}
							}
					  }
								}}
 	$rowuss1;
 
 $totalaass1=0;
  $block_supervisor_id=$rowss1['block_supervisor_id'];

 $u=explode(",",$block_supervisor_id);
foreach($u as $uu =>$value)
	{
		$user=$obj->fetchById($value,"subagent","id");
		$us=$user['id'];
		$block=$user['block_id'];
		$rs=$obj->fetchDetailByIdByStatus($block,"user_register","block","status",1);
			if($rs)
				{	$i=0;
					while($row=mysqli_fetch_assoc($rs))
					{	$i++;
					 $id=$row['id'];
					
					 if($row['pro_id']){
					$rs11=$obj->fetchDetailById($block,"pro_register","block_id");
			if($rs11)
				{	$i=0;
					while($row11=mysqli_fetch_assoc($rs11))
					{	$i++;
						 if($row11['pro_id']==$row['pro_id']){
						      	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaass1=$totalaass1+1;
								}
							}  
						 }else{
						     
						 }
					}}
					 }else{
					    	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaass1=$totalaass1+1;
								}
							}  
					 }
					}
				}
	}
$rsu11=$obj->fetchByIdByStatusjkljkl($rowss1['id'],"pro_register","refer_ex","referby",'distric_holder');
					 if($rsu11)
							{	$i=0;
								while($uuaa=mysqli_fetch_assoc($rsu11))
								{
					  if($uuaa['pro_id']=='')
					  { 
					      
					  }
					  else
					  {

					$rsu=$obj->fetchDetailByIdByStatus($uuaa['pro_id'],"user_register","pro_id","pstatus",1);
					//$rs21=$obj->fetchDetailById($id,"class_order","user_id");
						if($rsu)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rsu))
								{	$i++;
									$totalaass1=$totalaass1+1;
								}
							}
					  }
								}}
					  $block_supervisor_id77=$rowss1['block_supervisor_id'];

 $u1=explode(",",$block_supervisor_id77);
foreach($u1 as $uu1 =>$value1)
	{ 
		$user1=$obj->fetchById($value1,"subagent","id");
		$us=$user['id'];
		$block1=$user1['block_id'];
	
					$rs11=$obj->fetchDetailById($block1,"pro_register","block_id");
			if($rs11)
				{	$i=0;
					while($row11=mysqli_fetch_assoc($rs11))
					{	$i++;
					
	$rs=$obj->fetchDetailByIdByStatus($row11['pro_id'],"user_register","pro_id","status",1);
			if($rs)
				{	$i=0;
					while($row=mysqli_fetch_assoc($rs))
					{	$i++;
					if($row['block']==$block1){
					    
					}else{
						      	$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
						if($rs21)
							{	$i=0;
								while($row21=mysqli_fetch_assoc($rs21))
								{	$i++;
									//$totalaa=$totalaa+$row21['price'];
									$totalaass1=$totalaass1+1;
								}
							}  
					}
					}
				}
					}}
	}
 

	echo	$tot=	$totalaass1;
 
 
?>
											</td>
                                            <td><?php  $amo=$rowss1['amount']; 
                                            	$to1=$rowuss1*15;
						 		$tot1=	$totalaass1*$amo;
						 		echo $to1+$tot1;
                                            
                                            ?></td>
											<td><?php  $total42=0;	
											$u42=explode( ",",$rowss1['block_supervisor_id']); 
											foreach($u42 as $uu42=>$value) 
													  { $r42=$u42[$uu42]; 
														$block42=$obj->fetchById($r42,"`subagent`","id"); 
														 $bl42=$block42['block_id'];						; 
														//$rsp42=$obj->fetchtodatecuopan2009("user_register",$sdate11,$edate11,$bl42,3);
														//fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl42,"register_date ",$sdate11,"payment_type",3);
														
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
													  echo $total42;	 ?></td>
                                            <td><?php 
													$total43=0;	
											$u43=explode( ",",$rowss1['block_supervisor_id']); 
											foreach($u43 as $uu43=>$value) 
													  { $r43=$u43[$uu43]; 
														$block43=$obj->fetchById($r43,"`subagent`","id"); 
														 $bl43=$block43['block_id'];
											
														
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
													  echo $total43;
											?></td>
											<td><?php $total44=0;	
											$u44=explode( ",",$rowss1['block_supervisor_id']); 
											foreach($u44 as $uu44=>$value) 
													  { $r44=$u44[$uu44]; 
														$block44=$obj->fetchById($r44,"`subagent`","id"); 
														 $bl44=$block44['block_id'];						; 
													
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
													  echo $total44;?></td>
                                            <td><?php $total45=0;	
											$u45=explode( ",",$rowss1['block_supervisor_id']); 
											foreach($u45 as $uu45=>$value) 
													  { $r45=$u45[$uu45]; 
														$block45=$obj->fetchById($r45,"`subagent`","id"); 
														 $bl45=$block45['block_id'];						; 
													
														
														
															$rsp45=$obj->fetchtodateblockclass("user_register",$bl45,1,"class");
												if($rsp45)
												{	$s5=0;
													while($rowsk=mysqli_fetch_assoc($rsp45))
													{	$s5++;
												 if(strtotime($rowsk['payment_success_date'])<=strtotime($_GET['edate'])){
												if(strtotime($_GET['sdate'])<=strtotime($rowsk['payment_success_date']))
												{ 
												  
												     
														 $total45=$total45+1;
												}
													}
													}
												}
											
														
													  }
													  echo $total45; ?></td>
                                            
                                        </tr>

                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
						<!--End Loop-->
                    </div>
                </div>
            </div>
			
			<?php } else {
				?>
				<div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Executive Supervisor List</h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
                          <form action="final_report_ex.php" method="GET">
                            <div class="col-md-3">

                                <select class="form-control" id="exampleSelect1" name="exequtive_id">
                                    <option value="">Executive Supervisor</option>
									<option value="0" >All</option>
                                    <?php $table='agent'; 
										  $rs=$obj->fetchAllDetailByStatus($table);
										  if($rs) 
										  { 
											  $i=0; 
											  while($row=mysqli_fetch_assoc($rs)) 
											  {  $i++; 
									?>
												<option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?> </option>
                                    <?php } } ?>
                                </select>
                            </div>
							 <div class="col-md-3">
								<input type="date" name="sdate" class="form-control">
                            </div>
							 <div class="col-md-3">
								<input type="date" name="edate" class="form-control">
                            </div>
							<div class="col-md-3">
                               <input type="submit" value="submit" class="form-control" style="background-color: #b007e1;">
                            </div>
                           </form>

                        </div>

                        <div class="panel-body">

                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                            <th>Executive Supervisor Name</th>
                                            <th style="width: 280.021px;">Block Supervisor (Name | Block)</th>

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
                                        <?php $table='agent' ;
											$rs=$obj->fetchAllDetail($table); 
											if($rs) 
												{ $i=0; while($row=mysqli_fetch_assoc($rs)) 
													{ $i++; 
										?>
										<tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $row[ 'name']; ?></td>
                                            <td><?php $u=explode( ",",$row['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u as $uu=>$value) 
													  { $r=$u[$uu]; 
														$block=$obj->fetchById($r,"`subagent`","id"); 
														$block11=$obj->fetchById($block['block_id'],"`block`","id"); 
														echo"("; echo $block['name']; echo" | "; echo $block11['block']; echo"),";
													  } ?>
                                            </td>
											<td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?></td>
											<td><?php echo $row['account_holder_name']; ?></td>
                                            <td><?php echo $row['account_number']; ?></td>
											<td><?php $examount=$row['amount'];
														$tuser=0;
													 $u=explode( ",",$row['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u as $uu=>$value) 
													  { $r=$u[$uu]; 
														$block=$obj->fetchById($r,"`subagent`","id"); 
														// $block['block_id'];
														$a=$obj->fetchDetailByIdByStatus($block['block_id'],"user_register","block","status",1);
														if($a) 
															{ $aa=0; while($rowa=mysqli_fetch_assoc($a)) 
																{ $aa++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$tuser=$tuser+1;
																}
															}
													  }
													  echo $tuser;
												?>
											</td>
                                            <td><?php 
													$tuser1=0;
													 $u1=explode( ",",$row['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u1 as $uu1=>$value) 
													  { $r1=$u1[$uu1]; 
														$block1=$obj->fetchById($r1,"`subagent`","id"); 
														// $block['block_id'];
														$a1=$obj->fetchDetailByIdByStatus($block1['block_id'],"user_register","block","status",1);
														if($a1) 
															{ $bb=0; while($rowb=mysqli_fetch_assoc($a1)) 
																{ $bb++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$tuser1=$tuser1+1;
																}
															}
													  }
													  echo $tuser1*$examount;
												?></td>
											<td><?php 
													$tuser2=0;
													 $u2=explode( ",",$row['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u2 as $uu2=>$value) 
													  { $r2=$u2[$uu2]; 
														$block2=$obj->fetchById($r2,"`subagent`","id"); 
														// $block['block_id'];
														$a2=$obj->fetchDetailByIdByStatusBycouser($block2['block_id'],"user_register","block","status",1,"payment_type",3);
														if($a2) 
															{ $cc=0; while($rowc=mysqli_fetch_assoc($a2)) 
																{ $cc++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$tuser2=$tuser2+1;
																}
															}
													  }
													  echo $tuser2;
												?></td>
                                            <td><?php $tuser3=0;
													 $u3=explode( ",",$row['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u3 as $uu3=>$value) 
													  { $r3=$u3[$uu3]; 
														$block3=$obj->fetchById($r3,"`subagent`","id"); 
														// $block['block_id'];
														$a3=$obj->fetchDetailByIdByStatusBycouser($block3['block_id'],"user_register","block","status",1,"payment_type",1);
														if($a3) 
															{ $dd=0; while($rowd=mysqli_fetch_assoc($a3)) 
																{ $dd++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$tuser3=$tuser3+1;
																}
															}
													  }
													  echo $tuser3; ?></td>
											<td><?php 
													$tuser4=0;
													 $u4=explode( ",",$row['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u4 as $uu4=>$value) 
													  { $r4=$u4[$uu4]; 
														$block4=$obj->fetchById($r4,"`subagent`","id"); 
														// $block['block_id'];
														$a4=$obj->fetchDetailByIdByStatusBycouser($block4['block_id'],"user_register","block","status",1,"class",2);
														if($a4) 
															{ $ee=0; while($rowe=mysqli_fetch_assoc($a4)) 
																{ $ee++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$tuser4=$tuser4+1;
																}
															}
													  }
													  echo $tuser4;
												?></td>
                                            <td><?php $tuser5=0;
													 $u5=explode( ",",$row['block_supervisor_id']); 
													  //$u=explode( ",",$coupan); 
													  foreach($u5 as $uu5=>$value) 
													  { $r5=$u5[$uu5]; 
														$block5=$obj->fetchById($r5,"`subagent`","id"); 
														// $block['block_id'];
														$a5=$obj->fetchDetailByIdByStatusBycouser($block5['block_id'],"user_register","block","status",1,"class",1);
														if($a5) 
															{ $ff=0; while($rowf=mysqli_fetch_assoc($a5)) 
																{ $ff++;
																	//echo $rowa['block'];
																	//echo "</br>";
																	$tuser5=$tuser5+1;
																}
															}
													  }
													  echo $tuser5; ?></td>
                                            
                                        </tr>

                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
						<!--End Loop-->
                    </div>
                </div>
            </div>
			<?php } ?>
			<!----endcondition---->
			
        </div>
        <!-- /.main content -->
    </div>
    <!-- /.container -->
</div>
<?php include "footer.php"; ?>
</div>
<!-- ./wrapper -->
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
            }, {
                extend: 'csv',
                title: 'Executive Supervisor Report',
                className: 'btn-sm'
            }, {
                extend: 'excel',
                title: 'Executive Supervisor Report',
                className: 'btn-sm'
            }, {
                extend: 'pdf',
                title: 'Executive Supervisor Report',
                className: 'btn-sm'
            }, {
                extend: 'print',
                className: 'btn-sm'
            }]
        });

    });
</script>
</body>

<!-- Mirrored from thememinister.com/bootstrap-admin-template/template/theme/adminpage_v1.0/dataTables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Aug 2018 05:44:38 GMT -->

</html>
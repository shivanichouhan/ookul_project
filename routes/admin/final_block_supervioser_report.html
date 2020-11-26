<?php include "header.php"; include "menu.php";  ?>
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
                    <h1>Block Supervisor Report</h1>
                    <small>Block Supervisor Report Weekly,Monthly,Yearly</a></small>
                   
                </div>
            </div>
            <!-- /. Content Header (Page header) -->
            
            <!-- /. Content Header (Page header) -->
			<?php if(@$_SESSION['report']=='1') {?>
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Block Supervisor Report</h4>
                            </div>
                        </div>


                        <!-- Search filter -->

                        <div class="panel-body">
                            <div class="col-md-12">
                                <form action="final_report.php" method="GET">
                                    <div class="col-md-3">
                                        <select class="form-control" id="exampleSelect1" name="block">
                                            <option value="">Block | Name</option>
                                            <option value="0">All</option>
                                            <?php $table='block' ; $rs=$obj->fetchAllDetailByStatus($table); if($rs) { $i=0; while($row=mysqli_fetch_assoc($rs)) { $i++; $blo=$obj->fetchById($row['id'],"subagent","block_id"); ?>

                                            <option value="<?php echo $row['id']; ?>">
                                                <?php echo $row[ 'block']; ?> |
                                                <?php echo $blo[ 'name']; ?>
                                            </option>
                                            <?php } } ?>
                                        </select>
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="sdate">
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="edate">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="submit" class="form-control" style="background-color: #9d09e9;">
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Block Supervisor Name</th>
                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
                                            
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php   @$bl=$_GET['id']; 
									$block=$bl;
										$table='subagent' ; 
										$rsp=$obj->fetchDetailByIdByStatus(1,"subagent","status","block_id",$bl);
										if($rsp) 
										{ $iy=0; while($rowp=mysqli_fetch_assoc($rsp)) 
											{ $iy++;  ?>
                                        <tr>
										<td><?php echo $iy; ?></td>
                                            <td><?php echo $rowp['name'];  ?></td>
                                            <td><?php echo $rowp['branch_name'];  ?></td>
                                            <td><?php echo $rowp['ifc_code'];  ?></td>
                                            <td><?php echo $rowp['account_holder_name'];  ?></td>
                                            <td><?php echo $rowp['account_number'];  ?></td>
                                            <td><?php 	
										
											$amountbl=$rowp['amount'];
											$total=0;								; 
														$rsp1=$obj->fetchDetailByIdByStatus(1,"user_register","status","block",$bl);
														if($rsp1) 
														{ $iy1=0; while($rowp1=mysqli_fetch_assoc($rsp1)) 
															{ $iy1++;
																$total=$total+1;
															}
														}
													echo $total;														
											?></td>
                                            <td><?php 
														$total1=0;								; 
														$rsp2=$obj->fetchDetailByIdByStatus(1,"user_register","status","block",$bl);
														if($rsp2) 
														{ $iy2=0;
														while($rowp2=mysqli_fetch_assoc($rsp2)) 
															{ $iy2++;
															if($rowp2['pro_id']){
															    
															}else{
																$total1=$total1+1; 
															}
															}
														}
														 $utttl=$amountbl*$total1;
																		$totala110=0;
                                	
                                 	$rstt10=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
												
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
													
											
														if($row10['pro_id']){
															   $id10=$row10['id'];
															
															$rs10=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															$totala110=$totala110+1;
														}
													}
														}else{
														    
														}
														}
													}
													
                                $totala10=0;
													$puu=$obj->fetchDetailByIdByStatus($block,"pro_register","block_id","status",1);
                                 	if($puu)
													{	$i=0;
														while($rowprooo=mysqli_fetch_assoc($puu))
														{	$i++;
                                  $pro_id=$rowprooo['pro_id'];
                                 
                                
												
										$rstt10=$obj->fetchDetailByIdByStatus($pro_id,"user_register","pro_id","pstatus",1);
													
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
															   $id10=$row10['id'];
													
															$rs10=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
												
										
													

													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															 
															$totala10=$totala10+1;
															
														}
													}
															
															
															
														
															
														}
													}
													
														}
													}
                                $tup=$obj->fetchById(1,"pro_price","type_user");	
										 $ttl_own_pro=$tup['price']*$totala110;
														$tup=$obj->fetchById(3,"pro_price","type_user");
														$tup['price'];
													
										  $pro_ttl=$tup['price']*$totala10;
                    							 $tttl_price=$row['amount']*$rowu;
                    							 	echo	$demo=$utttl+$pro_ttl+$ttl_own_pro;
														?>
                                            <td><?php 
														
														$total2=0;								; 
														$rsp3=$obj->fetchDetailByIdByStatus1110(1,"user_register","status","block",$bl,"payment_type",3);
														if($rsp3) 
														{ $iy3=0; while($rowp3=mysqli_fetch_assoc($rsp3)) 
															{ $iy3++;
																$total2=$total2+1;
															}
														}
														echo $total2;  
														?></td>
                                            <td><?php 
										
											$total3=0;								
														$rsp4=$obj->fetchDetailByIdByStatus1110(1,"user_register","status","block",$bl,"payment_type",1);
														if($rsp4) 
														{ $iy4=0; 
														while($rowp4=mysqli_fetch_assoc($rsp4)) 
															{ $iy4++;
																$total3=$total3+1;
															}
														}
														echo $total3;  
														?></td>
														<td><?php 
													
														$total4=0;								
														$rsp5=$obj->fetchDetailByIdByStatus1110(1,"user_register","status","block",$bl,"class",2);
														if($rsp5) 
														{ $iy5=0; 
															while($rowp5=mysqli_fetch_assoc($rsp5)) 
															{ $iy5++;
																$total4=$total4+1;
															}
														}
														echo $total4; 
																	?>
														</td>
                                           
                                            <td><?php 
													
														$total5=0;								
														$rsp6=$obj->fetchDetailByIdByStatus1110(1,"user_register","status","block",$bl,"class",1);
														if($rsp6) 
														{ $iy5=0; 
															while($rowp6=mysqli_fetch_assoc($rsp6)) 
															{ $iy5++;
																$total5=$total5+1;
															}
														}
														echo $total5; 
																	?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php } elseif(@$_SESSION['report']==0)
			{
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
                            <div class="col-md-12">
                             <form action="final_report.php" method="GET">
                                    <div class="col-md-3">
                                        <select class="form-control" id="exampleSelect1" name="block">
                                            <option value="">Block | Name</option>
                                            <option value="0">All</option>
                                            <?php $table='block' ; $rs=$obj->fetchAllDetailByStatus($table); if($rs) { $i=0; while($row=mysqli_fetch_assoc($rs)) { $i++; $blo=$obj->fetchById($row['id'],"subagent","block_id"); ?>

                                            <option value="<?php echo $row['id']; ?>">
                                                <?php echo $row[ 'block']; ?> |
                                                <?php echo $blo[ 'name']; ?>
                                            </option>
                                            <?php } } ?>
                                        </select>
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="sdate">
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="edate">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="submit" class="form-control" style="background-color: #9d09e9;">
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                            <th>Block Supervisor Name</th>
                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  //$id=$_GET[ 'id']; 
                                        $rs=$obj->fetchAllDetailByStatus_rrr("subagent");
                                        if($rs) { 
                                                    $i=0;
                                                    while($row=mysqli_fetch_assoc($rs))
                                                    { $i++; 
                                                        //$ct=$obj->fetchById($row['city_id'],"city","id");
                                                        //$block=$obj->fetchById($row['block_id'],"block","id"); ?>
                                        <tr>
                                            <td> <?php echo $i; ?></td>
                                            <td><?php echo $row['name']; ?></td>
                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?></td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
                                            <td><?php echo $row['account_number'];	?></td>
                                			<td><?php
                                			$block=$row['block_id'];
                                			$rs007=$obj->fetchDetailByIdByStatus($row['block_id'],"user_register","block","status",1);
                                					if($rs007)
                                					{
                                					echo mysqli_num_rows($rs007);	
                                						
                                					}
                                				else { echo 0; } ?></td>
                                			<td>
                                			    <?php 
                                			    $rowu=0;
                                			    $rs007=$obj->fetchDetailByIdByStatus($row['block_id'],"user_register","block","status",1);
                                				if($rs007)
                    							{	$p=0;
                    								while($row21=mysqli_fetch_assoc($rs007))
                    								{	$p++;
                    								if($row21['pro_id']){
                    								    
                    								}else{ 
													  $u=explode(",",$row21['id']);
														foreach($u as $uu =>$value)
														{
															 $rs00=$obj->fetchDetailByIdByStatus($u[$uu],"class_order","user_id","status",1);
															if($rs00)
															{	$p=0;
																while($row21=mysqli_fetch_assoc($rs00))
																{	$p++;
																	$rowu=$rowu+1;
																}
															}
	 //echo	$rowu;
														}
                    								}
                    								}
                    							}
                    								$totala110=0;
                                	
                                 	$rstt10=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
												
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
													
											
														if($row10['pro_id']){
															   $id10=$row10['id'];
															
															$rs10=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															$totala110=$totala110+1;
														}
													}
														}else{
														    
														}
														}
													}
													
                                $totala10=0;
													$puu=$obj->fetchDetailByIdByStatus($block,"pro_register","block_id","status",1);
                                 	if($puu)
													{	$i=0;
														while($rowprooo=mysqli_fetch_assoc($puu))
														{	$i++;
                                  $pro_id=$rowprooo['pro_id'];
                                 
                                
												
										$rstt10=$obj->fetchDetailByIdByStatus($pro_id,"user_register","pro_id","pstatus",1);
													
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
															   $id10=$row10['id'];
													
															$rs10=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
												
										
													

													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															 
															$totala10=$totala10+1;
															
														}
													}
															
															
															
														
															
														}
													}
													
														}
													}
                                $tup=$obj->fetchById(1,"pro_price","type_user");	
										 $ttl_own_pro=$tup['price']*$totala110;
														$tup=$obj->fetchById(3,"pro_price","type_user");
														$tup['price'];
													
										  $pro_ttl=$tup['price']*$totala10;
                    							 $tttl_price=$row['amount']*$rowu;
                    							echo	$demo=$tttl_price+$pro_ttl+$ttl_own_pro;
                    							?>
                                			</td>
                                            <td> <?php 
                                			    $row8=0;
                                			    $rs008=$obj->fetchDetailByIdByStatuscoupan0($row['block_id'],"user_register","block","status",1,"payment_type",3);
                                				if($rs008)
                    							{	$q=0;
                    								while($row201=mysqli_fetch_assoc($rs008))
                    								{	$q++;
                    								// $row21['id'];
													$row8=$row8+1;
                    								}
                    							}
                    							echo $row8;
                    							?></td>
                                            <td><?php 
                                			    $row9=0;
                                			    $rs009=$obj->fetchDetailByIdByStatuscoupan0($row['block_id'],"user_register","block","status",1,"payment_type",1);
                                				if($rs009)
                    							{	$r=0;
                    								while($row1=mysqli_fetch_assoc($rs009))
                    								{	$r++;
                    								// $row21['id'];
													$row9=$row9+1;
                    								}
                    							}
                    							echo $row9;
                    							?></td>
                                            
                                            <td><?php 
                                			    $row10=0;
                                			    $rs10=$obj->fetchDetailByIdByStatuscoupan0($row['block_id'],"user_register","block","status",1,"class",2);
                                				if($rs10)
                    							{	$r=0;
                    								while($row12=mysqli_fetch_assoc($rs10))
                    								{	$r++;
                    								// $row21['id'];
													$row10=$row10+1;
                    								}
                    							}
                    							echo $row10;
                    							?></td>
                                            <td><?php 
                                			    $row11=0;
                                			    $rs11=$obj->fetchDetailByIdByStatuscoupan0($row['block_id'],"user_register","block","status",1,"class",1);
                                				if($rs11)
                    							{	$r=0;
                    								while($row110=mysqli_fetch_assoc($rs11))
                    								{	$r++;
                    								// $row21['id'];
													$row11=$row11+1;
                    								}
                    							}
                    							echo $row11;
                    							?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
									<th>Total</th>
                                            <th><?php 
                                			    $row12=0;
												$aa=0;
                                			    $rs12=$obj->fetchDetailById(1,"subagent","status");
                                				if($rs12)
                    							{	$r=0;
                    								while($row112=mysqli_fetch_assoc($rs12))
                    								{	$r++;
                    								 $aa=$row112['amount'];
													$row12=$row12+1;
                    								}
                    							}
                    							echo $row12;
                    							?></th>
                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th><?php 
                                			    $row12=0;
                                			    $rs12=$obj->fetchDetailById(1,"user_register","status");
                                				if($rs12)
                    							{	$r=0;
                    								while($row112=mysqli_fetch_assoc($rs12))
                    								{	$r++;
                    								// $row21['id'];
													$row12=$row12+1;
                    								}
                    							}
                    							echo $row12;
                    							?></th>
                                            <th><?php 
                                			    $row13=0;
                                			    $rs13=$obj->fetchDetailById(1,"user_register","status");
                                				if($rs13)
                    							{	$s=0;
                    								while($row113=mysqli_fetch_assoc($rs13))
                    								{	$s++;
                    								// $row21['id'];
													$row13=$row13+1;
                    								}
                    							}
                    							echo $row13*$aa;
                    							?></th>
                                            <th><?php 
                                			    $row14=0;
                                			    $rs14=$obj->fetchDetailByIdByStatus(1,"user_register","status","payment_type",3);
                                				if($rs14)
                    							{	$t=0;
                    								while($row114=mysqli_fetch_assoc($rs14))
                    								{	$t++;
                    								// $row21['id'];
													$row14=$row14+1;
                    								}
                    							}
                    							echo $row14;
                    							?></th>
                                            <th><?php 
                                			    $row15=0;
                                			    $rs15=$obj->fetchDetailByIdByStatus(1,"user_register","status","payment_type",1);
                                				if($rs15)
                    							{	$v=0;
                    								while($row114=mysqli_fetch_assoc($rs15))
                    								{	$v++;
                    								// $row21['id'];
													$row15=$row15+1;
                    								}
                    							}
                    							echo $row15;
                    							?></th>
                                            <th><?php 
                                			    $row16=0;
                                			    $rs16=$obj->fetchDetailByIdByStatus(1,"user_register","status","class",2);
                                				if($rs16)
                    							{	$w=0;
                    								while($row116=mysqli_fetch_assoc($rs16))
                    								{	$w++;
                    								// $row21['id'];
													$row16=$row16+1;
                    								}
                    							}
                    							echo $row16;
                    							?></th>
                                            <th><?php 
                                			    $row17=0;
                                			    $rs17=$obj->fetchDetailByIdByStatus(1,"user_register","status","class",1);
                                				if($rs17)
                    							{	$x=0;
                    								while($row117=mysqli_fetch_assoc($rs17))
                    								{	$x++;
                    								// $row21['id'];
													$row17=$row17+1;
                    								}
                    							}
                    							echo $row17;
                    							?></th>
											
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php
			} elseif(@$_SESSION['report']=='2') {
				?>
				<div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Block Supervisor List</h4>
                            </div>
                        </div>


                        <!-- Search filter -->

                        <div class="panel-body">
                            <div class="col-md-12">
                                <form action="final_report.php" method="GET">
                                    <div class="col-md-3">
                                        <select class="form-control" id="exampleSelect1" name="block">
                                            <option value="">Block | Name</option>
                                            <option value="0">All</option>
                                            <?php $table='block' ; $rs=$obj->fetchAllDetailByStatus($table); if($rs) { $i=0; while($row=mysqli_fetch_assoc($rs)) { $i++; $blo=$obj->fetchById($row['id'],"subagent","block_id"); ?>

                                            <option value="<?php echo $row['id']; ?>">
                                                <?php echo $row[ 'block']; ?> |
                                                <?php echo $blo[ 'name']; ?>
                                            </option>
                                            <?php } } ?>
                                        </select>
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="sdate">
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="edate">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="submit" class="form-control" style="background-color: #9d09e9;">
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Block Supervisor Name</th>
                                            <th>District</th>
                                            <th>Block</th>
                                            <th>Branch Name</th>
                                            <th>IFC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
                                          
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  //$id=$_GET[ 'id']; 
                                        $rs=$obj->fetchAllDetailByStatus_rrr("subagent");
                                        if($rs) { 
                                                    $i=0;
                                                    while($row=mysqli_fetch_assoc($rs))
                                                    { $i++; 
                                                        $ct=$obj->fetchById($row['city_id'],"city","id");
                                                        $block1=$obj->fetchById($row['block_id'],"block","id"); 
                                                        $block=$row['block_id']; ?>
                                        <tr>
                                            <td> <?php echo $i;   ?></td>
                                            <td><?php echo $row['name']; ?></td>
											  <td><?php echo $ct['city']; ?></td>
											    <td><?php echo $block1['block']; ?></td>
                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?></td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
                                            <td><?php echo $row['account_number'];	?></td>
                                			<td><?php $rs007=$obj->fetchDetailByIdByStatus($row['block_id'],"user_register","block","status",1);
                                					if($rs007)
                                					{
                                					echo mysqli_num_rows($rs007);	
                                						
                                					}
                                				else { echo 0; } ?></td>
                                			<td>
                                			    <?php 
                                			    $rowu=0;
                                			    $rs007=$obj->fetchDetailByIdByStatus($row['block_id'],"user_register","block","status",1);
                                				if($rs007)
                    							{	$p=0;
                    								while($row21=mysqli_fetch_assoc($rs007))
                    								{	$p++;
                    								// $row21['id'];
                    								if($row21['pro_id']){
                    								}else{
													  $u=explode(",",$row21['id']);
														foreach($u as $uu =>$value)
														{
															 $rs00=$obj->fetchDetailByIdByStatus($u[$uu],"class_order","user_id","status",1);
															if($rs00)
															{	$p=0;
																while($row21=mysqli_fetch_assoc($rs00))
																{	$p++;
																	$rowu=$rowu+1;
																}
															}
	 //echo	$rowu;
														}
                    								}	
                    								}
                    							}
                    							$totala110=0;
                                	
                                 	$rstt10=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
												
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
													
											
														if($row10['pro_id']){
															   $id10=$row10['id'];
															
															$rs10=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															$totala110=$totala110+1;
														}
													}
														}else{
														    
														}
														}
													}
													
                                $totala10=0;
													$puu=$obj->fetchDetailByIdByStatus($block,"pro_register","block_id","status",1);
                                 	if($puu)
													{	$i=0;
														while($rowprooo=mysqli_fetch_assoc($puu))
														{	$i++;
                                  $pro_id=$rowprooo['pro_id'];
                                 
                                
												
										$rstt10=$obj->fetchDetailByIdByStatus($pro_id,"user_register","pro_id","pstatus",1);
													
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
															   $id10=$row10['id'];
													
															$rs10=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
												
										
													

													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															 
															$totala10=$totala10+1;
															
														}
													}
															
															
															
														
															
														}
													}
													
														}
													}
                                $tup=$obj->fetchById(1,"pro_price","type_user");	
										 $ttl_own_pro=$tup['price']*$totala110;
														$tup=$obj->fetchById(3,"pro_price","type_user");
														$tup['price'];
													
										  $pro_ttl=$tup['price']*$totala10;
									      $ttl=$row['amount']*$rowu;
                    					  echo	$demo=$ttl+$pro_ttl+$ttl_own_pro;
                    							?>
                                			</td>
                                            <td> <?php 
                                			    $row8=0;
                                			    $rs008=$obj->fetchDetailByIdByStatuscoupan0($row['block_id'],"user_register","block","status",1,"payment_type",3);
                                				if($rs008)
                    							{	$q=0;
                    								while($row201=mysqli_fetch_assoc($rs008))
                    								{	$q++;
                    								// $row21['id'];
													$row8=$row8+1;
                    								}
                    							}
                    							echo $row8;
                    							?></td>
                                            <td><?php 
                                			    $row9=0;
                                			    $rs009=$obj->fetchDetailByIdByStatuscoupan0($row['block_id'],"user_register","block","status",1,"payment_type",1);
                                				if($rs009)
                    							{	$r=0;
                    								while($row1=mysqli_fetch_assoc($rs009))
                    								{	$r++;
                    								// $row21['id'];
													$row9=$row9+1;
                    								}
                    							}
                    							echo $row9;
                    							?></td>
                                            
                                            <td><?php 
                                			    $row10=0;
                                			    $rs10=$obj->fetchDetailByIdByStatuscoupan0($row['block_id'],"user_register","block","status",1,"class",2);
                                				if($rs10)
                    							{	$r=0;
                    								while($row12=mysqli_fetch_assoc($rs10))
                    								{	$r++;
                    								// $row21['id'];
													$row10=$row10+1;
                    								}
                    							}
                    							echo $row10;
                    							?></td>
                                            <td><?php 
                                			    $row11=0;
                                			    $rs11=$obj->fetchDetailByIdByStatuscoupan0($row['block_id'],"user_register","block","status",1,"class",1);
                                				if($rs11)
                    							{	$r=0;
                    								while($row110=mysqli_fetch_assoc($rs11))
                    								{	$r++;
                    								// $row21['id'];
													$row11=$row11+1;
                    								}
                    							}
                    							echo $row11;
                    							?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
									<th>Total</th>
                                            <th><?php 
                                			    $row12=0;
												$aa=0;
                                			    $rs12=$obj->fetchDetailById(1,"subagent","status");
                                				if($rs12)
                    							{	$r=0;
                    								while($row112=mysqli_fetch_assoc($rs12))
                    								{	$r++;
                    								 $aa=$row112['amount'];
													$row12=$row12+1;
                    								}
                    							}
                    							echo $row12;
                    							?></th>
												<th>District</th>
												<th>Block</th>
                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th><?php 
                                			    $row12=0;
                                			    $rs12=$obj->fetchDetailById(1,"user_register","status");
                                				if($rs12)
                    							{	$r=0;
                    								while($row112=mysqli_fetch_assoc($rs12))
                    								{	$r++;
                    								// $row21['id'];
													$row12=$row12+1;
                    								}
                    							}
                    							echo $row12;
                    							?></th>
                                            <th><?php 
                                			    $row13=0;
                                			    $rs13=$obj->fetchDetailById(1,"user_register","status");
                                				if($rs13)
                    							{	$s=0;
                    								while($row113=mysqli_fetch_assoc($rs13))
                    								{	$s++;
                    								// $row21['id'];
													$row13=$row13+1;
                    								}
                    							}
                    							echo $row13*$aa;
                    							?></th>
                                            <th><?php 
                                			    $row14=0;
                                			    $rs14=$obj->fetchDetailByIdByStatus(1,"user_register","status","payment_type",3);
                                				if($rs14)
                    							{	$t=0;
                    								while($row114=mysqli_fetch_assoc($rs14))
                    								{	$t++;
                    								// $row21['id'];
													$row14=$row14+1;
                    								}
                    							}
                    							echo $row14;
                    							?></th>
                                            <th><?php 
                                			    $row15=0;
                                			    $rs15=$obj->fetchDetailByIdByStatus(1,"user_register","status","payment_type",1);
                                				if($rs15)
                    							{	$v=0;
                    								while($row114=mysqli_fetch_assoc($rs15))
                    								{	$v++;
                    								// $row21['id'];
													$row15=$row15+1;
                    								}
                    							}
                    							echo $row15;
                    							?></th>
                                            <th><?php 
                                			    $row16=0;
                                			    $rs16=$obj->fetchDetailByIdByStatus(1,"user_register","status","class",2);
                                				if($rs16)
                    							{	$w=0;
                    								while($row116=mysqli_fetch_assoc($rs16))
                    								{	$w++;
                    								// $row21['id'];
													$row16=$row16+1;
                    								}
                    							}
                    							echo $row16;
                    							?></th>
                                            <th><?php 
                                			    $row17=0;
                                			    $rs17=$obj->fetchDetailByIdByStatus(1,"user_register","status","class",1);
                                				if($rs17)
                    							{	$x=0;
                    								while($row117=mysqli_fetch_assoc($rs17))
                    								{	$x++;
                    								// $row21['id'];
													$row17=$row17+1;
                    								}
                    							}
                    							echo $row17;
                    							?></th>
											
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				<?php 
			}elseif(@$_SESSION['report']=='3')
			{
				?>
				<div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Block Supervisor List</h4>
                            </div>
                        </div>


                        <!-- Search filter -->

                        <div class="panel-body">
                            <div class="col-md-12">
                                <form action="final_report.php" method="GET">
                                    <div class="col-md-3">
                                        <select class="form-control" id="exampleSelect1" name="block">
                                            <option value="">Block | Name</option>
                                            <option value="0">All</option>
                                            <?php $table='block' ; $rs=$obj->fetchAllDetailByStatus($table); if($rs) { $i=0; while($row=mysqli_fetch_assoc($rs)) { $i++; $blo=$obj->fetchById($row['id'],"subagent","block_id"); ?>

                                            <option value="<?php echo $row['id']; ?>">
                                                <?php echo $row[ 'block']; ?> |
                                                <?php echo $blo[ 'name']; ?>
                                            </option>
                                            <?php } } ?>
                                        </select>
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="sdate">
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="edate">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="submit" class="form-control" style="background-color: #9d09e9;">
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Block Supervisor Name</th>
                                            <!--<th>District</th>
                                            <th>Block</th>-->
                                            <th>Branch Name</th>
                                            <th>IFC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
                                          
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                        </tr>
                                    </thead>
                                    <tbody><?php 
									//$tu=0;
									@$sdate=$_GET['sdate'];
									$t=0;
												$ab=$obj->fetchAllDetailByStatus("block");
												if($ab)
														{	$a=0;
															while($rowab=mysqli_fetch_assoc($ab))
															{	$a++;
																$de=$obj->fetchDetailByIdByStatus($rowab['id'],"subagent","block_id","status",1);
																if($de)
																		{	
																			while($rowde=mysqli_fetch_assoc($de))
																			{	
														$amount=$rowde['amount'];
														$t=$t+1;
														
														
																
											?>			
											<tr>
                                            <td> <?php echo $t;  ?></td>
                                            <td><?php echo $rowde['name']; ?></td>
											<!--<td><?php echo $ct['city']; ?></td>
											<td><?php echo $block['block']; ?></td>-->
                                            <td><?php echo $rowde['branch_name']; ?></td>
                                            <td><?php echo $rowde['ifc_code']; ?></td>
                                            <td><?php echo $rowde['account_holder_name']; ?></td>
                                            <td><?php echo $rowde['account_number'];	?></td>
                                			<td><?php 
														$bc=$obj->fetchDetailByIdByStatusDate00($rowde['block_id'],"user_register","block","status",1,"payment_success_date",$sdate);
																if($bc)
																		{	$tu=0;
																			while($rowbc=mysqli_fetch_assoc($bc))
																			{	
																				$tu=$tu+1;
																			}
																		}
																		echo $tu; ?>
											</td>
                                			<td><?php 	$cd=$obj->fetchDetailByIdByStatusDate00($rowde['block_id'],"user_register","block","status",1,"payment_success_date",$sdate);
																if($cd)
																		{	$tv=0;
																			while($rowcd=mysqli_fetch_assoc($cd))
																			{	
																				$tv=$tv+1;
																			}
																		}
																		echo $tv*$amount; ?></td>
                                            <td><?php 	$tw=0;
                                            $ef=$obj->fetchDetailByIdByStatusDatecou($rowde['block_id'],"user_register","block","status",1,"payment_success_date",$sdate,"payment_type",3);
																if($ef)
																		{	
																			while($rowef=mysqli_fetch_assoc($ef))
																			{	
																				$tw=$tw+1;
																			}
																		}
																		echo $tw; ?> </td>
                                            <td><?php 	$gh=$obj->fetchDetailByIdByStatusDatecou($rowde['block_id'],"user_register","block","status",1,"payment_success_date",$sdate,"payment_type",1);
																if($gh)
																		{	$tx=0;
																			while($rowgh=mysqli_fetch_assoc($gh))
																			{	
																				$tx=$tx+1;
																			}
																		}
																		echo $tx; ?> </td>
                                            <td><?php 	$gi=$obj->fetchDetailByIdByStatusDatecou($rowde['block_id'],"user_register","block","status",1,"payment_success_date",$sdate,"class",2);
																if($gi)
																		{	$ty=0;
																			while($rowgi=mysqli_fetch_assoc($gi))
																			{	
																				$ty=$ty+1;
																			}
																		}
																		echo $ty; ?></td>
                                            <td><?php 	$kl=$obj->fetchDetailByIdByStatusDatecou($rowde['block_id'],"user_register","block","status",1,"payment_success_date",$sdate,"class",1);
																if($kl)
																		{	$tz=0;
																			while($rowkl=mysqli_fetch_assoc($kl))
																			{	
																				$tz=$tz+1;
																			}
																		}
																		echo $tz; ?></td>
                                        </tr>
										<?php
											}
											
										}
									}
											
								} ?>					
																	
									
                                       
                                       
                                    </tbody>
									
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php  } elseif(@$_SESSION['report']=='4')
			{
				?>
				<div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Block Supervisor List</h4>
                            </div>
                        </div>


                        <!-- Search filter -->

                        <div class="panel-body">
                            <div class="col-md-12">
                                <form action="final_report.php" method="GET">
                                    <div class="col-md-3">
                                        <select class="form-control" id="exampleSelect1" name="block">
                                            <option value="">Block | Name</option>
                                            <option value="0">All</option>
                                            <?php $table='block' ; $rs=$obj->fetchAllDetailByStatus($table); if($rs) { $i=0; while($row=mysqli_fetch_assoc($rs)) { $i++; $blo=$obj->fetchById($row['id'],"subagent","block_id"); ?>

                                            <option value="<?php echo $row['id']; ?>">
                                                <?php echo $row[ 'block']; ?> |
                                                <?php echo $blo[ 'name']; ?>
                                            </option>
                                            <?php } } ?>
                                        </select>
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="sdate">
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="edate">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="submit" class="form-control" style="background-color: #9d09e9;">
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Block Supervisor Name</th>
                                            <th>Branch Name</th>
                                            <th>IFC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
                                          
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
									//$tu=0;
									 
									 //$_SESSION['report'];
									 @$sdate=$_GET['sdate'];
									 @$edate=$_GET['edate'];
									 @$table="user_register";
									$t1=0;
									$ab1=$obj->fetchAllDetailByStatus("block");
									if($ab1)
									{	$a1=0;
										while($rowab1=mysqli_fetch_assoc($ab1))
										{	$a1++;
											$de1=$obj->fetchDetailByIdByStatus($rowab1['id'],"subagent","block_id","status",1);
											if($de1)
											{	
												while($rowde1=mysqli_fetch_assoc($de1))
												{	
													$amount1=$rowde1['amount'];
													$t1=$t1+1;
														
														
																
											?>			
											<tr>
                                            <td> <?php echo $t1;  ?></td>
                                            <td><?php echo $rowde1['name']; ?></td>
											<!--<td><?php //echo $ct['city']; ?></td>
											<td><?php //echo $rowde1['block']; ?></td>-->
                                            <td><?php echo $rowde1['branch_name']; ?></td>
                                            <td><?php echo $rowde1['ifc_code']; ?></td>
                                            <td><?php echo $rowde1['account_holder_name']; ?></td>
                                            <td><?php echo $rowde1['account_number'];	?></td>
                                			<td><?php 
											$block1=$rowde1['block_id'];
											$tu1=0;
											$abb=$obj->fetchtodateblock858585858($table,$block1);
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
												echo $tu1;
								?>
											</td>
                                			<td><?php 
                                				$block=$rowde1['block_id'];
												$tu11=0;
											$abb1=$obj->fetchtodateblock858585858($table,$block);
												if($abb1)
												{	$aa=0;
													while($rowabb1=mysqli_fetch_assoc($abb1))
													{	$aa++;
													if($rowabb1['pro_id']){
													    
													}else{
														if(strtotime($rowabb1['payment_success_date'])<=strtotime($edate))
        												 {
            												if(strtotime($sdate)<=strtotime($rowabb1['payment_success_date']))
            												{ 
            												  
            												     
            														 $tu11=$tu11+1;
            												}
													    }
													}
													}
												}
												$totala110=0;
                                	
                                 	$rstt10=$obj->fetchtodateblock858585858($table,$block);
												
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
													if(strtotime($row10['payment_success_date'])<=strtotime($edate))
        												 {
            												if(strtotime($sdate)<=strtotime($row10['payment_success_date']))
            												{ 
											
														if($row10['pro_id']){
															   $id10=$row10['id'];
															
															$rs10=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															$totala110=$totala110+1;
														}
													}
														}
														}
        												     
        												 }else{
														    
														}
														}
													}
													
                                $totala10=0;
													$puu=$obj->fetchDetailByIdByStatus($block,"pro_register","block_id","status",1);
                                 	if($puu)
													{	$i=0;
														while($rowprooo=mysqli_fetch_assoc($puu))
														{	$i++;
                                  $pro_id=$rowprooo['pro_id'];
                                 
                                
												
										$rstt10=$obj->fetchDetailByIdByStatus($pro_id,"user_register","pro_id","pstatus",1);
													
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
														if(strtotime($row10['payment_success_date'])<=strtotime($edate))
        												 {
            												if(strtotime($sdate)<=strtotime($row10['payment_success_date']))
            												{ 
															   $id10=$row10['id'];
													
															$rs10=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
												
										
													

													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															 
															$totala10=$totala10+1;
															
														}
													}
            												} }	
															
															
														
															
														}
													}
													
														}
													}
                                $tup=$obj->fetchById(1,"pro_price","type_user");	
										 $ttl_own_pro=$tup['price']*$totala110;
														$tup=$obj->fetchById(3,"pro_price","type_user");
														$tup['price'];
													
										  $pro_ttl=$tup['price']*$totala10;
									
											
												 $ttl=$tu11*$amount1;
												echo	$demo=$ttl+$pro_ttl+$ttl_own_pro;
											?></td>
                                            <td><?php 
											
											$tw1=0;
											$rsp42=$obj->fetchtodateblockclass("user_register",$block1,3,"payment_type");
        												if($rsp42)
        												{	$s2=0;
        													while($rowsk=mysqli_fetch_assoc($rsp42))
        													{	$s2++;
        														if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
        														{
        															if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
        															{ 
        																$tw1=$tw1+1;
        															}
        														}
        													}
        												}
									echo $tw1;
								?></td>
                                            <td><?php $tx1=0;
														$rsp43=$obj->fetchtodateblockclass("user_register",$block1,1,"payment_type");
												if($rsp43)
												{	$s3=0;
													while($rowsk=mysqli_fetch_assoc($rsp43))
													{	$s3++;
														if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
														{
															if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
															{ 
																$tx1=$tx1+1;
															}
														}
													}
												}
												
echo $tx1;													
												?> 
											</td>
                                            <td><?php 
													$ty1=0;
												//	$abb4=$obj->fetchtodateclass10($table,$sdate,$edate,$block1);
															$abb4=$obj->fetchtodateblockclass("user_register",$block1,2,"class");
        												if($abb4)
        												{	$s4=0;
        													while($rowsk=mysqli_fetch_assoc($abb4))
        													{	$s4++;
        														if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
        														{
        															if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
        																{ 
        																	$ty1=$ty1+1;
        																}
        														}
        													}
        												}
echo $ty1;
											?></td>
                                            <td><?php $tx1=0;
												//	$abb5=$obj->fetchtodateclass9($table,$sdate,$edate,$block1);
														$abb5=$obj->fetchtodateblockclass("user_register",$block1,1,"class");
												if($abb5)
												{	$s5=0;
													while($rowsk=mysqli_fetch_assoc($abb5))
													{	$s5++;
        												 if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
        												 {
            												if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
            												{ 
            												  
            												     
            														 $tx1=$tx1+1;
            												}
													    }
													}
												}
	echo $tx1;														?></td>
                                        </tr>
										<?php
											}
											
										}
									}
									
								} ?>					
																	
									
                                       
                                       
                                    </tbody>
									
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				
			<?php } if(@$_SESSION['report']=='5') {
			?>
			<div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Block Supervisor Report</h4>
                            </div>
                        </div>


                        <!-- Search filter -->

                        <div class="panel-body">
                            <div class="col-md-12">
                                <form action="final_report.php" method="GET">
                                    <div class="col-md-3">
                                        <select class="form-control" id="exampleSelect1" name="block">
                                            <option value="">Block | Name</option>
                                            <option value="0">All</option>
                                            <?php $table='block' ; $rs=$obj->fetchAllDetailByStatus($table); if($rs) { $i=0; while($row=mysqli_fetch_assoc($rs)) { $i++; $blo=$obj->fetchById($row['id'],"subagent","block_id"); ?>

                                            <option value="<?php echo $row['id']; ?>">
                                                <?php echo $row[ 'block']; ?> |
                                                <?php echo $blo[ 'name']; ?>
                                            </option>
                                            <?php } } ?>
                                        </select>
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="sdate">
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="edate">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="submit" class="form-control" style="background-color: #9d09e9;">
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Block Supervisor Name</th>
                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
                                            
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php   @$bl1=$_GET['id']; 
												@$sdate1=$_GET['sdate'];
									
										$table='subagent' ; 
										$rsq=$obj->fetchDetailByIdByStatus(1,"subagent","status","block_id",$bl1);
										if($rsq) 
										{ $uu=0; while($rowq=mysqli_fetch_assoc($rsq)) 
											{ $uu++;  ?>
                                        <tr>
										<td><?php echo $uu; ?></td>
                                            <td><?php echo $rowq['name'];  ?></td>
                                            <td><?php echo $rowq['branch_name'];  ?></td>
                                            <td><?php echo $rowq['ifc_code'];  ?></td>
                                            <td><?php echo $rowq['account_holder_name'];  ?></td>
                                            <td><?php echo $rowq['account_number'];  ?></td>
                                            <td><?php 	
										
											$amo1=$rowq['amount'];
											$tot=0;								; 
														$rsq1=$obj->fetchDetailByIdByStatusByDate0029(1,"user_register","status","block",$bl1,"register_date",$sdate1);
														if($rsq1) 
														{ $uu1=0; while($rowq1=mysqli_fetch_assoc($rsq1)) 
															{ $uu1++;
																$tot=$tot+1;
															}
														}
													echo $tot;														
											?></td>
                                            <td><?php 
														$tot1=0;								; 
														$rsq2=$obj->fetchDetailByIdByStatusByDate0029(1,"user_register","status","block",$bl1,"register_date",$sdate1);
														if($rsq2) 
														{ $uu8=0; while($rowp2=mysqli_fetch_assoc($rsq2)) 
															{ $uu8++;
																if($rowp2['pro_id']){
																}else{
																$tot1=$tot1+1;
																}
															    
															}
														}
														 $ttl=$amo1*$tot1;
														$totala110=0;
                                	
                                 	$rstt10=$obj->fetchDetailByIdByStatusByDate0029(1,"user_register","status","block",$bl1,"register_date",$sdate1);;
												
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
													
											
														if($row10['pro_id']){
															   $id10=$row10['id'];
															
															$rs10=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															$totala110=$totala110+1;
														}
													}
														}else{
														    
														}
														}
													}
													
                                $totala10=0;
													$puu=$obj->fetchDetailByIdByStatus($block,"pro_register","block_id","status",1);
                                 	if($puu)
													{	$i=0;
														while($rowprooo=mysqli_fetch_assoc($puu))
														{	$i++;
                                  $pro_id=$rowprooo['pro_id'];
                                 
                                
												
										$rstt10=$obj->fetchDetailByIdByStatusByDate0029(1,"user_register","pstatus","pro_id",$pro_id,"register_date",$sdate1);
													
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
															   $id10=$row10['id'];
													
															$rs10=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
												
										
													

													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															 
															$totala10=$totala10+1;
															
														}
													}
															
															
															
														
															
														}
													}
													
														}
													}
                                $tup=$obj->fetchById(1,"pro_price","type_user");	
										 $ttl_own_pro=$tup['price']*$totala110;
														$tup=$obj->fetchById(3,"pro_price","type_user");
														$tup['price'];
													
										  $pro_ttl=$tup['price']*$totala10;
										  	echo	$demo=$ttl+$pro_ttl+$ttl_own_pro;
														?>
                                            <td><?php 
														
														$tot2=0;								; 
														$rsq3=$obj->fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl1,"register_date",$sdate1,"payment_type",3);
														if($rsq3) 
														{ $uu2=0; while($rowp3=mysqli_fetch_assoc($rsq3)) 
															{ $uu2++;
																$tot2=$tot2+1;
															}
														}
														echo $tot2;  
														?></td>
                                            <td><?php 
														
														$tot3=0;								; 
														$rsq4=$obj->fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl1,"register_date",$sdate1,"payment_type",1);
														if($rsq4) 
														{ $uu2=0; while($rowp4=mysqli_fetch_assoc($rsq4)) 
															{ $uu2++;
																$tot3=$tot3+1;
															}
														}
														echo $tot3;  
														?></td>
											<td><?php 
														
														$tot4=0;								; 
														$rsq5=$obj->fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl1,"register_date",$sdate1,"class",2);
														if($rsq5) 
														{ $uu3=0; while($rowp5=mysqli_fetch_assoc($rsq5)) 
															{ $uu3++;
																$tot4=$tot4+1;
															}
														}
														echo $tot4;  
														?></td>
                                            <td><?php 
														
														$tot5=0;								; 
														$rsq6=$obj->fetchDetailByIdByStatusByDatecoupan(1,"user_register","status","block",$bl1,"register_date",$sdate1,"class",1);
														if($rsq6) 
														{ $uu4=0; while($rowp6=mysqli_fetch_assoc($rsq6)) 
															{ $uu4++;
																$tot5=$tot5+1;
															}
														}
														echo $tot5;  
														?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php } if(@$_SESSION['report']=='6') { ?>
<div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Block Supervisor Report</h4>
                            </div>
                        </div>


                        <!-- Search filter -->

                        <div class="panel-body">
                            <div class="col-md-12">
                                <form action="final_report.php" method="GET">
                                    <div class="col-md-3">
                                        <select class="form-control" id="exampleSelect1" name="block">
                                            <option value="">Block | Name</option>
                                            <option value="0">All</option>
                                            <?php $table='block' ; $rs=$obj->fetchAllDetailByStatus($table); if($rs) { $i=0; while($row=mysqli_fetch_assoc($rs)) { $i++; $blo=$obj->fetchById($row['id'],"subagent","block_id"); ?>

                                            <option value="<?php echo $row['id']; ?>">
                                                <?php echo $row[ 'block']; ?> |
                                                <?php echo $blo[ 'name']; ?>
                                            </option>
                                            <?php } } ?>
                                        </select>
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="sdate">
                                    </div>
									<div class="col-md-3">
                                        <input type="date" class="form-control" name="edate">
                                    </div>
                                    <div class="col-md-3">
                                        <input type="submit" class="form-control" style="background-color: #9d09e9;">
                                    </div>
                                </form>
                            </div>
                        </div>


                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Block Supervisor Name</th>
                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Coupan User</th>
                                            <th>Total Online User</th>
                                            
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  @$bl1=$_GET['id']; 
											   @$sdate1=$_GET['sdate'];
											   @$edate1=$_GET['edate'];
												
									
										$table='subagent' ; 
										$rsq=$obj->fetchDetailByIdByStatus(1,"subagent","status","block_id",$bl1);
										if($rsq) 
										{ $uu=0; while($rowq=mysqli_fetch_assoc($rsq)) 
											{ $uu++;  ?>
                                        <tr>
										<td><?php echo $uu; ?></td>
                                            <td><?php echo $rowq['name'];  ?></td>
                                            <td><?php echo $rowq['branch_name'];  ?></td>
                                            <td><?php echo $rowq['ifc_code'];  ?></td>
                                            <td><?php echo $rowq['account_holder_name'];  ?></td>
                                            <td><?php echo $rowq['account_number'];  ?></td>
                                            <td><?php 	
										
											$amo1=$rowq['amount'];
											$bloc=$rowq['block_id'];
											$block=$rowq['block_id'];
											$table1='user_register';
											$ss555=0;
											$sk=$obj->fetchtodateblock858585858($table1,$bloc);
												if($sk)
												{	$s=0;
													while($rowsk=mysqli_fetch_assoc($sk))
													{	$s++;
        												 if(strtotime($rowsk['payment_success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($rowsk['payment_success_date']))
            												{ 
            					                                 $ss555=$ss555+1;
            												}
													    }
													}
												}
												echo $ss555;												
											?></td>
                                            <td><?php 
                                            $ss5551=0;
											$sk1=$obj->fetchtodateblock858585858($table1,$bloc);
												if($sk1)
												{	$s=0;
													while($rowsk=mysqli_fetch_assoc($sk1))
													{	$s++;
													if($rowsk['pro_id']){
													    
													}else{
        												 if(strtotime($rowsk['payment_success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($rowsk['payment_success_date']))
            												{ 
            					                                 $ss5551=$ss5551+1;
            												}
													    }
													}
													}
												}
													$totala110=0;
                                	
                                 	$rstt10=$obj->fetchtodateblock858585858($table1,$bloc);
												
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
													
											
														if($row10['pro_id']){
														    	 if(strtotime($row10['payment_success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($row10['payment_success_date']))
            												{
															   $id10=$row10['id'];
															
															$rs10=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															$totala110=$totala110+1;
														}
													}
            												}
        												     
        												 }
														}else{
														    
														}
														}
													}
													
                                $totala10=0;
													$puu=$obj->fetchDetailByIdByStatus($block,"pro_register","block_id","status",1);
                                 	if($puu)
													{	$i=0;
														while($rowprooo=mysqli_fetch_assoc($puu))
														{	$i++;
                                  $pro_id=$rowprooo['pro_id'];
                                 
                                
												
										$rstt10=$obj->fetchDetailByIdByStatus($pro_id,"user_register","pro_id","pstatus",1);
													
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
															 if(strtotime($row10['payment_success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($row10['payment_success_date']))
            												{
															   $id10=$row10['id'];
													
															$rs10=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
												
										
													

													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															 
															$totala10=$totala10+1;
															
														}
													}
            												}}	
															
															
														
															
														}
													}
													
														}
													}
                                $tup=$obj->fetchById(1,"pro_price","type_user");	
										 $ttl_own_pro=$tup['price']*$totala110;
														$tup=$obj->fetchById(3,"pro_price","type_user");
														$tup['price'];
													
										  $pro_ttl=$tup['price']*$totala10;
								
                                             $ttl=$ss5551*$amo1;
                                             	echo	$demo=$ttl+$pro_ttl+$ttl_own_pro;?>
                                            <td><?php 
													$ss2=0;
											$sk2=$obj->fetchtodateblockclass($table1,$bloc,3,"payment_type");
												if($sk2)
												{	$s2=0;
													while($rowsk=mysqli_fetch_assoc($sk2))
													{	$s2++;
												 if(strtotime($rowsk['payment_success_date'])<=strtotime($_GET['edate'])){
												if(strtotime($_GET['sdate'])<=strtotime($rowsk['payment_success_date']))
												{ 
												  
												     
														 $ss2=$ss2+1;
												}
													}
													}
												}
												echo $ss2;
											?></td>
                                            <td><?php $ss3=0;
											$sk3=$obj->fetchtodateblockclass($table1,$bloc,1,"payment_type");
												if($sk3)
												{	$s3=0;
													while($rowsk=mysqli_fetch_assoc($sk3))
													{	$s3++;
												 if(strtotime($rowsk['payment_success_date'])<=strtotime($_GET['edate'])){
												if(strtotime($_GET['sdate'])<=strtotime($rowsk['payment_success_date']))
												{ 
												  
												     
														 $ss3=$ss3+1;
												}
													}
													}
												}
												echo $ss3; ?></td>
											<td><?php
													$ss4=0;
											$sk4=$obj->fetchtodateblockclass($table1,$bloc,2,"class");
												if($sk4)
												{	$s4=0;
													while($rowsk=mysqli_fetch_assoc($sk4))
													{	$s4++;
												 if(strtotime($rowsk['payment_success_date'])<=strtotime($_GET['edate'])){
												if(strtotime($_GET['sdate'])<=strtotime($rowsk['payment_success_date']))
												{ 
												  
												     
														 $ss4=$ss4+1;
												}
													}
													}
												}
												echo $ss4;
												?></td>
                                            <td><?php
												$ss5=0;
											$sk5=$obj->fetchtodateblockclass($table1,$bloc,1,"class");
												if($sk5)
												{	$s5=0;
													while($rowsk=mysqli_fetch_assoc($sk5))
													{	$s5++;
												 if(strtotime($rowsk['payment_success_date'])<=strtotime($_GET['edate'])){
												if(strtotime($_GET['sdate'])<=strtotime($rowsk['payment_success_date']))
												{ 
												  
												     
														 $ss5=$ss5+1;
												}
													}
													}
												}
												echo $ss5;
											?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			<?php } else {} ?>
        </div>
        <!-- /.main content -->
    </div>
    <!-- /.container -->
</div>
<!-- /.content-wrapper -->
<!-- start footer -->
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
                title: 'Block Supervisor Report',
                className: 'btn-sm'
            }, {
                extend: 'excel',
                title: 'Block Supervisor Report',
                className: 'btn-sm'
            }, {
                extend: 'pdf',
                title: 'Block Supervisor Report',
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
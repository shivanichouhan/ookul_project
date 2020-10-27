<?php include"header.php";
include"menu.php"; 
$iii=$obj->fetchById($_GET['id'],"referal_agent","id");
?>
            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                               <i class="fa fa-file" aria-hidden="true"></i>
                            </div>
                            <div class="header-title">
                                <h1> Relactionship Manager -  Report ( <?php echo $iii['username'];  ?> )</h1>
                                <small>View detailed & featured admin.</small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">Executive Supervisor Report</li>
                                </ol>
                            </div>
                        </div>  <!-- /.Content Header (Page header) -->
                        <div class="row">
						<div class="header-title">
                                <h1 style="text-align: center;"> Total Report</h1>
								</div>
                            <div class="col-xs-4">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php
									$i=0;
	
  $executive_id=$iii['executive_id'];
 $u=explode(",",$executive_id);
foreach($u as $uu =>$value)
	{
		$aa=$obj->fetchById($value,"agent","id");
		 $id=$aa['id'];
		 $block_supervisor_id=$aa['block_supervisor_id'];
		 $u4=explode(",",$block_supervisor_id);
			foreach($u4 as $uu4 =>$value4)
				{
					$user=$obj->fetchById($value4,"subagent","id");
					$us=$user['id'];
					 $block=$user['block_id'];
				
					$rsu=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
					//print_r($rsu);
					//echo "</br>";
					if($rsu)
					{	
						while($row21=mysqli_fetch_assoc($rsu))
						{	$i++;
							
															
						}
					}
				}
	}

echo	$i;
									
			 ?></span> <span class="slight"><!--<i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span>--></h2>
                                    <div class="small">Total User</div>
                                   <i class="hvr-buzz-out pe-7s-add-user" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
								  
                                  <!--  <div class="sparkline1 text-center"></div>-->
                                </div> <!-- /. statistic box -->
                            </div>
                            <div class="col-xs-4">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php
						$totalaa=0;
	
  $executive_id=$iii['executive_id'];
    $amount=$iii['amount'];
 $u=explode(",",$executive_id);
foreach($u as $uu =>$value)
	{
		$aa=$obj->fetchById($value,"agent","id");
		 $id=$aa['id'];
		 $block_supervisor_id=$aa['block_supervisor_id'];
		 $u4=explode(",",$block_supervisor_id);
			foreach($u4 as $uu4 =>$value4)
				{
					$user=$obj->fetchById($value4,"subagent","id");
					$us=$user['id'];
					 $block=$user['block_id'];
				
					$rs=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
													//fetchDetailByIdByStatususer
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															$id=$row['id'];
															
															$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
										
													

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

	
echo $totalaa*$amount;	

						
					
			 ?></span> <span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span>--> </h2>
                                    <div class="small">Total Amount</div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            
                            
                        </div>
						<!----------This Month---------------------->
                        <div class="row">
						<div class="header-title">
                                <h1 style="text-align: center;"> This Month Report</h1>
								</div>
                            <div class="col-xs-4"  >
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1" style="    background-color: #352c2c;
    border-color: #352c2c;
    color: #fff;">
                                    <h2><span class="count-number"><?php
					$count=0;
  $executive_id=$iii['executive_id'];
 $u=explode(",",$executive_id);
foreach($u as $uu =>$value)
	{
		$aa=$obj->fetchById($value,"agent","id");
		 $id=$aa['id'];
		 $block_supervisor_id=$aa['block_supervisor_id'];
		 $u4=explode(",",$block_supervisor_id);
			foreach($u4 as $uu4 =>$value4)
				{
					$user=$obj->fetchById($value4,"subagent","id");
					$us=$user['id'];
					 $block=$user['block_id'];
					$rstt15=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
							//fetchDetailByIdByStatususer
							if($rstt15)
							{	
								while($row16=mysqli_fetch_assoc($rstt15))
								{	
									$id16=$row16['id'];
								//	$register_date16=$row16['register_date'];
								//	$dddd1=explode("-",$register_date16);
								
								
								$payment_success_date16=$row16['payment_success_date'];
									$dddd1=explode("-",$payment_success_date16);
								
									 $yy2=$dddd1['1'];
									$date=date("Y-m-d");
									$dd=explode("-",$date);
									 $yy1=$dd['1'];
									if($yy2==$yy1)
									{ 
								$count=$count+1;
										
									
									}
									else 
									{
										
									}														
								}
							}
				}
	}
	
echo $count;	
						

			 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span></h2>
                                    <div class="small">This month Total user </div>
                                  <i class="fa fa-user" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                  <!--  <div class="sparkline1 text-center"></div>-->
                                </div> <!-- /. statistic box -->
                            </div>
                            <div class="col-xs-4">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2" style="    background: #3bd9d9;
    border-color: #3bd9d9;
    color: #fff;">
                                    <h2><span class="count-number"><?php
				
	echo $count*$amount;
			 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">This month Total Amount</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                                                    </div>
						<!----Last Month -->
						
						<div class="row">
						<div class="header-title">
                                <h1 style="text-align: center;"> Last Month Report</h1>
								</div>
                            <div class="col-xs-4"  >
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1" >
                                    <h2><span class="count-number"><?php 

$tot48=0;
  $executive_id=$iii['executive_id'];
 $u=explode(",",$executive_id);
foreach($u as $uu =>$value)
	{
		$aa=$obj->fetchById($value,"agent","id");
		 $id=$aa['id'];
		 $block_supervisor_id=$aa['block_supervisor_id'];
		 $u4=explode(",",$block_supervisor_id);
			foreach($u4 as $uu4 =>$value4)
				{
					$user=$obj->fetchById($value4,"subagent","id");
					$us=$user['id'];
					  $block=$user['block_id'];
					
						$rstt48=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
																		//fetchDetailByIdByStatususer
						if($rstt48)
							{	$i=0;
								while($row48=mysqli_fetch_assoc($rstt48))
								{	$i++;
									   $id48=$row48['id'];
									
								//	  $register_date48=$row48['register_date'];
                                //    	$month48=explode("-",$register_date48);
                                    	
                                    	
                                    	 $payment_success_date48=$row48['payment_success_date'];
                                    	$month48=explode("-",$payment_success_date48);
                                    	
									 $m48=$month48['1'];
								
								
							
									$date=date("Y-m-d");
									$lm48=explode("-",$date);
									 $lm49=$lm48['1'];
									 
									  $last48=$lm49-1;
									if($last48=='0')
									{
							
									$last49=12;
									}else
									{
									$last49=$last48;
									}
										if($m48==$last49)
										{
											$rs18=$obj->fetchDetailByIdByStatus($id48,"class_order","user_id","status",1);
																		//fetchDetailByIdByStatususer
												if($rs18)
												{	$i=0;
													while($row118=mysqli_fetch_assoc($rs18))
													{	$i++;
														//$tot48=$tot48+$row118['price'];
														$tot48=$tot48+1;
																									
													}
												}
																				
										}	
										else
										{
											
										}											
																				
								}
							}
					

				}
	}
	
echo  $tot48;	?>
			 </span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span></h2>
                                    <div class="small">Last month Total user </div>
                                  <i class="fa fa-user" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                  <!--  <div class="sparkline1 text-center"></div>-->
                                </div> <!-- /. statistic box -->
                            </div>
                            <div class="col-xs-4">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php
	
	
echo  $tot48*$amount;	
				
				
						 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">Last month Total Amount</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            
                        </div>
						<!----Number Of Block Supervisor--->
						
						<div class="row">
						<div class="header-title">
                                <h1 style="text-align: center;"> Number of Executive Supervisor</h1>
								</div>
                            <div class="col-xs-4"  >
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1" style=" background-color: #352c2c;
    border-color: #352c2c;
    color: #fff;"">
                                    <h2><span class="count-number"><?php 						  
						  $i=0;
					 $executive_id=$iii['executive_id'];
					 $u4=explode(",",$executive_id);
			foreach($u4 as $uu4 =>$value4)
				{
							$i=$i+1;		}	
echo $i; 	

		
					
	?>
			 </span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span></h2>
                                    <div class="small"> </div>
                                  <i class="fa fa-user" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                  <!--  <div class="sparkline1 text-center"></div>-->
                                </div> <!-- /. statistic box -->
                            </div>
                            
                                <!-- statistic box -->
                                
                            
                        </div>
						
						
						
						
						
                            <!-- Chat -->
                        
                        </div> <!-- /.row -->
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
       <?php  include("footer.php"); ?>
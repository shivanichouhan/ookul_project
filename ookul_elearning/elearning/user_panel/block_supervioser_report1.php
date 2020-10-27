<?php include"header.php";
include"menu.php"; 
$iii=$obj->fetchById($_GET['id'],"subagent","id");
 $block=$iii['block_id'];
 $amount=$iii['amount'];
 
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
                                <h1>Block Supervioser -  Report ( <?php echo $iii['name'];  ?> )</h1>
                                <small>View detailed & featured admin.</small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">Block Supervioser Report</li>
                                </ol>
                            </div>
                        </div>  <!-- /.Content Header (Page header) -->
                        <div class="row">
						<div class="header-title">
                                <h1 style="text-align: center;"> Total Report</h1>
								</div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php
					$rowu=0;
					$rsu=$obj->fetchDetailByIdByStatus($block,"user_register","block","status",1);
					if($rsu)
					{
				$rowu=mysqli_num_rows($rsu);
			echo	$rowu;
					}
			 ?></span> <span class="slight"><!--<i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span>--></h2>
                                    <div class="small">Total User</div>
                                   <i class="hvr-buzz-out pe-7s-add-user" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
								  
                                  <!--  <div class="sparkline1 text-center"></div>-->
                                </div> <!-- /. statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php
						
													$totalaa=0;
										$rs=$obj->fetchDetailByIdByStatus($block,"user_register","block","status",1);
													//fetchDetailByIdByStatususer
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															 $id=$row['id'];
															
															$rs21=$obj->fetchDetailById($id,"class_order","user_id");
													//fetchDetailByIdByStatususer
										
													

													if($rs21)
													{	$i=0;
														while($row21=mysqli_fetch_assoc($rs21))
														{	$i++;
															 $totalaa=$totalaa+$row21['price'];
															
														}
													}
															
															
															
														
															
														}
													}
													
										echo $totalaa;	
										
										
										
					
			 ?></span> <span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span>--> </h2>
                                    <div class="small">Total Amount</div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php
						$totalac=0;
										$rstt=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","class",1,"status",1);
													//fetchDetailByIdByStatususer
													if($rstt)
													{	$i=0;
														while($row54=mysqli_fetch_assoc($rstt))
														{	$i++;
															   $id11=$row54['id'];
													
															$rs25=$obj->fetchDetailById($id11,"class_order","user_id");
													//fetchDetailByIdByStatususer
										
													

													if($rs25)
													{	$i=0;
														while($row25=mysqli_fetch_assoc($rs25))
														{	$i++;
															 $totalac=$totalac+$row25['price'];
															
														}
													}
															
															
															
														
															
														}
													}
													
										echo $totalac;	
										
										
										
					
															?>				
				
			</span> <span class="slight"><!--<i class="fa fa-play fa-rotate-270 text-warning"> </i> +29%</span>--></h2>
                                    <div class="small">Total user For 9 th Class</div>
									 <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
									
                                    <!--<i class="ti-world statistic_icon"></i>-->
                                   <!-- <div class="sparkline3 text-center"></div>-->
                                </div> <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number"><?php
						$totala10=0;
										$rstt10=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","class",2,"status",1);
													//fetchDetailByIdByStatususer
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
															   $id10=$row10['id'];
													
															$rs10=$obj->fetchDetailById($id10,"class_order","user_id");
													//fetchDetailByIdByStatususer
										
													

													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															 $totala10=$totala10+$row110['price'];
															
														}
													}
															
															
															
														
															
														}
													}
													
										echo $totala10;	
										
										
										
					
			 ?></span><span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span>--></h2>
                                    <div class="small">Total user For 10 th Class</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							 <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php
						$totalapa=0;
	$rsttpa=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","payment_type",3,"status",1);
				//fetchDetailByIdByStatususer
				
	if($rsttpa)
		{	$i=0;
			while($rowpa=mysqli_fetch_assoc($rsttpa))
			{	$i++;
					$idpa=$rowpa['id'];							
					$rspa=$obj->fetchDetailById($idpa,"class_order","user_id");
				if($rspa)
				{	$i=0;
					while($row1pa=mysqli_fetch_assoc($rspa))
					{	$i++;
						$totalapa=$totalapa+$row1pa['price'];
					}
				}
															
			}
		}
echo $totalapa;					
					
			 ?></span><span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span>--></h2>
                                    <div class="small">Total Amount For Coupan</div>
                                    <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							 <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php
						$totalao=0;
	$rstto=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","payment_type",1,"status",1);
				//fetchDetailByIdByStatususer
				
	if($rstto)
		{	$i=0;
			while($rowo=mysqli_fetch_assoc($rstto))
			{	$i++;
					$ido=$rowo['id'];							
					$rso=$obj->fetchDetailById($ido,"class_order","user_id");
				if($rso)
				{	$i=0;
					while($rowoo=mysqli_fetch_assoc($rso))
					{	$i++;
						$totalao=$totalao+$rowoo['price'];
					}
				}
															
			}
		}
echo $totalao;					
										
										
					
			 ?></span><span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span>--></h2>
                                    <div class="small">Total Amount For Online</div>
                                    <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
                        </div>
						<!----------This Month---------------------->
                        <div class="row">
						<div class="header-title">
                                <h1 style="text-align: center;"> This Month Report</h1>
								</div>
                            <div class="col-xs-2"  >
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1" style="    background-color: #352c2c;
    border-color: #352c2c;
    color: #fff;">
                                    <h2><span class="count-number"><?php
					
					$rowu41=0;
$rstt15=$obj->fetchDetailByIdByStatus($block,"user_register","block","status",1);
//fetchDetailByIdByStatususer
if($rstt15)
{	$i=0;
while($row16=mysqli_fetch_assoc($rstt15))
{	$i++;
  $id16=$row16['id'];
 $register_date16=$row16['register_date'];
 $dddd1=explode("-",$register_date16);
$yy2=$dddd1['1'];
	$date=date("Y-m-d");
$dd=explode("-",$date);
$yy1=$dd['1'];
if($yy2=$yy1)
{
		
					$rsu11=$obj->fetchDetailById($id10,"class_order","user_id");
					if($rsu11)
					{
				$rowu41=mysqli_num_rows($rsu11);
		
					}
		
}
else {
	echo"0";
}														
}
}
	echo	$rowu41;
			 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span></h2>
                                    <div class="small">This month Total user </div>
                                  <i class="fa fa-user" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                  <!--  <div class="sparkline1 text-center"></div>-->
                                </div> <!-- /. statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2" style="    background: #3bd9d9;
    border-color: #3bd9d9;
    color: #fff;">
                                    <h2><span class="count-number"><?php
					
				$tot2=0;
	$rstt15=$obj->fetchDetailByIdByStatus($block,"user_register","block","status",1);
													//fetchDetailByIdByStatususer
	if($rstt15)
		{	$i=0;
			while($row16=mysqli_fetch_assoc($rstt15))
			{	$i++;
				 $id16=$row16['id'];
				
				 $register_date16=$row16['register_date'];
			
				$dddd1=explode("-",$register_date16);
				 $yy2=$dddd1['1'];
			
				$date=date("Y-m-d");
				$dd=explode("-",$date);
				 $yy1=$dd['1'];
					if($yy2==$yy1)
					{
						$rs18=$obj->fetchDetailById($id16,"class_order","user_id");
													//fetchDetailByIdByStatususer
							if($rs18)
							{	$i=0;
								while($row118=mysqli_fetch_assoc($rs18))
								{	$i++;
									$tot2=$tot2+$row118['price'];
															
								}
							}
															
					}	
					else
					{
						
					}											
															
			}
		}
	echo $tot2;
					
	
			 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">This month Total Amount</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3" style="background: #621513;  border-color: #621513; color: #fff;">
                                    <h2><span class="count-number"><?php
					
				$tot21=0;
	$rstt22=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","class",1,"status",1);
													//fetchDetailByIdByStatususer
	if($rstt22)
		{	$i=0;
			while($row22=mysqli_fetch_assoc($rstt22))
			{	$i++;
				 $id22=$row22['id'];
				
				  $register_date22=$row22['register_date'];
				
				$dddd22=explode("-",$register_date22);
				 $yy22=$dddd22['1'];
			
				$date=date("Y-m-d");
				$dd22=explode("-",$date);
				 $yy122=$dd22['1'];
					if($yy22==$yy122)
					{
						$rs22=$obj->fetchDetailById($id22,"class_order","user_id");
													//fetchDetailByIdByStatususer
							if($rs22)
							{	$i=0;
								while($row1122=mysqli_fetch_assoc($rs22))
								{	$i++;
									$tot21=$tot21+$row1122['price'];
															
								}
							}
															
					}	
					else
					{
						
					}											
															
			}
		}
	echo $tot21;
										
								
			 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> </span></h2>
                                    <div class="small">This month Total Amount For Class 9 th</div>
									 <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<i class="ti-world statistic_icon"></i>-->
                                   <!-- <div class="sparkline3 text-center"></div>-->
                                </div> <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4" style="background: #132de5; border-color: #132de5;  color: #fff;">
                                    <h2><span class="count-number"><?php
					
					$tot31=0;
	$rstt33=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","class",2,"status",1);
													//fetchDetailByIdByStatususer
	if($rstt33)
		{	$i=0;
			while($row33=mysqli_fetch_assoc($rstt33))
			{	$i++;
				 $id33=$row33['id'];
				
				  $register_date33=$row33['register_date'];
				
				$dddd33=explode("-",$register_date33);
				 $yy33=$dddd33['1'];
			
				$date=date("Y-m-d");
				$dd33=explode("-",$date);
				 $yy133=$dd33['1'];
					if($yy33==$yy133)
					{
						$rs33=$obj->fetchDetailById($id33,"class_order","user_id");
													//fetchDetailByIdByStatususer
							if($rs33)
							{	$i=0;
								while($row1133=mysqli_fetch_assoc($rs33))
								{	$i++;
									$tot31=$tot31+$row1133['price'];
															
								}
							}
															
					}	
					else
					{
						
					}											
															
			}
		}
	echo $tot31;
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	This month Total Amount For Class 10 th</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							<!--2-------->
							
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4" style="    background-color: #352c2c;
    border-color: #352c2c;
    color: #fff;">
                                    <h2><span class="count-number"><?php
					
										$tot31=0;
	$rstt33=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","payment_type",3,"status",1);
													//fetchDetailByIdByStatususer
	if($rstt33)
		{	$i=0;
			while($row33=mysqli_fetch_assoc($rstt33))
			{	$i++;
				 $id33=$row33['id'];
				
				  $register_date33=$row33['register_date'];
				
				$dddd33=explode("-",$register_date33);
				 $yy33=$dddd33['1'];
			
				$date=date("Y-m-d");
				$dd33=explode("-",$date);
				 $yy133=$dd33['1'];
					if($yy33==$yy133)
					{
						$rs33=$obj->fetchDetailById($id33,"class_order","user_id");
													//fetchDetailByIdByStatususer
							if($rs33)
							{	$i=0;
								while($row1133=mysqli_fetch_assoc($rs33))
								{	$i++;
									$tot31=$tot31+$row1133['price'];
															
								}
							}
															
					}	
					else
					{
						
					}											
															
			}
		}
	echo $tot31;
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	This month Total Coupan Amount</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4" style="background: #3bd9d9; border-color: #3bd9d9;  color: #fff;">
                                    <h2><span class="count-number"><?php
					
				$tot31=0;
	$rstt33=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","payment_type",1,"status",1);
													//fetchDetailByIdByStatususer
	if($rstt33)
		{	$i=0;
			while($row33=mysqli_fetch_assoc($rstt33))
			{	$i++;
				 $id33=$row33['id'];
				
				  $register_date33=$row33['register_date'];
				
				$dddd33=explode("-",$register_date33);
				 $yy33=$dddd33['1'];
			
				$date=date("Y-m-d");
				$dd33=explode("-",$date);
				 $yy133=$dd33['1'];
					if($yy33==$yy133)
					{
						$rs33=$obj->fetchDetailById($id33,"class_order","user_id");
													//fetchDetailByIdByStatususer
							if($rs33)
							{	$i=0;
								while($row1133=mysqli_fetch_assoc($rs33))
								{	$i++;
									$tot31=$tot31+$row1133['price'];
															
								}
							}
															
					}	
					else
					{
						
					}											
															
			}
		}
	echo $tot31;
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	This month Total Online Amount</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
                        </div>
						<!----Last Month -->
						
						<div class="row">
						<div class="header-title">
                                <h1 style="text-align: center;"> Last Month Report</h1>
								</div>
                            <div class="col-xs-2"  >
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1" >
                                    <h2><span class="count-number"><?php
					$rowu42=0;
$rstt25=$obj->fetchDetailByIdByStatus($block,"user_register","block","status",1);
//fetchDetailByIdByStatususer
if($rstt25)
{	$i=0;
	while($row26=mysqli_fetch_assoc($rstt25))
	{	$i++;
		  $id26=$row26['id'];
		  $register_date26=$row26['register_date'];
		 $d26=explode("-",$register_date26);
		 
		  $m26=$d26['1'];
			$date=date("d-m-y");
		$dd26=explode("-",$date);
		 $mm26=$dd26['1'];
		 $last=$mm26-1;
			if($last=='0')
			{
		
				$last7=12;
			}else{
				$last7=$last;
			}
			 
				if($m26==$last7)
							{
					
					
								$rsu26=$obj->fetchDetailById($id26,"class_order","user_id");
								if($rsu26)
								{
									$rowu42=mysqli_num_rows($rsu26);
					
								}
					
							}
						else 
							{
								echo"";
							}	
				
				
											
	}
}
		echo	$rowu42;

			 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span></h2>
                                    <div class="small">Last month Total user </div>
                                  <i class="fa fa-user" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                  <!--  <div class="sparkline1 text-center"></div>-->
                                </div> <!-- /. statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php
			$tot48=0;
	$rstt48=$obj->fetchDetailByIdByStatus($block,"user_register","block","status",1);
													//fetchDetailByIdByStatususer
	if($rstt48)
		{	$i=0;
			while($row48=mysqli_fetch_assoc($rstt48))
			{	$i++;
				  $id48=$row48['id'];
				
				  $register_date48=$row48['register_date'];
			
				$month48=explode("-",$register_date48);
				 $m48=$month48['1'];
			
			
		
				$date=date("Y-m-d");
				$lm48=explode("-",$date);
				 $lm49=$lm48['1'];
				 
				  $last48=$lm49-1;
			if($last48=='0')
			{
		
				$last49=12;
			}else{
				$last49=$last48;
			}
			 
				 
				 
					if($m48==$last49)
					{
						$rs18=$obj->fetchDetailById($id48,"class_order","user_id");
													//fetchDetailByIdByStatususer
							if($rs18)
							{	$i=0;
								while($row118=mysqli_fetch_assoc($rs18))
								{	$i++;
									$tot48=$tot48+$row118['price'];
															
								}
							}
															
					}	
					else
					{
						
					}											
															
			}
		}
	echo $tot48;
									 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">This month Total Amount</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3" >
                                    <h2><span class="count-number"><?php
					$tot09=0;
	$rstt09=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","status",1,"class",1);
													//fetchDetailByIdByStatususer
	if($rstt09)
		{	$i=0;
			while($row09=mysqli_fetch_assoc($rstt09))
			{	$i++;
				  $id09=$row09['id'];
				
				  $register_date09=$row09['register_date'];
			
				$month90=explode("-",$register_date09);
				 $m09=$month90['1'];
			
			
		
				$date=date("Y-m-d");
				$lm09=explode("-",$date);
				 $lm90=$lm09['1'];
				 
				  $last09=$lm90-1;
			if($last09=='0')
			{
		
				$last90=12;
			}else{
				$last90=$last09;
			}
			 
				 
				 
					if($m09==$last90)
					{
						$rs09=$obj->fetchDetailById($id09,"class_order","user_id");
													//fetchDetailByIdByStatususer
							if($rs09)
							{	$i=0;
								while($row009=mysqli_fetch_assoc($rs09))
								{	$i++;
									$tot09=$tot09+$row009['price'];
															
								}
							}
															
					}	
					else
					{
						
					}											
															
			}
		}
	echo $tot09;
						
				
			 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> </span></h2>
                                    <div class="small">This month Total Amount For Class 9 th</div>
									 <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<i class="ti-world statistic_icon"></i>-->
                                   <!-- <div class="sparkline3 text-center"></div>-->
                                </div> <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number"><?php
				$tot02=0;
	$rstt02=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","status",1,"class",2);
													//fetchDetailByIdByStatususer
	if($rstt02)
		{	$i=0;
			while($row02=mysqli_fetch_assoc($rstt02))
			{	$i++;
				  $id02=$row02['id'];
				
				  $register_date02=$row02['register_date'];
			
				$month20=explode("-",$register_date02);
				 $m02=$month20['1'];
			
			
		
				$date=date("Y-m-d");
				$lm02=explode("-",$date);
				 $lm20=$lm02['1'];
				 
				  $last02=$lm20-1;
			if($last02=='0')
			{
		
				$last20=12;
			}else{
				$last20=$last02;
			}
			 
				 
				 
					if($m02==$last20)
					{
						$rs02=$obj->fetchDetailById($id02,"class_order","user_id");
													//fetchDetailByIdByStatususer
							if($rs02)
							{	$i=0;
								while($row002=mysqli_fetch_assoc($rs02))
								{	$i++;
									$tot02=$tot02+$row002['price'];
															
								}
							}
															
					}	
					else
					{
						
					}											
															
			}
		}
	echo $tot02;
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	Last month Total Amount For Class 10 th</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							<!--2-------->
							
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1" >
                                    <h2><span class="count-number"><?php
					$payment=0;
	$payme00=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","status",1,"payment_type",3);
													//fetchDetailByIdByStatususer
	if($payme00)
		{	$i=0;
			while($pay00=mysqli_fetch_assoc($payme00))
			{	$i++;
				  $idpay=$pay00['id'];
				
				  $register_datepay=$pay00['register_date'];
			
				$month_pay=explode("-",$register_datepay);
				 $mpay=$month_pay['1'];
			
			
		
				$date=date("Y-m-d");
				$lmpay=explode("-",$date);
				 $lmpay00=$lmpay['1'];
				 
				  $last_pay=$lmpay00-1;
			if($last_pay=='0')
			{
		
				$last_pay00=12;
			}else{
				$last_pay00=$last_pay;
			}
			 
				 
				 
					if($mpay==$last_pay00)
					{
						$rspay=$obj->fetchDetailById($idpay,"class_order","user_id");
													//fetchDetailByIdByStatususer
							if($rspay)
							{	$i=0;
								while($rowpay=mysqli_fetch_assoc($rspay))
								{	$i++;
									$payment=$payment+$rowpay['price'];
															
								}
							}
															
					}	
					else
					{
						
					}											
															
			}
		}
	echo $payment;
					
									
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	Last month Total Coupan Amount</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2" >
                                    <h2><span class="count-number"><?php
					
	$payment09=0;
	$payme0=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","status",1,"payment_type",1);
													//fetchDetailByIdByStatususer
	if($payme0)
		{	$i=0;
			while($pay0=mysqli_fetch_assoc($payme0))
			{	$i++;
				  $idpay0=$pay0['id'];
				
				  $register_datepay0=$pay0['register_date'];
			
				$month_pay0=explode("-",$register_datepay0);
				 $mpay0=$month_pay0['1'];
			
			
		
				$date=date("Y-m-d");
				$lmpay0=explode("-",$date);
				 $lmpay05=$lmpay0['1'];
				 
				  $last_pay0=$lmpay05-1;
			if($last_pay0=='0')
			{
		
				$last_pay03=12;
			}else{
				$last_pay03=$last_pay0;
			}
			 
				 
				 
					if($mpay0==$last_pay03)
					{
						$rspay0=$obj->fetchDetailById($idpay0,"class_order","user_id");
													//fetchDetailByIdByStatususer
							if($rspay0)
							{	$i=0;
								while($rowpay0=mysqli_fetch_assoc($rspay0))
								{	$i++;
									$payment09=$payment09+$rowpay0['price'];
															
								}
							}
															
					}	
					else
					{
						
					}											
															
			}
		}
	echo $payment09;
				
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	Last month Total Online Amount</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
                        </div>
						
						
						
						
						
						
                            <!-- Chat -->
                        
                        </div> <!-- /.row -->
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
       <?php  include("footer.php"); ?>
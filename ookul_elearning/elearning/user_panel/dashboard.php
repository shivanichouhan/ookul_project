<?php include"header.php";
include"menu.php"; ?>     

<div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-date"></i>
                            </div>
                            <div class="header-title">
                               <center> <h1>Dashboard - Report</h1>
                                <small>Total</small></center>
                               
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php
					$user=0;
					$gover=0;
					$rs=$obj->fetchDetailById(1,"user_register","pstatus");
					if($rs)
					{
					$user= mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
				$rs=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
					if($rs)
					{
					$gover= mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
				$user1=0;
				$gover1=0;
					$rs=$obj->fetchDetailById(0,"user_register","pstatus");
					if($rs)
					{
					$user1= mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
					$rs=$obj->fetchDetailById(0,"user_register_goverment","pstatus");
					if($rs)
					{
					$gover1= mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
				echo $user+$gover+$user1+$gover1;
			 ?></span></h2>
                                    <div class="small">Total number of student  </div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline3 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php
					
					$rs=$obj->fetchAllDetailByIdByStatus(1,"user_register","class",1,"pstatus");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span> </h2>
                                    <div class="small">Total number of student class 9th</div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php
					
					$rs=$obj->fetchAllDetailByIdByStatus(1,"user_register","class",2,"pstatus");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span> </h2>
                                    <div class="small">Total number of student class 10th</div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline2 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php
					
					$rs=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span></h2>
                                    <div class="small">Total number of Goverment Student  </div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline3 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number"><?php
					
			echo	$user1;
			 ?></span></h2>
                                    <div class="small">Number of free access user</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-4" style="background: #9c27b0;
    border-color: #9c27b0;
    color: #fff;">
                                    <h2><span class="count-number"><?php
					
			echo	$gover1;
			 ?></span></h2>
                                    <div class="small">Number of E-Goverment Free Access </div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div>
                            </div>
                         </div>
                          <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-1 outline">
                                    <h2><span class="count-number"><?php
					
					$rs=$obj->fetchAllDetailByStatus("parent");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span></h2>
                                    <div class="small">Number of parents </div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline5 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-2 outline">
                                    <h2><span class="count-number"> <?php
                                    $ppu=0;
					$rs=$obj->fetchAllDetailByStatus("asign_coupan");
						if($rs)
						{	$i=0;
							while($row=mysqli_fetch_assoc($rs))
							{	$i++;
								$u=explode(",",$row['coupan']);
								foreach($u as $uu =>$value)
								{
									if($u[$uu]=='on')
									{ 
									
									}
									else
									{
										$ppu=$ppu+1;
									}
								}
									
								
							}
						}
						echo $ppu;
								
			 ?></span> </h2>
                                    <div class="small">Total number coupne assigned</div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline6 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3 outline">
                                    <h2><span class="count-number"><?php 
							$pp=0;
					$rs=$obj->fetchAllDetailByStatus("asign_coupan");
						if($rs)
						{	$i=0;
							while($row=mysqli_fetch_assoc($rs))
							{	$i++;
								$u=explode(",",$row['coupan']);
								foreach($u as $uu =>$value)
								{
								 $code12=$obj->fetchDetailByIdByStatus($u[$uu],"coupan_class","id","status",1);
									
									if($code12)
									{	$ii=0;
										while($row1=mysqli_fetch_assoc($code12))
										{	$ii++;
											$pp=$pp+1;
										}
									}
								}
							}
									
								
						}
						
						echo $pp; ?></span></h2>
                                    <div class="small">Total Used coupne</div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline7 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-4 outline">
                                    <h2><span class="count-number"><?php 	$pp1=0;
					$rs=$obj->fetchAllDetailByStatus("asign_coupan");
						if($rs)
						{	$i=0;
							while($row=mysqli_fetch_assoc($rs))
							{	$i++;
								$u=explode(",",$row['coupan']);
								foreach($u as $uu =>$value)
								{
								 $code12=$obj->fetchDetailByIdByStatus($u[$uu],"coupan_class","id","status",0);
									
									if($code12)
									{	$ii=0;
										while($row1=mysqli_fetch_assoc($code12))
										{	$ii++;
											$pp1=$pp1+1;
										}
									}
								}
							}
									
								
						}
						
						echo $pp1;  ?></span></h2>
                                    <div class="small">Total Unused coupne</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline8 text-center"></div>
                                </div>
                            </div>
                        </div>
						<!---Block------->
						<div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php
					
					$rs=$obj->fetchAllDetailByStatus("subagent");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span> </h2>
                                    <div class="small">Number Of Block Supervisor</div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php
					
					$rs=$obj->fetchAllDetailByStatus("agent");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span> </h2>
                                    <div class="small">	Number Of Executive Supervisor	</div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline2 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php
					
					$rs=$obj->fetchAllDetailByStatus("referal_agent");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span></h2>
                                    <div class="small">Number Of Relactionship   </div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline3 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number"><?php
					
					$rs=$obj->fetchAllDetailByStatus("super_admin");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span></h2>
                                    <div class="small">Number of Employee</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-1 outline">
                                    <h2><span class="count-number"><?php
					
					$rs=$obj->fetchAllDetailByStatus("city");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span></h2>
                                    <div class="small">Number of District </div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline5 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-2 outline">
                                    <h2><span class="count-number"> <?php
                                    $rs=$obj->fetchAllDetailByStatus("block");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span> </h2>
                                    <div class="small">Number of block</div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline6 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3 outline">
                                    <h2><span class="count-number"><?php
                                    $cls=0;
                                    $rs=$obj->fetchAllDetailByStatus("class");
					if($rs)
					{
					$cls= mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			echo	$cls=$cls+1;
			 ?></span></h2>
                                    <div class="small">Class</div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline7 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-4 outline">
                                    <h2><span class="count-number"><?php
                                    $rs=$obj->fetchAllDetailByStatus("subject");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span></h2>
                                    <div class="small">Subject</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline8 text-center"></div>
                                </div>
                            </div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php
									 $rs=$obj->fetchAllDetailByStatus("chapter");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span> </h2>
                                    <div class="small">chapter</div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div>
                            </div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php
									$rs=$obj->fetchAllDetailByStatus("topic");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span> </h2>
                                    <div class="small">Topic</div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div>
                            </div>
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php $rs=$obj->fetchAllDetail("contact_us");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span> </h2>
                                    <div class="small">Contact Us</div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div>
                            </div>
							
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php $rs=$obj->fetchAllDetail("ask_question");
					if($rs)
					{
					echo mysqli_num_rows($rs);	
						
					}
				else { echo 0; }
			 ?></span> </h2>
                                    <div class="small">Ask Me</div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div>
                            </div>
							

                        </div>
						
						
						
						
						<!----End - Block------->
                    </div> <!-- /.main content -->
					<!---This --->
					 <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-title">
                                <center><h1>This Month Report </h1><center>
                                <small>Total</small>
                               
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                             <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php
					
				
					$row41=0;
$rstt15=$obj->fetchDetailById(1,"user_register","pstatus");
//fetchDetailByIdByStatususer
if($rstt15)
{	$i=0;
while($row16=mysqli_fetch_assoc($rstt15))
{	$i++;
  $id16=$row16['id'];
 $register_date16=$row16['payment_success_date'];
 $dddd1=explode("-",$register_date16);
 $yy2=$dddd1['1'];
	$date=date("Y-m-d");
$dd=explode("-",$date);
 $yy1=$dd['1'];
			if($yy2==$yy1)
					{
					
					 	$row41=$row41+1;					
		
															
					}	
					else
					{
						
					}														
}
}
//-----------------------------
		
					$row501=0;
$rstt51=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
//fetchDetailByIdByStatususer
if($rstt51)
{	$i=0;
while($row51=mysqli_fetch_assoc($rstt51))
{	$i++;
  $id15=$row51['id'];
 $register_date15=$row51['success_date'];
 $dddd15=explode("-",$register_date15);
 $yy25=$dddd15['1'];
	$date=date("Y-m-d");
$dd=explode("-",$date);
 $yy15=$dd['1'];
			if($yy25==$yy15)
					{
				
					$row501=$row501+1;					
					
															
					}	
					else
					{
						
					}														
}
}

//-----------------unpaid----------------
		$row61=0;
$rstt61=$obj->fetchDetailById(0,"user_register","pstatus");
//fetchDetailByIdByStatususer
if($rstt61)
{	$i=0;
while($row17=mysqli_fetch_assoc($rstt61))
{	$i++;
  $id16=$row17['id'];
 $register_date17=$row17['register_date'];
 $dddd17=explode("-",$register_date17);
 $yy27=$dddd17['1'];
	$date=date("Y-m-d");
$dd7=explode("-",$date);
 $yy17=$dd7['1'];
			if($yy27==$yy17)
					{
					$row61=$row61+1;					
											
					}	
					else
					{
						
					}														
}
}
//----govr-------
	$row71=0;
$rstt71=$obj->fetchDetailById(0,"user_register_goverment","pstatus");
//fetchDetailByIdByStatususer
if($rstt71)
{	$i=0;
while($row177=mysqli_fetch_assoc($rstt71))
{	$i++;
  $id16=$row177['id'];
 $register_date177=$row177['register_date'];
 $dddd177=explode("-",$register_date177);
 $yy277=$dddd177['1'];
	$date=date("Y-m-d");
$dd77=explode("-",$date);
 $yy177=$dd77['1'];
			if($yy277==$yy177)
					{
				
					    $row71=$row71+1;	
															
					}	
					else
					{
						
					}														
}
}

	echo $row41+$row501+$row61+$row71;
	//$row41+$row501+$row61+$row71; 
			 ?></span></h2>
                                    <div class="small">Total Number of student  </div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline3 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php
					
				$rowu4001=0;
$rstt15020=$obj->fetchDetailByIdByStatus(1,"user_register","class","pstatus",1);
//fetchDetailByIdByStatususer
if($rstt15020)
{	$i=0;
while($row1620=mysqli_fetch_assoc($rstt15020))
{	$i++;
  $id1620=$row1620['id'];
 $register_date1620=$row1620['payment_success_date'];
 $dddd12=explode("-",$register_date1620);
$yy260=$dddd12['1'];
	$date44=date("Y-m-d");
$dd02=explode("-",$date44);
$yy1200=$dd02['1'];
			if($yy260==$yy1200)
					{
						$rowu4001=$rowu4001+1;						
											
					}	
					else
					{
						
					}														
}
}
	echo $rowu4001;
			 ?></span> </h2>
                                    <div class="small">This Month Total student class 9th</div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php 
                                    $rowu041=0;
$rstt15000=$obj->fetchDetailByIdByStatus(2,"user_register","class","pstatus",1);
//fetchDetailByIdByStatususer
if($rstt15000)
{	$i=0;
while($row1600=mysqli_fetch_assoc($rstt15000))
{	$i++;
  $id106=$row1600['id'];
 $register_date1600=$row1600['payment_success_date'];
 $dddd10=explode("-",$register_date1600);
$yy200=$dddd10['1'];
	$date=date("Y-m-d");
$dd00=explode("-",$date);
$yy100=$dd00['1'];
			if($yy200==$yy100)
					{
						
						$rowu041=$rowu041+1;						
													
					}	
					else
					{
						
					}														
}
}
	echo $rowu041; ?></span> </h2>
                                    <div class="small">This Month Total student class 10th</div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline2 text-center"></div>
                                </div>
                            </div>
                             <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php	echo	$row501;?></span></h2>
                                    <div class="small">Number of E-Goverment user</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number"><?php echo $row61; ?></span></h2>
                                    <div class="small">Number of free access user</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div>
                            </div>
                              <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-4" style="background: #9c27b0;
    border-color: #9c27b0;
    color: #fff;">
                                    <h2><span class="count-number"><?php echo $row71; ?></span></h2>
                                    <div class="small">Number of E-Goverment free access user</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-1 outline">
                                    <h2><span class="count-number"><?php 
$topp=0;			
$rs=$obj->fetchDetailById(1,"parent","status");
if($rs)
{	$i=0;
while($row16=mysqli_fetch_assoc($rs))
{	$i++;
	  $date2=$row16['date'];
 $d1=explode("-",$date2);
	   $y2=$d1['1']; 
	//echo"</br>";
	$date=date("Y-m-d");
	$dd=explode("-",$date);
$y1=$dd['1'];
	if($y2==$y1)
	{
		$topp=$topp+1;
	}
}
}
echo $topp;
			
			 ?></span></h2>
                                    <div class="small">This Month Number of parents </div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline5 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-2 outline">
                                    <h2><span class="count-number"> <?php
                                   $p6=0;
					$rs=$obj->fetchAllDetailByStatus("asign_coupan");
						if($rs)
						{	$i=0;
							while($row=mysqli_fetch_assoc($rs))
							{	$i++;
								$u=explode(",",$row['coupan']);
								foreach($u as $uu =>$value)
								{
									//echo $u[$uu];
									  $date2=$row['asign_date'];
									
									 $d1=explode("-",$date2);
									   $y5=$d1['1']; 
									//echo"</br>";
									$date=date("Y-m-d");
									$dd=explode("-",$date);
								$y6=$dd['1'];
									if($y5==$y6)
									{
										if($u[$uu]=='on')
										{ 
										
										}
										else
										{
											$p6=$p6+1;
										}
									}
								}
									
								
							}
						}
						echo $p6;
			 ?></span> </h2>
                                    <div class="small">This Month coupne assigned</div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline6 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3 outline">
                                    <h2><span class="count-number"><?php 
									$p7=0;
$rs=$obj->fetchAllDetailByStatus("asign_coupan");
if($rs)
{	$i=0;
	while($row=mysqli_fetch_assoc($rs))
	{	$i++;
		$u=explode(",",$row['coupan']);
		foreach($u as $uu =>$value)
		{
			 $code12=$obj->fetchDetailByIdByStatus($u[$uu],"coupan_class","id","status",1);
				if($code12)
				{	$ii=0;
					while($row1=mysqli_fetch_assoc($code12))
					{	$ii++;
						$date2=$row['asign_date'];
						$d1=explode("-",$date2);
						$y5=$d1['1']; 
						//echo"</br>";
						$date=date("Y-m-d");
						$dd=explode("-",$date);
						$y6=$dd['1'];
						if($y5==$y6)
						{
							if($u[$uu]=='on')
							{ 
												
							}
							else
							{
								$p7=$p7+1;
							}
						}
					}
				}
			}
	}
}
echo $p7;
							 ?></span></h2>
                                    <div class="small">This Month Used coupne</div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline7 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-4 outline">
                                    <h2><span class="count-number"><?php 
				
$p8=0;
$rs=$obj->fetchAllDetailByStatus("asign_coupan");
if($rs)
{	$i=0;
	while($row=mysqli_fetch_assoc($rs))
	{	$i++;
		$u=explode(",",$row['coupan']);
		foreach($u as $uu =>$value)
		{
			 $code12=$obj->fetchDetailByIdByStatus($u[$uu],"coupan_class","id","status",0);
				if($code12)
				{	$ii=0;
					while($row1=mysqli_fetch_assoc($code12))
					{	$ii++;
						$date2=$row['asign_date'];
						$d1=explode("-",$date2);
						$y5=$d1['1']; 
						//echo"</br>";
						$date=date("Y-m-d");
						$dd=explode("-",$date);
						$y6=$dd['1'];
						if($y5==$y6)
						{
							if($u[$uu]=='on')
							{ 
												
							}
							else
							{
								$p8=$p8+1;
							}
						}
					}
				}
			}
	}
}
echo $p8;									?></span></h2>
                                    <div class="small">Total Unused coupne</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline8 text-center"></div>
                                </div>
                            </div>
                        </div><!---This Month -------->
						<!---Block------->
						<div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php
			$tot20=0;			
$rs02=$obj->fetchAllDetail("subagent");
if($rs02)
{	$i=0;
while($row20=mysqli_fetch_assoc($rs02))
{	$i++;
	 $rr20=$row20['register_date'];
 $dddd20=explode("-",$rr20);
	 $yy20=$dddd20['1'];
	//echo"</br>";
	$date=date("Y-m-d");
	$dd20=explode("-",$date);
 $yy21=$dd20['1'];
	if($yy20==$yy21)
	{
		$tot20=$tot20+1;
	}
}
}
echo $tot20; 

			 ?></span> </h2>
                                    <div class="small">This Month  Block Supervisor</div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php
					
					$ex=0;
			 $exe=$obj->fetchDetailById(1,"agent","status");
				if($exe)
				{	$ii=0;
					while($rss4=mysqli_fetch_assoc($exe))
					{	$ii++;
						 $da2=$rss4['register_date'];
						
						$d91=explode("-",$da2);
						  $y09=$d91['1']; 
						
						$date=date("Y-m-d");
						$d80=explode("-",$date);
						 $y20=$d80['1'];
						if($y09==$y20)
						{
							$ex=$ex+1;
						}
					}
				}
echo $ex;
			 ?></span> </h2>
                                    <div class="small">	This Month Number Of Executive Supervisor	</div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline2 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php
					
					$rm=0;
			 $rmk=$obj->fetchDetailById(1,"referal_agent","status");
				if($rmk)
				{	$ii=0;
					while($rm0=mysqli_fetch_assoc($rmk))
					{	$ii++;
						 $d=$rm0['date'];
						
						$dp=explode("-",$d);
						  $pp=$dp['1']; 
						
						$date=date("Y-m-d");
						$du=explode("-",$date);
						 $y2u=$du['1'];
						if($pp==$y2u)
						{
							$rm=$rm+1;
						}
					}
				}
echo $rm;
			 ?></span></h2>
                                    <div class="small">This Month  Relactionship Manager    </div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline3 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number"><?php
					
						
$sup=0;
			 $emplo=$obj->fetchDetailById(1,"super_admin","status");
				if($emplo)
				{	$ii=0;
					while($emplo5=mysqli_fetch_assoc($emplo))
					{	$ii++;
						 $d=$emplo5['date'];
						
						$dp=explode("-",$d);
						  $pp=$dp['1']; 
						
						$date=date("Y-m-d");
						$du=explode("-",$date);
						 $y2u=$du['1'];
						if($pp==$y2u)
						{
							$sup=$sup+1;
						}
					}
				}
echo $sup;
			 ?></span></h2>
                                    <div class="small">Number of Employee</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div>
                            </div>
                            

                        </div>
						
						<!----End - Block------->
						
						<!------------To Day----------->
<div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-title">
                                    <center><h1>Today Report </h1><center>
                                <small>Total</small>
                               
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                             <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php
						$date=date("d-m-Y");
			$rowu4881=0;
$rstt15=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","payment_success_date",$date);
//fetchDetailByIdByStatususer
if($rstt15)
{	$i=0;
while($row16=mysqli_fetch_assoc($rstt15))
{	$i++;
 $id16= $row16['id'];
		$rowu4881=$rowu4881+1;																										
}
}
	 $rowu4881;
	//----------------usergover------------
	
		$rowu48581=0;
$rstt15=$obj->fetchDetailByIdByStatus(1,"user_register_goverment","pstatus","success_date",$date);
//fetchDetailByIdByStatususer
if($rstt15)
{	$i=0;
while($row16=mysqli_fetch_assoc($rstt15))
{	$i++;
 $id16= $row16['id'];
		$rowu48581=$rowu48581+1;																										
}
}
//-------------
	$rowu488221=0;
$rstt15=$obj->fetchDetailByIdByStatus(0,"user_register","pstatus","register_date",$date);
//fetchDetailByIdByStatususer
if($rstt15)
{	$i=0;
while($row16=mysqli_fetch_assoc($rstt15))
{	$i++;
 $id16= $row16['id'];
		$rowu488221=$rowu488221+1;																										
}
}
	 $rowu488221;
	//----------------usergover------------
	
		$rowu485sf81=0;
$rstt15=$obj->fetchDetailByIdByStatus(0,"user_register_goverment","pstatus","register_date",$date);
//fetchDetailByIdByStatususer
if($rstt15)
{	$i=0;
while($row16=mysqli_fetch_assoc($rstt15))
{	$i++;
 $id16= $row16['id'];
		$rowu485sf81=$rowu485sf81+1;																										
}
}
	echo $rowu4881+$rowu48581+$rowu488221+$rowu485sf81;
	
			 ?></span></h2>
                                    <div class="small">Total Number of Student  </div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline3 text-center"></div>
                                </div>
                            </div>
                            
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php
			$date=date("d-m-Y");
			$rowu4df1=0;
$rstt15=$obj->fetchDetailByIdByStatusByDate(1,"user_register","class","pstatus",1,"payment_success_date",$date);
//fetchDetailByIdByStatususer
if($rstt15)
{	$i=0;
while($row16=mysqli_fetch_assoc($rstt15))
{	$i++;
 $id16= $row16['id'];
		$rowu4df1=$rowu4df1+1;																											
}
}
	echo $rowu4df1;
	 ?></span> </h2>
                                    <div class="small">Today 9th class  </div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php $date=date("d-m-Y");
			$rowu142=0;
$rstt15=$obj->fetchDetailByIdByStatusByDate(2,"user_register","class","pstatus",1,"payment_success_date",$date);
//fetchDetailByIdByStatususer
if($rstt15)
{	$i=0;
while($row16=mysqli_fetch_assoc($rstt15))
{	$i++;
 $id16= $row16['id'];
	$rowu142=$rowu142+1;					//	$rs18=$obj->fetchDetailByIdByStatus($id16,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
							//if($rs18)
							//{	$i=0;
							//	while($row118=mysqli_fetch_assoc($rs18))
							//	{	$i++;
									//$tot2=$tot2+$row118['price'];
							//			$rowu41=$rowu41+1;						
								//}
						//	}//
																															
}
}
	echo $rowu142;
?></span> </h2>
                                    <div class="small">Today 10th class </div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline2 text-center"></div>
                                </div>
                            </div>
                           <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number"><?php echo $rowu48581;		 ?></span></h2>
                                    <div class="small">Number of E-Goverment  user</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php echo $rowu488221;		 ?></span></h2>
                                    <div class="small">Number of free access user</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-4" style="background: #9c27b0;
    border-color: #9c27b0;
    color: #fff;">
                                    <h2><span class="count-number"><?php echo $rowu485sf81;		 ?></span></h2>
                                    <div class="small">Number of E-Goverment free access </div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-1 outline">
                                    <h2><span class="count-number"><?php 
	$date=date("Y-m-d");
			$tot=0;			
	$rs=$obj->fetchDetailByIdByStatus($date,"parent","date",1,"status");
	
	if($rs)
	{	$i=0;
		while($row16=mysqli_fetch_assoc($rs))
		{	$i++;
			
			
				$tot=$tot+1;
			
		}
	}
echo $tot;			
			 ?></span></h2>
                                    <div class="small">Today Number of parents </div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline5 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-2 outline">
                                    <h2><span class="count-number"> <?php
                                   $date=date("d-m-Y");
		 $p6=0;
					$rs=$obj->fetchDetailById($date,"asign_coupan","asign_date");
						if($rs)
						{	$i=0;
							while($row=mysqli_fetch_assoc($rs))
							{	$i++;
								$u=explode(",",$row['coupan']);
								foreach($u as $uu =>$value)
								{
									
										if($u[$uu]=='on')
										{ 
										
										}
										else
										{
											$p6=$p6+1;
										}
									
								}
									
								
							}
						}
						echo $p6;
			 ?></span> </h2>
                                    <div class="small">Today coupne assigned</div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline6 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3 outline">
                                    <h2><span class="count-number"><?php 
									$p8=0;
		 $date=date("d-m-Y");
$rs=$obj->fetchDetailByIdByStatus($date,"asign_coupan","asign_date","status",1);
if($rs)
{	$i=0;
	while($row=mysqli_fetch_assoc($rs))
	{	$i++;
		$u=explode(",",$row['coupan']);
		foreach($u as $uu =>$value)
		{
			 $code12=$obj->fetchDetailByIdByStatus($u[$uu],"coupan_class","id","status",1);
				if($code12)
				{	$ii=0;
					while($row1=mysqli_fetch_assoc($code12))
					{	$ii++;
						if($u[$uu]=='on')
							{ 
												
							}
							else
							{
								$p8=$p8+1;
							}
						
					}
				}
			}
	}
}
echo $p8;
							 ?></span></h2>
                                    <div class="small">Today Used coupne</div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline7 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-4 outline">
                                    <h2><span class="count-number"><?php 
							$p7=0;
		 $date=date("d-m-Y");
$rs=$obj->fetchDetailByIdByStatus($date,"asign_coupan","asign_date","status",0);
if($rs)
{	$i=0;
	while($row=mysqli_fetch_assoc($rs))
	{	$i++;
		$u=explode(",",$row['coupan']);
		foreach($u as $uu =>$value)
		{
			 $code12=$obj->fetchDetailByIdByStatus($u[$uu],"coupan_class","id","status",1);
				if($code12)
				{	$ii=0;
					while($row1=mysqli_fetch_assoc($code12))
					{	$ii++;
						if($u[$uu]=='on')
							{ 
												
							}
							else
							{
								$p7=$p7+1;
							}
						
					}
				}
			}
	}
}
echo $p7;									?></span></h2>
                                    <div class="small">Total Unused coupne</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline8 text-center"></div>
                                </div>
                            </div>
                        </div><!---This Month -------->
						<!---Block------->
						<div class="row">
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php
					
					$register_date=date("Y-m-d");
$sb=0;
			 $block=$obj->fetchDetailByIdByStatus(1,"subagent","status","register_date",$register_date);
				if($block)
				{	$ii=0;
					while($rss=mysqli_fetch_assoc($block))
					{	$ii++;
							$sb=$sb+1;
					}
				}
echo $sb;

			 ?></span> </h2>
                                    <div class="small">To day  Block Supervisor</div>
                                    <i class="ti-server statistic_icon"></i>
                                    <div class="sparkline1 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php
					
					$ex=0;
			 	$register_date=date("Y-m-d");
			 $exe=$obj->fetchDetailByIdByStatus(1,"agent","status","register_date",$register_date);
			
				if($exe)
				{	$ii=0;
					while($rss4=mysqli_fetch_assoc($exe))
					{	$ii++;
						$ex=$ex+1;
					}
				}
echo $ex;
			 ?></span> </h2>
                                    <div class="small">	Number Of Executive Supervisor	</div>
                                    <i class="ti-user statistic_icon"></i>
                                    <div class="sparkline2 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php
					
					$rm=0;
			 //$rmk=$obj->fetchDetailById(1,"referal_agent","status");
			 $date=date("Y-m-d");
			 $rmk=$obj->fetchDetailByIdByStatus(1,"referal_agent","status","date",$date);
				if($rmk)
				{	$ii=0;
					while($rm0=mysqli_fetch_assoc($rmk))
					{	$ii++;
						
							$rm=$rm+1;
						
					}
				}
echo $rm;
			 ?></span></h2>
                                    <div class="small">This Month  Relactionship Manager    </div>
                                    <i class="ti-world statistic_icon"></i>
                                    <div class="sparkline3 text-center"></div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number"><?php
					
						
$sup=0;
			 //$rmk=$obj->fetchDetailById(1,"referal_agent","status");
			 $date=date("d-m-Y");
			 $su=$obj->fetchDetailByIdByStatus(1,"super_admin","status","date",$date);
				if($su)
				{	$ii=0;
					while($su0=mysqli_fetch_assoc($su))
					{	$ii++;
						
							$sup=$sup+1;
						
					}
				}
				echo $sup;
			 ?></span></h2>
                                    <div class="small">Number of Employee</div>
                                    <i class="ti-bag statistic_icon"></i>
                                    <div class="sparkline4 text-center"></div>
                                </div>
                            </div>
                            

                        </div>
						
						
						
						<!------------End -To Day------>
						
                    </div> <!-- /.main content -->
					
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
       <?php include"footer.php"; ?>
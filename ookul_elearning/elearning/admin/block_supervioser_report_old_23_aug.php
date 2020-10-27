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
					$rsu=$obj->fetchDetailByIdByStatusByblock02($block,"user_register","block","status",1,"pstatus",1);
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
                                    <h2><span class="count-number"> <?php   $i11=0;
										$totalaa=0;
										$rs=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
														if($row['pro_id']){
														}
														else{
					
															  $id=$row['id'];
															$rs21=$obj->fetchDetailByIdByStatus($id,"class_order","user_id","status",1);
													if($rs21)
													{	$i=0;
														while($row21=mysqli_fetch_assoc($rs21))
														{	$i++;
															
															$i11=$i11+1;
														}
													}
														}	
														}
													}
													// $amount;
										 $ttl=$i11*$amount;	
										
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
									echo	$demo=$ttl+$pro_ttl+$ttl_own_pro;
			 ?></span> <span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span>--> </h2>
                                    <div class="small">Total Amount</div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"> <?php
													$totalac=0;
										$rstt=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","class",1,"pstatus",1);
													//fetchDetailByIdByStatususer
													if($rstt)
													{	$i=0;
														while($row54=mysqli_fetch_assoc($rstt))
														{	$i++;
														if($row54['pro_id']){
														}
														else{
															   $id11=$row54['id'];
														
									$rs25=$obj->fetchDetailByIdByStatus($id11,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
										
													

													if($rs25)
													{	$i=0;
														while($row25=mysqli_fetch_assoc($rs25))
														{	$i++;
															// $totalac=$totalac+$row25['price'];
															$totalac=$totalac+1;
														
														}
													}
															
															
														}		
														
															
														}
													}
													
										echo $totalac*$amount;	
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
                                    <h2><span class="count-number">
                                          <?php
													$totala10=0;
										$rstt10=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","class",2,"pstatus",1,"pro_id",0);
													//fetchDetailByIdByStatususer
													if($rstt10)
													{	$i=0;
														while($row10=mysqli_fetch_assoc($rstt10))
														{	$i++;
														 
															if($row10['pro_id']){
														}
														else{
															      $id10=$row10['id'];
													
															
													
															$rs10=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
										
													

													if($rs10)
													{	$i=0;
														while($row110=mysqli_fetch_assoc($rs10))
														{	$i++;
															 //$totala10=$totala10+$row110['price'];
															$totala10=$totala10+1;
															//$i11=$i11+1;
														}
													}
															
															
														}	
														
															
														}
													}
													
										echo $totala10*$amount;		
			 ?>
                                    </span><span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span>--></h2>
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
	$rsttpa=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","payment_type",3,"pstatus",1);
				//fetchDetailByIdByStatususer
				
	if($rsttpa)
		{	$i=0;
			while($rowpa=mysqli_fetch_assoc($rsttpa))
			{	$i++;
				if($rowpa['pro_id']){
														}
														else{
															      
			
					$idpa=$rowpa['id'];							
					$rspa=$obj->fetchDetailByIdByStatus($idpa,"class_order","user_id","status",1);
				if($rspa)
				{	$i=0;
					while($row1pa=mysqli_fetch_assoc($rspa))
					{	$i++;
					//	$totalapa=$totalapa+$row1pa['price'];
					$totalapa=$totalapa+1;
						//$i11=$i11+1;
					}
				}
														}					
			}
		}
echo $totalapa*$amount;	
					?></span><span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span>--></h2>
                                    <div class="small">Total Amount For Coupan</div>
                                    <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							 <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"> <?php
								$totalao=0;
	$rstto=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","payment_type",1,"pstatus",1);
				//fetchDetailByIdByStatususer
				
	if($rstto)
		{	$i=0;
			while($rowo=mysqli_fetch_assoc($rstto))
			{	$i++;
				if($rowo['pro_id']){
														}
														else{
					$ido=$rowo['id'];							
					$rso=$obj->fetchDetailByIdByStatus($ido,"class_order","user_id","status",1);
				if($rso)
				{	$i=0;
					while($rowoo=mysqli_fetch_assoc($rso))
					{	$i++;
					//	$totalao=$totalao+$rowoo['price'];
						$totalao=$totalao+1;
					}
				}
														}									
			}
		}
echo $totalao*$amount;	
					?></span><span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span>--></h2>
                                    <div class="small">Total Amount For Online</div>
                                    <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							<!---coupan------->
							<div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php
									$id=$_GET['id'];
									
								$to=0;
$rso1=$obj->fetchAllDetailByStatusByStatus001($id,"asign_coupan","agent","status",1);
				if($rso1)
				{	
					while($row1o=mysqli_fetch_assoc($rso1))
					{	
						$u=explode(",",$row1o['coupan']);
							foreach($u as $uu =>$value)
							{	
								if($u[$uu]=='on')
									{

									}
									else {
										 $to=$to+1;
									}	

								// $u[$uu];
								
							}
					}
				}
echo $to;					
								
										
					
			 ?></span><span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span>--></h2>
                                    <div class="small">Total Asign Coupan</div>
                                    <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							<div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php
$id=$iii['id'];
					$to2=0;
$p2=$obj->fetchAllDetailByStatusByStatus001($id,"asign_coupan","agent","status",1);
				if($p2)
				{	
					while($rowp=mysqli_fetch_assoc($p2))
					{	

						$u9=explode(",",$rowp['coupan']);
							foreach($u9 as $uu =>$value)
							{
								

								if($u9[$uu]=='on')
								{

								}
								else {
									  $coupan12=$u9[$uu];
								//echo "</br>";
									

									$rs90=$obj->fetchDetailByIdByStatus($coupan12,"coupan_class","id","status",1);
									//print_r($rs90);
									if($rs90)
									{	$i=0;
										while($row90=mysqli_fetch_assoc($rs90))
										{	$i++;

											//echo $row90['id'];
											$to2=$to2+1;
											 
											
										}
									}
								}
								
								
							}
					}
				}
			
			echo $to2;							
					

										
					
			 ?></span><span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span>--></h2>
                                    <div class="small">Total Used Coupan</div>
                                    <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							<div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php
						
										$id=$iii['id'];
									
						$to21=0;
$p21=$obj->fetchAllDetailByStatusByStatus001($id,"asign_coupan","agent","status",1);
				if($p21)
				{	
					while($rowp1=mysqli_fetch_assoc($p21))
					{	
						$u91=explode(",",$rowp1['coupan']);
							foreach($u91 as $uu =>$value)
							{
								if($u91[$uu]=='on')
								{  
									
								}
								else {
										$rs901=$obj->fetchDetailByIdByStatus($u91[$uu],"coupan_class","id","status",0);
										if($rs901)
										{	$i=0;
											while($row91=mysqli_fetch_assoc($rs901))
											{	$i++;
												$to21=$to21+1;
												 
												
											}
										}
									}
								
							}
					}
				}
echo $to21;	
										
					
			 ?></span><span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span>--></h2>
                                    <div class="small">Total Unused Coupan</div>
                                    <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							
							<div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number">  <?php
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
                                
										echo $totala10;		
			 ?></span> <span class="slight"><!--<i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span>--></h2>
                                    <div class="small">Total user From Reffered PRO</div>
                                   <i class="hvr-buzz-out pe-7s-add-user" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
								  
                                  <!--  <div class="sparkline1 text-center"></div>-->
                                </div> <!-- /. statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"> <?php
									$tup=$obj->fetchById(3,"pro_price","type_user");	
										  $pro_ttl=$tup['price']*$totala10;			
										echo  $pro_ttl;
			                    ?></span> <span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span>--> </h2>
                                    <div class="small">Amount From Reffered PRO</div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"> <?php
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
													
													
										echo $totala110;		
			 ?>
			</span> <span class="slight"><!--<i class="fa fa-play fa-rotate-270 text-warning"> </i> +29%</span>--></h2>
                                    <div class="small">TOTAL USER FROM PRO IN OWN BLOCK</div>
									 <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
									
                                    <!--<i class="ti-world statistic_icon"></i>-->
                                   <!-- <div class="sparkline3 text-center"></div>-->
                                </div> <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number">
                                          <?php
                                	
                                	$tup=$obj->fetchById(1,"pro_price","type_user");	
										echo $ttl_own_pro=$tup['price']*$totala110;
			 ?>
			 
                                    </span><span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span>--></h2>
                                    <div class="small">TOTAL Amount FROM PRO IN OWN BLOCK</div>
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
$rstt15=$obj->fetchDetailByIdByStatusByblock02($block,"user_register","block","status",1,"pstatus",1);
//fetchDetailByIdByStatususer
if($rstt15)
{	$i=0;
while($row16=mysqli_fetch_assoc($rstt15))
{	$i++;
  $id16=$row16['id'];
// $register_date16=$row16['register_date'];
// $dddd1=explode("-",$register_date16);
 $payment_success_date16=$row16['payment_success_date'];
 $dddd1=explode("-",$payment_success_date16);
$yy2=$dddd1['1'];
	$date=date("Y-m-d");
$dd=explode("-",$date);
$yy1=$dd['1'];
			if($yy2==$yy1)
					{
						$rs18=$obj->fetchDetailByIdByStatus($id16,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
							if($rs18)
							{	$i=0;
								while($row118=mysqli_fetch_assoc($rs18))
								{	$i++;
									//$tot2=$tot2+$row118['price'];
										$rowu41=$rowu41+1;						
								}
							}
															
					}	
					else
					{
						
					}														
}
}
	echo $rowu41;
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
	$rstt15=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
													//fetchDetailByIdByStatususer
	if($rstt15)
		{	$i=0;
			while($row16=mysqli_fetch_assoc($rstt15))
			{	$i++;
			if($row16['pro_id']){
			    
			}else{
				 $id16=$row16['id'];
				
				 //$register_date16=$row16['register_date'];
			     //$dddd1=explode("-",$register_date16);
			     $payment_success_date16=$row16['payment_success_date'];
                 $dddd1=explode("-",$payment_success_date16);
				 $yy2=$dddd1['1'];
			
				$date=date("Y-m-d");
				$dd=explode("-",$date);
				 $yy1=$dd['1'];
					if($yy2==$yy1)
					{
						$rs18=$obj->fetchDetailByIdByStatus($id16,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
							if($rs18)
							{	$i=0;
								while($row118=mysqli_fetch_assoc($rs18))
								{	$i++;
									//$tot2=$tot2+$row118['price'];
										$tot2=$tot2+1;						
								}
							}
															
					}	
					else
					{
						
					}											
			}										
			}
		}
		 $tot31=0;
        $puu1=$obj->fetchDetailByIdByStatus($block,"pro_register","block_id","status",1);
         if($puu1)
			{	$i=0;
				while($rowprooo1=mysqli_fetch_assoc($puu1))
				{	$i++;
                    $pro_id=$rowprooo1['pro_id'];
                                 
                                
									
	$rstt33=$obj->fetchDetailByIdByStatus($pro_id,"user_register","pro_id","pstatus",1);
													//fetchDetailByIdByStatususer
	if($rstt33)
		{	$i=0;
			while($row33=mysqli_fetch_assoc($rstt33))
			{	$i++;
				 $id33=$row33['id'];
				
				  //$register_date33=$row33['register_date'];
            	  //$dddd33=explode("-",$register_date33);
            	  $payment_success_date33=$row33['payment_success_date'];
                $dddd33=explode("-",$payment_success_date33);
				 $yy33=$dddd33['1'];
			
				$date=date("Y-m-d");
				$dd33=explode("-",$date);
				 $yy133=$dd33['1'];
					if($yy33==$yy133)
					{
						$rs33=$obj->fetchDetailByIdByStatus($id33,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
							if($rs33)
							{	$i=0;
								while($row1133=mysqli_fetch_assoc($rs33))
								{	$i++;
									//$tot31=$tot31+$row1133['price'];
									
										$tot31=$tot31+1;					
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
				$totala1110=0;
               
												
										$rstt140=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
										
													if($rstt140)
													{	$i=0;
														while($row102=mysqli_fetch_assoc($rstt140))
														{	$i++;
														if($row102['pro_id']){
															   $id10=$row102['id'];
														
				
				  //$register_date33=$row33['register_date'];
            	  //$dddd33=explode("-",$register_date33);
            	  $payment_success_date433=$row102['payment_success_date'];
                $dddd353=explode("-",$payment_success_date433);
				 $yy323=$dddd353['1'];
			
				$date12=date("Y-m-d");
				$dd323=explode("-",$date12);
				 $yy13203=$dd323['1'];
					if($yy323==$yy13203)
					{
															$rs101=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
													
										
													

													if($rs101)
													{	$i=0;
														while($row1210=mysqli_fetch_assoc($rs101))
														{	$i++;
															
															$totala1110=$totala1110+1;
														
														}
													}
															
															
															
														
															
														} }else{
														
														}
													}
													    
													}
													else{
													    
													}
													
													
				$tup=$obj->fetchById(3,"pro_price","type_user");	
										$uuu=$tup['price']*$tot31;
										$tup7=$obj->fetchById(1,"pro_price","type_user");	
									 	$nup=$tup7['price']*$totala1110;
	 $ttl_price=$tot2*$amount;
			echo	$tttl_total=$uuu+$ttl_price+$nup;
			 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">This month Total Amount</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3" style="background: #621513;  border-color: #621513; color: #fff;">
                                    <h2><span class="count-number"> <?php 
								$tot21=0;
	$rstt22=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","class",1,"pstatus",1);
													//fetchDetailByIdByStatususer
	if($rstt22)
		{	$i=0;
			while($row22=mysqli_fetch_assoc($rstt22))
			{	$i++;
			if($row22['pro_id']){
			}else{
				 $id22=$row22['id'];
				
				 // $register_date22=$row22['register_date'];
                 // $dddd22=explode("-",$register_date22);
                 $payment_success_date16=$row22['payment_success_date'];
                 $dddd22=explode("-",$payment_success_date22);
				 $yy22=$dddd22['1'];
			
				$date=date("Y-m-d");
				$dd22=explode("-",$date);
				 $yy122=$dd22['1'];
					if($yy22==$yy122)
					{
						$rs22=$obj->fetchDetailByIdByStatus($id22,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
							if($rs22)
							{	$i=0;
								while($row1122=mysqli_fetch_assoc($rs22))
								{	$i++;
									//$tot21=$tot21+$row1122['price'];
										$tot21=$tot21+1;					
								}
							}
															
					}	
					else
					{
						
					}											
			}									
			}
		}
	echo $tot21*$amount;
										
										
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
	$rstt33=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","class",2,"pstatus",1);
													//fetchDetailByIdByStatususer
	if($rstt33)
		{	$i=0;
			while($row33=mysqli_fetch_assoc($rstt33))
			{	$i++;
				if($row33['pro_id']){
			}else{
				 $id33=$row33['id'];
				
				  //$register_date33=$row33['register_date'];
            	  //$dddd33=explode("-",$register_date33);
            	  $payment_success_date33=$row33['payment_success_date'];
                $dddd33=explode("-",$payment_success_date33);
				 $yy33=$dddd33['1'];
			
				$date=date("Y-m-d");
				$dd33=explode("-",$date);
				 $yy133=$dd33['1'];
					if($yy33==$yy133)
					{
						$rs33=$obj->fetchDetailByIdByStatus($id33,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
							if($rs33)
							{	$i=0;
								while($row1133=mysqli_fetch_assoc($rs33))
								{	$i++;
									//$tot31=$tot31+$row1133['price'];
									
										$tot31=$tot31+1;					
								}
							}
															
					}	
					else
					{
						
					}											
			}									
			}
		}
	echo $tot31*$amount;
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
	$rstt33=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","payment_type",3,"pstatus",1);
													//fetchDetailByIdByStatususer
	if($rstt33)
		{	$i=0;
			while($row33=mysqli_fetch_assoc($rstt33))
			{	$i++;
			if($row33['pro_id']){
			    
			}else{
				 $id33=$row33['id'];
				
				  //$register_date33=$row33['register_date'];
                	//$dddd33=explode("-",$register_date33);
                	
                	$payment_success_date33=$row33['payment_success_date'];
                    $dddd33=explode("-",$payment_success_date33);
				 
				 $yy33=$dddd33['1'];
			
				$date=date("Y-m-d");
				$dd33=explode("-",$date);
				 $yy133=$dd33['1'];
					if($yy33==$yy133)
					{
						$rs33=$obj->fetchDetailByIdByStatus($id33,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
							if($rs33)
							{	$i=0;
								while($row1133=mysqli_fetch_assoc($rs33))
								{	$i++;
									//$tot31=$tot31+$row1133['price'];
										$tot31=$tot31+1;					
								}
							}
															
					}	
					else
					{
						
					}											
			}										
			}
		}
	echo $tot31*$amount;
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	This month Total Coupan Amount</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4" style="background: #3bd9d9; border-color: #3bd9d9;  color: #fff;">
                                    <h2><span class="count-number">                        <?php
									$tot32=0;
	$rstt33=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","payment_type",1,"pstatus",1);
													//fetchDetailByIdByStatususer
	if($rstt33)
		{	$i=0;
			while($row33=mysqli_fetch_assoc($rstt33))
			{	$i++;
				if($row33['pro_id']){
			    
			}else{
				 $id33=$row33['id'];
				
				  //$register_date33=$row33['register_date'];
				  //$dddd33=explode("-",$register_date33);
				  
				  $payment_success_date33=$row33['payment_success_date'];
                    $dddd33=explode("-",$payment_success_date33);
				 $yy33=$dddd33['1'];
			
				$date=date("Y-m-d");
				$dd33=explode("-",$date);
				 $yy133=$dd33['1'];
					if($yy33==$yy133)
					{
						$rs33=$obj->fetchDetailByIdByStatus($id33,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
							if($rs33)
							{	$i=0;
								while($row1133=mysqli_fetch_assoc($rs33))
								{	$i++;
									//$tot31=$tot31+$row1133['price'];
										$tot32=$tot32+1;					
								}
							}
															
					}	
					else
					{
						
					}											
			}										
			}
		}
	echo $tot32*$amount;
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	This month Total Online Amount</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							<!----ccc--->
							 <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4" style="background: #352c2c; border-color: #352c2c;  color: #fff;">
                                    <h2><span class="count-number"><?php
			
				$toc=0;
$rscu=$obj->fetchAllDetailByStatusByStatus001($id,"asign_coupan","agent","status",1);
if($rscu)
	{	
		while($rowc=mysqli_fetch_assoc($rscu))
		{	
			$id16=$rowc['id'];
			$asign_datec=$rowc['asign_date'];
			$d1=explode("-",$asign_datec);
			 $y2=$d1['1'];
			
			$date=date("d-m-Y");
			$d=explode("-",$date);
			 $y1=$d['1'];
			if($y2==$y1)
				{
					$u2=explode(",",$rowc['coupan']);
					foreach($u2 as $uu =>$value)
						{
							if($u2[$uu]=='on')
								{  
									
								}
								else 
								{
									$toc=$toc+1;
								}
						}
				}
				
				
			}
		}
 echo $toc;	
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	This month asign Coupan</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							 <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4" style="background: #3bd9d9; border-color: #3bd9d9;  color: #fff;">
                                    <h2><span class="count-number"><?php
																		
						$toc21=0;
$rscu2=$obj->fetchAllDetailByStatusByStatus001($id,"asign_coupan","agent","status",1);
if($rscu2)
	{	
		while($row2c=mysqli_fetch_assoc($rscu2))
		{	
			
			$asign_datec2=$row2c['asign_date'];
			$dc1=explode("-",$asign_datec2);
			$yc2=$dc1['1'];
			$date=date("Y-m-d");
			$dc=explode("-",$date);
			$yc1=$dc['1'];
			if($yc2==$yc1)
				{
					$uc2=explode(",",$row2c['coupan']);
					foreach($uc2 as $uu =>$value)
						{
							
							if($uc2[$uu]=='on')
								{  
									
								}
								else 
								{
									
								

							$rscc=$obj->fetchDetailByIdByStatus($uc2[$uu],"coupan_class","id","status",1);
									if($rscc)
									{	$i=0;
										while($rowp=mysqli_fetch_assoc($rscc))
										{	$i++;
											$toc21=$toc21+1;

											 
											
										}
									}
								}
							
							
						}
				}
			}
		}
echo $toc21;					
			
				
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	This month Used Coupan</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							 <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4" style="background: #621513; border-color: #621513;  color: #fff;">
                                    <h2><span class="count-number"><?php
															$toc21=0;
$rscu2=$obj->fetchAllDetailByStatusByStatus001($id,"asign_coupan","agent","status",1);
if($rscu2)
	{	
		while($row2c=mysqli_fetch_assoc($rscu2))
		{	
			
			$asign_datec2=$row2c['asign_date'];
			$dc1=explode("-",$asign_datec2);
			$yc2=$dc1['1'];
			$date=date("Y-m-d");
			$dc=explode("-",$date);
			$yc1=$dc['1'];
			if($yc2==$yc1)
				{
					$uc2=explode(",",$row2c['coupan']);
					foreach($uc2 as $uu =>$value)
						{
							if($uc2[$uu]=='on')
								{  
									
								}
								else 
								{

							$rscc=$obj->fetchDetailByIdByStatus($uc2[$uu],"coupan_class","id","status",0);
									if($rscc)
									{	$i=0;
										while($rowp=mysqli_fetch_assoc($rscc))
										{	$i++;
											$toc21=$toc21+1;
											 
											
										}
									}
							}
							
						}
				}
			}
		}
echo $toc21;	
				
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	This month Unused Coupan</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
								<div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number">  <?php
                                $tot31=0;
        $puu1=$obj->fetchDetailByIdByStatus($block,"pro_register","block_id","status",1);
         if($puu1)
			{	$i=0;
				while($rowprooo1=mysqli_fetch_assoc($puu1))
				{	$i++;
                    $pro_id=$rowprooo1['pro_id'];
                                 
                                
									
	$rstt33=$obj->fetchDetailByIdByStatus($pro_id,"user_register","pro_id","pstatus",1);
													//fetchDetailByIdByStatususer
	if($rstt33)
		{	$i=0;
			while($row33=mysqli_fetch_assoc($rstt33))
			{	$i++;
				 $id33=$row33['id'];
				
				  //$register_date33=$row33['register_date'];
            	  //$dddd33=explode("-",$register_date33);
            	  $payment_success_date33=$row33['payment_success_date'];
                $dddd33=explode("-",$payment_success_date33);
				 $yy33=$dddd33['1'];
			
				$date=date("Y-m-d");
				$dd33=explode("-",$date);
				 $yy133=$dd33['1'];
					if($yy33==$yy133)
					{
						$rs33=$obj->fetchDetailByIdByStatus($id33,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
							if($rs33)
							{	$i=0;
								while($row1133=mysqli_fetch_assoc($rs33))
								{	$i++;
									//$tot31=$tot31+$row1133['price'];
									
										$tot31=$tot31+1;					
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
	echo $tot31;
			 ?></span> <span class="slight"><!--<i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span>--></h2>
                                    <div class="small">Total user From Reffered PRO</div>
                                   <i class="hvr-buzz-out pe-7s-add-user" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
								  
                                  <!--  <div class="sparkline1 text-center"></div>-->
                                </div> <!-- /. statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"> <?php
											$tup=$obj->fetchById(3,"pro_price","type_user");	
										echo 	$tup['price']*$tot31;
			                    ?></span> <span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span>--> </h2>
                                    <div class="small">Amount From Reffered PRO</div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"> <?php
                                	$totala1110=0;
                                
										$rstt140=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
										
													if($rstt140)
													{	$i=0;
														while($row102=mysqli_fetch_assoc($rstt140))
														{	$i++;
														if($row102['pro_id']){
															   $id10=$row102['id'];
														
				
				  //$register_date33=$row33['register_date'];
            	  //$dddd33=explode("-",$register_date33);
            	  $payment_success_date433=$row102['payment_success_date'];
                $dddd353=explode("-",$payment_success_date433);
				 $yy323=$dddd353['1'];
			
				$date12=date("Y-m-d");
				$dd323=explode("-",$date12);
				 $yy13203=$dd323['1'];
					if($yy323==$yy13203)
					{
															$rs101=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
													
										
													

													if($rs101)
													{	$i=0;
														while($row1210=mysqli_fetch_assoc($rs101))
														{	$i++;
															
															$totala1110=$totala1110+1;
														
														}
													}
															
															
															
														
															
														}
											}else{
											    
											}		}
													    
													}
													else{
													    
													}
													
												
										echo $totala1110;		
			 ?>
			</span> <span class="slight"><!--<i class="fa fa-play fa-rotate-270 text-warning"> </i> +29%</span>--></h2>
                                    <div class="small">TOTAL USER FROM PRO IN OWN BLOCK</div>
									 <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
									
                                    <!--<i class="ti-world statistic_icon"></i>-->
                                   <!-- <div class="sparkline3 text-center"></div>-->
                                </div> <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number">
                                        <?php
                                	
                                	$tup8=$obj->fetchById(1,"pro_price","type_user");	
										echo 	$tup8['price']*$totala1110;
			 ?>
			 
                                    </span><span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span>--></h2>
                                    <div class="small">TOTAL Amount FROM PRO IN OWN BLOCK</div>
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
$rstt25=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
//fetchDetailByIdByStatususer
if($rstt25)
{	$i=0;
	while($row26=mysqli_fetch_assoc($rstt25))
	{	$i++;
		  $id26=$row26['id'];
		//  $register_date26=$row26['register_date'];
		 //$d26=explode("-",$register_date26);
		 
		 $payment_success_date26=$row26['payment_success_date'];
		 $d26=explode("-",$payment_success_date26);
		 
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
								$rsu26=$obj->fetchDetailByIdByStatus($id26,"class_order","user_id","status",1);
								if($rsu26)
							{	$i=0;
								while($row118=mysqli_fetch_assoc($rsu26))
								{	$i++;
									//$tot2=$tot2+$row118['price'];
										$rowu42=$rowu42+1;						
								}
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
                                    <h2><span class="count-number"> <?php
									$tot48=0;
	$rstt48=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
													//fetchDetailByIdByStatususer
	if($rstt48)
		{	$i=0;
			while($row48=mysqli_fetch_assoc($rstt48))
			{	$i++;
			if($row48['pro_id']){
			    
			}else{
				  $id48=$row48['id'];
				
				//  $register_date48=$row48['register_date'];
                // $month48=explode("-",$register_date48);
                
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
			}else{
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
			$totala11150=0;
                                
												
										$rstt1480=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
										
													if($rstt1480)
													{	$i=0;
														while($row1082=mysqli_fetch_assoc($rstt1480))
														{	$i++;
															   $id180=$row1082['id'];
														
				
				  //$register_date33=$row33['register_date'];
            	  //$dddd33=explode("-",$register_date33);
            	  $payment_success_date4433=$row1082['payment_success_date'];
                $d286=explode("-",$payment_success_date4433);
		 
		  $m286=$d286['1'];
			$date=date("d-m-y");
		$dd236=explode("-",$date);
		 $mm226=$dd236['1'];
		 $last1=$mm226-1;
			if($last1=='0')
			{
		
				$last77=12;
			}else{
				$last77=$last1;
			}
			 
			 
			 
			 
				if($mm226==$last77)
							{
															$rs1051=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
													
										
													

													if($rs1051)
													{	$i=0;
														while($row12150=mysqli_fetch_assoc($rs1051))
														{	$i++;
															
															$totala11150=$totala11150+1;
														
														}
													}
							}	
															
															
														
															
														}
													}
													    
													
													else{
													    
													}
													  $rowu42=0;
   $puu12=$obj->fetchDetailByIdByStatus($block,"pro_register","block_id","status",1);
         if($puu12)
			{	$i=0;
				while($rowprooo2=mysqli_fetch_assoc($puu12))
				{	$i++;
                    $pro_id2=$rowprooo2['pro_id'];


$rstt25=$obj->fetchDetailByIdByStatus($pro_id2,"user_register","pro_id","pstatus",1);
//fetchDetailByIdByStatususer
if($rstt25)
{	$i=0;
	while($row26=mysqli_fetch_assoc($rstt25))
	{	$i++;
		  $id26=$row26['id'];
		 // $register_date26=$row26['register_date'];
		 //$d26=explode("-",$register_date26);
		 
		 $payment_success_date26=$row26['payment_success_date'];
		 $d26=explode("-",$payment_success_date26);
		 
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
								$rsu26=$obj->fetchDetailByIdByStatus($id26,"class_order","user_id","status",1);
								if($rsu26)
							{	$i=0;
								while($row118=mysqli_fetch_assoc($rsu26))
								{	$i++;
									//$tot2=$tot2+$row118['price'];
										$rowu42=$rowu42+1;						
								}
							}
								
					
							}
						else 
							{
								echo"";
							}	
				
				
											
	}
}
}
}
	$tup=$obj->fetchById(3,"pro_price","type_user");	
										$ttt=$tup['price']*$rowu42;
														$tup=$obj->fetchById(1,"pro_price","type_user");	
										 	$tto_pric=$tup['price']*$totala11150;
	 $last_total=$tot48*$amount;
						echo $tto_pric55=$tto_pric+$last_total+$ttt;
			 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">Last month Total Amount</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3" >
                                    <h2><span class="count-number"><?php 
									
	$tot09=0;
	$rstt09=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","pstatus",1,"class",1);
													//fetchDetailByIdByStatususer
	if($rstt09)
		{	$i=0;
			while($row09=mysqli_fetch_assoc($rstt09))
			{	$i++;
			if($row09['pro_id']){
			    
			}else{
				  $id09=$row09['id'];
				
				//  $register_date09=$row09['register_date'];
                //$month90=explode("-",$register_date09);
                $payment_success_date09=$row09['payment_success_date'];
                $month90=explode("-",$payment_success_date09);
                
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
						$rs09=$obj->fetchDetailByIdByStatus($id09,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
							if($rs09)
							{	$i=0;
								while($row009=mysqli_fetch_assoc($rs09))
								{	$i++;
									$tot09=$tot09+1;
															
								}
							}
															
					}	
					else
					{
						
					}											
			}									
			}
		}
	echo $tot09*$amount;
						
								?></span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i> </span></h2>
                                    <div class="small">This Last Total Amount For Class 9 th</div>
									 <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<i class="ti-world statistic_icon"></i>-->
                                   <!-- <div class="sparkline3 text-center"></div>-->
                                </div> <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number">   <?php
				
	$tot02=0;
	$rstt02=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","pstatus",1,"class",2);
													//fetchDetailByIdByStatususer
	if($rstt02)
		{	$i=0;
			while($row02=mysqli_fetch_assoc($rstt02))
			{	$i++;
		if($row02['pro_id']){
		    
		}else{
				  $id02=$row02['id'];
				
				//  $register_date02=$row02['register_date'];
            	//$month20=explode("-",$register_date02);
            	$payment_success_date02=$row02['payment_success_date'];
            	$month20=explode("-",$payment_success_date02);
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
						$rs02=$obj->fetchDetailByIdByStatus($id02,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
							if($rs02)
							{	$i=0;
								while($row002=mysqli_fetch_assoc($rs02))
								{	$i++;
									$tot02=$tot02+1;
															
								}
							}
															
					}	
					else
					{
						
					}											
		}										
			}
		}
	echo $tot02*$amount;
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
	$payme00=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","pstatus",1,"payment_type",3);
													//fetchDetailByIdByStatususer
	if($payme00)
		{	$i=0;
			while($pay00=mysqli_fetch_assoc($payme00))
			{	$i++;
				  $idpay=$pay00['id'];
				
			//	  $register_datepay=$pay00['register_date'];
              //  $month_pay=explode("-",$register_datepay);
                $payment_success_datepay=$pay00['payment_success_date'];
                $month_pay=explode("-",$payment_success_datepay);
                
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
						$rspay=$obj->fetchDetailByIdByStatus($idpay,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
							if($rspay)
							{	$i=0;
								while($rowpay=mysqli_fetch_assoc($rspay))
								{	$i++;
									$payment=$payment+1;
									
															
								}
							}
															
					}	
					else
					{
						
					}											
															
			}
		}
	echo $payment*$amount;
					
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	Last month Total Coupan Amount</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2" >
                                    <h2><span class="count-number">  <?php
				
	$payment09=0;
	$payme0=$obj->fetchDetailByIdByStatusByblock($block,"user_register","block","pstatus",1,"payment_type",1);
													//fetchDetailByIdByStatususer
	if($payme0)
		{	$i=0;
			while($pay0=mysqli_fetch_assoc($payme0))
			{	$i++;
				  $idpay0=$pay0['id'];
				
			//	  $register_datepay0=$pay0['register_date'];
              //  $month_pay0=explode("-",$register_datepay0);
              
              $payment_success_datepay0=$pay0['payment_success_date'];
              $month_pay0=explode("-",$payment_success_datepay0);
              
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
						$rspay0=$obj->fetchDetailByIdByStatus($idpay0,"class_order","user_id","status",1);
													//fetchDetailByIdByStatususer
							if($rspay0)
							{	$i=0;
								while($rowpay0=mysqli_fetch_assoc($rspay0))
								{	$i++;
									$payment09=$payment09+1;
															
								}
							}
															
					}	
					else
					{
						
					}											
															
			}
		}
	echo $payment09*$amount;
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	Last month Total Online Amount</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							<!---------------------cccccccccc------------->
							<div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1" >
                                    <h2><span class="count-number"><?php
					
				$id=$_GET['id'];
 
$date=date("Y-m-d");
$d3=explode("-",$date);
 $y1=$d3['1'];
 

$b1 = '01';
$b2 = '02';
$b3 = '03';
$b4 = '04';
$b5 = '05';
$b6 = '06';
$b7 = '07';
$b8 = '08';
$b9 = '09';
$b10 = '10';
$b11 = '11';
$b12 = '12';
	

	if($b2 > $b1)
	{
		  $y='01';
	}
	elseif($b3 > $b2)
	{
		 $y='02';
	}
	elseif($b4 > $b3)
	{
		 $y='03';
	}
	elseif($b5 > $b4)
	{
		 $y='04';
	}
	elseif($b6 > $b5)
	{
		 $y='05';
	}
	elseif($b7 > $b6)
	{
		 $y='06';
	}
	elseif($b8 > $b7)
	{
		 $y='07';
	}
	elseif($b9 > $b8)
	{
		 $y='08';
	}
	elseif($b10 > $b9)
	{
		 $x='09';
	}
	elseif($b11 > $b10)
	{
		 $y='10';
	}
	elseif($b12 > $b11)
	{
		 $y='11';
	}
	elseif($b12 > $b1)
	{
		 $y='12';
	}
	else{
		$y='0';
	}
									
						$toc=0;
$rscu8=$obj->fetchAllDetailByStatusByStatus001($id,"asign_coupan","agent","status",1);
if($rscu8)
	{	
		while($rowc8=mysqli_fetch_assoc($rscu8))
		{	
			
			$asign_datec8=$rowc8['asign_date'];
			$d11=explode("-",$asign_datec8);
			$y22=$d11['1'];
			
			if($y1 > $y)
				{
					$u2=explode(",",$rowc8['coupan']);
					foreach($u2 as $uu =>$value)
						{
							if($u2[$uu]=='on')
							{

							}
							else 
							{
								$toc=$toc+1;
							}
						}
				}
			}
		}
echo $toc;	
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	Last month Total Asign Coupan</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							<div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2" >
                                    <h2><span class="count-number"><?php
				
					$id=$_GET['id'];
 
$date=date("Y-m-d");
$d2=explode("-",$date);
 $y12=$d2['1'];
 

$a1 = '01';
$a2 = '02';
$a3 = '03';
$a4 = '04';
$a5 = '05';
$a6 = '06';
$a7 = '07';
$a8 = '08';
$a9 = '09';
$a10 = '10';
$a11 = '11';
$a12 = '12';
	

	if($a2 > $a1)
	{
		  $x='01';
	}
	elseif($a3 > $a2)
	{
		 $x='02';
	}
	elseif($a4 > $a3)
	{
		 $x='03';
	}
	elseif($a5 > $a4)
	{
		 $x='04';
	}
	elseif($a6 > $a5)
	{
		 $x='05';
	}
	elseif($a7 > $a6)
	{
		 $x='06';
	}
	elseif($a8 > $a7)
	{
		 $x='07';
	}
	elseif($a9 > $a8)
	{
		 $x='08';
	}
	elseif($a10 > $a9)
	{
		 $x='09';
	}
	elseif($a11 > $a10)
	{
		 $x='10';
	}
	elseif($a12 > $a11)
	{
		 $x='11';
	}
	elseif($a12 > $a1)
	{
		 $x='12';
	}
	else{
		$x='0';
	}

							$toc02=0;
$rscu02=$obj->fetchAllDetailByStatusByStatus001($id,"asign_coupan","agent","status",1);
if($rscu02)
	{	
		while($rowc02=mysqli_fetch_assoc($rscu02))
		{	
			
			$asign_datec02=$rowc02['asign_date'];
			$d12=explode("-",$asign_datec02);
			 $y222=$d12['1'];
			
			  $y12;
			 
			 $x;
			
			if($y12 > $x)
				{
					$uc20=explode(",",$rowc02['coupan']);
					foreach($uc20 as $uu2 =>$value)
						{
							
							$rscc2=$obj->fetchDetailByIdByStatus($uc20[$uu2],"coupan_class","id","status",1);
							if($uc20[$uu2]=='on')
								{ 

								}
							else 
							{
									if($rscc2)
									{	$i=0;
										while($rowp02=mysqli_fetch_assoc($rscc2))
										{	$i++;
											$toc02=$toc02+1;
											 
											
										}
									}
							}
							
						}
				}
			}
		}
  echo $toc02;

				
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	Last month Total Used Coupan</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
							<div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3" >
                                    <h2><span class="count-number"><?php
				$date=date("Y-m-d");
$d4=explode("-",$date);
 $y4=$d4['1'];
 

$c1 = '01';
$c2 = '02';
$c3 = '03';
$c4 = '04';
$c5 = '05';
$c6 = '06';
$c7 = '07';
$c8 = '08';
$c9 = '09';
$c10 = '10';
$c11 = '11';
$c12 = '12';
	

	if($c2 > $c1)
	{
		  $z='01';
	}
	elseif($c3 > $c2)
	{
		 $z='02';
	}
	elseif($c4 > $c3)
	{
		 $z='03';
	}
	elseif($c5 > $c4)
	{
		 $z='04';
	}
	elseif($c6 > $c5)
	{
		 $z='05';
	}
	elseif($c7 > $c6)
	{
		 $z='06';
	}
	elseif($c8 > $c7)
	{
		 $z='07';
	}
	elseif($c9 > $c8)
	{
		 $z='08';
	}
	elseif($c10 > $c9)
	{
		 $x='09';
	}
	elseif($c11 > $c10)
	{
		 $z='10';
	}
	elseif($c12 > $c11)
	{
		 $z='11';
	}
	elseif($c12 > $c1)
	{
		 $z='12';
	}
	else{
		$z='0';
	}
									
									
						$toc31=0;
$rscu8=$obj->fetchAllDetailByStatusByStatus001($id,"asign_coupan","agent","status",1);
if($rscu8)
	{	
		while($rowc8=mysqli_fetch_assoc($rscu8))
		{	
			
			$asign_datec8=$rowc8['asign_date'];
			$d11=explode("-",$asign_datec8);
			$y22=$d11['1'];
			 $last=$y22-1;
			if($y4 > $z)
				{
					$uc2=explode(",",$rowc8['coupan']);
					foreach($uc2 as $uu =>$value)
						{
							
							$rscc=$obj->fetchDetailByIdByStatus($uc2[$uu],"coupan_class","id","status",0);
							if($uc2[$uu]=='on')
								{ 

								}
							else 
							{
									if($rscc)
									{	$i=0;
										while($rowp=mysqli_fetch_assoc($rscc))
										{	$i++;
											$toc31=$toc31+1;
											 
											
										}
									}
							}
							
						}
				}
			}
		}
echo $toc31;	
				
			 ?></span><span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span></h2>
                                    <div class="small">	Last month Total Unused</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
								<div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number">  <?php
    $rowu42=0;
   $puu12=$obj->fetchDetailByIdByStatus($block,"pro_register","block_id","status",1);
         if($puu12)
			{	$i=0;
				while($rowprooo2=mysqli_fetch_assoc($puu12))
				{	$i++;
                    $pro_id2=$rowprooo2['pro_id'];


$rstt25=$obj->fetchDetailByIdByStatus($pro_id2,"user_register","pro_id","pstatus",1);
//fetchDetailByIdByStatususer
if($rstt25)
{	$i=0;
	while($row26=mysqli_fetch_assoc($rstt25))
	{	$i++;
		  $id26=$row26['id'];
		 // $register_date26=$row26['register_date'];
		 //$d26=explode("-",$register_date26);
		 
		 $payment_success_date26=$row26['payment_success_date'];
		 $d26=explode("-",$payment_success_date26);
		 
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
								$rsu26=$obj->fetchDetailByIdByStatus($id26,"class_order","user_id","status",1);
								if($rsu26)
							{	$i=0;
								while($row118=mysqli_fetch_assoc($rsu26))
								{	$i++;
									//$tot2=$tot2+$row118['price'];
										$rowu42=$rowu42+1;						
								}
							}
								
					
							}
						else 
							{
								echo"";
							}	
				
				
											
	}
}
}
}
		echo $rowu42;
	

			 ?></span> <span class="slight"><!--<i class="fa fa-play fa-rotate-270 text-warning"> </i> +28%</span>--></h2>
                                    <div class="small">Total user From Reffered PRO</div>
                                   <i class="hvr-buzz-out pe-7s-add-user" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
								  
                                  <!--  <div class="sparkline1 text-center"></div>-->
                                </div> <!-- /. statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number">  <?php
											$tup=$obj->fetchById(3,"pro_price","type_user");	
										echo 	$tup['price']*$rowu42;
			                    ?></span> <span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +10%</span>--> </h2>
                                    <div class="small">Amount From Reffered PRO</div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php
                                	$totala11150=0;
                                
												
										$rstt1480=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
										
													if($rstt1480)
													{	$i=0;
														while($row1082=mysqli_fetch_assoc($rstt1480))
														{	$i++;
															   $id180=$row1082['id'];
														
				
				  //$register_date33=$row33['register_date'];
            	  //$dddd33=explode("-",$register_date33);
            	  $payment_success_date4433=$row1082['payment_success_date'];
                $d286=explode("-",$payment_success_date4433);
		 
		  $m286=$d286['1'];
			$date=date("d-m-y");
		$dd236=explode("-",$date);
		 $mm226=$dd236['1'];
		 $last1=$mm226-1;
			if($last1=='0')
			{
		
				$last77=12;
			}else{
				$last77=$last1;
			}
			 
			 
			 
			 
				if($mm226==$last77)
							{
															$rs1051=$obj->fetchDetailByIdByStatus($id10,"class_order","user_id","status",1);
													
										
													

													if($rs1051)
													{	$i=0;
														while($row12150=mysqli_fetch_assoc($rs1051))
														{	$i++;
															
															$totala11150=$totala11150+1;
														
														}
													}
							}	
															
															
														
															
														}
													}
													    
													
													else{
													    
													}
													
												
										echo $totala11150;		
			 ?>
                     
			</span> <span class="slight"><!--<i class="fa fa-play fa-rotate-270 text-warning"> </i> +29%</span>--></h2>
                                    <div class="small">TOTAL USER FROM PRO IN OWN BLOCK</div>
									 <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
									
                                    <!--<i class="ti-world statistic_icon"></i>-->
                                   <!-- <div class="sparkline3 text-center"></div>-->
                                </div> <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number">
                                     <?php
                                	
                                	$tup=$obj->fetchById(1,"pro_price","type_user");	
										echo 	$tup['price']*$totala11150;
			 ?>
			 
                                    </span><span class="slight"><!--<i class="fa fa-play fa-rotate-90 c-white"> </i> +24%</span>--></h2>
                                    <div class="small">TOTAL Amount FROM PRO IN OWN BLOCK</div>
                                     <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline4 text-center"></div>-->
                                </div> <!--/. statistic box -->
                            </div>
                        </div>
                        
                        </div> <!-- /.row -->
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
       <?php  include("footer.php"); ?>
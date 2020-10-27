<?php include"header.php";
include"menu.php"; 
$iii=$obj->fetchById($_GET['id'],"agent","id");

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
                                <h1>Executive Supervisor -  Report ( <?php echo $iii['name'];  ?> )</h1>
                                <small>View detailed & featured admin.</small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li class="active">Executive Supervisor Report</li>
                                </ol>
                            </div>
                        </div>  <!-- /.Content Header (Page header) -->
                        <div class="row" style="    background: white;">
						<div class="header-title">
                                <h1 style="text-align: center;"> Total Report</h1>
								</div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number">
                                    	 <?php
                            $cprice;
                            $cpricep;
                            $tes=0;
                            $tesp=0;
                            
                             $rs=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs)
                            {	$i=0;
                                while($row=mysqli_fetch_assoc($rs))
                                {
                                    
                                     $yy=$obj->fetchById($row['pro_id'],"pro_register","pro_id");
                                     if($yy['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($iii['id']==$yy['refer_ex'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus($row['class'],"markting_price","class","type_user",2);
                                                 $cprice=$cc['price'];
                                                $tes=$tes+1;
                                                
                                            }
                                     }
                                }
                            }
                            //---------------referal By Pro---------------
                            
                            $rs=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs)
                            {	$i=0;
                                while($row=mysqli_fetch_assoc($rs))
                                {
                                    
                                     $yy=$obj->fetchById($row['pro_id'],"pro_register","pro_id");
                                     if($yy['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($iii['id']==$yy['refferal_agent_id'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus($row['class'],"markting_price","class","type_user",5);
                                                 $cpricep=$cc['price'];
                                                $tesp=$tesp+1;
                                                
                                            }
                                     }
                                }
                            }
                             
                            $tes1=0;
                            $tesp1=0;
                            $cprice1=0;
                            $cpricep1=0;
                            $rs1=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs1)
                            {	$i=0;
                                while($row1=mysqli_fetch_assoc($rs1))
                                {
                                    $yy=$obj->fetchById($row1['refferel_id'],"pro_register","pro_id");
                                     if($yy['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($iii['id']==$yy['refer_ex'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",2);
                                                 $cpricep1=$cc['price'];
                                                $tesp1=$tesp1+1;
                                                
                                            }
                                     }
                                }
                            }
                            //------------------------pro----------
                              $rs1=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs1)
                            {	$i=0;
                                while($row1=mysqli_fetch_assoc($rs1))
                                {
                                    $yy=$obj->fetchById($row1['refferel_id'],"pro_register","pro_id");
                                     if($yy['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($iii['id']==$yy['refferal_agent_id'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",5);
                                                $cpricep1=$cc['price'];
                                                $tes1=$tes1+1;
                                                
                                            }
                                     }
                                }
                            }
                             echo $tes+$tesp+$tes1+$tesp1;
                             
                             	
                            	?>	</span> <span class="slight"></span>
                            	</h2>
                                    <div class="small">Total User</div>
                                   <i class="hvr-buzz-out pe-7s-add-user" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
								  
                                  <!--  <div class="sparkline1 text-center"></div>-->
                                </div> <!-- /. statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"> <?php
						   		  $a=$cprice*$tes;
						  
						   		 $b=$cprice1*$tes1;
						   			
						   		 $c=$cpricep*$tesp;
						   			
						   		  $d=$cpricep1*$tesp1;
						   		
						   		  echo $a+$b+$c+$d;
						   				 ?></span> <span class="slight"></span></h2>
                                    <div class="small">Total Amount</div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"> <?php
								echo  $tes; ?></span> <span class="slight"></span></h2>
                                    <div class="small">Bongoshikha User</div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number"><?php echo $cprice*$tes; ?></span> <span class="slight"></span></h2>
                                    <div class="small">Bongoshikha Amount</div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                             <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php echo $tes1; ?></span> <span class="slight"></span></h2>
                                    <div class="small">Goverment User </div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php echo $cprice1*$tes1; ?></span> <span class="slight"></span></h2>
                                    <div class="small">Goverment Amount  </div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                             <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number"><?php echo $tesp+$tesp1; ?>	</span> <span class="slight"></span></h2>
                                    <div class="small">Referal User </div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number">	<?php  $c=$cpricep*$tesp;
						   	   $d=$cpricep1*$tesp1;
						   	 // echo $cpricep1;
						   	   echo $c+$d;
						   		  ?>	</span> <span class="slight"></span></h2>
                                    <div class="small"> Referal Amount  </div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php 	
						 $usa=0;
						 $usa1=0;
						$rsu1=$obj->fetchDetailByIdByStatus('pro',"pro_register","referby","refferal_agent_id",$iii['id']);
							if($rsu1)
					{
				while($row=mysqli_fetch_assoc($rsu1))
						{
						    $usa=$usa+1;
						}
					}
									$rsu1=$obj->fetchDetailByIdByStatus('executive',"pro_register","referby","refferal_agent_id",$iii['id']);
							if($rsu1)
					{
				while($row=mysqli_fetch_assoc($rsu1))
						{	$i++;
							$usa1=$usa1+1;
						}
					}
							echo $usa1+$usa;	
                            ?>	</span> <span class="slight"></span></h2>
                                    <div class="small"> Number Of PRO

 </div>
                                   <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                        </div>
						<!----------This Month---------------------->
                       <div class="row" style="    padding: 10px;"></div>
                        <div class="row" style="    background: white;">
						<div class="header-title">
                                <h1 style="text-align: center;"> This Month Report</h1>
								</div>
                            <div class="col-xs-2"  >
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1" style="    background-color: #352c2c;
    border-color: #352c2c;
    color: #fff;">
                                    <h2><span class="count-number"><?php
                           $cpricethis=0;;
                            $testhis=0;
                           $testhisex=0;
                           $cpriceex=0;
                           
                           
                            $rs001=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs001)
                            {	$i=0;
                                while($row0011=mysqli_fetch_assoc($rs001))
                                {
                                    $yy10=$obj->fetchById($row0011['pro_id'],"pro_register","pro_id");
                                     if($yy10['referby']=='executive')
                                     {
                                         if($iii['id']==$yy10['refer_ex'])
                                            {
                                               
                                                
                                                $register_date161=$row0011['payment_success_date'];
                                                $dddd1=explode("-",$register_date161);
                                                $yy2=$dddd1['1'];
                                                $date=date("d-m-Y");
                                                $dd=explode("-",$date);
                                                $yy1=$dd['1'];
                                                
                                                
                                                    if($yy2==$yy1)
                                                    {
                                                        $cc=$obj->fetchByIdByStatus($row0011['class'],"markting_price","class","type_user",2);
                                                          $cpriceex=$cc['price'];
                                                     
                                                        $testhisex=$testhisex+1;
                                                    }
                                                
                                            }
                                     }
                                }
                            }
                             //-------------------PRO-----
                              $rs00=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs00)
                            {	$i=0;
                                while($row001=mysqli_fetch_assoc($rs00))
                                {
                                    $yy1=$obj->fetchById($row001['pro_id'],"pro_register","pro_id");
                                     if($yy1['referby']=='pro')
                                     {
                             
                                         if($iii['id']==$yy1['refferal_agent_id'])
                                            {
                                               
                                                
                                                $register_date161=$row001['payment_success_date'];
                                                $dddd1=explode("-",$register_date161);
                                                $yy2=$dddd1['1'];
                                                $date=date("d-m-Y");
                                                $dd=explode("-",$date);
                                                $yy1=$dd['1'];
                                                
                                                
                                                    if($yy2==$yy1)
                                                    {
                                                        $cc=$obj->fetchByIdByStatus($row001['class'],"markting_price","class","type_user",5);
                                         $cpricethis=$cc['price'];
                                                     
                                                        $testhis=$testhis+1;
                                                    }
                                                
                                            }
                                     }
                                }
                            }
                            
                            $testhis01=0;
                            $pricethis01=0;
                            $cpricethis1=0;
                            $testhis1=0;
                      
                              $rs10=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs10)
                            {	$i=0;
                                while($row10=mysqli_fetch_assoc($rs10))
                                {
                                    $yy0=$obj->fetchById($row10['refferel_id'],"pro_register","pro_id");
                                     if($yy0['referby']=='executive')
                                     {
                                        
                                         if($iii['id']==$yy0['refer_ex'])
                                            {
                                                 $register_date=$row10['success_date'];
                                                $dd1=explode("-",$register_date);
                                                $yy20=$dd1['1'];
                                                $date=date("d-m-Y");
                                                $dd0=explode("-",$date);
                                                $yy10=$dd0['1'];
                                                    if($yy20==$yy10)
                                                    { 
                                                 
                                                        $cc4=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",2);
                                                    $pricethis01=$cc4['price'];
                                                $testhis01=$testhis01+1;
                                                    }
                                                
                                            }
                                     }
                                }
                            }
                            //-----------------
                                $rs10=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs10)
                            {	$i=0;
                                while($row10=mysqli_fetch_assoc($rs10))
                                {
                                    $yy0=$obj->fetchById($row10['refferel_id'],"pro_register","pro_id");
                                     if($yy0['referby']=='pro')
                                     {
                                        
                                         if($iii['id']==$yy0['refferal_agent_id'])
                                            {
                                                 $register_date=$row10['success_date'];
                                                $dd1=explode("-",$register_date);
                                                $yy20=$dd1['1'];
                                                $date=date("d-m-Y");
                                                $dd0=explode("-",$date);
                                                $yy10=$dd0['1'];
                                                    if($yy20==$yy10)
                                                    { 
                                                 
                                                        $cc4=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",2);
                                                        $cpricethis1=$cc4['price'];
                                                        $testhis1=$testhis1+1;
                                                    }
                                                
                                            }
                                     }
                                }
                            }
                              
                            echo $testhisex+$testhis+$testhis01+$testhis1;
                             
                              
                             
                         
                            
                               
                              	?>	</span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span></h2>
                                    <div class="small">Total user </div>
                                  <i class="fa fa-user" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                  <!--  <div class="sparkline1 text-center"></div>-->
                                </div> <!-- /. statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2" style="    background: #3bd9d9; border-color: #3bd9d9; color: #fff;">
                                    <h2><span class="count-number"><?php
						 
						  $p= $testhisex*$cpriceex;
						   $q= $testhis*$cpricethis;
						   $r=$testhis01*$pricethis01;
						   $s=$testhis1*$cpricethis1;
						 echo $p+$q+$r+$s;
						   				 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">Total Amount</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2" style="background: #3f51b5;  border-color: #3f51b5; color: #fff;">
                                    <h2><span class="count-number"><?php
						 
						  echo $testhisex;
						   				 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small"> Bongshikha User</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2" style="    background: #FF5722;    border-color: #FF5722;  color: #fff;">
                                    <h2><span class="count-number"><?php
						 
						  echo $testhisex*$cpriceex;;
						   				 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">Bongshikha Amount</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2" style="    background: #352c2c;    border-color: #352c2c;  color: #fff;">
                                    <h2><span class="count-number"><?php  echo $testhis01;
						   ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">Goverment User</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2" style=" background: #3bd9d9;   border-color: #3bd9d9;color: #fff;">
                                    <h2><span class="count-number">	<?php echo $testhis01*$pricethis01;
							?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">Goverment Amount</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                             <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2" style="background: #3f51b5;  border-color: #3f51b5;  color: #fff;">
                                    <h2><span class="count-number"><?php  
						   $q1= $testhis;
						   $s1=$testhis1; 
						   echo $q1+$s1;
						   ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">Referal User</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2" style=" background: #FF5722;  border-color: #FF5722;  color: #fff;">
                                    <h2><span class="count-number"><?php  
						    $q2= $testhis*$cpricethis;
						   $s2=$testhis1*$cpricethis1;
						   echo $q2+$s2;
						   ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small"> Referal Amount</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                                                    </div>
						<!----Last Month -->
						<div class="row" style="    padding: 10px;"></div>
						<div class="row" style="    background: white;">
						<div class="header-title">
                                <h1 style="text-align: center;"> Last Month Report</h1>
								</div>
                            <div class="col-xs-2"  >
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1" >
                                    <h2><span class="count-number">
						  	 <?php
                           $cpricethis0=0;;
                            $testhis0=0;
                           $testhisex0=0;
                           $cpriceex0=0;
                           
                           
                            $rs001=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs001)
                            {	$i=0;
                                while($row0011=mysqli_fetch_assoc($rs001))
                                {
                                    $yy10=$obj->fetchById($row0011['pro_id'],"pro_register","pro_id");
                                     if($yy10['referby']=='executive')
                                     {
                                         if($iii['id']==$yy10['refer_ex'])
                                            {
                                               
                                                
                                                $success_date=$row0011['payment_success_date'];
                                               
                                                
                                                
                                                $m=explode("-",$success_date);
                                                $m11=$m['1'];
                                                 
                                                $date=date("d-m-Y");
                                                $my48=explode("-",$date);
                                                 $lm491=$my48['1'];
                                              
                                                $last481=$lm491-1;
                                                if($last481=='0')
                                                {
                                                
                                                $last491=12;
                                                }else{
                                                $last491=$last481;
                                                }
                                                
                                                if($m11==$last491)
                                                {  
                                                    // if($yy2==$yy1)
                                                    // {
                                                        $cc=$obj->fetchByIdByStatus($row0011['class'],"markting_price","class","type_user",2);
                                                          $cpriceex0=$cc['price'];
                                                     
                                                        $testhisex0=$testhisex+1;
                                                    }
                                                
                                            }
                                     }
                                }
                            }
                             //-------------------PRO-----
                              $rs00=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs00)
                            {	$i=0;
                                while($row001=mysqli_fetch_assoc($rs00))
                                {
                                    $yy1=$obj->fetchById($row001['pro_id'],"pro_register","pro_id");
                                     if($yy1['referby']=='pro')
                                     {
                             
                                         if($iii['id']==$yy1['refferal_agent_id'])
                                            {
                                               
                                                
                                                $register_date161=$row001['payment_success_date'];
                                                $m=explode("-",$register_date161);
                                                $m11=$m['1'];
                                                 
                                                $date=date("d-m-Y");
                                                $my48=explode("-",$date);
                                                 $lm491=$my48['1'];
                                              
                                                $last481=$lm491-1;
                                                if($last481=='0')
                                                {
                                                
                                                $last491=12;
                                                }else{
                                                $last491=$last481;
                                                }
                                                
                                                if($m11==$last491)
                                                {  
                                                        $cc=$obj->fetchByIdByStatus($row001['class'],"markting_price","class","type_user",5);
                                         $cpricethis0=$cc['price'];
                                                     
                                                        $testhis0=$testhis+1;
                                                    }
                                                
                                            }
                                     }
                                }
                            }
                            
                            $testhis010=0;
                            $pricethis010=0;
                            $cpricethis10=0;
                            $testhis10=0;
                      
                              $rs10=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs10)
                            {	$i=0;
                                while($row10=mysqli_fetch_assoc($rs10))
                                {
                                    $yy0=$obj->fetchById($row10['refferel_id'],"pro_register","pro_id");
                                     if($yy0['referby']=='executive')
                                     {
                                        
                                         if($iii['id']==$yy0['refer_ex'])
                                            {
                                              $success_date=$row10['success_date'];
                                                
                                                
                                                $m=explode("-",$success_date);
                                                $m11=$m['1'];
                                                 
                                                $date=date("d-m-Y");
                                                $my48=explode("-",$date);
                                                 $lm491=$my48['1'];
                                              
                                                $last481=$lm491-1;
                                                if($last481=='0')
                                                {
                                                
                                                $last491=12;
                                                }else{
                                                $last491=$last481;
                                                }
                                                
                                                if($m11==$last491)
                                                {  
                                                 
                                                        $cc4=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",2);
                                                    $pricethis010=$cc4['price'];
                                                $testhis010=$testhis010+1;
                                                    }
                                                
                                            }
                                     }
                                }
                            }
                            //-----------------
                                $rs10=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs10)
                            {	$i=0;
                                while($row10=mysqli_fetch_assoc($rs10))
                                {
                                    $yy0=$obj->fetchById($row10['refferel_id'],"pro_register","pro_id");
                                     if($yy0['referby']=='pro')
                                     {
                                        
                                         if($iii['id']==$yy0['refferal_agent_id'])
                                            {
                                                 $success_date=$row10['success_date'];
                                                
                                                
                                                $m=explode("-",$success_date);
                                                $m11=$m['1'];
                                                 
                                                $date=date("d-m-Y");
                                                $my48=explode("-",$date);
                                                 $lm491=$my48['1'];
                                              
                                                $last481=$lm491-1;
                                                if($last481=='0')
                                                {
                                                
                                                $last491=12;
                                                }else{
                                                $last491=$last481;
                                                }
                                                
                                                if($m11==$last491)
                                                {  
                                                 
                                                        $cc4=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",2);
                                                        $cpricethis10=$cc4['price'];
                                                        $testhis10=$testhis10+1;
                                                    }
                                                
                                            }
                                     }
                                }
                            }
                              
                            echo $testhisex0+$testhis0+$testhis010+$testhis10;
                             
                              
                             
                         
                            
                               
                              	?>	
			 </span> <span class="slight"><i class="fa fa-play fa-rotate-270 text-warning"> </i></span></h2>
                                    <div class="small">Total user </div>
                                  <i class="fa fa-user" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                  <!--  <div class="sparkline1 text-center"></div>-->
                                </div> <!-- /. statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"> <?php
						 
						  $p4= $testhisex0*$cpriceex0;
						   $q4= $testhis0*$cpricethis0;
						   $r4=$testhis010*$pricethis010;
						   $s4=$testhis10*$cpricethis10;
						 echo $p4+$q4+$r4+$s4;
						   				 ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">Total Amount</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"> <?php
							echo $testhisex0;
						   
								?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">Bongshikha User</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number"><?php echo $testhisex0*$cpriceex0;
						    ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">Bongshikha Amount</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-1">
                                    <h2><span class="count-number"><?php  echo $testhis010;
						   ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">Goverment User</div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-2">
                                    <h2><span class="count-number"><?php echo $testhis010*$pricethis010;
							?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small">Goverment Amount </div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                            <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-3">
                                    <h2><span class="count-number"><?php  
						   $q10= $testhis0;
						   $s10=$testhis10; 
						   echo $q10+$s10;
						   ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small"> Referal User  </div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                             <div class="col-xs-2">
                                <!-- statistic box -->
                                <div class="statistic-box statistic-filled-4">
                                    <h2><span class="count-number"><?php 
						   $q20= $testhis0*$cpricethis0;
						   $s20=$testhis10*$cpricethis10;
						   echo $q20+$s20;
						   		  ?></span> <span class="slight"><i class="fa fa-play fa-rotate-90 c-white"> </i> </span> </h2>
                                    <div class="small"> Referal Amount </div>
                                <i class="fa fa-inr" style="font-size: 50px; position: absolute;right: 30px; top: 16px;"></i>
                                    <!--<div class="sparkline2 text-center"></div>-->
                                </div>  <!-- /.statistic box -->
                            </div>
                        </div>
                        </div> <!-- /.row -->
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
       <?php  include("footer.php"); ?>
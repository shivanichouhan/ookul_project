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
						<form action="final_report_rm_new.php" method="GET" >
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
                        <!-- Add condition -->
                        <?php if($_SESSION['rm_report0']=='0')
                        { 
                        ?>
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
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                            <th>Total Goverment User</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

													$table='referal_agent';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$p=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$p++;
															
															?>


                                        <tr>
                                            <td>
                                                <?php echo $p; ?>
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
	
$total1=0;
$amountclass;
$executive_id=$row['executive_id'];
 $u=explode(",",$executive_id);
foreach($u as $uu =>$value)
	{
		$aa=$obj->fetchById($u[$uu],"agent","id");
	 	  $id=$aa['id'];

	$rsu=$obj->fetchDetailById(1,"user_register","pstatus");
					//print_r($rsu);
					//echo "</br>";
					if($rsu)
					{	
						while($row21=mysqli_fetch_assoc($rsu))
						{	$i++;
    						if($row21['pro_id']=='')
    						{}
    						else
    						{
    						    $class=$row21['class'];
    						    $amo=$obj->fetchByIdByStatus($class,"markting_price","class","type_user",1);
    						   $amountclass= $amo['price'];
        							 $pro = $row21['pro_id'];
        						$aa1=$obj->fetchById($pro,"pro_register","pro_id");
        				
        						 	$refferal_agent_id=$aa1['refferal_agent_id'];
        						if($refferal_agent_id=='')
        						{}
        						else
        						{
        						    
        					
            						if($id==$refferal_agent_id)	
            						{
            						     $row21['id'];
            						    
            						    $total1=$total1+1;
            						}
        						}
    						}   
						}
					}


}
 $total1;
 $amountclass;
//--------------------gov---------------
$total2=0;
$amountclass2;
$executive_id2=$row['executive_id'];
 $u2=explode(",",$executive_id2);
foreach($u2 as $uu2 =>$value)
	{
		$aa2=$obj->fetchById($u2[$uu2],"agent","id");
	 	  $id2=$aa2['id'];

	$rsu2=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
					//print_r($rsu);
					//echo "</br>";
					if($rsu2)
					{	
						while($row22=mysqli_fetch_assoc($rsu2))
						{	$i++;
    						if($row22['pro_id']=='')
    						{}
    						else
    						{
    						   
    						    
        							 $pro2 = $row22['pro_id'];
        						$aa2=$obj->fetchById($pro2,"pro_register","pro_id");
        				
        						 	$refferal_agent_id2=$aa2['refferal_agent_id'];
        						if($refferal_agent_id2=='')
        						{}
        						else
        						{
        						    
        					
            						if($id2==$refferal_agent_id2)	
            						{
            						     $row22['id'];
            						    
            						    $total2=$total2+1;
            						}
        						}
    						}   
						}
					}


}
echo $total1+$total2;

 ?></td>
                                            <td><?php 
                                 
                                      $amo2=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",1);
    						   $amountclass2= $amo1['price'];
                                   $a= $total2*$amountclass2;
                                   $b= $total1* $amountclass;
                                   echo $a+$b;
                                            ?></td>
                                            <td><?php 
	
$total3=0;
$executive_id3=$row['executive_id'];
 $u3=explode(",",$executive_id3);
foreach($u3 as $uu3 =>$value)
	{
		$aa3=$obj->fetchById($u3[$uu3],"agent","id");
	 	  $id3=$aa3['id'];

	$rsu3=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",2);
					//print_r($rsu);
					//echo "</br>";
					if($rsu3)
					{	
						while($row3=mysqli_fetch_assoc($rsu3))
						{	$i++;
    						if($row3['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro3 = $row3['pro_id'];
        						$aa3=$obj->fetchById($pro3,"pro_register","pro_id");
        				
        						 	$refferal_agent_id3=$aa3['refferal_agent_id'];
        						if($refferal_agent_id3=='')
        						{}
        						else
        						{
        						    
        					
            						if($id3==$refferal_agent_id3)	
            						{
            						     $row3['id'];
            						    
            						    $total3=$total3+1;
            						}
        						}
    						}   
						}
					}


}
echo $total3; ?></td>
											<td><?php 
	
$total4=0;
$executive_id4=$row['executive_id'];
 $u4=explode(",",$executive_id4);
foreach($u4 as $uu4 =>$value)
	{
		$aa4=$obj->fetchById($u4[$uu4],"agent","id");
	 	  $id4=$aa4['id'];

	$rsu4=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",1);
					//print_r($rsu);
					//echo "</br>";
					if($rsu4)
					{	
						while($row4=mysqli_fetch_assoc($rsu4))
						{	$i++;
    						if($row4['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro4 = $row4['pro_id'];
        						$aa4=$obj->fetchById($pro4,"pro_register","pro_id");
        				
        						 	$refferal_agent_id4=$aa4['refferal_agent_id'];
        						if($refferal_agent_id4=='')
        						{}
        						else
        						{
        						    
        					
            						if($id4==$refferal_agent_id4)	
            						{
            						     $row4['id'];
            						    
            						    $total4=$total4+1;
            						}
        						}
    						}   
						}
					}


}
echo $total4; ?></td>
                                            <td><?php echo $total2; ?></td>
											
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                        <?php
                        unset($_SESSION['rm_report0']);
                            
                        }
                        else if($_SESSION['rm_report1']=='1')
                        {
                         ?>
                         <div class="panel-body">
                              <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Relactionship Manager Name  <?php 	echo $_GET['id']; ?></th>
                                            <th style="width: 280.021px;">Executive Supervisor Name</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                           
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                           <th>Total User</th>
                                            <th>Total Amount</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                            <th>Total Goverment User</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

								
										$rs3=$obj->fetchDetailById($_GET['id'],"referal_agent","id");
										if($rs3)
										{	$p2=0;
											while($row3=mysqli_fetch_assoc($rs3))
											{	$p3++;
												
												?>


                                        <tr>
                                            <td>
                                                <?php echo $p3; ?>
                                            </td>
                                            <td>
                                                <?php echo $row3['username']; ?>
                                            </td>
                                            <td> <?php $u333=explode(",",$row3['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u333 as $uu333 =>$value)
															{
																 $r333=$u333[$uu333]; 
																$blo55=$obj->fetchById($r333,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													echo"(";	echo $blo55['name'];  echo"),";
															}
														 ?></td>

                                            <td><?php echo $row3['branch_name']; ?></td>
                                            <td><?php echo $row3['ifc_code']; ?> </td>
                                            <td><?php echo $row3['account_holder_name']; ?></td>
											<td><?php echo $row3['account_number']; ?></td>
                                            <td><?php 
	
$total3=0;
$amountclass3;
$executive_id3=$row3['executive_id'];
 $u3=explode(",",$executive_id3);
foreach($u3 as $uu3 =>$value)
	{
		$aa3=$obj->fetchById($u3[$uu3],"agent","id");
	 	  $id3=$aa3['id'];

	$rsu3=$obj->fetchDetailById(1,"user_register","pstatus");

	//fetchDetailByIdByStatusByDate0029(1,"user_register","status","block",$bl41,"payment_success_date ",$sdate11)
					//print_r($rsu);
					//echo "</br>";
					if($rsu3)
					{	
						while($row33=mysqli_fetch_assoc($rsu3))
						{	$i++;
    						if($row33['pro_id']=='')
    						{}
    						else
    						{
    						    $class3=$row33['class'];
    						    $amo3=$obj->fetchByIdByStatus($class3,"markting_price","class","type_user",1);
    						   $amountclass3= $amo3['price'];
        							 $pro3 = $row33['pro_id'];
        						$aa3=$obj->fetchById($pro3,"pro_register","pro_id");
        				
        						 	$refferal_agent_id3=$aa3['refferal_agent_id'];
        						if($refferal_agent_id3=='')
        						{}
        						else
        						{
        						    
        					
            						if($id3==$refferal_agent_id3)	
            						{
            						     $row33['id'];
            						    
            						    $total3=$total3+1;
            						}
        						}
    						}   
						}
					}


}
 $total3;
 $amountclass3;
//--------------------gov---------------
$total4=0;
$amountclass4;
$executive_id4=$row3['executive_id'];
 $u4=explode(",",$executive_id4);
foreach($u4 as $uu4 =>$value)
	{
		$aa4=$obj->fetchById($u4[$uu4],"agent","id");
	 	  $id4=$aa4['id'];

	$rsu4=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
					//print_r($rsu);
					//echo "</br>";
					if($rsu4)
					{	
						while($row44=mysqli_fetch_assoc($rsu4))
						{	$i++;
    						if($row44['pro_id']=='')
    						{}
    						else
    						{
    						   
    						    
        							 $pro4 = $row44['pro_id'];
        						$aa4=$obj->fetchById($pro4,"pro_register","pro_id");
        				
        						 	$refferal_agent_id4=$aa4['refferal_agent_id'];
        						if($refferal_agent_id4=='')
        						{}
        						else
        						{
        						    
        					
            						if($id4==$refferal_agent_id4)	
            						{
            						     $row44['id'];
            						    
            						    $total4=$total4+1;
            						}
        						}
    						}   
						}
					}


}
echo $total3+$total4;

 ?></td>
                                            <td><?php 
                                 
                                      $amo5=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",1);
    						   $amountclass5= $amo5['price'];
                                   $a4= $total3*$amountclass3;
                                   $b4= $total4* $amountclass5;
                                   echo $a4+$b4;
                                            ?></td>
                                            <td><?php 
	
$total6=0;
$executive_id6=$row3['executive_id'];
 $u6=explode(",",$executive_id6);
foreach($u6 as $uu6 =>$value)
	{
		$aa6=$obj->fetchById($u6[$uu6],"agent","id");
	 	  $id6=$aa6['id'];

	$rsu6=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",2);
					//print_r($rsu);
					//echo "</br>";
					if($rsu6)
					{	
						while($row6=mysqli_fetch_assoc($rsu6))
						{	$i++;
    						if($row6['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro6 = $row6['pro_id'];
        						$aa6=$obj->fetchById($pro6,"pro_register","pro_id");
        				
        						 	$refferal_agent_id6=$aa6['refferal_agent_id'];
        						if($refferal_agent_id6=='')
        						{}
        						else
        						{
        						    
        					
            						if($id6==$refferal_agent_id6)	
            						{
            						     $row6['id'];
            						    
            						    $total6=$total6+1;
            						}
        						}
    						}   
						}
					}


}
echo $total6; ?></td>
											<td><?php 
	
$total7=0;
$executive_id7=$row3['executive_id'];
 $u7=explode(",",$executive_id7);
foreach($u7 as $uu7 =>$value)
	{
		$aa7=$obj->fetchById($u7[$uu7],"agent","id");
	 	  $id7=$aa7['id'];

	$rsu7=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",1);
					//print_r($rsu);
					//echo "</br>";
					if($rsu7)
					{	
						while($row7=mysqli_fetch_assoc($rsu7))
						{	$i++;
    						if($row7['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro7 = $row7['pro_id'];
        						$aa7=$obj->fetchById($pro7,"pro_register","pro_id");
        				
        						 	$refferal_agent_id7=$aa7['refferal_agent_id'];
        						if($refferal_agent_id7=='')
        						{}
        						else
        						{
        						    
        					
            						if($id7==$refferal_agent_id7)	
            						{
            						     $row7['id'];
            						    
            						    $total7=$total7+1;
            						}
        						}
    						}   
						}
					}


}
echo $total7; ?></td>
                                            <td><?php echo $total4; ?></td>
											
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                         <?php
                         
                         unset($_SESSION['rm_report1']);   
                        }
                        else if($_SESSION['rm_report2']=='2')
                        {
                            ?>
                            <div class="panel-body">
                              <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Relactionship Manager Name  <?php 	echo $_GET['id']; ?></th>
                                            <th style="width: 280.021px;">Executive Supervisor Name</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                           
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                           <th>Total User</th>
                                            <th>Total Amount</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                            <th>Total Goverment User</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

								
										$rs4=$obj->fetchDetailById($_GET['id'],"referal_agent","id");
										if($rs4)
										{	$p4=0;
											while($row4=mysqli_fetch_assoc($rs4))
											{	$p4++;
												
												?>


                                        <tr>
                                            <td>
                                                <?php echo $p4; ?>
                                            </td>
                                            <td>
                                                <?php echo $row4['username']; ?>
                                            </td>
                                            <td> <?php $u444=explode(",",$row4['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u444 as $uu444 =>$value)
															{
																 $r444=$u444[$uu444]; 
																$blo44=$obj->fetchById($r444,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													echo"(";	echo $blo44['name'];  echo"),";
															}
														 ?></td>

                                            <td><?php echo $row4['branch_name']; ?></td>
                                            <td><?php echo $row4['ifc_code']; ?> </td>
                                            <td><?php echo $row4['account_holder_name']; ?></td>
											<td><?php echo $row4['account_number']; ?></td>
                                            <td><?php 
	
$total9=0;
$amountclass9;
$executive_id9=$row4['executive_id'];
// print_r($executive_id9);
// die();
 $u9=explode(",",$executive_id9);
foreach($u9 as $uu9 =>$value)
	{
		$aa9=$obj->fetchById($u9[$uu9],"agent","id");
	 	  $id9=$aa9['id'];

	$rsu9=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","payment_success_date",$_GET['sdate']);

	//fetchDetailByIdByStatusByDate0029(1,"user_register","status","block",$bl41,"payment_success_date ",$sdate11)
					//print_r($rsu);
					//echo "</br>";
					if($rsu9)
					{	
						while($row99=mysqli_fetch_assoc($rsu9))
						{	$i++;
    						if($row99['pro_id']=='')
    						{}
    						else
    						{
    						    $class9=$row99['class'];
    						    $amo9=$obj->fetchByIdByStatus($class9,"markting_price","class","type_user",1);
    						   $amountclass9= $amo9['price'];
        							 $pro9 = $row99['pro_id'];
        						$aa9=$obj->fetchById($pro9,"pro_register","pro_id");
        				
        						 	$refferal_agent_id9=$aa9['refferal_agent_id'];
        						if($refferal_agent_id9=='')
        						{}
        						else
        						{
        						    
        					
            						if($id9==$refferal_agent_id9)	
            						{
            						     $row99['id'];
            						    
            						    $total9=$total9+1;
            						}
        						}
    						}   
						}
					}


}
 $total9;
 $amountclass9;
//--------------------gov---------------
$total10=0;
$amountclass10;
$executive_id10=$row4['executive_id'];
 $u10=explode(",",$executive_id10);
foreach($u10 as $uu10 =>$value)
	{
		$aa10=$obj->fetchById($u10[$uu10],"agent","id");
	 	  $id10=$aa10['id'];

	$rsu10=$obj->fetchDetailByIdByStatus(1,"user_register_goverment","pstatus","success_date",$_GET['sdate']);
					//print_r($rsu);
					//echo "</br>";
					if($rsu10)
					{	
						while($row110=mysqli_fetch_assoc($rsu10))
						{	$i++;
    						if($row110['pro_id']=='')
    						{}
    						else
    						{
    						   
    						    
        							 $pro10 = $row110['pro_id'];
        						$aa10=$obj->fetchById($pro10,"pro_register","pro_id");
        				
        						 	$refferal_agent_id10=$aa10['refferal_agent_id'];
        						if($refferal_agent_id10=='')
        						{}
        						else
        						{
        						    
        					
            						if($id10==$refferal_agent_id10)	
            						{
            						     $row110['id'];
            						    
            						    $total10=$total10+1;
            						}
        						}
    						}   
						}
					}


}
echo $total9+$total10;

 ?></td>
                                            <td><?php 
                                 
                                      $amo10=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",1);
    						   $amountclass10= $amo10['price'];
                                   $a9= $total9*$amountclass9;
                                   $b10= $total10* $amountclass10;
                                   echo $a9+$b10;
                                            ?></td>
                                            <td><?php 
	
$total11=0;
$executive_id11=$row4['executive_id'];
 $u11=explode(",",$executive_id11);
foreach($u11 as $uu11 =>$value)
	{
		$aa11=$obj->fetchById($u11[$uu11],"agent","id");
	 	  $id11=$aa11['id'];

	$rsu11=$obj->fetchDetailByIdByStatusByType(1,"user_register","pstatus","class",2,"payment_success_date",$_GET['sdate']);
					//print_r($rsu);
					//echo "</br>";
					if($rsu11)
					{	
						while($row1100=mysqli_fetch_assoc($rsu11))
						{	$i++;
    						if($row1100['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro11 = $row1100['pro_id'];
        						$aa11=$obj->fetchById($pro11,"pro_register","pro_id");
        				
        						 	$refferal_agent_id11=$aa11['refferal_agent_id'];
        						if($refferal_agent_id11=='')
        						{}
        						else
        						{
        						    
        					
            						if($id11==$refferal_agent_id11)	
            						{
            						     $row11['id'];
            						    
            						    $total11=$total11+1;
            						}
        						}
    						}   
						}
					}


}
echo $total11; ?></td>
											<td><?php 
	
$total12=0;
$executive_id12=$row4['executive_id'];
 $u12=explode(",",$executive_id12);
foreach($u12 as $uu12 =>$value)
	{
		$aa12=$obj->fetchById($u12[$uu12],"agent","id");
	 	  $id12=$aa12['id'];

	$rsu12=$obj->fetchDetailByIdByStatusByType(1,"user_register","pstatus","class",1,"payment_success_date",$_GET['sdate']);
					//print_r($rsu);
					//echo "</br>";
					if($rsu12)
					{	
						while($row12=mysqli_fetch_assoc($rsu12))
						{	$i++;
    						if($row12['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro12 = $row12['pro_id'];
        						$aa12=$obj->fetchById($pro12,"pro_register","pro_id");
        				
        						 	$refferal_agent_id12=$aa12['refferal_agent_id'];
        						if($refferal_agent_id12=='')
        						{}
        						else
        						{
        						    
        					
            						if($id12==$refferal_agent_id12)	
            						{
            						     $row12['id'];
            						    
            						    $total12=$total12+1;
            						}
        						}
    						}   
						}
					}


}
echo $total12; ?></td>
                                            <td><?php echo $total10; ?></td>
											
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                            <?php
                       unset($_SESSION['rm_report2']);   
                       }
                       else if($_SESSION['rm_report3']=='3')
                       {
                       ?>
                        <div class="panel-body">
                              <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th> Relactionship Manager Name  <?php 	echo $_GET['id']; ?></th>
                                            <th style="width: 280.021px;">Executive Supervisor Name</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                           
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                           <th>Total User</th>
                                            <th>Total Amount</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                            <th>Total Goverment User</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $id=@$_GET['id'];
                                        $sdate11=@$_GET['sdate'];
                                        $edate11=@$_GET['edate'];
								
										$rs5=$obj->fetchDetailById($_GET['id'],"referal_agent","id");
										if($rs5)
										{	$p5=0;
											while($row5=mysqli_fetch_assoc($rs5))
											{	$p5++;
												
												?>


                                        <tr>
                                            <td>
                                                <?php echo $p5; ?>
                                            </td>
                                            <td>
                                                <?php echo $row5['username']; ?>
                                            </td>
                                            <td> <?php $u555=explode(",",$row5['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u555 as $uu555 =>$value)
															{
																 $r555=$u555[$uu555]; 
																$blo55=$obj->fetchById($r555,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													echo"(";	echo $blo55['name'];  echo"),";
															}
														 ?></td>

                                            <td><?php echo $row5['branch_name']; ?></td>
                                            <td><?php echo $row5['ifc_code']; ?> </td>
                                            <td><?php echo $row5['account_holder_name']; ?></td>
											<td><?php echo $row5['account_number']; ?></td>
                                            <td><?php 
	
$total112=0;
$amountclass12;
$executive_id12=$row5['executive_id'];
 $u12=explode(",",$executive_id12);
foreach($u12 as $uu12 =>$value)
	{
		$aa12=$obj->fetchById($u12[$uu12],"agent","id");
	 	  $id12=$aa12['id'];

	$rsu12=$obj->fetchDetailById(1,"user_register","pstatus");

	//fetchDetailByIdByStatusByDate0029(1,"user_register","status","block",$bl41,"payment_success_date ",$sdate11)
					//print_r($rsu);
					//echo "</br>";
					if($rsu12)
					{	
						while($row122=mysqli_fetch_assoc($rsu12))
						{	$i++;
    						if($row122['pro_id']=='')
    						{}
    						else
    						{
    						    $class122=$row122['class'];
    						    $amo12=$obj->fetchByIdByStatus($class122,"markting_price","class","type_user",1);
    						   $amountclass12= $amo12['price'];
        							 $pro12 = $row122['pro_id'];
        						$aa12=$obj->fetchById($pro12,"pro_register","pro_id");
        				
        						 	$refferal_agent_id12=$aa12['refferal_agent_id'];
        						if($refferal_agent_id12=='')
        						{}
        						else
        						{
        						    
        					
            						if($id12==$refferal_agent_id12)	
            						{
            						     $row122['id'];
                                        if(strtotime($row122['payment_success_date'])<=strtotime($_GET['edate']))
                                        {
                                            if(strtotime($_GET['sdate'])<=strtotime($row122['payment_success_date']))
                                            { 
                						        $total112=$total112+1;
                                            }
                                        }
            						}
        						}
    						}   
						}
					}


}
echo $total112;
 $amountclass12;
//--------------------gov---------------
$total113=0;
$amountclass13;
$executive_id113=$row5['executive_id'];
 $u113=explode(",",$executive_id113);
foreach($u113 as $uu113 =>$value)
	{
		$aa113=$obj->fetchById($u113[$uu113],"agent","id");
	 	  $id113=$aa113['id'];

	$rsu113=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
					//print_r($rsu);
					//echo "</br>";
					if($rsu113)
					{	
						while($row113=mysqli_fetch_assoc($rsu113))
						{	$i++;
    						if($row113['pro_id']=='')
    						{}
    						else
    						{
    						   
    						    
        							 $pro113 = $row113['pro_id'];
        						$aa113=$obj->fetchById($pro113,"pro_register","pro_id");
        				
        						 	$refferal_agent_id13=$aa113['refferal_agent_id'];
        						if($refferal_agent_id13=='')
        						{}
        						else
        						{
        						    
        					
            						if($id113==$refferal_agent_id13)	
            						{
            						     $row113['id'];
            						    if(strtotime($row113['success_date'])<=strtotime($_GET['edate']))
                                        {
                                            if(strtotime($_GET['sdate'])<=strtotime($row113['success_date']))
                                            { 
            						    $total113=$total113+1;
                                            }
                                        }
            						}
        						}
    						}   
						}
					}


}
 $total112+$total113;

 ?></td>
                                            <td><?php 
                                 
                                      $amo13=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",1);
    						   $amountclass13= $amo13['price'];
                                   $a9= $total113*$amountclass13;
                                   $b10= $total112* $amountclass12;
                                   echo $a9+$b10;
                                            ?></td>
                                            <td><?php 
	
$total11=0;
$executive_id11=$row5['executive_id'];
 $u11=explode(",",$executive_id11);
foreach($u11 as $uu11 =>$value)
	{
		$aa11=$obj->fetchById($u11[$uu11],"agent","id");
	 	  $id11=$aa11['id'];

	$rsu11=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",2);
					//print_r($rsu);
					//echo "</br>";
					if($rsu11)
					{	
						while($row1100=mysqli_fetch_assoc($rsu11))
						{	$i++;
    						if($row1100['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro11 = $row1100['pro_id'];
        						$aa11=$obj->fetchById($pro11,"pro_register","pro_id");
        				
        						 	$refferal_agent_id11=$aa11['refferal_agent_id'];
        						if($refferal_agent_id11=='')
        						{}
        						else
        						{
        						    
        					
            						if($id11==$refferal_agent_id11)	
            						{
            						     $row1100['id'];
            						    
            						     if(strtotime($row1100['payment_success_date'])<=strtotime($_GET['edate']))
                                        {
                                            if(strtotime($_GET['sdate'])<=strtotime($row1100['payment_success_date']))
                                            { 
            						    $total11=$total11+1;
                                            }
                                            
                                        }
            						}
        						}
    						}   
						}
					}


}
echo $total11; ?></td>
											<td><?php 
	
$total12=0;
$executive_id12=$row5['executive_id'];
 $u12=explode(",",$executive_id12);
foreach($u12 as $uu12 =>$value)
	{
		$aa12=$obj->fetchById($u12[$uu12],"agent","id");
	 	  $id12=$aa12['id'];

	$rsu12=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",1);
					//print_r($rsu);
					//echo "</br>";
					if($rsu12)
					{	
						while($row12=mysqli_fetch_assoc($rsu12))
						{	$i++;
    						if($row12['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro12 = $row12['pro_id'];
        						$aa12=$obj->fetchById($pro12,"pro_register","pro_id");
        				
        						 	$refferal_agent_id12=$aa12['refferal_agent_id'];
        						if($refferal_agent_id12=='')
        						{}
        						else
        						{
        						    
        					
            						if($id12==$refferal_agent_id12)	
            						{
            						     $row12['id'];
            						    if(strtotime($row12['payment_success_date'])<=strtotime($_GET['edate']))
                                        {
                                            if(strtotime($_GET['sdate'])<=strtotime($row12['payment_success_date']))
                                            { 
            						    $total12=$total12+1;
                                            }
                                        }
            						}
        						}
    						}   
						}
					}


}
echo $total12; ?></td>
                                            <td><?php echo $total113; ?></td>
											
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                       <?php 
                           unset($_SESSION['rm_report3']);
                       }
                       else if($_SESSION['rm_report4']=="4")
                       {
                           ?>
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
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                            <th>Total Goverment User</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

													$table='referal_agent';
													$rs006=$obj->fetchAllDetail($table);
													if($rs006)
													{	$p6=0;
														while($row006=mysqli_fetch_assoc($rs006))
														{	$p6++;
															
															?>
                                        <tr>
                                            <td>
                                                <?php echo $p; ?>
                                            </td>
                                            <td>
                                                <?php echo $row006['username']; ?>
                                            </td>
                                            <td>
                                                <?php $u006=explode(",",$row006['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u006 as $uu006 =>$value)
															{
																 $r006=$u006[$uu006]; 
																$blo006=$obj->fetchById($r006,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													echo"(";	echo $blo006['name'];  echo"),";
															}
														 ?>
                                            </td>

                                            <td><?php echo $row006['branch_name']; ?></td>
                                            <td><?php echo $row006['ifc_code']; ?> </td>
                                            <td><?php echo $row006['account_holder_name']; ?></td>
											<td><?php echo $row006['account_number']; ?></td>
                                            <td><?php 
	
$total1880=0;
$amountclass1880;
$executive_id1880=$row006['executive_id'];
 $u1880=explode(",",$executive_id1880);
foreach($u1880 as $uu1880 =>$value)
	{
		$aa1880=$obj->fetchById($u1880[$uu1880],"agent","id");
	 	  $id1880=$aa1880['id'];

	$rsu1880=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","payment_success_date",$_GET['sdate']);
					//print_r($rsu);
					//echo "</br>";
					if($rsu1880)
					{	
						while($row1880=mysqli_fetch_assoc($rsu1880))
						{	$i++;
    						if($row1880['pro_id']=='')
    						{}
    						else
    						{
    						    $class1880=$row1880['class'];
    						    $amo1880=$obj->fetchByIdByStatus($class1880,"markting_price","class","type_user",1);
    						   $amountclass1880= $amo1880['price'];
        							 $pro1880 = $row1880['pro_id'];
        						$aa1880=$obj->fetchById($pro1880,"pro_register","pro_id");
        				
        						 	$refferal_agent_id1880=$aa1880['refferal_agent_id'];
        						if($refferal_agent_id1880=='')
        						{}
        						else
        						{
        						    
        					
            						if($id1880==$refferal_agent_id1880)	
            						{
            						    $total1880=$total1880+1;
            						}
        						}
    						}   
						}
					}


}
 $total1880;
 $amountclass1880;
//--------------------gov---------------
$total1881=0;
$amountclass1881;
$executive_id1881=$row006['executive_id'];
 $u1881=explode(",",$executive_id1881);
foreach($u1881 as $uu1881 =>$value)
	{
		$aa1881=$obj->fetchById($u1881[$uu1881],"agent","id");
	 	  $id1881=$aa1881['id'];

	$rsu1881=$obj->fetchDetailByIdByStatus(1,"user_register_goverment","pstatus","success_date",$_GET['sdate']);
					//print_r($rsu);
					//echo "</br>";
					if($rsu1881)
					{	
						while($row1881=mysqli_fetch_assoc($rsu1881))
						{	$i++;
    						if($row1881['pro_id']=='')
    						{}
    						else
    						{
    						   
    						    
        							 $pro1881= $row1881['pro_id'];
        						$aa18801=$obj->fetchById($pro1881,"pro_register","pro_id");
        				
        						 	$refferal_agent_id18801=$aa18801['refferal_agent_id'];
        						if($refferal_agent_id18801=='')
        						{}
        						else
        						{
        						    
        					
            						if($id1881==$refferal_agent_id18801)	
            						{
            						    
            						    $total1881=$total1881+1;
            						}
        						}
    						}   
						}
					}


}
echo $total1880+$total1881;

 ?></td>
                                            <td><?php 
                                 
                                      $amo2880=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",1);
    						   $amountclass2880= $amo2880['price'];
                                   $a1880= $total1881*$amountclass2880;
                                   $b1880= $total1880* $amountclass1880;
                                   echo $a1880+$b1880;
                                            ?></td>
                                            <td><?php 
	
$total1883=0;
$executive_id1883=$row006['executive_id'];
 $u1883=explode(",",$executive_id1883);
foreach($u1883 as $uu1883 =>$value)
	{
		$aa1883=$obj->fetchById($u1883[$uu1883],"agent","id");
	 	  $id1883=$aa1883['id'];
	$rsu1883=$obj->fetchDetailByIdByStatusByType(1,"user_register","pstatus","class",2,"payment_success_date",$_GET['sdate']);
					//print_r($rsu);
					//echo "</br>";
					if($rsu1883)
					{	
						while($row18803=mysqli_fetch_assoc($rsu1883))
						{	$i++;
    						if($row18803['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro1883 = $row18803['pro_id'];
        						$aa1883=$obj->fetchById($pro1883,"pro_register","pro_id");
        				
        						 	$refferal_agent_id1883=$aa1883['refferal_agent_id'];
        						if($refferal_agent_id1883=='')
        						{}
        						else
        						{
        						    
        					
            						if($id1883==$refferal_agent_id1883)	
            						{
            						    
            						    $total1883=$total1883+1;
            						}
        						}
    						}   
						}
					}


}
echo $total1883; ?></td>
											<td><?php 
	
$total1884=0;
$executive_id1884=$row['executive_id'];
 $u1884=explode(",",$executive_id1884);
foreach($u1884 as $uu1884 =>$value)
	{
		$aa1884=$obj->fetchById($u1884[$uu1884],"agent","id");
	 	  $id1884=$aa1884['id'];

	$rsu1884=$obj->fetchDetailByIdByStatusByType(1,"user_register","pstatus","class",1,"payment_success_date",$_GET['sdate']);
					//print_r($rsu);
					//echo "</br>";
					if($rsu1884)
					{	
						while($row1884=mysqli_fetch_assoc($rsu1884))
						{	$i++;
    						if($row1884['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro1884 = $row1884['pro_id'];
        						$aa18804=$obj->fetchById($pro1884,"pro_register","pro_id");
        				
        						 	$refferal_agent_id1884=$aa18804['refferal_agent_id'];
        						if($refferal_agent_id1884=='')
        						{}
        						else
        						{
        						    
        					
            						if($id1884==$refferal_agent_id1884)	
            						{
            						    $total1884=$total1884+1;
            						}
        						}
    						}   
						}
					}


}
echo $total1884; ?></td>
                                            <td><?php echo $total1881; ?></td>
											
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                           <?php
                       
                           unset($_SESSION['rm_report4']);
                       }
                       else if($_SESSION['rm_report5']=="5")
                       {
                       ?>
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
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                            <th>Total Goverment User</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

													$table='referal_agent';
													$rs007=$obj->fetchAllDetail($table);
													if($rs007)
													{	$p6=0;
														while($row007=mysqli_fetch_assoc($rs007))
														{	$p6++;
															
															?>
                                        <tr>
                                            <td>
                                                <?php echo $p; ?>
                                            </td>
                                            <td>
                                                <?php echo $row007['username']; ?>
                                            </td>
                                            <td>
                                                <?php $u007=explode(",",$row007['executive_id']);
	
												//$u=explode(",",$coupan);
														foreach($u007 as $uu007 =>$value)
															{
																 $r007=$u007[$uu007]; 
																$blo007=$obj->fetchById($r007,"`agent`","id");
																//$block11=$obj->fetchById($block['block_id'],"`block`","id");
													echo"(";	echo $blo007['name'];  echo"),";
															}
														 ?>
                                            </td>

                                            <td><?php echo $row007['branch_name']; ?></td>
                                            <td><?php echo $row007['ifc_code']; ?> </td>
                                            <td><?php echo $row007['account_holder_name']; ?></td>
											<td><?php echo $row007['account_number']; ?></td>
                                            <td><?php 
	
$total1990=0;
$amountclass1990;
$executive_id1990=$row007['executive_id'];
 $u1990=explode(",",$executive_id1990);
foreach($u1990 as $uu1990 =>$value)
	{
		$aa1880=$obj->fetchById($u1990[$uu1990],"agent","id");
	 	  $id1990=$aa1990['id'];

	$rsu1990=$obj->fetchDetailById(1,"user_register","pstatus");
					//print_r($rsu);
					//echo "</br>";
					if($rsu1990)
					{	
						while($row1990=mysqli_fetch_assoc($rsu1990))
						{	$i++;
    						if($row1990['pro_id']=='')
    						{}
    						else
    						{
    						    $class1990=$row1990['class'];
    						    $amo1990=$obj->fetchByIdByStatus($class1990,"markting_price","class","type_user",1);
    						   $amountclass1990= $amo1990['price'];
        							 $pro1990 = $row1990['pro_id'];
        						$aa19990=$obj->fetchById($pro1990,"pro_register","pro_id");
        				
        						 	$refferal_agent_id1990=$aa19990['refferal_agent_id'];
        						if($refferal_agent_id1990=='')
        						{}
        						else
        						{
        						    
        					
            						if($id1990==$refferal_agent_id1990)	
            						{
            						    	if(strtotime($row1990['payment_success_date'])<=strtotime($_GET['edate']))
											 {
												if(strtotime($_GET['sdate'])<=strtotime($row1990['payment_success_date']))
												{ 
            						                $total1990=$total1990+1;
												}
											 }
            						}
        						}
    						}   
						}
					}


}
 $total1990;
 $amountclass1990;
//--------------------gov---------------
$total1991=0;
$amountclass1991;
$executive_id1991=$row007['executive_id'];
 $u1991=explode(",",$executive_id1991);
foreach($u1991 as $uu1991 =>$value)
	{
		$aa1991=$obj->fetchById($u1991[$uu1991],"agent","id");
	 	  $id1991=$aa1991['id'];

	$rsu1991=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
					//print_r($rsu);
					//echo "</br>";
					if($rsu1991)
					{	
						while($row1991=mysqli_fetch_assoc($rsu1991))
						{	$i++;
    						if($row1991['pro_id']=='')
    						{}
    						else
    						{
    						   
    						    
        							 $pro1991= $row1991['pro_id'];
        						$aa19901=$obj->fetchById($pro1991,"pro_register","pro_id");
        				
        						 	$refferal_agent_id19901=$aa19901['refferal_agent_id'];
        						if($refferal_agent_id19901=='')
        						{}
        						else
        						{
        						    
        					
            						if($id1991==$refferal_agent_id19901)	
            						{
                                        if(strtotime($row1991['success_date'])<=strtotime($_GET['edate']))
                                         {
                                        	if(strtotime($_GET['sdate'])<=strtotime($row1991['success_date']))
                                        	{ 
            						    
            						            $total1991=$total1991+1;
                                        	}
                                         }
            						}
        						}
    						}   
						}
					}


}
echo $total1990+$total1991;

 ?></td>
                                            <td><?php 
                                 
                                      $amo1991=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",1);
    						   $amountclass1991= $amo1991['price'];
                                   $a1991= $total1991*$amountclass1991;
                                   $b1990= $total1990* $amountclass1990;
                                   echo $a1991+$b1990;
                                            ?></td>
                                            <td><?php 
	
$total1993=0;
$executive_id1993=$row007['executive_id'];
 $u1993=explode(",",$executive_id1993);
foreach($u1993 as $uu1993 =>$value)
	{
		$aa1993=$obj->fetchById($u1993[$uu1993],"agent","id");
	 	  $id1993=$aa1993['id'];
	$rsu1993=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",2);
					//print_r($rsu);
					//echo "</br>";
					if($rsu1993)
					{	
						while($row1993=mysqli_fetch_assoc($rsu1993))
						{	$i++;
    						if($row1993['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro1993 = $row1993['pro_id'];
        						$aa19903=$obj->fetchById($pro1993,"pro_register","pro_id");
        				
        						 	$refferal_agent_id19903=$aa19903['refferal_agent_id'];
        						if($refferal_agent_id19903=='')
        						{}
        						else
        						{
        						    
        					
            						if($id1993==$refferal_agent_id19903)	
            						{
            						     if(strtotime($row1993['payment_success_date'])<=strtotime($_GET['edate']))
                                         {
                                        	if(strtotime($_GET['sdate'])<=strtotime($row1993['payment_success_date']))
                                        	{ 
            						    
            						    $total1993=$total1993+1;
                                        	}
                                         }
            						}
        						}
    						}   
						}
					}


}
echo $total1993; ?></td>
											<td><?php 
	
$total1994=0;
$executive_id1994=$row['executive_id'];
 $u1994=explode(",",$executive_id1994);
foreach($u1994 as $uu1994 =>$value)
	{
		$aa1994=$obj->fetchById($u1994[$uu1994],"agent","id");
	 	  $id1994=$aa1994['id'];

	$rsu1994=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",1);
					//print_r($rsu);
					//echo "</br>";
					if($rsu1994)
					{	
						while($row1994=mysqli_fetch_assoc($rsu1994))
						{	$i++;
    						if($row1994['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro1994 = $row1994['pro_id'];
        						$aa19904=$obj->fetchById($pro1994,"pro_register","pro_id");
        				
        						 	$refferal_agent_id1994=$aa19904['refferal_agent_id'];
        						if($refferal_agent_id1994=='')
        						{}
        						else
        						{
        						    
        					
            						if($id1994==$refferal_agent_id1994)	
            						{
            						     if(strtotime($row1994['payment_success_date'])<=strtotime($_GET['edate']))
                                         {
                                        	if(strtotime($_GET['sdate'])<=strtotime($row1994['payment_success_date']))
                                        	{ 
            						    $total1994=$total1994+1;
                                        	}
                                         }
            						}
        						}
    						}   
						}
					}


}
echo $total1994; ?></td>
                                            <td><?php echo $total1991; ?></td>
											
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                       <?php
                           unset($_SESSION['rm_report5']);
                       }
                        else { ?>
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
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                            <th>Total Goverment User</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

													$table='referal_agent';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$p=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$p++;
															
															?>


                                        <tr>
                                            <td>
                                                <?php echo $p; ?>
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
	
$total1=0;
$amountclass;
$executive_id=$row['executive_id'];
 $u=explode(",",$executive_id);
foreach($u as $uu =>$value)
	{
		$aa=$obj->fetchById($u[$uu],"agent","id");
	 	  $id=$aa['id'];

	$rsu=$obj->fetchDetailById(1,"user_register","pstatus");
					//print_r($rsu);
					//echo "</br>";
					if($rsu)
					{	
						while($row21=mysqli_fetch_assoc($rsu))
						{	$i++;
    						if($row21['pro_id']=='')
    						{}
    						else
    						{
    						    $class=$row21['class'];
    						    $amo=$obj->fetchByIdByStatus($class,"markting_price","class","type_user",1);
    						   $amountclass= $amo['price'];
        							 $pro = $row21['pro_id'];
        						$aa1=$obj->fetchById($pro,"pro_register","pro_id");
        				
        						 	$refferal_agent_id=$aa1['refferal_agent_id'];
        						if($refferal_agent_id=='')
        						{}
        						else
        						{
        						    
        					
            						if($id==$refferal_agent_id)	
            						{
            						     $row21['id'];
            						    
            						    $total1=$total1+1;
            						}
        						}
    						}   
						}
					}


}
 $total1;
 $amountclass;
//--------------------gov---------------
$total2=0;
$amountclass2;
$executive_id2=$row['executive_id'];
 $u2=explode(",",$executive_id2);
foreach($u2 as $uu2 =>$value)
	{
		$aa2=$obj->fetchById($u2[$uu2],"agent","id");
	 	  $id2=$aa2['id'];

	$rsu2=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
					//print_r($rsu);
					//echo "</br>";
					if($rsu2)
					{	
						while($row22=mysqli_fetch_assoc($rsu2))
						{	$i++;
    						if($row22['pro_id']=='')
    						{}
    						else
    						{
    						   
    						    
        							 $pro2 = $row22['pro_id'];
        						$aa2=$obj->fetchById($pro2,"pro_register","pro_id");
        				
        						 	$refferal_agent_id2=$aa2['refferal_agent_id'];
        						if($refferal_agent_id2=='')
        						{}
        						else
        						{
        						    
        					
            						if($id2==$refferal_agent_id2)	
            						{
            						     $row22['id'];
            						    
            						    $total2=$total2+1;
            						}
        						}
    						}   
						}
					}


}
echo $total1+$total2;

 ?></td>
                                            <td><?php 
                                 
                                      $amo2=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",1);
    						   $amountclass2= $amo1['price'];
                                   $a= $total2*$amountclass2;
                                   $b= $total1* $amountclass;
                                   echo $a+$b;
                                            ?></td>
                                            <td><?php 
	
$total3=0;
$executive_id3=$row['executive_id'];
 $u3=explode(",",$executive_id3);
foreach($u3 as $uu3 =>$value)
	{
		$aa3=$obj->fetchById($u3[$uu3],"agent","id");
	 	  $id3=$aa3['id'];

	$rsu3=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",2);
					//print_r($rsu);
					//echo "</br>";
					if($rsu3)
					{	
						while($row3=mysqli_fetch_assoc($rsu3))
						{	$i++;
    						if($row3['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro3 = $row3['pro_id'];
        						$aa3=$obj->fetchById($pro3,"pro_register","pro_id");
        				
        						 	$refferal_agent_id3=$aa3['refferal_agent_id'];
        						if($refferal_agent_id3=='')
        						{}
        						else
        						{
        						    
        					
            						if($id3==$refferal_agent_id3)	
            						{
            						     $row3['id'];
            						    
            						    $total3=$total3+1;
            						}
        						}
    						}   
						}
					}


}
echo $total3; ?></td>
											<td><?php 
	
$total4=0;
$executive_id4=$row['executive_id'];
 $u4=explode(",",$executive_id4);
foreach($u4 as $uu4 =>$value)
	{
		$aa4=$obj->fetchById($u4[$uu4],"agent","id");
	 	  $id4=$aa4['id'];

	$rsu4=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",1);
					//print_r($rsu);
					//echo "</br>";
					if($rsu4)
					{	
						while($row4=mysqli_fetch_assoc($rsu4))
						{	$i++;
    						if($row4['pro_id']=='')
    						{}
    						else
    						{
    						  
        							 $pro4 = $row4['pro_id'];
        						$aa4=$obj->fetchById($pro4,"pro_register","pro_id");
        				
        						 	$refferal_agent_id4=$aa4['refferal_agent_id'];
        						if($refferal_agent_id4=='')
        						{}
        						else
        						{
        						    
        					
            						if($id4==$refferal_agent_id4)	
            						{
            						     $row4['id'];
            						    
            						    $total4=$total4+1;
            						}
        						}
    						}   
						}
					}


}
echo $total4; ?></td>
                                            <td><?php echo $total2; ?></td>
											
                                           </tr>
                                        <?php      } 
										} 
										?>
		</tbody>
                                </table>
                            </div>
                        </div>
                        <?php } ?>
                        
                    </div>
                </div>
            </div>	
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
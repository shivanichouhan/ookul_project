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
                    <h1>PRO Report</h1>
                    <small>PRO Report Weekly,Monthly,Yearly</a></small>
                   
                </div>
            </div>

			<div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <h4>Public Relation Offer List</h4>
                            </div>
                        </div>


                        <!-- Search filter -->

                        <div class="panel-body">
                            <div class="col-md-12">
                             <form action="final_report_pro_new.php" method="GET">
                                    <div class="col-md-3">
                                        <select class="form-control" id="exampleSelect1" name="pro_id">
                                            <option value="0">All</option>
                                            <?php  
                                            $rs8=$obj->fetchAllDetailByStatus("pro_register"); 
                                            if($rs8) 
                                            { 
                                            $i=0; 
                                            while($row8=mysqli_fetch_assoc($rs8)) 
                                            { $i++;
                                            ?>

                                            <option value="<?php echo $row8['id']; ?>">
                                                <?php echo $row8['pro_id']; ?> |
                                                <?php echo $row8['name']; ?>
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
                        <?php if($_SESSION['report0']=='0')
                        {
                        ?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                             <th>PRO Id</th>
                                            <th>PRO Name</th>
                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
                                            <th>Total Rfferal User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        //$id=$_GET[ 'id']; 
                                        $rst=$obj->fetchAllDetailByStatus_pro("pro_register");
                                        if($rst) { 
                                                    $ss=0;
                                                    while($rowst=mysqli_fetch_assoc($rst))
                                                    { 
                                                        $ss++; 
                                                        //$ct=$obj->fetchById($row['city_id'],"city","id");
                                                        //$block=$obj->fetchById($row['block_id'],"block","id"); ?>
                                        <tr>
                                            <td> <?php echo $ss; ?></td>
                                              <td> <?php echo $rowst['pro_id']; ?></td>
                                            <td><?php echo $rowst['name']; ?></td>
                                            <td><?php echo $rowst['branch_name']; ?></td>
                                            <td><?php echo $rowst['ifc_code']; ?></td>
                                            <td><?php echo $rowst['account_holder_name']; ?></td>
                                            <td><?php echo $rowst['account_number'];	?></td>
                                            
                                            
                                            
                                		<td><?php
                                		$pro_id=$rowst['pro_id'];
                            $usy=0;
                            $class=0;
                            $rowGu=0;
                            $togg=0;
                            $togg1=0;
                                	$rs=$obj->fetchDetailByIdByStatus($pro_id,"user_register","pro_id","pstatus",1);
									if($rs)
									{	$i=0;
										while($row10=mysqli_fetch_assoc($rs))
										{	$i++;
										
										$pppp=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",$row10['class']);
			        	$class= $pppp['price'];
									
											  $usy=$usy+1;
											
										
										}
									}
									  $usy;
									 
								
                                $pppp=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",0);
    			        	$amountG= $pppp['price'];
                                    $rsu=$obj->fetchDetailByIdByStatus($pro_id,"user_register_goverment","refferel_id","pstatus",1);
                                    if($rsu)
                                    {
                                    $rowGu=mysqli_num_rows($rsu);
                                    	$rowGu;
                                    }
                                    
                                    
                                    
                                    
                                $rfer=$obj->fetchDetailById(1,"user_register","pstatus");
							    if($rfer)
								{	$i=0;
									while($rowrfer=mysqli_fetch_assoc($rfer))
									{	$i++;
									        $rowrfer['pro_id'];
									        if($rowrfer['pro_id']=='')
									        {
    									        if($pro_id==$rowrfer['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa=$obj->fetchById($rowrfer['pro_id'],"pro_register","pro_id");
									       
									            if($usa['referby']=='pro')
									            {
									                $usa45=$obj->fetchById($usa['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa45['pro_id']==$pro_id)
									                    {
									                        $togg=$togg+1;
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
								//-----------
								 $rfer=$obj->fetchDetailById(1," user_register_goverment","pstatus");
							    if($rfer)
								{	$i=0;
									while($rowrfer=mysqli_fetch_assoc($rfer))
									{	$i++;
									        $rowrfer['pro_id'];
									        if($rowrfer['pro_id']=='')
									        {
    									        if($pro_id==$rowrfer['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa=$obj->fetchById($rowrfer['pro_id'],"pro_register","pro_id");
									       
									            if($usa['referby']=='pro')
									            {
									                $usa45=$obj->fetchById($usa['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa45['pro_id']==$pro_id)
									                    {
									                        $togg1=$togg1+1;
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
                               echo $usy+$rowGu+$togg+$togg1; 
                                ?></td>
                                			<td>  <?php
                              
                                    $a=$amountG*$rowGu;
                                    $b= $class* $usy;
                                    $ref40=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",1);
                                    $c=$togg * $ref40['price'];
                                     $ref41=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",0);
                                    $d=$togg1 * $ref41['price'];
                                    $togg1;
			                echo $a+$b+$c+$d;
                            ?></td>
                                            <td> <?php
                                	$rowu=0;
					$rsu=$obj->fetchDetailByIdByStatusByType($pro_id,"user_register","pro_id","pstatus",1,"class",2);
					if($rsu)
					{
				$rowu=mysqli_num_rows($rsu);
			echo	$rowu;
					}
                            ?> </td>
                                            
                                            <td>
                                                <?php
                                	$rowu1=0;
					$rsu1=$obj->fetchDetailByIdByStatusByType($pro_id,"user_register","pro_id","pstatus",1,"class",1);
					if($rsu1)
					{
				$rowu1=mysqli_num_rows($rsu1);
			echo	$rowu1;
					}
                            ?> 
                                            </td>
                                            <td> <?php 
                                $pppp=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",0);
    			        	$amount= $pppp['price'];
                                    $rsu=$obj->fetchDetailByIdByStatus($pro_id,"user_register_goverment","refferel_id","pstatus",1);
                                    if($rsu)
                                    {
                                    $rowu=mysqli_num_rows($rsu);
                                    echo	$rowu;
                                    }
                                ?></td>
                                            <td><?php echo $togg+$togg1; ?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
											
                                </table>
                            </div>
                        </div>
                        <?php 
                            unset($_SESSION['report0']);
                        }
                        if($_SESSION['report1']=='1')
                        {
                            
                            ?>
                            <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No </th>
                                             <th>PRO Id</th>
                                            <th>PRO Name</th>
                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
                                            <th>Total Rfferal User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        //$id=$_GET[ 'id']; 
                                        $rst1=$obj->fetchDetailByIdByStatus($_GET['pro_id'],"pro_register","id","status",1);
                                        if($rst1) { 
                                                    $ss1=0;
                                                    while($rowst1=mysqli_fetch_assoc($rst1))
                                                    { 
                                                        $ss1++; 
                                                        //$ct=$obj->fetchById($row['city_id'],"city","id");
                                                        //$block=$obj->fetchById($row['block_id'],"block","id"); ?>
                                        <tr>
                                            <td> <?php echo $ss1; ?></td>
                                              <td> <?php echo $rowst1['pro_id']; ?></td>
                                            <td><?php echo $rowst1['name']; ?></td>
                                            <td><?php echo $rowst1['branch_name']; ?></td>
                                            <td><?php echo $rowst1['ifc_code']; ?></td>
                                            <td><?php echo $rowst1['account_holder_name']; ?></td>
                                            <td><?php echo $rowst1['account_number'];	?></td>
                                		    <td><?php
                                		    $prouser1=0;
                                		    $proprice1=0;
                                		  
                                		    $rs1=$obj->fetchDetailByIdByStatus($rowst1['pro_id'],"user_register","pro_id","pstatus",1);
									if($rs1)
									{	$i=0;
										while($userpro10=mysqli_fetch_assoc($rs1))
										{	$i++;
										$puser=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",$userpro10['class']);
                			        	$proprice1= $puser['price'];
									
											  $prouser1=$prouser1+1;
											
										
										}
									} 
									 $prouser1;
								    $a1001=$prouser1*$proprice1;
								// 	//-------------gov----------
									$prouser2=0;
									$proprice2=0;
									 $pppp2=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",0);
    			        	$proprice2= $pppp2['price'];
                                    $rsu=$obj->fetchDetailByIdByStatus($rowst1['pro_id'],"user_register_goverment","refferel_id","pstatus",1);
                                    if($rsu)
                                    {
                                    $prouser2=mysqli_num_rows($rsu);
                                    	
                                    }
                                     $prouser2;
                                    $b1001=$prouser2*$proprice2;
                                //------------referal bongoshikha-----
                                $prouser3=0;
                                 $rfer=$obj->fetchDetailById(1,"user_register","pstatus");
							    if($rfer)
								{	$i=0;
									while($rowrfer=mysqli_fetch_assoc($rfer))
									{	$i++;
									        $rowrfer['pro_id'];
									        if($rowrfer['pro_id']=='')
									        {
    									        if($rowst1['pro_id']==$rowrfer['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa=$obj->fetchById($rowrfer['pro_id'],"pro_register","pro_id");
									       
									            if($usa['referby']=='pro')
									            {
									                $usa45=$obj->fetchById($usa['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa45['pro_id']==$rowst1['pro_id'])
									                    {
									                        $prouser3=$prouser3+1;
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
                                 $prouser3;
                                
                                //------------Referal By Gover-----------
                                $prouser4=0;
                                 $rfer1=$obj->fetchDetailById(1," user_register_goverment","pstatus");
							    if($rfer1)
								{	$i=0;
									while($rowrfer1=mysqli_fetch_assoc($rfer1))
									{	$i++;
									        $rowrfer1['pro_id'];
									        if($rowrfer1['pro_id']=='')
									        {
    									        if($rowst1['pro_id']==$rowst1['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa1=$obj->fetchById($rowrfer1['pro_id'],"pro_register","pro_id");
									       
									            if($usa1['referby']=='pro')
									            {
									                $usa451=$obj->fetchById($usa1['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa451['pro_id']==$rowrfer1['pro_id'])
									                    {
									                        $prouser4=$prouser4+1;
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
								echo $prouser1+$prouser2+$prouser3+$prouser4;
                                
									?></td>
                                			<td>  <?php
                                    $ref40=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",1);
                                    $c1001=$prouser3 * $ref40['price'];
                                     $ref41=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",0);
                                    $d1001=$prouser4 * $ref41['price'];
                                    $togg1;
			                echo $a1001+$b1001+$c1001+$d1001;
                            ?></td>
                                            <td><?php
                                            $prouser5=0;
                                              $rs5=$obj->fetchDetailByIdByStatusByType($rowst1['pro_id'],"user_register","pro_id","pstatus",1,"class",2);
									if($rs5)
									{	$i=0;
										while($userpro10=mysqli_fetch_assoc($rs5))
										{	$i++;
										
									
											  $prouser5=$prouser5+1;
											
										
										}
									} 
								echo $prouser5;
                                            ?> </td>
                                            
                                            <td><?php
                                            $prouser6=0;
                                              $rs6=$obj->fetchDetailByIdByStatusByType($rowst1['pro_id'],"user_register","pro_id","pstatus",1,"class",1);
									if($rs6)
									{	$i=0;
										while($userpro10=mysqli_fetch_assoc($rs6))
										{	$i++;
										
									
											  $prouser6=$prouser6+1;
											
										
										}
									} 
								echo $prouser6;
                                            ?></td>
                                            <td><?php echo $prouser2; ?></td>
                                            <td><?php echo $prouser3+$prouser4; ?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
											
                                </table>
                            </div>
                        </div>
                            <?php
                            unset($_SESSION['report1']);
                        }
                        else if($_SESSION['report2']=='2')
                        {
                            ?>
                            <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No </th>
                                             <th>PRO Id</th>
                                            <th>PRO Name</th>
                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
                                            <th>Total Rfferal User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        //$id=$_GET[ 'id']; 
                                        $rst1=$obj->fetchDetailByIdByStatus($_GET['pro_id'],"pro_register","id","status",1);
                                        if($rst1) { 
                                                    $ss1=0;
                                                    while($rowst1=mysqli_fetch_assoc($rst1))
                                                    { 
                                                        $ss1++; 
                                                        //$ct=$obj->fetchById($row['city_id'],"city","id");
                                                        //$block=$obj->fetchById($row['block_id'],"block","id"); ?>
                                        <tr>
                                            <td> <?php echo $ss1; ?></td>
                                              <td> <?php echo $rowst1['pro_id']; ?></td>
                                            <td><?php echo $rowst1['name']; ?></td>
                                            <td><?php echo $rowst1['branch_name']; ?></td>
                                            <td><?php echo $rowst1['ifc_code']; ?></td>
                                            <td><?php echo $rowst1['account_holder_name']; ?></td>
                                            <td><?php echo $rowst1['account_number'];	?></td>
                                		    <td><?php
                                		    $prouser11=0;
                                		    $proprice11=0;
                                		    $rs11=$obj->fetchDetailByIdByStatusByType($rowst1['pro_id'],"user_register","pro_id","pstatus",1,"payment_success_date",$_GET['sdate']);
									if($rs11)
									{	$i=0;
										while($userpro11=mysqli_fetch_assoc($rs11))
										{	$i++;
										$puser1=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",$userpro11['class']);
                			        	$proprice11= $puser1['price'];
									
											  $prouser11=$prouser11+1;	
										}
									} 
									 $prouser11;
								    $a10022=$prouser11*$proprice11;
								// 	//-------------gov----------
									$prouser22=0;
									$proprice22=0;
									 $pppp22=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",0);
    			        	$proprice22= $pppp22['price'];
                                    $rsu22=$obj->fetchDetailByIdByStatusByType($rowst1['pro_id'],"user_register_goverment","refferel_id","pstatus",1,"success_date",$_GET['sdate']);
                                    if($rsu22)
                                    {
                                    $prouser22=mysqli_num_rows($rsu22);
                                    	
                                    }
                                     $prouser22;
                                    $b10022=$prouser22*$proprice22;
                                //------------referal bongoshikha-----
                                $prouser33=0;
                                 $rfer33=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","payment_success_date",$_GET['sdate']);
							    if($rfer33)
								{	$i=0;
									while($rowrfer33=mysqli_fetch_assoc($rfer33))
									{	$i++;
									        $rowrfer33['pro_id'];
									        if($rowrfer33['pro_id']=='')
									        {
    									        if($rowst1['pro_id']==$rowrfer33['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa33=$obj->fetchById($rowrfer33['pro_id'],"pro_register","pro_id");
									       
									            if($usa33['referby']=='pro')
									            {
									                $usa333=$obj->fetchById($usa33['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa333['pro_id']==$rowst1['pro_id'])
									                    {
									                        $prouser33=$prouser33+1;
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
                                 $prouser33;
                                
                                //------------Referal By Gover-----------
                                $prouser44=0;
                                 $rfer44=$obj->fetchDetailByIdByStatus(1," user_register_goverment","pstatus","success_date",$_GET['sdate']);
							    if($rfer44)
								{	$i=0;
									while($rowrfer44=mysqli_fetch_assoc($rfer44))
									{	$i++;
									        $rowrfer44['pro_id'];
									        if($rowrfer44['pro_id']=='')
									        {
    									        if($rowst1['pro_id']==$rowrfer44['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa44=$obj->fetchById($rowrfer44['pro_id'],"pro_register","pro_id");
									       
									            if($usa44['referby']=='pro')
									            {
									                $usa4444=$obj->fetchById($usa1['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa4444['pro_id']==$rowrfer1['pro_id'])
									                    {
									                        $prouser44=$prouser44+1;
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
								echo $prouser11+$prouser22+$prouser33+$prouser44;
                                
									?></td>
                                			<td>  <?php
                                    $ref40=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",1);
                                    $c10022=$prouser33 * $ref40['price'];
                                     $ref41=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",0);
                                    $d10022=$prouser44 * $ref41['price'];
                                    $togg1;
			                echo $a10022+$b10022+$c10022+$d10022;
                            ?></td>
                                            <td><?php  
                                            $proprice80=0;
                                            $rs1=$obj->fetchDetailByIdByStatusByTypedate($rowst1['pro_id'],"user_register","pro_id","pstatus",1,"payment_success_date",$_GET['sdate'],"class",2);
									if($rs1)
									{	$i=0;
										while($userpro10=mysqli_fetch_assoc($rs1))
										{	$i++;
										$puser=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",$userpro10['class']);
                			        	$proprice1= $puser['price'];
									
											  $proprice80=$proprice80+1;
											
										
										}
									}
									echo $proprice80; 
									?></td>
                                            <td><?php  
                                            $proprice81=0;
                                            $rs1=$obj->fetchDetailByIdByStatusByTypedate($rowst1['pro_id'],"user_register","pro_id","pstatus",1,"payment_success_date",$_GET['sdate'],"class",1);
									if($rs1)
									{	$i=0;
										while($userpro10=mysqli_fetch_assoc($rs1))
										{	$i++;
										$puser=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",$userpro10['class']);
                			        	$proprice1= $puser['price'];
									
											  $proprice81=$proprice81+1;
											
										
										}
									}
									echo $proprice81; 
									?></td>
                                            <td><?php  echo $prouser22; ?></td>
                                            <td><?php echo $prouser33+$prouser44; ?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
											
                                </table>
                            </div>
                        </div> 
                            <?php
                        
                            unset($_SESSION['report2']);
                        }
                       else if($_SESSION['report3']=='3')
                        { ?>
                          <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No </th>
                                             <th>PRO Id</th>
                                            <th>PRO Name</th>
                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
                                            <th>Total Rfferal User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        //$id=$_GET[ 'id']; 
                                        $rst1=$obj->fetchDetailByIdByStatus($_GET['pro_id'],"pro_register","id","status",1);
                                        if($rst1) { 
                                                    $ss1=0;
                                                    while($rowst1=mysqli_fetch_assoc($rst1))
                                                    { 
                                                        $ss1++; 
                                                        //$ct=$obj->fetchById($row['city_id'],"city","id");
                                                        //$block=$obj->fetchById($row['block_id'],"block","id"); ?>
                                        <tr>
                                            <td> <?php echo $ss1; ?></td>
                                              <td> <?php echo $rowst1['pro_id']; ?></td>
                                            <td><?php echo $rowst1['name']; ?></td>
                                            <td><?php echo $rowst1['branch_name']; ?></td>
                                            <td><?php echo $rowst1['ifc_code']; ?></td>
                                            <td><?php echo $rowst1['account_holder_name']; ?></td>
                                            <td><?php echo $rowst1['account_number'];	?></td>
                                		    <td><?php
                                		    $prouser111=0;
                                		    $proprice111=0;
                                		    $rs111=$obj->fetchDetailByIdByStatus($rowst1['pro_id'],"user_register","pro_id","pstatus",1);
									if($rs111)
									{	$i=0;
										while($userpro111=mysqli_fetch_assoc($rs111))
										{	$i++;
										
										$puser11=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",$userpro111['class']);
                			        	$proprice111= $puser11['price'];
									if(strtotime($userpro111['payment_success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($userpro111['payment_success_date']))
            												{ 
            					                               
											  $prouser111=$prouser111+1;	
            												}
        												 }
										}
									} 
									 $prouser111;
								    $a10033=$prouser111*$proprice111;
								// 	//-------------gov----------
									$prouser222=0;
									$proprice222=0;
									 $pppp222=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",0);
    			        	$proprice222= $pppp222['price'];
                                    //$rsu222=$obj->fetchDetailByIdByStatus($rowst1['pro_id'],"user_register_goverment","refferel_id","pstatus",1);
                                    	
                                     $rsu222=$obj->fetchDetailByIdByStatus($rowst1['pro_id'],"user_register_goverment","refferel_id","pstatus",1);
									if($rsu222)
									{	$i2=0;
										while($userpro222=mysqli_fetch_assoc($rsu222))
										{	$i2++;
									if(strtotime($userpro222['success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($userpro222['success_date']))
            												{ 
            					                               
											  $prouser222=$prouser222+1;	
            												}
        												 }
										}
									} 
                                     $prouser222;
                                    $b10033=$prouser222*$proprice222;
                                //------------referal bongoshikha-----
                                $prouser333=0;
                                 $rfer333=$obj->fetchDetailById(1,"user_register","pstatus");
							    if($rfer333)
								{	$i3=0;
									while($rowrfer33=mysqli_fetch_assoc($rfer333))
									{	$i3++;
									        $rowrfer33['pro_id'];
									        if($rowrfer33['pro_id']=='')
									        {
    									        if($rowst1['pro_id']==$rowrfer33['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa33=$obj->fetchById($rowrfer33['pro_id'],"pro_register","pro_id");
									       
									            if($usa33['referby']=='pro')
									            {
									                $usa333=$obj->fetchById($usa33['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa333['pro_id']==$rowst1['pro_id'])
									                    {
									                        	if(strtotime($rowrfer33['payment_success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($rowrfer33['payment_success_date']))
            												{ 
									                        $prouser333=$prouser333+1;
            												}
        												 }
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
                                 $prouser333;
                                
                                //------------Referal By Gover-----------
                                $prouser444=0;
                                 $rfer444=$obj->fetchDetailById(1," user_register_goverment","pstatus");
							    if($rfer444)
								{	$i=0;
									while($rowrfer444=mysqli_fetch_assoc($rfer444))
									{	$i++;
									        $rowrfer444['pro_id'];
									        if($rowrfer444['pro_id']=='')
									        {
    									        if($rowst1['pro_id']==$rowrfer444['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa444=$obj->fetchById($rowrfer444['pro_id'],"pro_register","pro_id");
									       
									            if($usa444['referby']=='pro')
									            {
									                $usa444444=$obj->fetchById($usa444['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa444444['pro_id']==$rowrfer1['pro_id'])
									                    {
									                           	if(strtotime($rowrfer444['success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($rowrfer444['success_date']))
            												{
									                        $prouser444=$prouser444+1;
            												}
        												 }
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
								echo $prouser111+$prouser222+$prouser333+$prouser444;
                                
									?></td>
                                			<td>  <?php
                                    $ref40=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",1);
                                    $c10033=$prouser333 * $ref40['price'];
                                     $ref41=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",0);
                                    $d10044=$prouser444 * $ref41['price'];
                                  
			                echo $a10033+$b10033+$c10033+$d10044;
                            ?></td>
                                            <td><?php  
                                            $proprice80=0;
                                            $rs1=$obj->fetchDetailByIdByStatusByType($rowst1['pro_id'],"user_register","pro_id","pstatus",1,"class",2);
									if($rs1)
									{	$i=0;
										while($userpro10=mysqli_fetch_assoc($rs1))
										{	$i++;
										$puser=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",$userpro10['class']);
                			        	$proprice1= $puser['price'];
									if(strtotime($userpro10['payment_success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($userpro10['payment_success_date']))
            												{
											  $proprice80=$proprice80+1;
            												}
        												 }
											
										
										}
									}
									echo $proprice80; 
									?></td>
                                            <td><?php  
                                            $proprice81=0;
                                            $rs1=$obj->fetchDetailByIdByStatusByType($rowst1['pro_id'],"user_register","pro_id","pstatus",1,"class",1);
									if($rs1)
									{	$i=0;
										while($userpro10=mysqli_fetch_assoc($rs1))
										{	$i++;
										$puser=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",$userpro10['class']);
                			        	$proprice1= $puser['price'];
										if(strtotime($userpro10['payment_success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($userpro10['payment_success_date']))
            												{
											  $proprice81=$proprice81+1;
            												}
        												 }
											
										
										}
									}
									echo $proprice81; 
									?></td>
                                            <td><?php  echo $prouser222; ?></td>
                                            <td><?php echo $prouser333+$prouser444; ?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
											
                                </table>
                            </div>
                        </div> 
                        <?php
                        
                            unset($_SESSION['report3']);
                        }
                        else if($_SESSION['report4']=='4')
                        { ?>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                             <th>PRO Id</th>
                                            <th>PRO Name</th>
                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
                                            <th>Total Rfferal User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        //$id=$_GET[ 'id']; 
                                        $rst=$obj->fetchAllDetailByStatus_pro("pro_register");
                                        if($rst) { 
                                                    $ss=0;
                                                    while($rowst=mysqli_fetch_assoc($rst))
                                                    { 
                                                        $ss++; 
                                                        //$ct=$obj->fetchById($row['city_id'],"city","id");
                                                        //$block=$obj->fetchById($row['block_id'],"block","id"); ?>
                                        <tr>
                                            <td> <?php echo $ss; ?></td>
                                              <td> <?php echo $rowst['pro_id']; ?></td>
                                            <td><?php echo $rowst['name']; ?></td>
                                            <td><?php echo $rowst['branch_name']; ?></td>
                                            <td><?php echo $rowst['ifc_code']; ?></td>
                                            <td><?php echo $rowst['account_holder_name']; ?></td>
                                            <td><?php echo $rowst['account_number'];	?></td>
                                            
                                            
                                            
                                		<td><?php
                                		$pro_id=$rowst['pro_id'];
                            $usy=0;
                            $class=0;
                            $rowGu=0;
                            $togg=0;
                            $togg1=0;
                                	$rs=$obj->fetchDetailByIdByStatusByType($pro_id,"user_register","pro_id","pstatus",1,"payment_success_date",$_GET['sdate']);
									if($rs)
									{	$i=0;
										while($row10=mysqli_fetch_assoc($rs))
										{	$i++;
										
										$pppp=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",$row10['class']);
			        	$class= $pppp['price'];
									
											  $usy=$usy+1;
											
										
										}
									}
									  $usy;
									 
								
                                $pppp=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",0);
    			        	$amountG= $pppp['price'];
                                    $rsu=$obj->fetchDetailByIdByStatusByType($pro_id,"user_register_goverment","refferel_id","pstatus",1,"success_date",$_GET['sdate']);
                                    if($rsu)
                                    {
                                    	while($row44G=mysqli_fetch_assoc($rsu))
                                    	$rowGu=$rowGu+1;
                                    }
                                    
                                    
                                    
                                    
                                $rfer=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","payment_success_date",$_GET['sdate']);
							    if($rfer)
								{	$i=0;
									while($rowrfer=mysqli_fetch_assoc($rfer))
									{	$i++;
									        $rowrfer['pro_id'];
									        if($rowrfer['pro_id']=='')
									        {
    									        if($pro_id==$rowrfer['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa=$obj->fetchById($rowrfer['pro_id'],"pro_register","pro_id");
									       
									            if($usa['referby']=='pro')
									            {
									                $usa45=$obj->fetchById($usa['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa45['pro_id']==$pro_id)
									                    {
									                        $togg=$togg+1;
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
								//-----------
								 $rfer=$obj->fetchDetailByIdByStatus(1," user_register_goverment","pstatus","success_date",$_GET['sdate']);
							    if($rfer)
								{	$i=0;
									while($rowrfer=mysqli_fetch_assoc($rfer))
									{	$i++;
									        $rowrfer['pro_id'];
									        if($rowrfer['pro_id']=='')
									        {
    									        if($pro_id==$rowrfer['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa=$obj->fetchById($rowrfer['pro_id'],"pro_register","pro_id");
									       
									            if($usa['referby']=='pro')
									            {
									                $usa45=$obj->fetchById($usa['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa45['pro_id']==$pro_id)
									                    {
									                        $togg1=$togg1+1;
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
                               echo $usy+$rowGu+$togg+$togg1; 
                                ?></td>
                                			<td>  <?php
                              
                                    $a=$amountG*$rowGu;
                                    $b= $class* $usy;
                                    $ref40=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",1);
                                    $c=$togg * $ref40['price'];
                                     $ref41=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",0);
                                    $d=$togg1 * $ref41['price'];
                                    $togg1;
			                echo $a+$b+$c+$d;
                            ?></td>
                                            <td> <?php
                                	$rowu=0;
					$rsu=$obj->fetchDetailByIdByStatusByTypedate($pro_id,"user_register","pro_id","pstatus",1,"class",2,"payment_success_date",$_GET['sdate']);
					if($rsu)
					{
				$rowu=mysqli_num_rows($rsu);
			echo	$rowu;
					}
                            ?> </td>
                                            
                                            <td>
                                                <?php
                                	$rowu1=0;
					$rsu1=$obj->fetchDetailByIdByStatusByTypedate($pro_id,"user_register","pro_id","pstatus",1,"class",1,"payment_success_date",$_GET['sdate']);
					if($rsu1)
					{
				$rowu1=mysqli_num_rows($rsu1);
			echo	$rowu1;
					}
                            ?> 
                                            </td>
                                            <td> <?php 
                                $pppp=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",0);
    			        	$amount= $pppp['price'];
                                    $rsu=$obj->fetchDetailByIdByStatusByType($pro_id,"user_register_goverment","refferel_id","pstatus",1,"success_date",$_GET['sdate']);
                                    if($rsu)
                                    {
                                    $rowu=mysqli_num_rows($rsu);
                                    echo	$rowu;
                                    }
                                ?></td>
                                            <td><?php echo $togg+$togg1; ?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
											
                                </table>
                            </div>
                        </div>
                        
                        <?php
                            unset($_SESSION['report4']);
                        }
                         else if($_SESSION['report5']=='5')
                        {
                            ?>
                            <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                             <th>PRO Id</th>
                                            <th>PRO Name</th>
                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
                                            <th>Total Rfferal User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        //$id=$_GET[ 'id']; 
                                        $rst=$obj->fetchAllDetailByStatus_pro("pro_register");
                                        if($rst) { 
                                                    $ss=0;
                                                    while($rowst=mysqli_fetch_assoc($rst))
                                                    { 
                                                        $ss++; 
                                                        //$ct=$obj->fetchById($row['city_id'],"city","id");
                                                        //$block=$obj->fetchById($row['block_id'],"block","id"); ?>
                                        <tr>
                                            <td> <?php echo $ss; ?></td>
                                              <td> <?php echo $rowst['pro_id']; ?></td>
                                            <td><?php echo $rowst['name']; ?></td>
                                            <td><?php echo $rowst['branch_name']; ?></td>
                                            <td><?php echo $rowst['ifc_code']; ?></td>
                                            <td><?php echo $rowst['account_holder_name']; ?></td>
                                            <td><?php echo $rowst['account_number'];	?></td>
                                            
                                            
                                            
                                		<td><?php
                                		$pro_id=$rowst['pro_id'];
                            $usy=0;
                            $class=0;
                            $rowGu=0;
                            $togg=0;
                            $togg1=0;
                                	$rs=$obj->fetchDetailByIdByStatus($pro_id,"user_register","pro_id","pstatus",1);
									if($rs)
									{	$i=0;
										while($row10=mysqli_fetch_assoc($rs))
										{	$i++;
										
										$pppp=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",$row10['class']);
			        	$class= $pppp['price'];
									 if(strtotime($row10['payment_success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($row10['payment_success_date']))
            												{ 
											                    $usy=$usy+1;
            												}
        												 }
											
										
										}
									}
									  $usy;
									 
								
                                $pppp=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",0);
    			        	$amountG= $pppp['price'];
                                    $rsu=$obj->fetchDetailByIdByStatus($pro_id,"user_register_goverment","refferel_id","pstatus",1);
                                    if($rsu)
                                    {
                                        	while($rowG=mysqli_fetch_assoc($rsu))
										{
										    if(strtotime($rowG['success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($rowG['success_date']))
            												{ 
										    $rowGu=$rowGu+1;
            												}
        												 }
                                   
										}
                                    }
                                    
                                    
                                    
                                $rfer=$obj->fetchDetailById(1,"user_register","pstatus");
							    if($rfer)
								{	$i=0;
									while($rowrfer=mysqli_fetch_assoc($rfer))
									{	$i++;
									        $rowrfer['pro_id'];
									        if($rowrfer['pro_id']=='')
									        {
    									        if($pro_id==$rowrfer['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa=$obj->fetchById($rowrfer['pro_id'],"pro_register","pro_id");
									       
									            if($usa['referby']=='pro')
									            {
									                $usa45=$obj->fetchById($usa['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa45['pro_id']==$pro_id)
									                    {
									                          if(strtotime($rowrfer['payment_success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($rowrfer['payment_success_date']))
            												{ 
									                        $togg=$togg+1;
            												}
        												 }
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
								//-----------
								 $rfer=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
							    if($rfer)
								{	$i=0;
									while($rowrfer=mysqli_fetch_assoc($rfer))
									{	$i++;
									        $rowrfer['pro_id'];
									        if($rowrfer['pro_id']=='')
									        {
    									        if($pro_id==$rowrfer['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa=$obj->fetchById($rowrfer['pro_id'],"pro_register","pro_id");
									       
									            if($usa['referby']=='pro')
									            {
									                $usa45=$obj->fetchById($usa['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa45['pro_id']==$pro_id)
									                    {
									                        if(strtotime($rowrfer['success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($rowrfer['success_date']))
            												{ 
									                        $togg1=$togg1+1;
            												}
            												
        												 }
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
                               echo $usy+$rowGu+$togg+$togg1; 
                                ?></td>
                                			<td>  <?php
                              
                                    $a=$amountG*$rowGu;
                                    $b= $class* $usy;
                                    $ref40=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",1);
                                    $c=$togg * $ref40['price'];
                                     $ref41=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",0);
                                    $d=$togg1 * $ref41['price'];
                                    $togg1;
			                echo $a+$b+$c+$d;
                            ?></td>
                                            <td> <?php
                                	$rowu=0;
					
						$rs00=$obj->fetchDetailByIdByStatus($pro_id,"user_register","pro_id","pstatus",1);
									if($rs00)
									{	$i=0;
										while($row100=mysqli_fetch_assoc($rs00))
										{	$i++;
										
										$pppp=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",$row100['class']);
			        	$class= $pppp['price'];
									 if(strtotime($row100['payment_success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($row100['payment_success_date']))
            												{ 
											                    $rowu=$rowu+1;
            												}
        												 }
											
										
										}
									}
								echo	  $rowu;
                            ?> </td>
                                            
                                            <td>
                                                <?php
                                	$rowu1=0;
					$rsu1=$obj->fetchDetailByIdByStatusByType($pro_id,"user_register","pro_id","pstatus",1,"class",2);
				//	$rs=$obj->fetchDetailByIdByStatus($pro_id,"user_register","pro_id","pstatus",1);
									if($rsu1)
									{	$i=0;
										while($row10=mysqli_fetch_assoc($rsu1))
										{	$i++;
										
										
									 if(strtotime($row10['payment_success_date'])<=strtotime($_GET['edate']))
        												 {
            												if(strtotime($_GET['sdate'])<=strtotime($row10['payment_success_date']))
            												{ 
											                    $rowu1=$rowu1+1;
            												}
        												 }
											
										
										}
									}
									 echo $rowu1;
                            ?> 
                                            </td>
                                            <td> <?php echo $rowGu; ?></td>
                                            <td><?php echo $togg+$togg1; ?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
											
                                </table>
                            </div>
                        </div>
                            <?php 
                            unset($_SESSION['report5']);
                        }
                        
                        else
                        { ?>
                         <div class="panel-body">
                            <div class="table-responsive">
                                <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                    <thead>
                                        <tr>
                                            <th>S No</th>
                                             <th>PRO Id</th>
                                            <th>PRO Name</th>
                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
                                            <th>Total Rfferal User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        //$id=$_GET[ 'id']; 
                                        $rst=$obj->fetchAllDetailByStatus_pro("pro_register");
                                        if($rst) { 
                                                    $ss=0;
                                                    while($rowst=mysqli_fetch_assoc($rst))
                                                    { 
                                                        $ss++; 
                                                        //$ct=$obj->fetchById($row['city_id'],"city","id");
                                                        //$block=$obj->fetchById($row['block_id'],"block","id"); ?>
                                        <tr>
                                            <td> <?php echo $ss; ?></td>
                                              <td> <?php echo $rowst['pro_id']; ?></td>
                                            <td><?php echo $rowst['name']; ?></td>
                                            <td><?php echo $rowst['branch_name']; ?></td>
                                            <td><?php echo $rowst['ifc_code']; ?></td>
                                            <td><?php echo $rowst['account_holder_name']; ?></td>
                                            <td><?php echo $rowst['account_number'];	?></td>
                                            
                                            
                                            
                                		<td><?php
                                		$pro_id=$rowst['pro_id'];
                            $usy=0;
                            $class=0;
                            $rowGu=0;
                            $togg=0;
                            $togg1=0;
                                	$rs=$obj->fetchDetailByIdByStatus($pro_id,"user_register","pro_id","pstatus",1);
									if($rs)
									{	$i=0;
										while($row10=mysqli_fetch_assoc($rs))
										{	$i++;
										
										$pppp=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",$row10['class']);
			        	$class= $pppp['price'];
									
											  $usy=$usy+1;
											
										
										}
									}
									  $usy;
									 
								
                                $pppp=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",0);
    			        	$amountG= $pppp['price'];
                                    $rsu=$obj->fetchDetailByIdByStatus($pro_id,"user_register_goverment","refferel_id","pstatus",1);
                                    if($rsu)
                                    {
                                    $rowGu=mysqli_num_rows($rsu);
                                    	$rowGu;
                                    }
                                    
                                    
                                    
                                    
                                $rfer=$obj->fetchDetailById(1,"user_register","pstatus");
							    if($rfer)
								{	$i=0;
									while($rowrfer=mysqli_fetch_assoc($rfer))
									{	$i++;
									        $rowrfer['pro_id'];
									        if($rowrfer['pro_id']=='')
									        {
    									        if($pro_id==$rowrfer['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa=$obj->fetchById($rowrfer['pro_id'],"pro_register","pro_id");
									       
									            if($usa['referby']=='pro')
									            {
									                $usa45=$obj->fetchById($usa['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa45['pro_id']==$pro_id)
									                    {
									                        $togg=$togg+1;
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
								//-----------
								 $rfer=$obj->fetchDetailById(1," user_register_goverment","pstatus");
							    if($rfer)
								{	$i=0;
									while($rowrfer=mysqli_fetch_assoc($rfer))
									{	$i++;
									        $rowrfer['pro_id'];
									        if($rowrfer['pro_id']=='')
									        {
    									        if($pro_id==$rowrfer['pro_id'])
    									        {
    									            
    									        }
									        }
									        else
									        {
									            
									            $usa=$obj->fetchById($rowrfer['pro_id'],"pro_register","pro_id");
									       
									            if($usa['referby']=='pro')
									            {
									                $usa45=$obj->fetchById($usa['refer_ex'],"pro_register","id");
                                                        // echo $usa45['pro_id'];
                                                        // echo $pro_id;
									                 if($usa45['pro_id']==$pro_id)
									                    {
									                        $togg1=$togg1+1;
									                    }
									                
									            }
									             else
									            {
									               
									            }
									            
									        }
									}
								}
                               echo $usy+$rowGu+$togg+$togg1; 
                                ?></td>
                                			<td>  <?php
                              
                                    $a=$amountG*$rowGu;
                                    $b= $class* $usy;
                                    $ref40=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",1);
                                    $c=$togg * $ref40['price'];
                                     $ref41=$obj->fetchByIdByStatus(5,"markting_price","type_user","class",0);
                                    $d=$togg1 * $ref41['price'];
                                    $togg1;
			                echo $a+$b+$c+$d;
                            ?></td>
                                            <td> <?php
                                	$rowu=0;
					$rsu=$obj->fetchDetailByIdByStatusByType($pro_id,"user_register","pro_id","pstatus",1,"class",2);
					if($rsu)
					{
				$rowu=mysqli_num_rows($rsu);
			echo	$rowu;
					}
                            ?> </td>
                                            
                                            <td>
                                                <?php
                                	$rowu1=0;
					$rsu1=$obj->fetchDetailByIdByStatusByType($pro_id,"user_register","pro_id","pstatus",1,"class",1);
					if($rsu1)
					{
				$rowu1=mysqli_num_rows($rsu1);
			echo	$rowu1;
					}
                            ?> 
                                            </td>
                                            <td> <?php 
                                $pppp=$obj->fetchByIdByStatus(3,"markting_price","type_user","class",0);
    			        	$amount= $pppp['price'];
                                    $rsu=$obj->fetchDetailByIdByStatus($pro_id,"user_register_goverment","refferel_id","pstatus",1);
                                    if($rsu)
                                    {
                                    $rowu=mysqli_num_rows($rsu);
                                    echo	$rowu;
                                    }
                                ?></td>
                                            <td><?php echo $to+$to1; ?></td>
                                        </tr>
                                        <?php } } ?>
                                    </tbody>
											
                                </table>
                            </div>
                        </div>
                        <?php 
                        } ?>
                    </div>
                </div>
            </div>
		
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
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
			<?php 
			 
			if(@$_SESSION['report1']=='1') {
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
                                <form action="final_report_new.php" method="GET">
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
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
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
                                                         $block=$row['block_id'];
                                                        
                                                        ?>
                                        <tr>
                                            <td> <?php echo $i;   ?></td>
                                            <td><?php echo $row['name']; ?></td>
											  <td><?php echo $ct['city']; ?></td>
											    <td><?php echo $block1['block']; ?></td>
                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?></td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
                                            <td><?php echo $row['account_number'];	?></td>
                                			<td>  <?php
    				$rowu=0;
    				$claprice=0;
    					$rowu1=0;
    				$claprice1=0;
    							
    				$rs=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
						if($rs)
						{	$i=0;
							while($row=mysqli_fetch_assoc($rs))
							{
							    //print_r($row);
							    $pp=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",$row['class']);
							    $claprice=$pp['price'];
							    
							    $rowu=$rowu+1;
							}
						}
						
							$rs=$obj->fetchDetailByIdByStatus00($block,"user_register_goverment","block","pstatus",1);
						if($rs)
						{	$i=0;
							while($row=mysqli_fetch_assoc($rs))
							{
							    
							    $rowu1=$rowu1+1;
							}
						}
												
    						echo $rowu+$rowu1;	
 
    			 ?></td>
                                			<td> <?php
                                    $up2=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",0);
                                    $x1=$rowu*$claprice;
                                  $up22=$up2['price'];
    					              $y1=$rowu1*$up22;	
    					                 echo  $x1+$y1;
    					                  ?></td>
                                            <td><?php
                                            $class10=0;
                                            $rs1=$obj->fetchDetailByIdByStatusByType($block,"user_register","block","pstatus",1,"class",2);
						if($rs1)
						{	$i=0;
							while($row1=mysqli_fetch_assoc($rs1))
							{
							    $class10=$class10+1;
							}
						}
						echo $class10;
						?></td>
                                            <td><?php
                                            $class9=0;
                                            $rs2=$obj->fetchDetailByIdByStatusByType($block,"user_register","block","pstatus",1,"class",1);
						if($rs2)
						{	$i=0;
							while($row2=mysqli_fetch_assoc($rs2))
							{
							    $class9=$class9+1;
							}
						}
						echo $class9;
						?></td>
                                            
                        <td> <?php echo $rowu1; ?></td>
                                        </tr>
                                        <?php } } ?>
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				<?php unset($_SESSION['report1']);}
				else if($_SESSION['report2']=='2')
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
                                <form action="final_report_new.php" method="GET">
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
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                        $rs5=$obj->fetchAllDetailByStatus($table); 
                                        if($rs5) 
                                        { 
                                            $i=0; while($row5=mysqli_fetch_assoc($rs5)) 
                                            { $i++;
                                       
                                        $rs=$obj->fetchDetailByIdByStatus($row5['id'],"subagent","block_id","status",1);
                                        if($rs) { 
                                                    $i=0;
                                                    while($row=mysqli_fetch_assoc($rs))
                                                    { $i++; 
                                                        $ct=$obj->fetchById($row['city_id'],"city","id");
                                                        $block1=$obj->fetchById($row['block_id'],"block","id"); 
                                                         $block=$row['block_id'];
                                                        
                                                        ?>
                                        <tr>
                                            <td> <?php echo $i;   ?></td>
                                            <td><?php echo $row['name']; ?></td>
											  <td><?php echo $ct['city']; ?></td>
											    <td><?php echo $block1['block']; ?></td>
                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?></td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
                                            <td><?php echo $row['account_number'];	?></td>
                                			<td>  <?php
    				$rowu=0;
    				$claprice=0;
    					$rowu1=0;
    				$claprice1=0;
    							
    				$rs=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
						if($rs)
						{	$i=0;
							while($row=mysqli_fetch_assoc($rs))
							{
							    //print_r($row);
							    $pp=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",$row['class']);
							    $claprice=$pp['price'];
							    
							    $rowu=$rowu+1;
							}
						}
						
							$rs=$obj->fetchDetailByIdByStatus00($block,"user_register_goverment","block","pstatus",1);
						if($rs)
						{	$i=0;
							while($row=mysqli_fetch_assoc($rs))
							{
							    
							    $rowu1=$rowu1+1;
							}
						}
												
    						echo $rowu+$rowu1;	
 
    			 ?></td>
                                			<td> <?php
                                    $up2=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",0);
                                    $x1=$rowu*$claprice;
                                  $up22=$up2['price'];
    					              $y1=$rowu1*$up22;	
    					                 echo  $x1+$y1;
    					                  ?></td>
                                            <td><?php
                                            $class10=0;
                                            $rs1=$obj->fetchDetailByIdByStatusByType($block,"user_register","block","pstatus",1,"class",2);
						if($rs1)
						{	$i=0;
							while($row1=mysqli_fetch_assoc($rs1))
							{
							    $class10=$class10+1;
							}
						}
						echo $class10;
						?></td>
                                            <td><?php
                                            $class9=0;
                                            $rs2=$obj->fetchDetailByIdByStatusByType($block,"user_register","block","pstatus",1,"class",1);
						if($rs2)
						{	$i=0;
							while($row2=mysqli_fetch_assoc($rs2))
							{
							    $class9=$class9+1;
							}
						}
						echo $class9;
						?></td>
                                            
                        <td> <?php echo $rowu1; ?></td>
                                        </tr>
                                        <?php } } 
                                             }
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
				
				    unset($_SESSION['report2']);
				}
					else if($_SESSION['report3']=='3')
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
                                <form action="final_report_new.php" method="GET">
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
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                
                                        $rs=$obj->fetchDetailByIdByStatus($_GET['id'],"subagent","block_id","status",1);
                                        if($rs) { 
                                                    $i=0;
                                                    while($row=mysqli_fetch_assoc($rs))
                                                    { $i++; 
                                                        $ct=$obj->fetchById($row['city_id'],"city","id");
                                                        $block1=$obj->fetchById($row['block_id'],"block","id"); 
                                                         $block=$row['block_id'];
                                                        
                                                        ?>
                                        <tr>
                                            <td> <?php echo $i;   ?></td>
                                            <td><?php echo $row['name']; ?></td>
											  <td><?php echo $ct['city']; ?></td>
											    <td><?php echo $block1['block']; ?></td>
                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?></td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
                                            <td><?php echo $row['account_number'];	?></td>
                                			<td>  <?php
    				$rowu=0;
    				$claprice=0;
    					$rowu1=0;
    				$claprice1=0;
    							
    				$rs=$obj->fetchDetailByIdByStatus($block,"user_register","block","pstatus",1);
						if($rs)
						{	$i=0;
							while($row=mysqli_fetch_assoc($rs))
							{
							    //print_r($row);
							    $pp=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",$row['class']);
							    $claprice=$pp['price'];
							    
							    $rowu=$rowu+1;
							}
						}
						
							$rs=$obj->fetchDetailByIdByStatus00($block,"user_register_goverment","block","pstatus",1);
						if($rs)
						{	$i=0;
							while($row=mysqli_fetch_assoc($rs))
							{
							    
							    $rowu1=$rowu1+1;
							}
						}
												
    						echo $rowu+$rowu1;	
 
    			 ?></td>
                                			<td> <?php
                                    $up2=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",0);
                                    $x1=$rowu*$claprice;
                                  $up22=$up2['price'];
    					              $y1=$rowu1*$up22;	
    					                 echo  $x1+$y1;
    					                  ?></td>
                                            <td><?php
                                            $class10=0;
                                            $rs1=$obj->fetchDetailByIdByStatusByType($block,"user_register","block","pstatus",1,"class",2);
						if($rs1)
						{	$i=0;
							while($row1=mysqli_fetch_assoc($rs1))
							{
							    $class10=$class10+1;
							}
						}
						echo $class10;
						?></td>
                                            <td><?php
                                            $class9=0;
                                            $rs2=$obj->fetchDetailByIdByStatusByType($block,"user_register","block","pstatus",1,"class",1);
						if($rs2)
						{	$i=0;
							while($row2=mysqli_fetch_assoc($rs2))
							{
							    $class9=$class9+1;
							}
						}
						echo $class9;
						?></td>
                                            
                        <td> <?php echo $rowu1; ?></td>
                                        </tr>
                                        <?php } } 
                                      
                                        ?>
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				<?php
				    
			unset($_SESSION['report3']);	}
			else if($_SESSION['report4']=='4')
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
                                <form action="final_report_new.php" method="GET">
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
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                // echo $_GET['block'];
                                // echo $_GET['sdate'];
                                // die();
                                        $rs=$obj->fetchDetailByIdByStatus($_GET['block'],"subagent","block_id","status",1);
                                        if($rs) { 
                                                    $i=0;
                                                    while($row=mysqli_fetch_assoc($rs))
                                                    { $i++; 
                                                        $ct=$obj->fetchById($row['city_id'],"city","id");
                                                        $block1=$obj->fetchById($row['block_id'],"block","id"); 
                                                         $block=$row['block_id'];
                                                        $sdate=$_GET['sdate'];
                                                        ?>
                                        <tr>
                                            <td> <?php echo $i;   ?></td>
                                            <td><?php echo $row['name']; ?></td>
											  <td><?php echo $ct['city']; ?></td>
											    <td><?php echo $block1['block']; ?></td>
                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?></td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
                                            <td><?php echo $row['account_number'];	?></td>
                                			<td>  <?php
    				$rowu21=0;
    				$claprice21=0;
    					$rowu22=0;
    				$claprice1=0;
    							
    				$rs=$obj->fetchDetailByIdByStatusByType($block,"user_register","block","pstatus",1,"payment_success_date",$sdate);
						if($rs)
						{	$i=0;
							while($row=mysqli_fetch_assoc($rs))
							{
							    //print_r($row);
							    $pp21=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",$row['class']);
							    $claprice21=$pp21['price'];
							    
							    $rowu21=$rowu21+1;
							}
						}
						
							$rs=$obj->fetchDetailByIdByStatusByType($block,"user_register_goverment","block","pstatus",1,"success_date",$sdate);
						if($rs)
						{	$i=0;
							while($row=mysqli_fetch_assoc($rs))
							{
							    
							    $rowu22=$rowu22+1;
							}
						}
												
    						echo $rowu21+$rowu22;	
 
    			 ?></td>
                                			<td> <?php
                                    $up2=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",0);
                                    $x1=$rowu*$claprice;
                                  $up22=$up2['price'];
    					              $y1=$rowu1*$up22;	
    					                 echo  $x1+$y1;
    					                  ?></td>
                                            <td><?php
                                            $class10=0;
                                            $rs1=$obj->fetchDetailByIdByStatusByType($block,"user_register","block","pstatus",1,"class",2);
						if($rs1)
						{	$i=0;
							while($row1=mysqli_fetch_assoc($rs1))
							{
							    $class10=$class10+1;
							}
						}
						echo $class10;
						?></td>
                                            <td><?php
                                            $class9=0;
                                            $rs2=$obj->fetchDetailByIdByStatusByType($block,"user_register","block","pstatus",1,"class",1);
						if($rs2)
						{	$i=0;
							while($row2=mysqli_fetch_assoc($rs2))
							{
							    $class9=$class9+1;
							}
						}
						echo $class9;
						?></td>
                                            
                        <td> <?php echo $rowu1; ?></td>
                                        </tr>
                                        <?php } } 
                                      
                                        ?>
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			    <?php 
				unset($_SESSION['report4']);
			    
			}
			else if($_SESSION['report5']=='5')
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
                                <form action="final_report_new.php" method="GET">
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
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php  
                                      $block55=$_GET['block'];
                                        $rs=$obj->fetchDetailById($block55,"subagent","block_id");
                                        if($rs) { 
                                                    $i=0;
                                                    while($row=mysqli_fetch_assoc($rs))
                                                    { $i++; 
                                                        $ct=$obj->fetchById($row['city_id'],"city","id");
                                                        $block1=$obj->fetchById($row['block_id'],"block","id"); 
                                                         $block=$row['block_id'];
                                                        $sdate=$_GET['sdate'];
                                                        $edate=$_GET['edate'];
                                                        ?>
                                        <tr>
                                            <td> <?php echo $i;   ?></td>
                                            <td><?php echo $row['name']; ?></td>
											  <td><?php echo $ct['city']; ?></td>
											    <td><?php echo $block1['block']; ?></td>
                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?></td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
                                            <td><?php echo $row['account_number'];	?></td>
                                			<td>  <?php
                                			$ss555=0;
                                			$ss5551=0;
                                			$dpric_cls=0;
											$sk=$obj->fetchtodateblock858585858("user_register",$block);
												if($sk)
												{	$s=0;
													while($rowsk=mysqli_fetch_assoc($sk))
													{	$s++;
        												 if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
        												 {
            												if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
            												{ 
            					                                 $ss555=$ss555+1;
            					                                 $up24=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",$rowsk['class']);
            					                                  $dpric_cls=$up24['price'];
            												}
													    }
													}
												}
												$sk1=$obj->fetchtodateblock858585858("user_register_goverment",$block);
												if($sk1)
												{	$s=0;
													while($rowsk1=mysqli_fetch_assoc($sk1))
													{	$s++;
        												 if(strtotime($rowsk1['success_date'])<=strtotime($edate))
        												 {
            												if(strtotime($sdate)<=strtotime($rowsk1['success_date']))
            												{ 
            					                                 $ss5551=$ss5551+1;
            					                                
            												}
													    }
													}
												}
												echo $ss555+$ss5551;
												?></td>
                                			<td><?php
                                    $up21=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",0);
                                    $x21=$ss555*$dpric_cls;
                                  $up211=$up21['price'];
    					              $y21=$ss5551*$up211;	
    					                 echo  $x21+$y21;
    					                  ?> </td>
                                            <td><?php 
                                            $ss5552=0;
                                            $sk=$obj->fetchtodateblock858585858class("user_register",$block,2);
												if($sk)
												{	$s=0;
													while($rowsk=mysqli_fetch_assoc($sk))
													{	$s++;
        												 if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
        												 {
            												if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
            												{ 
            					                                 $ss5552=$ss5552+1;
            												}
													    }
													}
												}
												echo $ss5552;
                                            ?></td>
                                            <td><?php 
                                            $ss5552=0;
                                            $sk=$obj->fetchtodateblock858585858class("user_register",$block,1);
												if($sk)
												{	$s=0;
													while($rowsk=mysqli_fetch_assoc($sk))
													{	$s++;
        												 if(strtotime($rowsk['payment_success_date'])<=strtotime($edate))
        												 {
            												if(strtotime($sdate)<=strtotime($rowsk['payment_success_date']))
            												{ 
            					                                 $ss5552=$ss5552+1;
            												}
													    }
													}
												}
												echo $ss5552;
                                            ?></td>
                                            
                        <td><?php echo $ss5551; ?></td>
                                        </tr>
                                        <?php } } 
                                      
                                        ?>
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			    <?php
			    
		unset($_SESSION['report5']);
			}
			else if($_SESSION['report6']=='6')
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
                                <form action="final_report_new.php" method="GET">
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
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
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
                                                         $block=$row['block_id'];
                                                        
                                                        ?>
                                        <tr>
                                            <td> <?php echo $i;   ?></td>
                                            <td><?php echo $row['name']; ?></td>
											  <td><?php echo $ct['city']; ?></td>
											    <td><?php echo $block1['block']; ?></td>
                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?></td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
                                            <td><?php echo $row['account_number'];	?></td>
                                			<td> <?php
    				$usersalld=0;
    				$pricealld=0;
    					$usersalld1=0;
    				$pricealld1=0;
    							
    				$rsalld=$obj->fetchDetailByIdByStatusByType($block,"user_register","block","pstatus",1,"payment_success_date",$_GET['sdate']);
						if($rsalld)
						{	$i=0;
							while($rowalld=mysqli_fetch_assoc($rsalld))
							{
							    //print_r($row);
							    $ppalld=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",$rowalld['class']);
							    $pricealld=$ppalld['price'];
							    
							    $usersalld=$usersalld+1;
							}
						}
						
							$rsalld1=$obj->fetchDetailByIdByStatusByType($block,"user_register_goverment","block","pstatus",1,"success_date",$_GET['sdate']);
						if($rsalld1)
						{	$i=0;
							while($rowalld1=mysqli_fetch_assoc($rsalld1))
							{
							    
							    $usersalld1=$usersalld1+1;
							}
						}
												
    					
    				echo $usersalld+$usersalld1;

    			 ?> </td>
                                			<td> <?php
                                  $up200d=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",0);
                                  $xd1=$usersalld*$pricealld;
    					          $yd1=$usersalld1*$up200d['price'];
    					          echo  $xd1+$yd1;
    					                  ?></td>
                                            <td><?php
                                            $classd10=0;
                                            $rs1d=$obj->fetchDetailByIdByStatusByTypedate($block,"user_register","block","pstatus",1,"class",2,"payment_success_date",$_GET['sdate']);
						if($rs1d)
						{	$i=0;
							while($row1=mysqli_fetch_assoc($rs1d))
							{
							    $classd10=$classd10+1;
							}
						}
						echo $classd10;
						?></td>
                                            <td><?php
                                            $classd9=0;
                                            $rs2d=$obj->fetchDetailByIdByStatusByTypedate($block,"user_register","block","pstatus",1,"class",1,"payment_success_date",$_GET['sdate']);
						if($rs2d)
						{	$i=0;
							while($row2=mysqli_fetch_assoc($rs2d))
							{
							    $classd9=$classd9+1;
							}
						}
						echo $classd9;
						?></td>
                                            
                        <td> <?php  echo $usersalld1; ?></td>
                                        </tr>
                                        <?php } } ?>
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
		<?php
		unset($_SESSION['report6']);
		}
			else if($_SESSION['report7']=='7')
			{
			    $_SESSION['report7']; 
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
                                <form action="final_report_new.php" method="GET">
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
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
									//$tu=0;
									 
									 //$_SESSION['report'];
									 @$sdate=$_GET['sdate'];
									 @$edate=$_GET['edate'];
								
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
											<td><?php //echo $ct['city']; ?></td>
											<td><?php echo $rowde1['block']; ?></td>
                                            <td><?php echo $rowde1['branch_name']; ?></td>
                                            <td><?php echo $rowde1['ifc_code']; ?></td>
                                            <td><?php echo $rowde1['account_holder_name']; ?></td>
                                            <td><?php echo $rowde1['account_number'];	?></td>
                                            <td><?php $block1=$rowde1['block_id'];
											$tu1=0;
												$tu2=0;
												$priceall55=0;
											$abb=$obj->fetchtodateblock858585858("user_register",$block1);
												if($abb)
												{	$aa=0;
													while($rowabb=mysqli_fetch_assoc($abb))
													{	$aa++;
														if(strtotime($rowabb['payment_success_date'])<=strtotime($edate))
        												 {
            												if(strtotime($sdate)<=strtotime($rowabb['payment_success_date']))
            												{ 
            												  
            												    $up2001d2=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",$rowabb['class']);
            													$priceall55=	$up2001d2['price'];
            														 $tu1=$tu1+1;
            												}
													    }
													}
												}
													$abb=$obj->fetchtodateblock858585858("user_register_goverment",$block1);
												if($abb)
												{	$aa=0;
													while($rowabb=mysqli_fetch_assoc($abb))
													{	$aa++;
														if(strtotime($rowabb['success_date'])<=strtotime($edate))
        												 {
            												if(strtotime($sdate)<=strtotime($rowabb['success_date']))
            												{ 
            												  
            												    
            														 $tu2=$tu2+1;
            												}
													    }
													}
												}
												echo $tu1+$tu2; ?></td>
												<td><?php
                                  $up2001d=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",0);
                                  $tu11=$tu1*$priceall55;
    					          $tu21=$tu2*$up2001d['price'];
    					          echo  $tu11+$tu21;
    					                  ?></td>
                                            <td><?php	$ty1=0;
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
                                            <td><?php $tx11=0;
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
            												  
            												     
            														 $tx11=$tx11+1;
            												}
													    }
													}
												}
	echo $tx1;										echo $tx11;				?></td>
                                            <td><?php echo $tu2; ?></td>
													<?php
												}
											}
										}
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
			    	unset($_SESSION['report7']);
			}
			else
				{ ?>
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
                                <form action="final_report_new.php" method="GET">
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
                                            <th>Total Class 10th User</th>
                                            <th>Total Class 9th User</th>
                                            <th>Total Goverment User</th>
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
                                                         $block=$row['block_id'];
                                                        
                                                        ?>
                                        <tr>
                                            <td> <?php echo $i;   ?></td>
                                            <td><?php echo $row['name']; ?></td>
											  <td><?php echo $ct['city']; ?></td>
											    <td><?php echo $block1['block']; ?></td>
                                            <td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?></td>
                                            <td><?php echo $row['account_holder_name']; ?></td>
                                            <td><?php echo $row['account_number'];	?></td>
                                			<td> <?php
    				$usersall=0;
    				$priceall=0;
    					$usersall1=0;
    				$priceall1=0;
    							
    				$rsall=$obj->fetchDetailByIdByStatus00($block,"user_register","block","pstatus",1);
						if($rsall)
						{	$i=0;
							while($rowall=mysqli_fetch_assoc($rsall))
							{
							    //print_r($row);
							    $ppall=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",$rowall['class']);
							    $priceall=$ppall['price'];
							    
							    $usersall=$usersall+1;
							}
						}
						
							$rsall1=$obj->fetchDetailByIdByStatus00($block,"user_register_goverment","block","pstatus",1);
						if($rsall1)
						{	$i=0;
							while($rowall1=mysqli_fetch_assoc($rsall1))
							{
							    
							    $usersall1=$usersall1+1;
							}
						}
												
    					
    					echo $usersall+$usersall1;
 
    			 ?> </td>
                                			<td> <?php
                                  $up200=$obj->fetchByIdByStatus(4,"markting_price","type_user","class",0);
                                  $x1=$usersall*$priceall;
    					          $y1=$usersall1*$up200['price'];
    					          echo  $x1+$y1;
    					                  ?></td>
                                            <td><?php
                                            $class10=0;
                                            $rs1=$obj->fetchDetailByIdByStatusByType($block,"user_register","block","pstatus",1,"class",2);
						if($rs1)
						{	$i=0;
							while($row1=mysqli_fetch_assoc($rs1))
							{
							    $class10=$class10+1;
							}
						}
						echo $class10;
						?></td>
                                            <td><?php
                                            $class9=0;
                                            $rs2=$obj->fetchDetailByIdByStatusByType($block,"user_register","block","pstatus",1,"class",1);
						if($rs2)
						{	$i=0;
							while($row2=mysqli_fetch_assoc($rs2))
							{
							    $class9=$class9+1;
							}
						}
						echo $class9;
						?></td>
                                            
                        <td> <?php echo $usersall1; ?></td>
                                        </tr>
                                        <?php } } ?>
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
				<?php } ?>
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
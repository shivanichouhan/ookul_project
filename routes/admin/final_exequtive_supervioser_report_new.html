
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
            <?php
            if($_SESSION["report1"]=='1')
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
                          <form action="final_report_ex_new.php" method="GET">
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
                                            <th style="width: 280.021px;">PRO (Id | Name)</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                             <th>Total Goverment User</th>
                                             <th>Total Referal User</th>
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
                                            <td><?php 
	$rsu1=$obj->fetchDetailByIdByStatus('pro',"pro_register","referby","refferal_agent_id",$row['id']);
							if($rsu1)
					{
				while($row1=mysqli_fetch_assoc($rsu1))
						{
						   echo  $row1['name']; echo" | "; echo  $row1['pro_id']; echo" , ";
						}
					}
						$rsu2=$obj->fetchDetailByIdByStatus('executive',"pro_register","referby","refferal_agent_id",$row['id']);
							if($rsu2)
					{
				while($row2=mysqli_fetch_assoc($rsu2))
						{	$i++;
							$usa1=$usa1+1;
							echo  $row2['name']; echo" | "; echo  $row2['pro_id']; echo" , ";
						}
					}
						
													  ?>
                                            </td>
											<td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?></td>
											<td><?php echo $row['account_holder_name']; ?></td>
                                            <td><?php echo $row['account_number']; ?></td>
											<td><?php
                            $cprice;
                            $cpricep;
                            $tes=0;
                            $tesp=0;
                            
                             $rs11=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs11)
                            {	$i=0;
                                while($row11=mysqli_fetch_assoc($rs11))
                                {
                                   $yy=$obj->fetchById($row11['pro_id'],"pro_register","pro_id");
                                     if($yy['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refer_ex'];
                                        //   echo"</br>";
                                         if($row['id']==$yy['refer_ex'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus($row11['class'],"markting_price","class","type_user",2);
                                                 $cprice=$cc['price'];
                                                $tes=$tes+1;
                                                
                                            }
                                     }
                                }
                            }
                            //---------------referal By Pro---------------
                            
                            $rs12=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs12)
                            {	$i=0;
                                while($row12=mysqli_fetch_assoc($rs12))
                                {
                                    
                                     $yy12=$obj->fetchById($row12['pro_id'],"pro_register","pro_id");
                                     if($yy12['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($row['id']==$yy12['refferal_agent_id'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus($yy12['class'],"markting_price","class","type_user",5);
                                                 $cpricep=$cc['price'];
                                                $tesp=$tesp+1;
                                                
                                            }
                                     }
                                }
                            }
                            //-----gover
                            $tes1=0;
                            $tesp1=0;
                            $cprice1;
                            $cpricep1;
                            $rs13=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs13)
                            {	$i=0;
                                while($row13=mysqli_fetch_assoc($rs13))
                                {
                                    $yy13=$obj->fetchById($row13['refferel_id'],"pro_register","pro_id");
                                     if($yy13['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($row['id']==$yy13['refer_ex'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",2);
                                                 $cprice1=$cc['price'];
                                                $tesp1=$tesp1+1;
                                                
                                            }
                                     }
                                }
                            }
                            //------------------------pro----------
                              $rs14=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs14)
                            {	$i=0;
                                while($row14=mysqli_fetch_assoc($rs14))
                                {
                                    $yy14=$obj->fetchById($row14['refferel_id'],"pro_register","pro_id");
                                     if($yy14['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($row['id']==$yy14['refferal_agent_id'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",5);
                                                 $cpricep1=$cc['price'];
                                                $tes1=$tes1+1;
                                                
                                            }
                                     }
                                }
                            }
                             echo $tes+$tesp+$tes1+$tesp1;
                             
											
												?>
											</td>
                                            <td><?php
						   		  $a=$cprice*$tes;
						  
						   		 $b=$cprice1*$tes1;
						   			
						   		 $c=$cpricep*$tesp;
						   			
						   		   $d=$cpricep1*$tesp1;
						   		
						   		echo   $a+$b+$c+$d;
						   				 ?></td>
											<td><?php
											$tes01=0;
											$rs112=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",'2');
                            if($rs112)
                            {	$i=0;
                                while($row112=mysqli_fetch_assoc($rs112))
                                {
                                   $yy12=$obj->fetchById($row112['pro_id'],"pro_register","pro_id");
                                     if($yy12['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refer_ex'];
                                        //   echo"</br>";
                                         if($row['id']==$yy12['refer_ex'])
                                            {
                                                $tes01=$tes01+1;
                                                
                                            }
                                     }
                                }
                            }
                            echo $tes01;
                            ?></td>
                                            <td><?php 
                                            	$tes02=0;
											$rs113=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",'1');
                            if($rs113)
                            {	$i=0;
                                while($row113=mysqli_fetch_assoc($rs113))
                                {
                                   $yy13=$obj->fetchById($row113['pro_id'],"pro_register","pro_id");
                                     if($yy13['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refer_ex'];
                                        //   echo"</br>";
                                         if($row['id']==$yy13['refer_ex'])
                                            {
                                                $tes02=$tes02+1;
                                                
                                            }
                                     }
                                }
                            }
                            echo $tes02;?></td>
											<td><?php 	echo $tesp1;	?></td>
                                            <td><?php  echo $tesp+$tes1; ?></td>
                                           
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
            
                unset($_SESSION["report1"]);
            }
            else if($_SESSION['report2']=='2')
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
                          <form action="final_report_ex_new.php" method="GET">
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
                                            <th style="width: 280.021px;">PRO (Id | Name)</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                             <th>Total Goverment User</th>
                                             <th>Total Referal User</th>
                                        </tr>
                                          <?php 
											$rs000=$obj->fetchDetailByIdByStatus($_GET['exequtive_id'],"agent","id","status",1); 
											if($rs000) 
												{ $i=0; while($rowaja=mysqli_fetch_assoc($rs000)) 
													{ $i++; 
										?>
										<tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $rowaja[ 'name']; ?></td>
                                            <td><?php 	
						$rsu140=$obj->fetchDetailByIdByStatus('pro',"pro_register","referby","refferal_agent_id",$rowaja['id']);
							if($rsu140)
					{
				while($row140=mysqli_fetch_assoc($rsu140))
						{
						    
						     echo  $row140['name']; echo" | "; echo  $row140['pro_id']; echo" , ";
						}
					}
									$rsu150=$obj->fetchDetailByIdByStatus('executive',"pro_register","referby","refferal_agent_id",$rowaja['id']);
							if($rsu150)
					{
				while($row150=mysqli_fetch_assoc($rsu150))
						{	$i++;
						    echo  $row150['name']; echo" | "; echo  $row150['pro_id']; echo" , ";
						}
					}
								
                            ?>
                                            </td>
											<td><?php echo $rowaja['branch_name']; ?></td>
                                            <td><?php echo $rowaja['ifc_code']; ?></td>
											<td><?php echo $rowaja['account_holder_name']; ?></td>
                                            <td><?php echo $rowaja['account_number']; ?></td>
                                             <td><?php
                            $cprice16=0;
                            $cpricep17=0;
                            $tes16=0;
                            $tesp17=0;
                            
                             $rs16=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs16)
                            {	$i=0;
                                while($row16=mysqli_fetch_assoc($rs16))
                                {
                                    
                                     $yy16=$obj->fetchById($row16['pro_id'],"pro_register","pro_id");
                                     if($yy16['referby']=='executive')
                                     {
                                         if($_GET['exequtive_id']==$yy16['refer_ex'])
                                            {
                                                 
                                                $cc16=$obj->fetchByIdByStatus($row16['class'],"markting_price","class","type_user",2);
                                                 $cprice16=$cc16['price'];
                                                $tes16=$tes16+1;
                                                
                                            }
                                     }
                                }
                            }
                            //---------------referal By Pro---------------
                            
                            $rs17=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs17)
                            {	$i=0;
                                while($row17=mysqli_fetch_assoc($rs17))
                                {
                                    
                                     $yy17=$obj->fetchById($row17['pro_id'],"pro_register","pro_id");
                                     if($yy17['referby']=='pro')
                                     {
                                       
                                         if($_GET['exequtive_id']==$yy17['refferal_agent_id'])
                                            {
                                                 
                                                $cc17=$obj->fetchByIdByStatus($row17['class'],"markting_price","class","type_user",5);
                                                 $cpricep17=$cc17['price'];
                                                $tesp17=$tesp17+1;
                                                
                                            }
                                     }
                                }
                            }
                             
                            $tesp18=0;
                            $tesp19=0;
                            $cpricep18=0;
                            $cpricep19=0;
                            $rs18=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs18)
                            {	$i=0;
                                while($row18=mysqli_fetch_assoc($rs18))
                                {
                                    $yy18=$obj->fetchById($row18['refferel_id'],"pro_register","pro_id");
                                     if($yy18['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($_GET['exequtive_id']==$yy18['refer_ex'])
                                            {
                                                 
                                                $cc18=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",2);
                                                 $cpricep18=$cc18['price'];
                                                $tesp18=$tesp18+1;
                                                
                                            }
                                     }
                                }
                            }
                            //------------------------pro----------
                              $rs19=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs19)
                            {	$i=0;
                                while($row19=mysqli_fetch_assoc($rs19))
                                {
                                    $yy19=$obj->fetchById($row19['refferel_id'],"pro_register","pro_id");
                                     if($yy19['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($_GET['exequtive_id']==$yy19['refferal_agent_id'])
                                            {
                                                 
                                                $cc19=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",5);
                                                $cpricep19=$cc19['price'];
                                                $tesp19=$tesp19+1;
                                                
                                            }
                                     }
                                }
                            }
                             echo $tes16+$tesp17+$tesp18+$tesp19;	
                            	?>	
							</td>
                                            <td><?php
                                            	 
						   		  $a16=$cprice16*$tes16;
						  
						   		 $b17=$cpricep17*$tesp17;
						   		$c18=$cpricep18*$tesp18;
						   			
						   		  $d19=$cpricep19*$tesp19;
						   //echo $tesp1;
						   		 echo $a16+$b17+$c18+$d19;
						   			
                                            ?></td>
											<td><?php   
											$tes20=0;
											$rs20=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",2);
                            if($rs20)
                            {	$i=0;
                                while($row20=mysqli_fetch_assoc($rs20))
                                {
                                    
                                     $yy20=$obj->fetchById($row20['pro_id'],"pro_register","pro_id");
                                     if($yy20['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($_GET['exequtive_id']==$yy20['refer_ex'])
                                            {
                                                $tes20=$tes20+1;  
                                            }
                                     }
                                }
                            } 
                            echo $tes20; 
                            ?></td>
                                            <td><?php 
                                            $tes21=0;
											$rs21=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",1);
                            if($rs21)
                            {	$i=0;
                                while($row21=mysqli_fetch_assoc($rs21))
                                {
                                    
                                     $yy21=$obj->fetchById($row21['pro_id'],"pro_register","pro_id");
                                     if($yy21['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($_GET['exequtive_id']==$yy21['refer_ex'])
                                            {
                                                $tes21=$tes21+1;  
                                            }
                                     }
                                }
                            } 
                            echo $tes21;  ?></td>
                                             <td><?php echo $tesp18; ?></td>
                                             <td><?php echo $tesp17+$tesp19; ?></td>
                                            </tr>
                                            <?php } 
                                            } ?>
                                    </thead>
                                    <tbody>
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
						<!--End Loop-->
                    </div>
                </div>
            </div>
                 <?php 
                 unset($_SESSION["report2"]);
            }
            else if($_SESSION['report3']=='3')
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
                          <form action="final_report_ex_new.php" method="GET">
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
                                            <th style="width: 280.021px;">PRO (Id | Name)</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                             <th>Total Goverment User</th>
                                             <th>Total Referal User</th>
                                        </tr>
                                          <?php 
											$rs0000=$obj->fetchDetailByIdByStatus($_GET['exequtive_id'],"agent","id","status",1); 
											if($rs0000) 
												{ $i=0; while($rowaja022=mysqli_fetch_assoc($rs0000)) 
													{ $i++; 
										?>
										<tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $rowaja022[ 'name']; ?></td>
                                            <td><?php 	
						$rsu22=$obj->fetchDetailByIdByStatus('pro',"pro_register","referby","refferal_agent_id",$rowaja022['id']);
							if($rsu22)
					{
				while($row22=mysqli_fetch_assoc($rsu22))
						{
						    
						     echo  $row22['name']; echo" | "; echo  $row22['pro_id']; echo" , ";
						}
					}
									$rsu23=$obj->fetchDetailByIdByStatus('executive',"pro_register","referby","refferal_agent_id",$rowaja022['id']);
							if($rsu23)
					{
				while($row23=mysqli_fetch_assoc($rsu23))
						{	$i++;
						    echo  $row23['name']; echo" | "; echo  $row23['pro_id']; echo" , ";
						}
					}
								
                            ?>
                                            </td>
											<td><?php echo $rowaja022['branch_name']; ?></td>
                                            <td><?php echo $rowaja022['ifc_code']; ?></td>
											<td><?php echo $rowaja022['account_holder_name']; ?></td>
                                            <td><?php echo $rowaja022['account_number']; ?></td>
                                             <td><?php
                            $cprice24=0;
                            $cpricep25=0;
                            $tes24=0;
                            $tesp25=0;
                            
                             $rs24=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","payment_success_date",$_GET['sdate']);
                            if($rs24)
                            {	$i=0;
                                while($row24=mysqli_fetch_assoc($rs24))
                                {
                                    
                                     $yy24=$obj->fetchById($row24['pro_id'],"pro_register","pro_id");
                                     if($yy24['referby']=='executive')
                                     {
                                         if($_GET['exequtive_id']==$yy24['refer_ex'])
                                            {
                                                 
                                                $cc24=$obj->fetchByIdByStatus($row24['class'],"markting_price","class","type_user",2);
                                                 $cprice24=$cc24['price'];
                                                $tes24=$tes24+1;
                                                
                                            }
                                     }
                                }
                            }
                            //---------------referal By Pro---------------
                            
                            $rs25=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","payment_success_date",$_GET['sdate']);
                            if($rs25)
                            {	$i=0;
                                while($row25=mysqli_fetch_assoc($rs25))
                                {
                                    
                                     $yy25=$obj->fetchById($row25['pro_id'],"pro_register","pro_id");
                                     if($yy25['referby']=='pro')
                                     {
                                       
                                         if($_GET['exequtive_id']==$yy25['refferal_agent_id'])
                                            {
                                                 
                                                $cc25=$obj->fetchByIdByStatus($row25['class'],"markting_price","class","type_user",5);
                                                 $cpricep25=$cc25['price'];
                                                $tesp25=$tesp25+1;
                                                
                                            }
                                     }
                                }
                            }
                             
                            $tesp26=0;
                            $tesp27=0;
                            $cpricep26=0;
                            $cpricep27=0;
                            $rs26=$obj->fetchDetailByIdByStatus(1,"user_register_goverment","pstatus","success_date",$_GET['sdate']);
                            if($rs26)
                            {	$i=0;
                                while($row26=mysqli_fetch_assoc($rs26))
                                {
                                    $yy26=$obj->fetchById($row26['refferel_id'],"pro_register","pro_id");
                                     if($yy26['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($_GET['exequtive_id']==$yy26['refer_ex'])
                                            {
                                                 
                                                $cc26=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",2);
                                                 $cpricep26=$cc26['price'];
                                                $tesp26=$tesp26+1;
                                                
                                            }
                                     }
                                }
                            }
                            //------------------------pro----------
                              $rs27=$obj->fetchDetailByIdByStatus(1,"user_register_goverment","pstatus","success_date",$_GET['sdate']);
                            if($rs27)
                            {	$i=0;
                                while($row27=mysqli_fetch_assoc($rs27))
                                {
                                    $yy27=$obj->fetchById($row27['refferel_id'],"pro_register","pro_id");
                                     if($yy27['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($_GET['exequtive_id']==$yy27['refferal_agent_id'])
                                            {
                                                 
                                                $cc27=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",5);
                                                $cpricep27=$cc27['price'];
                                                $tesp27=$tesp27+1;
                                                
                                            }
                                     }
                                }
                            }
                             echo $tes24+$tesp25+$tesp26+$tesp27;	
                            	?>	
							</td>
                                            <td><?php
                                            	 
						   		  $a24=$cprice24*$tes24;
						  
						   		 $b25=$cpricep25*$tesp25;
						   		$c26=$cpricep26*$tesp26;
						   			
						   		  $d27=$cpricep27*$tesp27;
						   //echo $tesp1;
						   		 echo $a24+$b25+$c26+$d27;
						   			
                                            ?></td>
											<td><?php   
											$tes28=0;
											$rs28=$obj->fetchDetailByIdByStatusByType(1,"user_register","pstatus","class",2,"payment_success_date",$_GET['sdate']);
                            if($rs28)
                            {	$i=0;
                                while($row28=mysqli_fetch_assoc($rs28))
                                {
                                    
                                     $yy28=$obj->fetchById($row28['pro_id'],"pro_register","pro_id");
                                     if($yy28['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($_GET['exequtive_id']==$yy28['refer_ex'])
                                            {
                                                $tes28=$tes28+1;  
                                            }
                                     }
                                }
                            } 
                            echo $tes28; 
                            ?></td>
                                            <td><?php 
                                            $tes29=0;
											$rs29=$obj->fetchDetailByIdByStatusByType(1,"user_register","pstatus","class",1,"payment_success_date",$_GET['sdate']);
                            if($rs29)
                            {	$i=0;
                                while($row29=mysqli_fetch_assoc($rs29))
                                {
                                    
                                     $yy29=$obj->fetchById($row29['pro_id'],"pro_register","pro_id");
                                     if($yy29['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($_GET['exequtive_id']==$yy29['refer_ex'])
                                            {
                                                $tes29=$tes29+1;  
                                            }
                                     }
                                }
                            } 
                            echo $tes29;  ?></td>
                                             <td><?php echo $tesp26; ?></td>
                                             <td><?php echo $tesp25+$tesp27; ?></td>
                                            </tr>
                                            <?php } 
                                            } ?>
                                    </thead>
                                    <tbody>
                                   
                                    </tbody>
                                </table>
                            </div>
                        </div>
						<!--End Loop-->
                    </div>
                </div>
            </div>
                <?php
            
                unset($_SESSION['report3']);
            }
            else if($_SESSION['report4']=='4')
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
                          <form action="final_report_ex_new.php" method="GET">
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
                                            <th style="width: 280.021px;">PRO (Id | Name)</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                             <th>Total Goverment User</th>
                                             <th>Total Referal User</th>
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
                                            <td><?php 
	$rsu1=$obj->fetchDetailByIdByStatus('pro',"pro_register","referby","refferal_agent_id",$row['id']);
							if($rsu1)
					{
				while($row1=mysqli_fetch_assoc($rsu1))
						{
						   echo  $row1['name']; echo" | "; echo  $row1['pro_id']; echo" , ";
						}
					}
						$rsu2=$obj->fetchDetailByIdByStatus('executive',"pro_register","referby","refferal_agent_id",$row['id']);
							if($rsu2)
					{
				while($row2=mysqli_fetch_assoc($rsu2))
						{	$i++;
							$usa1=$usa1+1;
							echo  $row2['name']; echo" | "; echo  $row2['pro_id']; echo" , ";
						}
					}
						
													  ?>
                                            </td>
											<td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?></td>
											<td><?php echo $row['account_holder_name']; ?></td>
                                            <td><?php echo $row['account_number']; ?></td>
											<td><?php
                            $cprice;
                            $cpricep;
                            $tes=0;
                            $tesp=0;
                            
                             $rs11=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs11)
                            {	$i=0;
                                while($row11=mysqli_fetch_assoc($rs11))
                                {
                                   $yy=$obj->fetchById($row11['pro_id'],"pro_register","pro_id");
                                     if($yy['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refer_ex'];
                                        //   echo"</br>";
                                         if($row['id']==$yy['refer_ex'])
                                            {
                                                 
                                                if(strtotime($row11['payment_success_date'])<=strtotime($_GET['edate']))
                                                {
                                                    if(strtotime($_GET['sdate'])<=strtotime($row11['payment_success_date']))
                                                    { 
                                                        $cc=$obj->fetchByIdByStatus($row11['class'],"markting_price","class","type_user",2);
                                                        $cprice=$cc['price'];
                                                        $tes=$tes+1;
                                                    }
                                                }
                                            }
                                     }
                                }
                            }
                            //---------------referal By Pro---------------
                            
                            $rs12=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs12)
                            {	$i=0;
                                while($row12=mysqli_fetch_assoc($rs12))
                                {
                                    
                                     $yy12=$obj->fetchById($row12['pro_id'],"pro_register","pro_id");
                                     if($yy12['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($row['id']==$yy12['refferal_agent_id'])
                                            {
                                                  if(strtotime($row12['payment_success_date'])<=strtotime($_GET['edate']))
                                                {
                                                    if(strtotime($_GET['sdate'])<=strtotime($row12['payment_success_date']))
                                                    {
                                                        
                                                        $cc=$obj->fetchByIdByStatus($yy12['class'],"markting_price","class","type_user",5);
                                                         $cpricep=$cc['price'];
                                                        $tesp=$tesp+1;
                                                    }
                                                }
                                                
                                            }
                                     }
                                }
                            }
                            //-----gover
                            $tes1=0;
                            $tesp1=0;
                            $cprice1;
                            $cpricep1;
                            $rs13=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs13)
                            {	$i=0;
                                while($row13=mysqli_fetch_assoc($rs13))
                                {
                                    $yy13=$obj->fetchById($row13['refferel_id'],"pro_register","pro_id");
                                     if($yy13['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($row['id']==$yy13['refer_ex'])
                                            {
                                                     if(strtotime($row13['payment_success_date'])<=strtotime($_GET['edate']))
                                                {
                                                    if(strtotime($_GET['sdate'])<=strtotime($row13['payment_success_date']))
                                                    { 
                                                        $cc=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",2);
                                                         $cprice1=$cc['price'];
                                                        $tesp1=$tesp1+1;
                                                    }
                                                }
                                                
                                            }
                                     }
                                }
                            }
                            //------------------------pro----------
                              $rs14=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs14)
                            {	$i=0;
                                while($row14=mysqli_fetch_assoc($rs14))
                                {
                                    $yy14=$obj->fetchById($row14['refferel_id'],"pro_register","pro_id");
                                     if($yy14['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($row['id']==$yy14['refferal_agent_id'])
                                            {
                                                if(strtotime($row14['payment_success_date'])<=strtotime($_GET['edate']))
                                                {
                                                    if(strtotime($_GET['sdate'])<=strtotime($row14['payment_success_date']))
                                                    {   
                                                $cc=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",5);
                                                 $cpricep1=$cc['price'];
                                                $tes1=$tes1+1;
                                                    }
                                                }
                                                
                                            }
                                     }
                                }
                            }
                             echo $tes+$tesp+$tes1+$tesp1;
                             
											
												?>
											</td>
                                            <td><?php
						   		  $a=$cprice*$tes;
						  
						   		 $b=$cprice1*$tes1;
						   			
						   		 $c=$cpricep*$tesp;
						   			
						   		   $d=$cpricep1*$tesp1;
						   		
						   		echo   $a+$b+$c+$d;
						   				 ?></td>
											<td><?php
											$tes01=0;
											$rs112=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",'2');
                            if($rs112)
                            {	$i=0;
                                while($row112=mysqli_fetch_assoc($rs112))
                                {
                                   $yy12=$obj->fetchById($row112['pro_id'],"pro_register","pro_id");
                                     if($yy12['referby']=='executive')
                                     {
                                        
                                         if($row['id']==$yy12['refer_ex'])
                                            {
                                                if(strtotime($row112['payment_success_date'])<=strtotime($_GET['edate']))
                                                {
                                                    if(strtotime($_GET['sdate'])<=strtotime($row112['payment_success_date']))
                                                    {  
                                                $tes01=$tes01+1;
                                                    }
                                                }
                                                
                                            }
                                     }
                                }
                            }
                            echo $tes01;
                            ?></td>
                                            <td><?php 
                                            	$tes02=0;
											$rs113=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",'1');
                            if($rs113)
                            {	$i=0;
                                while($row113=mysqli_fetch_assoc($rs113))
                                {
                                   $yy13=$obj->fetchById($row113['pro_id'],"pro_register","pro_id");
                                     if($yy13['referby']=='executive')
                                     {
                                       if($row['id']==$yy13['refer_ex'])
                                            {
                                                  if(strtotime($row113['payment_success_date'])<=strtotime($_GET['edate']))
                                                {
                                                    if(strtotime($_GET['sdate'])<=strtotime($row113['payment_success_date']))
                                                    { 
                                                        $tes02=$tes02+1;
                                                    }
                                                }
                                                
                                            }
                                     }
                                }
                            }
                            echo $tes02;?></td>
											<td><?php 	echo $tesp1;	?></td>
                                            <td><?php  echo $tesp+$tesp1; ?></td>
                                           
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
           unset($_SESSION['report4']); }
           else if($_SESSION['report5']=='5')
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
                          <form action="final_report_ex_new.php" method="GET">
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
                                            <th style="width: 280.021px;">PRO (Id | Name)</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                             <th>Total Goverment User</th>
                                             <th>Total Referal User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $table='agent' ;
											$rs=$obj->fetchAllDetail($table); 
											if($rs) 
												{ $i=0; while($rowsheetal=mysqli_fetch_assoc($rs)) 
													{ $i++; 
										?>
										<tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $rowsheetal[ 'name']; ?></td>
                                            <td><?php 
	$rsusheetal=$obj->fetchDetailByIdByStatus('pro',"pro_register","referby","refferal_agent_id",$rowsheetal['id']);
							if($rsusheetal)
					{
				while($rowshh=mysqli_fetch_assoc($rsusheetal))
						{
						   echo  $rowshh['name']; echo" | "; echo  $rowshh['pro_id']; echo" , ";
						}
					}
						$rsusheetal1=$obj->fetchDetailByIdByStatus('executive',"pro_register","referby","refferal_agent_id",$rowsheetal['id']);
							if($rsusheetal1)
					{
				while($rowshh1=mysqli_fetch_assoc($rsusheetal1))
						{	$i++;
							echo  $rowshh1['name']; echo" | "; echo  $rowshh1['pro_id']; echo" , ";
						}
					}
						
													  ?>
                                            </td>
											<td><?php echo $rowsheetal['branch_name']; ?></td>
                                            <td><?php echo $rowsheetal['ifc_code']; ?></td>
											<td><?php echo $rowsheetal['account_holder_name']; ?></td>
                                            <td><?php echo $rowsheetal['account_number']; ?></td>
											<td><?php
                            $cpricesh;
                            $cpricepsh;
                            $tessh=0;
                            $tespsh=0;
                            
                             $rssh11=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","payment_success_date",$_GET['sdate']);
                            if($rssh11)
                            {	$i=0;
                                while($rowsh11=mysqli_fetch_assoc($rssh11))
                                {
                                   $yysh11=$obj->fetchById($rowsh11['pro_id'],"pro_register","pro_id");
                                     if($yysh11['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refer_ex'];
                                        //   echo"</br>";
                                         if($rowsheetal['id']==$yysh11['refer_ex'])
                                            {
                                                 
                                                $ccsh=$obj->fetchByIdByStatus($rowsh11['class'],"markting_price","class","type_user",2);
                                                 $cpricesh=$ccsh['price'];
                                                $tessh=$tessh+1;
                                                
                                            }
                                     }
                                }
                            }
                            //---------------referal By Pro---------------
                            
                            $rssh12=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","payment_success_date",$_GET['sdate']);
                            if($rssh12)
                            {	$i=0;
                                while($rowsh12=mysqli_fetch_assoc($rssh12))
                                {
                                    
                                     $yysh12=$obj->fetchById($rowsh12['pro_id'],"pro_register","pro_id");
                                     if($yysh12['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($rowsheetal['id']==$yysh12['refferal_agent_id'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus($yysh12['class'],"markting_price","class","type_user",5);
                                                 $cpricepsh=$cc['price'];
                                                $tespsh=$tespsh+1;
                                                
                                            }
                                     }
                                }
                            }
                            //-----gover
                            $tessh1=0;
                            $tespsh1=0;
                            $cpricesh1;
                            $cpricepsh1;
                            $rssh13=$obj->fetchDetailByIdByStatus(1,"user_register_goverment","pstatus","success_date",$_GET['sdate']);
                            if($rssh13)
                            {	$i=0;
                                while($rowsh13=mysqli_fetch_assoc($rssh13))
                                {
                                    $yysh13=$obj->fetchById($rowsh13['refferel_id'],"pro_register","pro_id");
                                     if($yysh13['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($rowsheetal['id']==$yysh13['refer_ex'])
                                            {
                                                 
                                                $ccsh=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",2);
                                                 $cpricesh1=$ccsh['price'];
                                                $tespsh1=$tespsh1+1;
                                                
                                            }
                                     }
                                }
                            }
                            //------------------------pro----------
                              $rssh14=$obj->fetchDetailByIdByStatus(1,"user_register_goverment","pstatus","success_date",$_GET['sdate']);
                            if($rssh14)
                            {	$i=0;
                                while($rowsh14=mysqli_fetch_assoc($rssh14))
                                {
                                    $yysh14=$obj->fetchById($rowsh14['refferel_id'],"pro_register","pro_id");
                                     if($yysh14['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($rowsheetal['id']==$yysh14['refferal_agent_id'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",5);
                                                 $cpricep1=$cc['price'];
                                                $tessh1=$tessh1+1;
                                                
                                            }
                                     }
                                }
                            }
                             echo $tessh+$tespsh+$tessh1+$tespsh1;
                             
											
												?>
											</td>
                                            <td><?php
						   		  $as=$cpricesh*$tessh;
						  
						   		 $bs=$cpricesh1*$tessh1;
						   			
						   		 $cs=$cpricepsh*$tespsh;
						   			
						   		   $ds=$cpricepsh1*$tespsh1;
						   		
						   		echo   $as+$bs+$cs+$ds;
						   				 ?></td>
											<td><?php
											$tes010=0;
											$rs1120=$obj->fetchDetailByIdByStatusByType(1,"user_register","pstatus","class",'2',"payment_success_date",$_GET['sdate']);
                            if($rs1120)
                            {	$i=0;
                                while($row1120=mysqli_fetch_assoc($rs1120))
                                {
                                   $yy120=$obj->fetchById($row1120['pro_id'],"pro_register","pro_id");
                                     if($yy120['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refer_ex'];
                                        //   echo"</br>";
                                         if($rowsheetal['id']==$yy120['refer_ex'])
                                            {
                                                $tes010=$tes010+1;
                                                
                                            }
                                     }
                                }
                            }
                            echo $tes010;
                            ?></td>
                                            <td><?php 
                                            	$tes020=0;
											$rs1130=$obj->fetchDetailByIdByStatusByType(1,"user_register","pstatus","class",'1',"payment_success_date",$_GET['sdate']);
                            if($rs1130)
                            {	$i=0;
                                while($row1130=mysqli_fetch_assoc($rs1130))
                                {
                                   $yy130=$obj->fetchById($row1130['pro_id'],"pro_register","pro_id");
                                     if($yy130['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refer_ex'];
                                        //   echo"</br>";
                                         if($rowsheetal['id']==$yy130['refer_ex'])
                                            {
                                                $tes020=$tes020+1;
                                                
                                            }
                                     }
                                }
                            }
                            echo $tes020;?></td>
											<td><?php 	echo $tessh1;	?></td>
                                            <td><?php  echo $tespsh+$tespsh1; ?></td>
                                           
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
                                <h4>Executive Supervisor List</h4>
                            </div>
                        </div>


                        <!-- Search filter -->
                        <div class="panel-body">
                          <form action="final_report_ex_new.php" method="GET">
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
                                            <th style="width: 280.021px;">PRO (Id | Name)</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                             <th>Total Goverment User</th>
                                             <th>Total Referal User</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $table='agent' ;
											$rs=$obj->fetchAllDetail($table); 
											if($rs) 
												{ $i=0; while($rowsheetal=mysqli_fetch_assoc($rs)) 
													{ $i++; 
										?>
										<tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $rowsheetal[ 'name']; ?></td>
                                            <td><?php 
	$rsusheetal=$obj->fetchDetailByIdByStatus('pro',"pro_register","referby","refferal_agent_id",$rowsheetal['id']);
							if($rsusheetal)
					{
				while($rowshh=mysqli_fetch_assoc($rsusheetal))
						{
						   echo  $rowshh['name']; echo" | "; echo  $rowshh['pro_id']; echo" , ";
						}
					}
						$rsusheetal1=$obj->fetchDetailByIdByStatus('executive',"pro_register","referby","refferal_agent_id",$rowsheetal['id']);
							if($rsusheetal1)
					{
				while($rowshh1=mysqli_fetch_assoc($rsusheetal1))
						{	$i++;
							echo  $rowshh1['name']; echo" | "; echo  $rowshh1['pro_id']; echo" , ";
						}
					}
						
													  ?>
                                            </td>
											<td><?php echo $rowsheetal['branch_name']; ?></td>
                                            <td><?php echo $rowsheetal['ifc_code']; ?></td>
											<td><?php echo $rowsheetal['account_holder_name']; ?></td>
                                            <td><?php echo $rowsheetal['account_number']; ?></td>
											<td><?php
                            $cpricesh;
                            $cpricepsh;
                            $tessh=0;
                            $tespsh=0;
                            
                             $rssh11=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rssh11)
                            {	$i=0;
                                while($rowsh11=mysqli_fetch_assoc($rssh11))
                                {
                                   $yysh11=$obj->fetchById($rowsh11['pro_id'],"pro_register","pro_id");
                                     if($yysh11['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refer_ex'];
                                        //   echo"</br>";
                                         if($rowsheetal['id']==$yysh11['refer_ex'])
                                            {
                                                if(strtotime($rowsh11['payment_success_date'])<=strtotime($_GET['edate']))
                                                {
                                                    if(strtotime($_GET['sdate'])<=strtotime($rowsh11['payment_success_date']))
                                                    {   
                                                         
                                                        $ccsh=$obj->fetchByIdByStatus($rowsh11['class'],"markting_price","class","type_user",2);
                                                         $cpricesh=$ccsh['price'];
                                                        $tessh=$tessh+1;
                                                    }
                                                }
                                                
                                            }
                                     }
                                }
                            }
                            //---------------referal By Pro---------------
                            
                            $rssh12=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rssh12)
                            {	$i=0;
                                while($rowsh12=mysqli_fetch_assoc($rssh12))
                                {
                                    
                                     $yysh12=$obj->fetchById($rowsh12['pro_id'],"pro_register","pro_id");
                                     if($yysh12['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($rowsheetal['id']==$yysh12['refferal_agent_id'])
                                            {
                                                if(strtotime($rowsh12['payment_success_date'])<=strtotime($_GET['edate']))
                                                {
                                                    if(strtotime($_GET['sdate'])<=strtotime($rowsh12['payment_success_date']))
                                                    {  
                                                        $cc=$obj->fetchByIdByStatus($yysh12['class'],"markting_price","class","type_user",5);
                                                         $cpricepsh=$cc['price'];
                                                        $tespsh=$tespsh+1;
                                                    }
                                                }
                                                
                                            }
                                     }
                                }
                            }
                            //-----gover
                            $tessh1=0;
                            $tespsh1=0;
                            $cpricesh1;
                            $cpricepsh1;
                            $rssh13=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rssh13)
                            {	$i=0;
                                while($rowsh13=mysqli_fetch_assoc($rssh13))
                                {
                                    $yysh13=$obj->fetchById($rowsh13['refferel_id'],"pro_register","pro_id");
                                     if($yysh13['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($rowsheetal['id']==$yysh13['refer_ex'])
                                            {
                                                  if(strtotime($rowsh13['payment_success_date'])<=strtotime($_GET['edate']))
                                                {
                                                    if(strtotime($_GET['sdate'])<=strtotime($rowsh13['payment_success_date']))
                                                    {
                                                        $ccsh=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",2);
                                                         $cpricesh1=$ccsh['price'];
                                                        $tespsh1=$tespsh1+1;
                                                
                                                    }
                                                    
                                                }
                                                
                                            }
                                     }
                                }
                            }
                            //------------------------pro----------
                              $rssh14=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rssh14)
                            {	$i=0;
                                while($rowsh14=mysqli_fetch_assoc($rssh14))
                                {
                                    $yysh14=$obj->fetchById($rowsh14['refferel_id'],"pro_register","pro_id");
                                     if($yysh14['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($rowsheetal['id']==$yysh14['refferal_agent_id'])
                                            {
                                                if(strtotime($rowsh14['payment_success_date'])<=strtotime($_GET['edate']))
                                                {
                                                    if(strtotime($_GET['sdate'])<=strtotime($rowsh14['payment_success_date']))
                                                    {  
                                                        $cc=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",5);
                                                         $cpricep1=$cc['price'];
                                                        $tessh1=$tessh1+1;
                                                    }
                                                }
                                                
                                            }
                                     }
                                }
                            }
                             echo $tessh+$tespsh+$tessh1+$tespsh1;
                             
											
												?>
											</td>
                                            <td><?php
						   		  $as=$cpricesh*$tessh;
						  
						   		 $bs=$cpricesh1*$tessh1;
						   			
						   		 $cs=$cpricepsh*$tespsh;
						   			
						   		   $ds=$cpricepsh1*$tespsh1;
						   		
						   		echo   $as+$bs+$cs+$ds;
						   				 ?></td>
											<td><?php
											$tes010=0;
											$rs1120=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",'2');
                            if($rs1120)
                            {	$i=0;
                                while($row1120=mysqli_fetch_assoc($rs1120))
                                {
                                   $yy120=$obj->fetchById($row1120['pro_id'],"pro_register","pro_id");
                                     if($yy120['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refer_ex'];
                                        //   echo"</br>";
                                         if($rowsheetal['id']==$yy120['refer_ex'])
                                            {
                                                $tes010=$tes010+1;
                                                
                                            }
                                     }
                                }
                            }
                            echo $tes010;
                            ?></td>
                                            <td><?php 
                                            	$tes020=0;
											$rs1130=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",'1');
                            if($rs1130)
                            {	$i=0;
                                while($row1130=mysqli_fetch_assoc($rs1130))
                                {
                                   $yy130=$obj->fetchById($row1130['pro_id'],"pro_register","pro_id");
                                     if($yy130['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refer_ex'];
                                        //   echo"</br>";
                                         if($rowsheetal['id']==$yy130['refer_ex'])
                                            {
                                                $tes020=$tes020+1;
                                                
                                            }
                                     }
                                }
                            }
                            echo $tes020;?></td>
											<td><?php 	echo $tessh1;	?></td>
                                            <td><?php  echo $tespsh+$tespsh1; ?></td>
                                           
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
                unset($_SESSION['report6']); 
           }
            else
            {
            ?>
<!--------else---------->
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
                          <form action="final_report_ex_new.php" method="GET">
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
                                            <th style="width: 280.021px;">PRO (Id | Name)</th>

                                            <th>Branch Name</th>
                                            <th>IFSC</th>
                                            <th>Account Holder Name</th>
                                            <th>Account Number</th>
                                            <th>Total User</th>
                                            <th>Total Amount</th>
											<th>Total 10th class User</th>
                                            <th>Total 9th class User</th>
                                             <th>Total Goverment User</th>
                                             <th>Total Referal User</th>
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
                                            <td><?php 
	$rsu1=$obj->fetchDetailByIdByStatus('pro',"pro_register","referby","refferal_agent_id",$row['id']);
							if($rsu1)
					{
				while($row1=mysqli_fetch_assoc($rsu1))
						{
						   echo  $row1['name']; echo" | "; echo  $row1['pro_id']; echo" , ";
						}
					}
						$rsu2=$obj->fetchDetailByIdByStatus('executive',"pro_register","referby","refferal_agent_id",$row['id']);
							if($rsu2)
					{
				while($row2=mysqli_fetch_assoc($rsu2))
						{	$i++;
							$usa1=$usa1+1;
							echo  $row2['name']; echo" | "; echo  $row2['pro_id']; echo" , ";
						}
					}
						
													  ?>
                                            </td>
											<td><?php echo $row['branch_name']; ?></td>
                                            <td><?php echo $row['ifc_code']; ?></td>
											<td><?php echo $row['account_holder_name']; ?></td>
                                            <td><?php echo $row['account_number']; ?></td>
											<td><?php
                            $cprice;
                            $cpricep;
                            $tes=0;
                            $tesp=0;
                            
                             $rs11=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs11)
                            {	$i=0;
                                while($row11=mysqli_fetch_assoc($rs11))
                                {
                                   $yy=$obj->fetchById($row11['pro_id'],"pro_register","pro_id");
                                     if($yy['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refer_ex'];
                                        //   echo"</br>";
                                         if($row['id']==$yy['refer_ex'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus($row11['class'],"markting_price","class","type_user",2);
                                                 $cprice=$cc['price'];
                                                $tes=$tes+1;
                                                
                                            }
                                     }
                                }
                            }
                            //---------------referal By Pro---------------
                            
                            $rs12=$obj->fetchDetailById(1,"user_register","pstatus");
                            if($rs12)
                            {	$i=0;
                                while($row12=mysqli_fetch_assoc($rs12))
                                {
                                    
                                     $yy12=$obj->fetchById($row12['pro_id'],"pro_register","pro_id");
                                     if($yy12['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($row['id']==$yy12['refferal_agent_id'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus($yy12['class'],"markting_price","class","type_user",5);
                                                 $cpricep=$cc['price'];
                                                $tesp=$tesp+1;
                                                
                                            }
                                     }
                                }
                            }
                            //-----gover
                            $tes1=0;
                            $tesp1=0;
                            $cprice1;
                            $cpricep1;
                            $rs13=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs13)
                            {	$i=0;
                                while($row13=mysqli_fetch_assoc($rs13))
                                {
                                    $yy13=$obj->fetchById($row13['refferel_id'],"pro_register","pro_id");
                                     if($yy13['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($row['id']==$yy13['refer_ex'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",2);
                                                 $cprice1=$cc['price'];
                                                $tesp1=$tesp1+1;
                                                
                                            }
                                     }
                                }
                            }
                            //------------------------pro----------
                              $rs14=$obj->fetchDetailById(1,"user_register_goverment","pstatus");
                            if($rs14)
                            {	$i=0;
                                while($row14=mysqli_fetch_assoc($rs14))
                                {
                                    $yy14=$obj->fetchById($row14['refferel_id'],"pro_register","pro_id");
                                     if($yy14['referby']=='pro')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refferal_agent_id'];
                                         if($row['id']==$yy14['refferal_agent_id'])
                                            {
                                                 
                                                $cc=$obj->fetchByIdByStatus(0,"markting_price","class","type_user",5);
                                                 $cpricep1=$cc['price'];
                                                $tes1=$tes1+1;
                                                
                                            }
                                     }
                                }
                            }
                             echo $tes+$tesp+$tes1+$tesp1;
                             
											
												?>
											</td>
                                            <td><?php
						   		  $a=$cprice*$tes;
						  
						   		 $b=$cprice1*$tes1;
						   			
						   		 $c=$cpricep*$tesp;
						   			
						   		   $d=$cpricep1*$tesp1;
						   		
						   		echo   $a+$b+$c+$d;
						   				 ?></td>
											<td><?php
											$tes01=0;
											$rs112=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",'2');
                            if($rs112)
                            {	$i=0;
                                while($row112=mysqli_fetch_assoc($rs112))
                                {
                                   $yy12=$obj->fetchById($row112['pro_id'],"pro_register","pro_id");
                                     if($yy12['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refer_ex'];
                                        //   echo"</br>";
                                         if($row['id']==$yy12['refer_ex'])
                                            {
                                                $tes01=$tes01+1;
                                                
                                            }
                                     }
                                }
                            }
                            echo $tes01;
                            ?></td>
                                            <td><?php 
                                            	$tes02=0;
											$rs113=$obj->fetchDetailByIdByStatus(1,"user_register","pstatus","class",'1');
                            if($rs113)
                            {	$i=0;
                                while($row113=mysqli_fetch_assoc($rs113))
                                {
                                   $yy13=$obj->fetchById($row113['pro_id'],"pro_register","pro_id");
                                     if($yy13['referby']=='executive')
                                     {
                                        //   echo $_SESSION['agent_id'];
                                        //   echo"</br>";
                                        //   echo $yy['refer_ex'];
                                        //   echo"</br>";
                                         if($row['id']==$yy13['refer_ex'])
                                            {
                                                $tes02=$tes02+1;
                                                
                                            }
                                     }
                                }
                            }
                            echo $tes02;?></td>
											<td><?php 	echo $tesp1;	?></td>
                                            <td><?php  echo $tesp+$tesp1; ?></td>
                                           
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
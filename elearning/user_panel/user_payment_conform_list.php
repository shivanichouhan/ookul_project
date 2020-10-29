<?php include"header.php";
include"menu.php"; ?>

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
                                <h1>Report</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                 
                                    <li class="active">Report/History</li>
                                </ol>
                            </div>
							<div class="header-title">
                                <h1>Report/History</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.php"><i class="pe-7s-home"></i> Home</a></li>
                                 
                                    <li class="active">Report /History</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Report History</h4>
                                        </div>
                                    </div>
   <div class="panel-body">

  
	
	   <div class="col-md-12">
	      <div class="col-md-2">
             <select class="form-control" id="exampleSelect1" name="class"  onChange="clas(this.value);" >
												 <option value="">District</option>
												<?php
													$table='city';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['city'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
												</div>
												  <div class="col-md-2">
												 <select class="form-control" id="exampleSelect1" name="class"  onChange="block(this.value);">
												 <option value="">Block</option>
												<?php
													$table='block';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['block'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
												</div>
												  <div class="col-md-2">
             <select class="form-control" id="exampleSelect1" name="class"  onChange="clas12(this.value);" >
												 <option value="">Class</option>
												<?php
													$table='class';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['class'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
												</div>
													<div class="col-md-2">
             <select class="form-control" id="exampleSelect1" name="pstatus"  onChange="payment(this.value);" >
												 <option value="">Payment Type</option>
													<option value="1">Paid</option>
													<option value="0">UnPaid</option>
													
                                                </select>
												</div>
           
           
        
	
 
   
     <form  action="date_filter.php" method="GET">
	 <div class="col-md-1">
     <input type="date" class="form-control"  placeholder="Start date" name="fromDate">
	 </div>
 <div class="col-md-1">
     <input type="date" class="form-control"  placeholder="End date"  name="endDate">
</div>
<div class="col-md-1">
     <input type="submit"  value="Search"  class="btn btn-success">
	 </div>
   </form>
   </div>
    <div id="user" >
            </div>
			<div id="block">
            </div>
			<div id="class">
            </div>
			<div id="acdemic">
            </div>
			<div id="payment">
            </div>
			
			
</div>   
			<?php if(@$_SESSION['report_date']=='0') { ?>	  
			<div style='height: 80%; overflow: auto;' >

                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr><th>#</th>
														<th>Name</th>
														<th>Email</th>
														<th>Mobile Number</th>
														<th>Class</th>
														<th>District</th>
														<th>Block</th>
														
														<th>Address</th>
														<th>Gender</th>
														<th>Date Of Birth</th>
														<th>Payment Type</th>
														<th>Register Date</th>
														<!--<th>System Ip</th>-->
														<!--<th>Action</th>-->
                                                    </tr>
                                                </thead>
                                                <tbody>
	
												<?php


   $row=$obj->fetchAllDetail("user_register");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){
	  $cit=$obj->fetchById($rs['city_id'],"city","id");
	  $block=$obj->fetchById($rs['block'],"block","id");
	    $class12=$obj->fetchById($rs['class'],"class","id");
												?>
                                                    <tr>
													<td><?php echo $i; ?></td>
													<td><?php echo $rs['name']; ?></td>
													<td><?php echo $rs['email']; ?></td>
													<td><?php echo $rs['mobile']; ?></td>
													<td><?php echo $class12['class']; ?></td>
                                                    <td><?php echo $cit['city']; ?></td>
													 <td><?php echo $block['block']; ?></td>
													<td><?php echo $rs['address']; ?></td>
													<td><?php echo $rs['gender']; ?></td>
													<td><?php echo $rs['dob']; ?></td>
													<td><?php if($rs['pstatus']==1){
														?>
														<button type="button" class="btn btn-success" style="border-color: #f64565!important;
													background: #f64565;">Paid (<?php if($rs['payment_type']==1) { echo"online"; } ?> <?php if($rs['payment_type']==3) { echo"Coupan"; } ?> )</button>
														<?php 
													} else { ?> <button type="button" class="btn btn-success">UnPaid</button> <?php } ?></td>
														<td><?php echo $rs['register_date']; ?></td>

                                                    </tr>
						<?php 
														}
													} ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
			<?php } elseif(@$_SESSION['report_date']=='1') { ?>	
							<!----	--->
							<div style='height: 80%; overflow: auto;' >

                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr><th>#</th>
														<th>Name</th>
														<th>Email</th>
														<th>Mobile Number</th>
														<th>Class</th>
														<th>District</th>
														<th>Block</th>
														
														<th>Address</th>
														<th>Gender</th>
														<th>Date Of Birth</th>
														<th>Payment Type</th>
														<th>Register Date</th>
														<!--<th>System Ip</th>-->
														<!--<th>Action</th>-->
                                                    </tr>
                                                </thead>
                                                <tbody>
	
												<?php


   $row=$obj->fetchDetailById(@$_GET['date'],"user_register","register_date");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){
	  $cit=$obj->fetchById($rs['city_id'],"city","id");
	  $block=$obj->fetchById($rs['block'],"block","id");
	    $class12=$obj->fetchById($rs['class'],"class","id");
												?>
                                                    <tr>
													<td><?php echo $i; ?></td>
													<td><?php echo $rs['name']; ?></td>
													<td><?php echo $rs['email']; ?></td>
													<td><?php echo $rs['mobile']; ?></td>
													<td><?php echo $class12['class']; ?></td>
                                                    <td><?php echo $cit['city']; ?></td>
													 <td><?php echo $block['block']; ?></td>
													<td><?php echo $rs['address']; ?></td>
													<td><?php echo $rs['gender']; ?></td>
													<td><?php echo $rs['dob']; ?></td>
													<td><?php if($rs['pstatus']==1){
														?>
														<button type="button" class="btn btn-success" style="border-color: #f64565!important;
													background: #f64565;">Paid (<?php if($rs['payment_type']==1) { echo"online"; } ?> <?php if($rs['payment_type']==3) { echo"Coupan"; } ?> )</button>
														<?php 
													} else { ?> <button type="button" class="btn btn-success">UnPaid</button> <?php } ?></td>
														<td><?php echo $rs['register_date']; ?></td>

                                                    </tr>
						<?php 
														}
													} ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>	
								
			<?php }elseif(@$_SESSION['report_date']=='2') { ?>
<div style='height: 80%; overflow: auto;' >

                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr><th>#</th>
														<th>Name</th>
														<th>Email</th>
														<th>Mobile Number</th>
														<th>Class</th>
														<th>District</th>
														<th>Block</th>
														
														<th>Address</th>
														<th>Gender</th>
														<th>Date Of Birth</th>
														<th>Payment Type</th>
														<th>Register Date</th>
														<!--<th>System Ip</th>-->
														<!--<th>Action</th>-->
                                                    </tr>
                                                </thead>
                                                <tbody>
	
												<?php
												$sdate=@$_GET['date'];
												 $edate=@$_GET['enddate'];

   $row=$obj->fetchAllDetail("user_register");
  if($row){
      $i=0;
  while($rs=mysqli_fetch_assoc($row)){
      $i++;
      if(strtotime($rs['payment_success_date'])<=strtotime($edate))
        												 {
            												if(strtotime($sdate)<=strtotime($rs['payment_success_date']))
            												{ 
            												  
            												     
            													//	 $tu1=$tu1+1;
            										
	  $cit=$obj->fetchById($rs['city_id'],"city","id");
	  $block=$obj->fetchById($rs['block'],"block","id");
	    $class12=$obj->fetchById($rs['class'],"class","id");
												?>
                                                    <tr>
													<td><?php echo $i; ?></td>
													<td><?php echo $rs['name']; ?></td>
													<td><?php echo $rs['email']; ?></td>
													<td><?php echo $rs['mobile']; ?></td>
													<td><?php echo $class12['class']; ?></td>
                                                    <td><?php echo $cit['city']; ?></td>
													 <td><?php echo $block['block']; ?></td>
													<td><?php echo $rs['address']; ?></td>
													<td><?php echo $rs['gender']; ?></td>
													<td><?php echo $rs['dob']; ?></td>
													<td><?php if($rs['pstatus']==1){
														?>
														<button type="button" class="btn btn-success" style="border-color: #f64565!important;
													background: #f64565;">Paid (<?php if($rs['payment_type']==1) { echo"online"; } ?> <?php if($rs['payment_type']==3) { echo"Coupan"; } ?> )</button>
														<?php 
													} else { ?> <button type="button" class="btn btn-success">UnPaid</button> <?php } ?></td>
														<td><?php echo $rs['register_date']; ?></td>

                                                    </tr>
						<?php 
														}
													}
													}
													}?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>


<?php 				}   else { ?>
				<div style='height: 80%; overflow: auto;' >

                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr><th>#</th>
														<th>Name</th>
														<th>Email</th>
														<th>Mobile Number</th>
														<th>Class</th>
														<th>District</th>
														<th>Block</th>
														
														<th>Address</th>
														<th>Gender</th>
														<th>Date Of Birth</th>
														<th>Payment Type</th>
														<th>Register Date</th>
														<!--<th>System Ip</th>-->
														<!--<th>Action</th>-->
                                                    </tr>
                                                </thead>
                                                <tbody>
	
												<?php


   $row=$obj->fetchAllDetail("user_register");
  if($row){
  while($rs=mysqli_fetch_assoc($row)){
	  $cit=$obj->fetchById($rs['city_id'],"city","id");
	  $block=$obj->fetchById($rs['block'],"block","id");
	    $class12=$obj->fetchById($rs['class'],"class","id");
												?>
                                                    <tr>
													<td><?php echo $i; ?></td>
													<td><?php echo $rs['name']; ?></td>
													<td><?php echo $rs['email']; ?></td>
													<td><?php echo $rs['mobile']; ?></td>
													<td><?php echo $class12['class']; ?></td>
                                                    <td><?php echo $cit['city']; ?></td>
													 <td><?php echo $block['block']; ?></td>
													<td><?php echo $rs['address']; ?></td>
													<td><?php echo $rs['gender']; ?></td>
													<td><?php echo $rs['dob']; ?></td>
													<td><?php if($rs['pstatus']==1){
														?>
														<button type="button" class="btn btn-success" style="border-color: #f64565!important;
													background: #f64565;">Paid (<?php if($rs['payment_type']==1) { echo"online"; } ?> <?php if($rs['payment_type']==3) { echo"Coupan"; } ?> )</button>
														<?php 
													} else { ?> <button type="button" class="btn btn-success">UnPaid</button> <?php } ?></td>
														<td><?php echo $rs['register_date']; ?></td>

                                                    </tr>
						<?php 
														}
													} ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
			
			<?php } ?>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
			    <!-- jQuery -->

	
				  
				  <script>
 function clas(a){
				 //alert(a);
				 $("#user").load("demo_userAjax.php?id="+a);
				  }
				  </script>
				   <script>
 function payment(a){
				 //alert(a);
				 $("#payment").load("payment_type.php?id="+a);
				  }
				  </script>
				  
				  
				  
				  		    <script>
 function block(a){
				 //alert(a);
				 $("#block").load("block_userAjax.php?id="+a);
				  }
				  </script>
				  		  		    <script>
 function clas12(a){
				 //alert(a);
				 $("#class").load("class_fearch_filter.php?id="+a);
				  }
				  </script>
				    		  		    <script>
 function academy(a){
			//	 alert(a);
				 $("#acdemic").load("demo_report.php?id="+a);
				  }
				  </script>
				 
				  
        <?php include"footer.php"; ?>

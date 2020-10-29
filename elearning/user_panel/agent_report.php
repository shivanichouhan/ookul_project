<?php include"header.php";
include"menu.php"; ?> <!-- /. main header -->
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
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="add_agent.php"></a></li>
                                    <li class="active">Executive Supervisor Report  List</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
						   
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
	   <div class="col-md-12">
	     
             <select class="form-control" id="exampleSelect1" name="exequtive_id"  onChange="clas(this.value);" >
												 <option value="">Executive Supervisor</option>
												<?php
													$table='agent';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['name'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
											
												<!-- <div class="col-md-6">
             <select class="form-control" id="exampleSelect1" name="class"  onChange="amou(this.value);" >
												 <option value="">Executive Supervisor Amount</option>
												<?php
													$table='agent';
													$rs=$obj->fetchAllDetailByStatus($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['amount'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
												</div>-->
												</div>
												  <div id="agent" >
            </div>
			
  <!--<div id="amount" >
            </div>-->
												</div>
												
	   <div class="panel-body">
	    
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
													<th>#</th>
														<th>Executive Supervisor Name</th>
														<th style="width: 280.021px;">Block Supervisor (Name | Block)</th>
														
														<th>Email</th>
														<th>Mobile Number</th>
													<!--	<th>Amount</th>-->
														<th>Address</th>
														<th>Adhar Card Number</th>
														<th>Profile</th>
														<th>Document</th>
														<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												 <?php

													$table='agent';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															
															?>
												
													
                                                    <tr>
													<td><?php echo $i; ?></td>
													<td><?php echo $row['name']; ?></td>
													 <td><?php $u=explode(",",$row['block_supervisor_id']);
	
//$u=explode(",",$coupan);
		foreach($u as $uu =>$value)
			{
				$r=$u[$uu];
				$block=$obj->fetchById($r,"`subagent`","id");
				$block11=$obj->fetchById($block['block_id'],"`block`","id");
	echo"(";	echo $block['name']; echo" | ";	echo $block11['block']; 	echo"),";
			}
		 ?></td>	 
	
													<td><?php echo $row['email']; ?></td>
													<td><?php echo $row['mobile']; ?></td>
												<!--	<td><?php echo $row['amount'];  ?></td>-->
                                                     
													
													<td><?php echo $row['address']; ?></td>
												
																	<td><?php echo $row['adhar_no'];  ?></td>
													<td><a href="upload/<?php echo $row['photo']; ?>" download><img src="upload/<?php echo $row['photo']; ?>" style="width: 50px; height: 50px;"></a>
														<!--<a href="upload/<?php echo $row['photo']; ?>" download>Download</a>---></td>
    	<td><a href="upload/<?php echo $row['document']; ?>"><i class="fa fa-download" aria-hidden="true" style="font-size: 50px;   color: #f74d59; "></i></a></td>
														 <td><a href="executive_supervioser_reoprt.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger" style="background-color: #ac08e4;
    border-color: #ac08e4;"> View</button></a></td>
                                                    </tr>
														   
                                                 <?php      }
        }else{
          echo "<tr>";
          echo "<td colspan='4'>No record found.</td>";
          echo "</tr>";
        }
        ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
			   <script>
 function clas(a){
			//	 alert(a);
				 $("#agent").load("exequtive_nameAjax.php?id="+a);
				  }
				  </script>
				  	   <script>
 function amou(a){
				// alert(a);
				 $("#amount").load("amount_desit_Ajax.php?amount="+a);
				  }
				  </script>
				  
				  		
        <?php include"footer.php"; ?>
        </div> <!-- ./wrapper -->
        <!-- jQuery -->
        <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
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
            $(document).ready(function () {

                "use strict"; // Start of use strict

                $('#dataTableExample1').DataTable({
                    "dom": "<'row'<'col-sm-6'l><'col-sm-6'f>>t<'row'<'col-sm-6'i><'col-sm-6'p>>",
                    "lengthMenu": [[6, 25, 50, -1], [6, 25, 50, "All"]],
                    "iDisplayLength": 6
                });

                $("#dataTableExample2").DataTable({
                    dom: "<'row'<'col-sm-4'l><'col-sm-4 text-center'B><'col-sm-4'f>>tp",
                    "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
                    buttons: [
                        {extend: 'copy', className: 'btn-sm'},
                        {extend: 'csv', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'excel', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'pdf', title: 'ExampleFile', className: 'btn-sm'},
                        {extend: 'print', className: 'btn-sm'}
                    ]
                });

            });
        </script>
    </body>

<!-- Mirrored from thememinister.com/bootstrap-admin-template/template/theme/adminpage_v1.0/dataTables.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Aug 2018 05:44:38 GMT -->
</html>
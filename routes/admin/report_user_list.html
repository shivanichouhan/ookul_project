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
                                <h1>User Report</h1>
                                <small> User Report Weekly Monthly Yearly</a></small>
                                <ol class="breadcrumb">
                                    <li><a href="index.html"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="add_agent.php">Add User</a></li>
                                    <li class="active">User List</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4> User List</h4>
                                        </div>
                                    </div>
									<?php 
include"db.php";


?>

   <!-- CSS -->
   <link href='jquery-ui.min.css' rel='stylesheet' type='text/css'>

   <!-- Script -->
   <script src='jquery-3.3.1.js' type='text/javascript'></script>
   <script src='jquery-ui.min.js' type='text/javascript'></script>
   <script type='text/javascript'>
   $(document).ready(function(){
     $('.dateFilter').datepicker({
        dateFormat: "yy-mm-dd"
     });
   });
   </script>

   <!-- Search filter -->
   <div style="padding: 10px; margin:  10px;">
   <form method='post' action=''>
     Start Date <input type='text' class='dateFilter' name='fromDate' value='<?php if(isset($_POST['fromDate'])) echo $_POST['fromDate']; ?>'>
 
     End Date <input type='text' class='dateFilter' name='endDate' value='<?php if(isset($_POST['endDate'])) echo $_POST['endDate']; ?>'>

     <input type='submit' name='but_search' value='Search'  class="btn btn-success">
   </form>
   </div>

   <!-- Employees List -->
   <div style='height: 80%; overflow: auto;' >

                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr><th>#</th>
														<th>Name</th>
														<th>Email</th>
														<th>Mobile Number</th>
														<th>Session Expiry Date</th>
														<th>District</th>
														<th>Block</th>
														
														<th>Address</th>
														<th>Gender</th>
														<th>Date Of Birth</th>
														<th>Profile</th>
														<th>System Ip</th>
														<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												 <?php
        $emp_query = "SELECT * FROM  user_register WHERE 1 ";

       // Date filter
       if(isset($_POST['but_search'])){
          $fromDate = $_POST['fromDate'];
          $endDate = $_POST['endDate'];

          if(!empty($fromDate) && !empty($endDate)){
             $emp_query .= " and register_date	 
                          between '".$fromDate."' and '".$endDate."' ";
          }
        }

        // Sort
         $emp_query .= "ORDER BY register_date	 DESC";
	  
        $employeesRecords = mysqli_query($con,$emp_query);

        // Check records found or not
        if(mysqli_num_rows($employeesRecords) > 0){
			$i=0;
          while($empRecord = mysqli_fetch_assoc($employeesRecords)){
        
		           $cit=$obj->fetchById($empRecord['city_id'],"city","id");
				 
				$block=$obj->fetchById($empRecord['block'],"block","id");
				$i++;
				

?>
												
                                                    <tr>
													<td><?php echo $i; ?></td>
													<td><?php echo $empRecord['name']; ?></td>
													<td><?php echo $empRecord['email']; ?></td>
													<td><?php echo $empRecord['mobile']; ?></td>
													<td><?php echo $empRecord['expriy_date']; ?></td>
                                                    <td><?php echo $cit['city']; ?></td>
													 <td><?php echo $block['block']; ?></td>
													<td><?php echo $empRecord['address']; ?></td>
													<td><?php echo $empRecord['gender']; ?></td>
													<td><?php echo $empRecord['dob']; ?></td>
													<td><img src="upload/<?php echo $empRecord['photo']; ?>" style=" width: 50px;
    height: 50px;"></td>
	<td><?php echo $empRecord['make_address']; ?></td>
	
														<td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="edit_user.php?id=<?php echo $empRecord['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
    <li><a href="delete.php?id=<?php echo $empRecord['id'];?>&table=user_register&field=id&page=user_list" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
   <?php if($empRecord['status']==1){?>
   <li><a href="updateStatus.php?id=<?php echo $empRecord['id'];?>&status=0&table=user_register&statusField=status&field=id&page=user_list">Deactive</a></li><?php } ?>
	 <?php if($empRecord['status']==0){?><li><a href="updateStatus.php?id=<?php echo $empRecord['id'];?>&status=1&table=user_register&statusField=status&field=id&page=user_list" >Active</a></li><?php } ?>
  
     </ul>
</div></td>
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
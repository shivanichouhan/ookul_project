<?php include"header.php";
include"menu.php"; ?>
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                              <i class="fa fa-history" aria-hidden="true"></i>
                            </div>
                            <div class="header-title">
                                <h1>Order History</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                 
                                    <li class="active">Order History</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Order History</h4>
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
                                                    <tr>
													<th>Order Number</th>
													 <th>User Name / Id</th>
													  <th>Email</th>
													  	<th>Phone</th>
														<th>Product Name</th>
														<th>Quentity</th>
                                                        <th>Price</th>
                                                        <th>District</th>
                                                        <th>Block</th>
														<th>Address</th>
														<th>Postal Code</th>
														<th>Order Date</th>
														<th>Traking Number </th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
												  <?php
        $emp_query = "SELECT * FROM order_book WHERE 1 ";

       // Date filter
       if(isset($_POST['but_search'])){
          $fromDate = $_POST['fromDate'];
          $endDate = $_POST['endDate'];

          if(!empty($fromDate) && !empty($endDate)){
             $emp_query .= " and order_date 
                          between '".$fromDate."' and '".$endDate."' ";
          }
        }

        // Sort
         $emp_query .= "ORDER BY order_date DESC";
	  
        $employeesRecords = mysqli_query($con,$emp_query);

        // Check records found or not
        if(mysqli_num_rows($employeesRecords) > 0){
          while($empRecord = mysqli_fetch_assoc($employeesRecords)){
          $pro=$obj->fetchById($empRecord['product_id'],"shopping_product","id");
		            $user=$obj->fetchById($empRecord['user_id'],"user_register","id");
					$des=$obj->fetchById($empRecord['district'],"city","id");
					$blo=$obj->fetchById($empRecord['block'],"block","id");

?>
												
													<tr>
													<td>bongo000<?php  echo $empRecord['order_id'];?></td>
													<td><?php  echo $user['name']; ?> / <?php  echo $empRecord['user_id'];?></td>
													<td><?php  echo $empRecord['email'];?></td>
													<td><?php  echo $empRecord['phone'];?></td>
													<td><?php  echo $pro['product'];?></td>
													<td><?php  echo $empRecord['quentity'];?></td>
													<td><?php  echo $empRecord['price'];?></td>
													<td><?php  echo $des['city'];?></td>
													<td><?php  echo $blo['block'];?></td>
													<td><?php  echo $empRecord['address'];?></td>
													<td><?php  echo $empRecord['postal_code'];?></td>
													
														<td><?php  echo $empRecord['order_date'];?></td>
														<td><?php if($empRecord['traking_number']=='') {?>
														
														<form action="noupdate.php"  method="post">
														<input type="hidden" name="order_id" value="<?php  echo $empRecord['order_id'];?>" >
														<div class="col-md-6"><input style="height: 33px;" type="text" value="<?php  echo $empRecord['traking_number'];?>" name="traking_number"></div><div class="col-md-4">
														<button type="submit" class="btn btn-success">Update</button></div></form>
															<?php 
														}else{
															 
															  ?>
															  <button type="button" class="btn btn-info"><?php echo $empRecord['traking_number']; ?></button>
															  <?php
															
														}
														?>
														
														</td>
													<td>
													
													<button type="button" class="btn btn-success">Success</button>
												</td>
                                                       
                                                      
                                                       
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
     
      </table>
 
    </div>
 </body>
</html>

                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
 




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
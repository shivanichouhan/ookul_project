<?php include"header.php";
include"menu.php"; ?>

<style>
/* Popup container - can be anything you want */
.popup {
    position: relative;
    display: inline-block;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}

/* The actual popup */
.popup .popuptext {
    visibility: hidden;
    width: 160px;
    background-color: #555;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 8px 0;
    position: absolute;
    z-index: 1;
    bottom: 125%;
    left: 50%;
    margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
    content: "";
    position: absolute;
    top: 100%;
    left: 50%;
    margin-left: -5px;
    border-width: 5px;
    border-style: solid;
    border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
    visibility: visible;
    -webkit-animation: fadeIn 1s;
    animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
    from {opacity: 0;} 
    to {opacity: 1;}
}

@keyframes fadeIn {
    from {opacity: 0;}
    to {opacity:1 ;}
}
</style>
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
                                <h1>User List</h1>
                                <small> List All User's</a></small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
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
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
														<th>Name</th>
														<th>Email</th>
														<th>Mobile Number</th>
														<th>Class</th>
														<th>District</th>
														<th>Block</th>
														<th>Address</th>
														<th>Gender</th>
														<th>Date Of Birth</th>
														<th>Profile</th>
														<th>Mac Address</th>
														<th>Payment Type</th>
														<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													$table='user_register';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
											$ss=$obj->fetchById($row['class'],"class","id");
									
										$cit=$obj->fetchById($row['city_id'],"city","id");
										$block=$obj->fetchById($row['block'],"block","id");
								$cop=$obj->fetchById($row['id'],"class_order","user_id");
															?>
                                                    <tr>
													<td><?php echo $row['name']; ?></td>
													<td><?php echo $row['email']; ?></td>
													<td><?php echo $row['mobile']; ?></td>
													<td><?php echo $ss['class']; ?></td>
                                                    <td><?php echo $cit['city']; ?></td>
													 <td><?php echo $block['block']; ?></td>
													<td><?php echo $row['address']; ?></td>
													<td><?php echo $row['gender']; ?></td>
													<td><?php echo $row['dob']; ?></td>
													<td><img src="upload/<?php echo $row['photo']; ?>" style="width:50px; height:50px;"></td>
													<td> <?php if($row['mac']=='') { ?> 
													<button type="button" class="btn btn-success"> Released</button>
													<?php } else { ?>
													<a href="mac_update.php?id=<?php echo $row['id'];?>&mac=<?php echo  base64_encode($row['mac']);?>">
													<button type="button" class="btn btn-danger"> Release</button></a>
													<?php } ?>
													</td>
													<td><?php if($row['payment_type']==1)
													{
														?>
															<button type="button" class="btn btn-success">Online Payment</button>
														<?php
													} 
													elseif($row['payment_type']==3)
													{
													?>
												<div class="popup" onclick="myFunction<?php echo $cop['id']; ?>()"><button type="button" class="btn btn-info" >Coupan</button>
  <span class="popuptext" id="<?php echo $cop['id']; ?>"><?php  echo $cop['coupan_code']; ?></span>
</div>
<script>
// When the user clicks on div, open the popup
function myFunction<?php echo $cop['id']; ?>() {
    var popup = document.getElementById(<?php echo $cop['id']; ?>);
    popup.classList.toggle("show");
}
</script>
													 <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Coupan</button>-->
													<!--<button type="button" class="btn btn-info">Coupan</button>-->
													
													<?php
													} 
													else
													{
														
													} 
													?></td>
													
													
	
														<td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="edit_user.php/<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
    <li><a href="delete.php?id=<?php echo $row['id'];?>&table=user_register&field=id&page=user_list" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
   <?php if($row['status']==1){?>
   <li><a href="updateStatus.php?id=<?php echo $row['id'];?>&status=0&table=user_register&statusField=status&field=id&page=user_list">Deactive</a></li><?php } ?>
	 <?php if($row['status']==0){?><li><a href="updateStatus.php?id=<?php echo $row['id'];?>&status=1&table=user_register&statusField=status&field=id&page=user_list" >Active</a></li><?php } ?>
  
     </ul>
</div></td>
                                                    </tr>
															<?php 
														}
													} ?>
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
 function coupan(a){
				 //alert(a);
				 $("#cou").load("coupanAjax.php?id="+a);
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
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
                              <i class="fa fa-tags" aria-hidden="true"></i>
                            </div>
                            <div class="header-title">
                                <h1>Coupan List</h1>
                                <small>List All Coupan's</a></small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="coupan">Add Coupan</a></li>
                                    <li class="active">Coupan List</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Coupan List</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
													<th>#</th>
<th>Title</th>
<th>Class Name</th>
<th>Price</th>
														
<th>Start Date</th>
<th>End Date</th>
<th>Coupan Code </th>
<th> User Name</th>
<th> Payment Type</th>
														
<th>Coupan Status</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													$table='coupan_class';
													$rs=$obj->fetchAllDetailOrderBydes($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															$op3=$obj->fetchById($row['class'],"class","id");
															//$code12=$obj->fetchById($row['code'],"coupan_class","coupan_code");
															$user12=$obj->fetchById($row['code'],"class_order","coupan_code");
															$user13=$obj->fetchById($row['code'],"gov_order","coupan_code");
																
															
															?>
                                                    <tr>
													<td><?php echo $i; ?></td>
														<td><?php echo $row['title']; ?></td>
														<td><?php 
														if($row['class']=='0'){
														    echo"Government Exam";
														}else
														{
														
														echo $op3['class']; 
														} ?></td>
														<td><?php echo $row['price']; ?></td>
														<td><?php echo $row['start_date']; ?></td>
														<td><?php echo $row['end_date']; ?></td>
														<td><?php echo $row['code']; ?> </td>
                                                        <td><?php
                                                        if($row['class']=='0')
                                                        {
                                                             echo $user13['name']; 
                                                        }
                                                        else
                                                        {
                                                        echo $user12['name']; 
                                                        }
                                                        ?></td>
                                                        
<td><?php if($row['ptype']==0){ echo "Full Payment"; }else{ echo "Partial Payment"; } ?> </td>                                                        
                                                        
                                                        
                                                        
														<td>  <?php if($row['status']==1){?>
														<button type="button" class="btn btn-danger" style="background:#fe7222; border:1px solid #fe7222;">Used</button>
													
														<?php } else {?>
													<button type="button" class="btn btn-success" style="background:#9d09e9;border:1px solid #9d09e9;">Unused</button>
														<?php } ?>

														
														
														</td>
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
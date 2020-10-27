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
                                <h1>Relationship Manager List</h1>
                                <small>Relationship Manager  List</a></small>
                                <ol class="breadcrumb">
                                    <li><a href="dashboard"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="referal_agent"> Add Relationship Manager </a></li>
                                    <li class="active">Relationship Manager  List</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Relationship Manager  List</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>User Name</th>
                                                        <th>Email</th>
                                                        <th>Mobile Number</th>
                                                        <th>Amount</th>
                                                        <th>Address</th>
                                                        <th  style="width: 300px;">Note</th>
                                                        <th> Relationship Manager </th>
                                                        <!--<th>Block</th>-->
														 <th>Profile</th>
                                                        <th>Document</th>
                                                        <th>Account Holder Name</th>
                                                        <th>Account Number</th>
                                                        <th>IFC Code</th>
                                                        <th>Branch Name</th>
                                                        
                                                        
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                               <?php
                                                    $table='referal_agent';
                                                    $rs=$obj->fetchAllDetail($table);
                                                    if($rs)
                                                    {   $i=0;
                                                        while($row=mysqli_fetch_assoc($rs))
                                                        {   $i++;
                                                                //$ct=$obj->fetchById($row['state_id'],"state","id");
                                                                //$cit=$obj->fetchById($row['district'],"city","id");
                                                                //$agent=$obj->fetchById($row['agent_id'],"agent","id");
                                                                //$block=$obj->fetchById($row['block'],"block","id");
                                                            
                                                            ?>
                                                    <tr>
                                                
                                                    <td><?php echo $row['username']; ?></td>
                                                    <td><?php echo $row['email']; ?></td>
                                                    <td><?php echo $row['mobile']; ?></td>
                                                    <td><?php echo $row['amount']; ?></td>
                                                    <td><?php echo $row['address']; ?></td>
                                                    <td  style="width: 300px;"><?php echo $row['note']; ?></td>
                                                    <td><?php 

                    $u=explode(",",$row['executive_id']);
                    foreach($u as $uu =>$value)
                    {
                        //echo $u;
                      $user=$obj->fetchById($u[$uu],"agent","id");
                         echo $user['name'] ; 
                        echo ",";
                    }?>
</td>
                                                    <!--<td><?php 

                    $u=explode(",",$row['block']);
                    foreach($u as $uu =>$value)
                    {
                        //echo $u;
                      $user=$obj->fetchById($u[$uu],"block","id");
                         echo $user['block'] ; 
                        echo ",";
                    }?></td>--><td><a href="upload/<?php echo $row['image']; ?>"><img src="upload/<?php echo $row['image']; ?>" style="width: 50px; height: 50px;"></a>
                                                   
                                                    <td><a href="upload/<?php echo $row['document']; ?>"><i class="fa fa-download" aria-hidden="true" style="font-size: 50px;   color: #f74d59; "></i></a>
                                                    <td><?php echo $row['account_holder_name']; ?></td>
                                                    <td><?php echo $row['account_number']; ?></td>
                                                    <td><?php echo $row['ifc_code']; ?></td>
                                                    <td><?php echo $row['branch_name']; ?></td>
                                                    
                                                    <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%)!important;
    border: 1px solid transparent!important;
    font-weight: 700!important;">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="referal_edit_agent.php/<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
    <li><a href="delete.php/<?php echo $row['id'];?>/referal_agent/id/referal_angent_list" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
   <?php if($row['status']==1){?>
   <li><a href="updateStatus.php/<?php echo $row['id'];?>/0/referal_agent/status/id/referal_angent_list">Deactive</a></li><?php } ?>
     <?php if($row['status']==0){?><li><a href="updateStatus.php/<?php echo $row['id'];?>/1/referal_agent/status/id/referal_angent_list" >Active</a></li><?php } ?>
  
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
</html>]
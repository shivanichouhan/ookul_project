<?php include"header.php";
include"menu.php"; 
		$gove=$obj->fetchById($_SESSION['admin_id'],"user_register_goverment","id");

?> <!-- /. main header -->
            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                              <i class="fa fa-list" aria-hidden="true"></i>
                            </div>
                            <div class="header-title">
                                <h1>Government  List</h1>
                                <small>Government  Online's</a></small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="gov_assigment.php">Government </a></li>
                                    <li class="active">Government  List</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4> Government  List</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
														<th>#</th>
														<th>Day</th>
														<th>Subject</th>
														<th>Topic</th>
														<th>Question</th>
														<th>Option(1)</th>
														<th>Option(2)</th>
														<th>Option(3)</th>
													  <th>Option(4)</th>
													  <th>Soluction</th>
														 <th>Answer</th>
														<th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													$table='assigment_gov';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
												
									$op3=$obj->fetchById($row['days'],"days","id");
								//	$op4=$obj->fetchById($row['subject'],"gov_subject","id");
									$op5=$obj->fetchById($row['topic'],"day_wise_topic","id");
							
								$sch55=$obj->fetchById($row['subject'],"assign_subject","id");
								
								$op4=$obj->fetchById($sch55['subject'],"gov_subject","id");
															
															?>
                                                    <tr>
													<td><?php echo $i;?></td>
													<td><?php echo $op3['days']; ?></td>
													<td><?php echo $op4['subject']; ?></td>
													<td><?php echo $op5['topic']; ?></td>
														   
<td><?php if($row['question_image']){ ?> <img src="gov_upload/<?php echo $row['question_image'] ?>" >
         <?php  } else { echo $row['question'];  } ?>  </td>
														
<td><?php if($row['option_img1']){ ?>
<img src="gov_upload/<?php echo $row['option_img1'] ?>" > <?php } else { ?>
<?php echo $row['option1']; ?></td>  <?php } ?>
<td><?php if($row['option_img12']){ ?>
														   
<img src="gov_upload/<?php echo $row['option_img12'] ?>" >
				<?php  } else { echo $row['option2'];  }?></td>
	<td><?php if($row['option_img3']){ ?>
		 <img src="gov_upload/<?php echo $row['option_img3'] ?>" >
														     <?php } else { echo $row['option3']; } ?></td>
														
														 <td><?php if($row['option_img4']){ ?>
														 	     <img src="gov_upload/<?php echo $row['option_img4'] ?>" >
														     <?php  } else { echo $row['option4']; }?></td>
														   		
														 <td><?php if($row['soluction_img']){ ?>
														 	     <img src="gov_upload/<?php echo $row['soluction_img'] ?>" >
														     <?php  } else { echo $row['soluction']; }?></td>
														     
														       
														     
														<td>
														    <?php echo $row['answer']; ?>													
														</td>
														
														
														<td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="    background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="edit_gov_assigment.php/<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
    <li><a href="delete.php/<?php echo $row['id'];?>/assigment_gov/id/gov_assigment_list" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>

  
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
</html>
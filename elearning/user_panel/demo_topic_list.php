<?php include"header.php";
include"menu.php"; ?>

<!-- /. main header -->
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
                                <h1>Demo Topic  List</h1>
                                <small></small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="demo_topic"> Add Demo Topic</a></li>
                                    <li class="active">Demo Topic List</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Demo Topic List</h4>
                                        </div>
                                    </div>
                                
                                <div id="change">   
                                    
                                    <div class="panel-body">
                                        <div class="table-responsive">
                                            <table id="dataTableExample1" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>
                                                        <th> </th>
													 <th>Class</th>
													  <th>Subject</th>
													  	<th>Topic</th>
														<th>Image</th>
                                                        
                                                        <th>Video</th>
                                                        <th style="width:400; ">Contant</th>
														<th>Document</th>
                                                        <th>Action</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
												<?php
													$table='demo_topic';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
																
																//$cit=$obj->fetchById($row['class'],"class","id");
																$sch=$obj->fetchById($row['subject'],"demo_subject","id");
															?>
                                                    <tr>
                                                        
     <td>
<?php  if($row['free_status']=='1'){ ?>
<input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','0')" checked="checked">
<?php } else{ ?>

<input type="checkbox"  onclick="change_update('<?php echo $row['id']; ?>','1')"> <?php } ?></td>                                                    
                                                        
                                                        
                                                        
													<td><?php  if($row['class']==1) { echo"9 th "; }
													if($row['class']==2) { echo"10 th "; }
													
													?></td>
													<td><?php  echo $sch['subject'];?></td>

														<td><?php  echo $row['topic'];?></td>
														<td><img src="upload/<?php  echo $row['topic_pic'];?>" style="   width: 217px; height: 225px;"></td>
														
                                                        <td><video width="400" controls>
															<source src="upload/<?php  echo $row['video'];?>" type="video/mp4">
															<source src="upload/<?php  echo $row['video'];?>" type="video/ogg">
															</video>
														</td>
                                                        <td style="width: 400px; height: 225px;"><?php  echo $row['contant'];?></td>
														<td><a href="upload/<?php  echo $row['doucment'];?>">Doucment Download</a></td>
                                                       
                                                       <td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="  background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="demo_edit_topic.php/<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
    <li><a href="delete.php/<?php echo $row['id'];?>/demo_topic/id/demo_topic_list" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>
   <?php if($row['status']==1){?>
   <li><a href="updateStatus.php/<?php echo $row['id'];?>/0/demo_topic/status/id/demo_topic_list">Deactive</a></li><?php } ?>
	 <?php if($row['status']==0){?><li><a href="updateStatus.php/<?php echo $row['id'];?>/1/demo_topic/status/id/demo_topic_list" >Active</a></li><?php } ?>
  
     </ul>
</div></td>
                                                    </tr>
													<?php }} ?>
                                                  
                                                 
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                </div>    
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
           <?php include"footer.php"; ?> <!-- /. footer -->
        </div> <!-- ./wrapper -->
        
        <script>
                function change_update(a,b)
                {
                       var http=new XMLHttpRequest();
						http.onreadystatechange=function()
						{	
						if(http.readyState==4 && http.status==200)
						{
					 	document.getElementById("change").innerHTML=http.responseText;
						}
						//alert(http.responseText);
						}
						
						http.open("GET","update_videos_2_status.php?id="+a+"&status="+b,true);
						http.send();
                }
            </script>
        
        
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
<?php include"header.php";
include"menu.php"; 
		$gove=$obj->fetchById($_SESSION['admin_id'],"user_register_goverment","id");

?>          <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                              <i class="fa fa-list" aria-hidden="true"></i>
                            </div>
                            <div class="header-title">
                                <h1>Exam Schedule List</h1>
                                <small>Exam Schedule List's</a></small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="exam_time">Rank Exam Schedule </a></li>
                                    <li class="active">Rank Exam Schedule  List</li>
                                </ol>
                            </div>
                        </div> 
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Rank Exam Schedule List</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                     <div class="table-responsive">
      <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
								<thead>
									<tr>
										<th>#</th>
									 
									    <th>Exam Name</th>
                                        
                                        <!--<th>Days</th> 
										<th>Week Days</th>-->
										
									   <th>Exam Type</th>
										
									   <!--<th>Subject Name</th>-->
										
									   <th>Time duration</th>

        							   <th>Start time</th>
                                       <th>End time</th>
                                       <th>Number Of Question</th>
                                       <th>Total Marks</th>
                                       <th>Each Question Mark(+)</th>
                                       <th>Each Question Mark(-)</th>
                                       
                                       <!--<th>Each Set Question Mark</th>-->
									
										<th>Action</th>
									     </tr>
								         </thead>
								           <tbody>
								<?php
									$table='gove_exam';
													$id=2;
													$field='exam_type';
													
													$rs=$obj->fetchDetailById($id,$table,$field);
								if($rs)
								{	$i=0;
								while($row=mysqli_fetch_assoc($rs))
								{	$i++;
													
								//$op=$obj->fetchById($row['school_id'],"school","id");
						        //$op1=$obj->fetchById($row['class_id'],"gove_class","id");
						        //$op2=$obj->fetchById($gove['register_date'],"gove_exam","days_id");	
					            //$op3=$obj->fetchById($row['days_id'],"days","id");
						        //$top=$obj->fetchById($row['exam_type_id'],"exam_type","id");
								//$chap=$obj->fetchById($row['chapter'],"chapter","id");
								
								$row10=$obj->fetchById($row['day'],"days","id");							
								?>
                                                    <tr>
										<td><?php echo $i;?></td>
                                        <td><?php echo $row['exam_name']; ?></td>
                                        <!--<td><?php echo $row10['days']; ?></td>-->
										
										<!--<td><?php echo $row['monday']; ?><?php echo $row['tuesday']; ?>
										<?php echo $row['wednesday']; ?>
										<?php echo $row['thursday']; ?>
										<?php echo $row['friday']; ?>
										<?php echo $row['saturday']; ?>
										<?php echo $row['sunday']; ?></td>-->
										
										
										<td><?php 
										
										if($row['exam_type']=='1'){
										echo"Practise";
										}if($row['exam_type']=='2')
										{
										    echo"Rank";
										}?></td>
										
									
									
										<!--<td>//<?php 
										//$res=explode(",",$row['subject']);
										
                                        //foreach ($res as $u => $value) 
                                        //{
                                        //									$chap4=$obj->fetchById($res[$u],"gov_subject","id");
                                        //									echo	$chap4['subject'];
                                        //									echo",";
                                        //}
									    ?></td>-->
									
									
										<td><?php echo $row['time_dur']; ?></td>
										<td><?php echo $row['start_time']; ?></td>
											<td><?php echo $row['end_time']; ?></td>
									
										<td><?php echo $row['numbers_of_que']; ?></td>
                                       <td><?php echo $row['total_marks']; ?></td>
                                       <td><?php echo $row['q_marks_pluse']; ?></td>
                                       <td><?php echo $row['q_mark_min']; ?></td>
                                    <!--    <td><?php echo $row['each_set_question']; ?></td>-->

														<td><div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="    background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Action
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="edit_exam_time.php/<?php echo $row['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Edit</a></li>
    <li><a href="delete.php/<?php echo $row['id'];?>/gove_exam/id/exam_time_list" onClick="return confirm('Are you sure?');"><i class="fa fa-trash" aria-hidden="true"></i>Delete</a></li>

  
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
        <script src="assets/plugins/datatables/dataTables.min.js" type="text/javascript"></script>
        <script src="assets/dist/js/dashboard.js" type="text/javascript"></script>
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

</html>
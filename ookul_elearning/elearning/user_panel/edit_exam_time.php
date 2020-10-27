<?php include"header.php";
include"menu.php"; 
$b=explode('/',$a);
 $_GET['id']=$b['5'];
 
 
  $ass=$obj->fetchById($_GET['id'],"gove_exam","id");

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                                <i class="pe-7s-note2"></i>
                            </div>
                            <div class="header-title">
                                <h1>Exam Schedule </h1>
                                <small>Add Exam Schedule <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="exam_time_list">Rank Exam Schedule List</a></li>
                                    <li class="active">Exam Schedule</li>
                                </ol>
                            </div>
                        </div>
						<!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Edit Exam Schedule</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="<?php echo $base1; ?>edit_exam_time_sub" method="post" enctype="multipart/form-data">
										
										<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
										
										<input type="hidden" name="days" value="0">
										
									
										
										
										
								
                                                <label for="inputName" class="control-label">Days</label>
                                                <input type="checkbox" name="monday" <?php  if($ass['monday']=='m'){  ?> checked="checked" <?php } ?> value="m">Monday
                                                <input type="checkbox" name="tuesday" <?php  if($ass['tuesday']=='t'){  ?> checked="checked" <?php } ?> value="t">Tuesday
                                                <input type="checkbox" name="wednesday" <?php  if($ass['wednesday']=='w'){  ?> checked="checked" <?php } ?> value="w">Wednesday
                                                <input type="checkbox" name="thursday" <?php  if($ass['thursday']=='thu'){  ?> checked="checked" <?php } ?> value="thu">Thursday
                                                <input type="checkbox" name="friday" <?php  if($ass['friday']=='f'){  ?> checked="checked" <?php } ?> value="f">Friday
                                                <input type="checkbox" name="saturday" <?php  if($ass['saturday']=='s'){  ?> checked="checked" <?php } ?>  value="s">Saturday
                                                <input type="checkbox" name="sunday" <?php  if($ass['sunday']=='sun'){  ?> checked="checked" <?php } ?> value="sun">Sunday
                                             
										
										
										
											<div class="form-group">
                                                <label for="inputName" class="control-label">Exam Type</label>
                                                <select class="form-control" id="exampleSelect1" name="exam_type">
												 <option  value="">--Exam Type--</option>
												 <option <?php if($ass['exam_type']=='1'){ ?>selected="selected" <?php } ?> value="1">Practise</option>
												 <option <?php if($ass['exam_type']=='2'){ ?>selected="selected" <?php } ?>  value="2">Rank</option>
											   </select>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Subject Name</label>
                                                <!--<input type="text" class="form-control" id="subject" name="subject" placeholder="subject" required>-->
											 <select class="form-control" id="exampleSelect1" name="subject[]" multiple >
												  <?php 
												  $aa=explode(",",$ass['subject']);
												  foreach($aa as $au => $value)
                                                            {
                                                                $us=$aa[$au];
                                                                $subs=$obj->fetchById($us,"gov_subject","id");
															?>
												 <option   value="<?php echo $us; ?>" selected ><?php echo $subs['subject']; ?></option>
												 <?php } ?>
												<?php
													$table='gov_subject';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
                                                            
                                                           ?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['subject'];  ?></option>
													<?php 
														}
													}
													?>
                                                </select>
											</div>
											
											<div class="form-group">
                                                <label for="inputName" class="control-label">Time duration </label>
                                                <input type="text" class="form-control"  name="time_dur" placeholder="Time duration" value="<?php echo $ass['time_dur']; ?>" required>
											</div>
												<div class="form-group">
									<label for="inputName" class="control-label">Start time</label>
										<input type="time" name="start_time" class="form-control" placeholder=" start Time "  value="<?php echo $ass['start_time']; ?>" >
									</div>
													<div class="form-group">
									<label for="inputName" class="control-label">End time</label>
										<input type="time" name="end_time" class="form-control" placeholder=" End Time " value="<?php echo $ass['end_time']; ?>">
									</div>
													<div class="form-group">
									<label for="inputName" class="control-label">Number Of Question</label>
										<input type="text" name="numbers_of_que" class="form-control" placeholder="numbers_of_que" value="<?php echo $ass['numbers_of_que']; ?>">
									</div>
								
										<div class="form-group">
									<label for="inputName" class="control-label">Total Marks</label>
										<input type="text" name="total_marks" class="form-control" placeholder="Total Marks" value="<?php echo $ass['total_marks']; ?>">
									</div>
												<div class="form-group">
									<label for="inputName" class="control-label">Each Question Mark(+)</label>
										<input type="text" name="q_marks_pluse" class="form-control" placeholder="Each Question marks" value="<?php echo $ass['q_marks_pluse']; ?>">
									</div>
									
									<div class="form-group">
									<label for="inputName" class="control-label">Each Question Mark(-) </label>
										<input type="tetx" name="q_mark_min" class="form-control" placeholder="Each Question (-) marking" value="<?php echo $ass['q_mark_min']; ?>">
									</div>
									<div class="form-group">
									<label for="inputName" class="control-label">Each Set Question Mark (Comma Separated (,)) </label>
										<input type="tetx" name="each_set_question" class="form-control" placeholder="Each Set Question Mark (10,20)" value="<?php echo $ass['each_set_question']; ?>">
									</div>
									<div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.
			-wrapper -->
            <!-- start footer -->
					 <script>
 function clas(a){
				 //alert(a);
				 $("#subject").load("subjectAjax.php?id="+a);
				  }
				  </script>
				  	 <script>
 function subj(a){
				// alert(a);
				 $("#chapter").load("chapterAjax.php?id="+a);
				  }
				  </script>
				  
       <?php include"footer.php"; ?>
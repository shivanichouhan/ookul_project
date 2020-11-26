<?php include"header.php";
include"menu.php"; ?>
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
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="practice_exam_time_list.php">Practice Exam Schedule List</a></li>
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
                                            <h4>Add Practice Exam Schedule</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="exam_time_sub.php" method="post" enctype="multipart/form-data">
										
										<div class="form-group">
                                                <label for="exampleSelect1">Days</label>
												
                                                <select class="form-control" id="exampleSelect1" name="days"  >
												 <option value="">--Day--</option>
												<?php
													$table='days';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['days'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
														
                                            </div>
										
										
										
										
										
										
										<div class="form-group">
                                                <label for="inputName" class="control-label">Exam Name</label>
                                                 <input type="text" class="form-control"  name="exam_name" placeholder="Exam Name" required>
                                                </div>
											
                                            
                                                <input type="hidden" name="monday" value="m">
                                                <input type="hidden" name="tuesday" value="t">
                                                <input type="hidden" name="wednesday" value="w">
                                                <input type="hidden" name="thursday" value="t">
                                                <input type="hidden" name="friday" value="f">
                                                <input type="hidden" name="saturday" value="s">
                                                <input type="hidden" name="sunday" value="sun">
                                             
										
											<div class="form-group">
                                                <label for="inputName" class="control-label">Exam Type</label>
                                                <select class="form-control" id="exampleSelect1" name="exam_type" onChange="examtype(this.value)">
												 <!--<option value="">--Exam Type--</option>-->
												<option value="1">Practise</option>
												
												 <!--<option selected="selected" value="2">Rank</option>-->
											   </select>
											</div>
											<div id="exam">
											<!--<div class="form-group">
                                                <label for="inputName" class="control-label">Subject Name</label>
                                                <input type="text" class="form-control" id="subject" name="subject" placeholder="subject" required>-->
											 <!--<select class="form-control" id="exampleSelect1" name="subject[]" multiple >
												 <option value="">--Subject--</option>
												//<?php
												//	$table='gov_subject';
												//	$rs=$obj->fetchAllDetail($table);
												//	if($rs)
												//	{	$i=0;
												//		while($row=mysqli_fetch_assoc($rs))
												//		{	$i++;
      
												//			?>
                                                //   <option value="<?php echo $row['id']; ?>"><?php echo $row['subject'];  ?></option>
												//	<?php //} 
												//	}
												//	?>
                                                </select>-->
                                                
            <input type="hidden" name="subject[]" value="1,2,3,4,5,7,8,9,10,11,12,13,16,18">                                    
                                                
											<!--</div>-->
											
											<div class="form-group">
                                                <label for="inputName" class="control-label">Time duration </label>
                                                <input type="number" class="form-control"  name="time_dur" placeholder="Time duration" required>
											</div>
								
									<input type="hidden" name="start_time" class="form-control" value="0">
									
									<input type="hidden" name="end_time" class="form-control" value="0">
									
								    <div class="form-group">
									<label for="inputName" class="control-label">Number Of Question</label>
										<input type="text" name="numbers_of_que" class="form-control" placeholder="numbers_of_que">
									</div>
								
										<div class="form-group">
									<label for="inputName" class="control-label">Total Marks</label>
										<input type="text" name="total_marks" class="form-control" placeholder="Total Marks">
									</div>
										<div class="form-group">
									<label for="inputName" class="control-label">Each Question Mark(+)</label>
										<input type="text" name="q_marks_pluse" class="form-control" placeholder="Each Question marks">
									</div>
									
									<input type="hidden" name="q_mark_min" value="0">
									
									<input type="hidden" name="each_set_question" value="0">
									
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
	<script>
	    function examtype(a)
	    {
	        var http=new XMLHttpRequest();
			http.onreadystatechange=function()
			{	
			if(http.readyState==4 && http.status==200)
			{
		 	document.getElementById('exam').innerHTML=http.responseText;
			}
			//alert(http.responseText);
			}
			
			http.open("GET","examAjaxtest.php?id="+a,true);
			http.send();
	    }
	</script>			  
				  
       <?php include"footer.php"; ?>
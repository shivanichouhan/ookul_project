<?php include"header.php";
include"menu.php";
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
                                <h1> Assignment  </h1>
                                <small>Assignment <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="fa_assigment_list.php"> Assignment List</a></li>
                                    <li class="active"> Assignment </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Assignment </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                    <form data-toggle="validator" action="fa_assigment_sub.php"  enctype="multipart/form-data" method="post">
											
											
											
								
											<div class="form-group">
                                                <label for="inputName" class="control-label">Subject Name</label>
											 <select class="form-control" id="subject" name="subject"  onChange="mytopic(this.value)" >
												 <option value="">--Subject--</option>
												<?php
													$table='gov_subject';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option value="<?php echo $row['id']; ?>"><?php echo $row['subject'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Topic Name</label>
                                                <!--<input type="text" class="form-control"  name="topic" placeholder="Topic" required>-->
        											 <select class="form-control" id="topic" name="topic"  >
        												 <option value="">--Topic--</option>
        												
                                                        </select>
											</div>
											<!--<div class="form-group">-->
           <!--                                     <label for="exampleSelect1">Type</label>-->
												
           <!--                                     <select class="form-control" id="exampleSelect1" name="type"  onChange="qimage(this.value);">-->
											<!--	 <option value="">--Type--</option>-->
											<!--	<option value="1">Text</option>-->
											<!--	<option value="2">Image</option>-->
           <!--                                     </select>-->
														
           <!--                                 </div>-->
											<!--<div id="mcqimage">-->
											<!--</div>-->
											 <div class="form-group">
                                                <label for="inputName" class="control-label">Upload (CSV) </label></br>
                                                <label for="inputName" class="control-label" style="    color: #0b0b0b!important;"><a href="product/mcq.csv" download> Download Simple File (CSV) </a></label>
											  <input type="file" name="file" />
											</div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div> 
				</div> 
<script>
 function qimage(a){
				 //alert(a);
				 $("#mcqimage").load("gove_mcq_image.php?id="+a);
				  }
</script>
		 <script>
    function mytest(a)
    {
        var http=new XMLHttpRequest();
						http.onreadystatechange=function()
						{	
						if(http.readyState==4 && http.status==200)
						{
					 	document.getElementById("subject").innerHTML=http.responseText;
						}
						//alert(http.responseText);
						}
						
						http.open("GET","day_wise_subjectAjax.php?id="+a,true);
						http.send();
    }
    function mytopic(a)
    {
        var http=new XMLHttpRequest();
						http.onreadystatechange=function()
						{	
						if(http.readyState==4 && http.status==200)
						{
					 	document.getElementById("topic").innerHTML=http.responseText;
						}
						//alert(http.responseText);
						}
						
						http.open("GET","topic_subjectAjax.php?id="+a,true);
						http.send();
    }
    
</script>
				  

       <?php include"footer.php"; ?>
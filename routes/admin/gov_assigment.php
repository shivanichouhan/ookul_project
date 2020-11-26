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
                                    <li><a href="gov_assigment_list"> Assignment List</a></li>
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
                    <form data-toggle="validator" action="gov_assigment_sub"  enctype="multipart/form-data" method="post">
											
											
											
									<div class="form-group">
                                                <label for="exampleSelect1">Days</label>
												
                                                <select class="form-control" id="exampleSelect1" name="days"  onChange="mytest(this.value)"  >
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
                                                <label for="inputName" class="control-label">Subject Name</label>
											 <select class="form-control" id="subject" name="subject"  onChange="mytopic(this.value)" >
												 <option value="">--Subject--</option>
												
                                                </select>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Topic Name</label>
                                                <!--<input type="text" class="form-control"  name="topic" placeholder="Topic" required>-->
        											 <select class="form-control" id="topic" name="topic"  >
        												 <option value="">--Topic--</option>
        												
                                                        </select>
											</div>
											<div class="form-group" >
     <label for="inputName" class="control-label">Question</label>
     <textarea id="summernote" name="question"></textarea>
        <!--<input type="text" class="form-control" id="inputName" name="question" placeholder="question" required>-->
</div>
<div class="form-group">
     <label for="inputName" class="control-label">Question</label>
        <input type="file" class="form-control" id="inputName" name="question_image" placeholder="question" >
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(1)</label>
         <textarea id="summernote1" name="option1"></textarea>

    <!--<input type="text" class="form-control" id="inputName" name="option1" placeholder="option 1" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(1)</label>
    <input type="file" class="form-control" id="inputName" name="option_img1" placeholder="option 1" >
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(2)</label>
    <textarea id="summernote2" name="option2"></textarea>
    <!--<input type="text" class="form-control" id="inputName" name="option2" placeholder="option 2" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(2)</label>
    <input type="file" class="form-control" id="inputName" name="option_img12" placeholder="option 2" >
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(3)</label>
        <textarea id="summernote3" name="option3"></textarea>

    <!--<input type="text" class="form-control" id="inputName" name="option3" placeholder="option 3" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(3)</label>
    <input type="file" class="form-control" id="inputName" name="option_img3" placeholder="option 3" >
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(4)</label>
       <textarea id="summernote4" name="option4"></textarea>
    <!--<input type="text" class="form-control" id="inputName" name="option4" placeholder="option 4" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(4)</label>
    <input type="file" class="form-control" id="inputName" name="option_img4" placeholder="option 4" >
</div>
<div class="form-group">
    <label for="inputName" class="control-label">Solution</label>
           <textarea id="summernote5" name="soluction"></textarea>

    <!--<input type="text" class="form-control" id="inputName" name="soluction" placeholder="soluction" required>-->
</div>
<div class="form-group">
    <label for="inputName" class="control-label">Solution</label>
    <input type="file" class="form-control" id="inputName" name="soluction_img" placeholder="soluction_img" >
</div>
<div class="form-group">
    <label for="inputName" class="control-label">Answer</label>
		<select class="form-control" id="exampleSelect1" name="answer" >
		<option value="">Answer</option>
		<option value="1">Question1 </option>
		<option value="2">Question2</option>
		<option value="3">Question3</option>
		<option value="4">Question4</option>
    </select>
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
						
						http.open("GET","day_wise_topicAjax.php?id="+a,true);
						http.send();
    }
    
</script>
<script src="https://app.bongosikha.com/admin/assets/plugins/summernote/summernote.min.js" type="text/javascript"></script>

	  <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote1').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote2').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote3').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote4').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                "use strict"; // Start of use strict
                //summernote
                $('#summernote5').summernote({
                    height: 300, // set editor height
                    minHeight: null, // set minimum height of editor
                    maxHeight: null, // set maximum height of editor
                    focus: true                  // set focus to editable area after initializing summernote
                });
            });
        </script>
        
				  

       <?php include"footer.php"; ?>
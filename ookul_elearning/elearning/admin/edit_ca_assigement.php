<?php include"header.php";
include"menu.php";

$b=explode('/',$a);
 $_GET['id']=$b['5'];
 
$ass=$obj->fetchById($_GET['id'],"ca_assigment","id");
$ass11=$obj->fetchById($ass['topic'],"ca_topic","id");
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
                                <h1> Current Affairs Assignment  </h1>
                                <small>Current Affairs Assignment <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="ca_assigement_list.php">
Current Affairs Assignment List</a></li>
                                    <li class="active">
Current Affairs Assignment </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>
Current Affairs Assignment </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                    <form data-toggle="validator" action="<?php echo $base1; ?>edit_ca_assigment_sub"  enctype="multipart/form-data" method="post">
						<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">		
									<div class="form-group">
                                                <label for="inputName" class="control-label">Subject</label>
                                                <!--<input type="text" class="form-control" id="subject" name="subject" placeholder="subject" required>-->
											 <select class="form-control" id="exampleSelect1" name="subject"  onclick="mytopic(this.value)">
												 <option value="">--Subject--</option>
												<?php
											
													$rs=$obj->fetchAllDetail("current_affairs_subject");
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
      
															?>
                                                    <option <?php if($ass['subject']==$row['id']) { ?> selected="selected" <?php } ?> value="<?php echo $row['id']; ?>"><?php echo $row['subject_name'];  ?></option>
													<?php } 
													}
													?>
                                                </select>
											</div>
											
											<div class="form-group">
                                                <label for="inputName" class="control-label">Topic</label>
                                                <!--<input type="text" class="form-control" id="inputName" name="topic" placeholder="Topic" required>-->
											<select class="form-control" id="topic" name="topic"  >
												 <option value="<?php echo $ass['topic']; ?>"><?php echo $ass11['topic']; ?></option>
											
                                                </select>
											
											</div>		
											<div class="form-group">
                                                <label for="exampleSelect1">Type</label>
												
                                                <select class="form-control" id="exampleSelect1" name="type"  onChange="qimage(this.value);">
												 <option value="">--Type--</option>
												<option <?php if($ass['type']=='1'){ ?> selected="selected" <?php } ?>  value="1">Text</option>
												<option <?php if($ass['type']=='2'){ ?> selected="selected" <?php } ?> value="2">Image</option>
                                                </select>
														
                                            </div>
											<div id="mcqimage">
											    <?php if($ass['type']=='1')
											    { ?>
											    <div class="form-group">
     <label for="inputName" class="control-label">Question</label>
        <input type="text" class="form-control" id="inputName" name="question" placeholder="question" value="<?php echo $ass['question']; ?>">
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(1)</label>
    <input type="text" class="form-control" id="inputName" name="option1" placeholder="option 1" value="<?php echo $ass['option1']; ?>">
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(2)</label>
    <input type="text" class="form-control" id="inputName" name="option2" placeholder="option 2" value="<?php echo $ass['option2']; ?>">
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(3)</label>
    <input type="text" class="form-control" id="inputName" name="option3" placeholder="option 3" value="<?php echo $ass['option3']; ?>">
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(4)</label>
    <input type="text" class="form-control" id="inputName" name="option4" placeholder="option 4" value="<?php echo $ass['option4']; ?>">
</div>
<div class="form-group">
    <label for="inputName" class="control-label">Solution</label>
    <input type="text" class="form-control" id="inputName" name="soluction" placeholder="soluction" value="<?php echo $ass['soluction']; ?>">
</div>
<div class="form-group">
    <label for="inputName" class="control-label">Answer</label>
		<select class="form-control" id="exampleSelect1" name="answer" >
		<option value="">Answer</option>
		<option <?php if($ass['answer']=='1') {?> selected="selected" <?php } ?> value="1">Question1 </option>
		<option <?php if($ass['answer']=='2') {?> selected="selected" <?php } ?>  value="2">Question2</option>
		<option <?php if($ass['answer']=='3') {?> selected="selected" <?php } ?>  value="3">Question3</option>
		<option <?php if($ass['answer']=='4') {?> selected="selected" <?php } ?>  value="4">Question4</option>
    </select>
</div>
											    <?php }
											    if($ass['type']=='2'){ ?> 
											   <div class="form-group">
     <label for="inputName" class="control-label">Question</label>
        <input type="file" class="form-control" id="inputName" name="question_image" placeholder="question" value="<?php echo $ass['question_image']; ?>" required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(1)</label>
    <input type="file" class="form-control" id="inputName" name="option_img1" placeholder="option 1" value="<?php echo $ass['option_img1']; ?>" required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(2)</label>
    <input type="file" class="form-control" id="inputName" name="option_img12" placeholder="option 2" value="<?php echo $ass['option_img12']; ?>" required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(3)</label>
    <input type="file" class="form-control" id="inputName" name="option_img3" placeholder="option 3" value="<?php echo $ass['option_img3']; ?>"  required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">option(4)</label>
    <input type="file" class="form-control" id="inputName" name="option_img4" placeholder="option 4" value="<?php echo $ass['option_img4']; ?>"  required>
</div>
<div class="form-group">
    <label for="inputName" class="control-label">Solution</label>
    <input type="file" class="form-control" id="inputName" name="soluction_img" placeholder="soluction_img" value="<?php echo $ass['soluction_img']; ?>" required>
</div>

<div class="form-group">
    <label for="inputName" class="control-label">Answer</label>
		<select class="form-control" id="exampleSelect1" name="answer" >
		<option value="">Answer</option>
		<option <?php if($ass['answer']=='1') { ?> selected="selected" <?php } ?> value="1">Question1 </option>
		<option <?php if($ass['answer']=='2') { ?> selected="selected" <?php } ?> value="2">Question2</option>
		<option <?php if($ass['answer']=='3') { ?> selected="selected" <?php } ?> value="3">Question3</option>
		<option <?php if($ass['answer']=='4') { ?> selected="selected" <?php } ?> value="4">Question4</option>
    </select>
</div> 
											    <?php }
											    
											    ?>
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
				 $("#mcqimage").load("ca_mcq_ajax.php?id="+a);
				  }
</script>
	
<script>

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
						
						http.open("GET","ca_topicAjax.php?id="+a,true);
						http.send();
    }
</script>
				  

       <?php include"footer.php"; ?>
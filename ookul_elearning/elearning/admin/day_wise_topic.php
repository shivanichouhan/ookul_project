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
                                <i class="fa fa-table"></i>
                            </div>
                            <div class="header-title">
                                <h1>Topic </h1>
                                <small>Add Topic <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="day_wise_topic_list">Subject Wise Topic List</a></li>
                                    <li class="active">Day Wise Topic</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add Day Wise Topic</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="day_wise_topic_sub" method="post" enctype="multipart/form-data">
										
											
                                                <input type="hidden" name="days" value="">
												 
											<div class="form-group">
                                                <label for="inputName" class="control-label">Subject Name</label>
                                                <!--<input type="text" class="form-control" id="subject" name="subject" placeholder="subject" required>-->
											 <select class="form-control" id="subject" name="subject" required>
											 
											  <option value="">--Select Subject--</option>
											 
											  <?php
													$table='gov_subject';
													$rs=$obj->fetchAllDetail($table);
													if($rs)
													{	$i=0;
														while($row=mysqli_fetch_assoc($rs))
														{	$i++;
															
															?>   
												 <option value="<?php echo $row['id']; ?>"><?php echo $row['subject']; ?></option>
												 
											 <?php }} ?>	 
												
                                                </select>
											</div>
											<div class="form-group">
                                                <label for="inputName" class="control-label">Topic Name</label>
                                                <input type="text" class="form-control"  name="topic" placeholder="Topic" required>
											 </div>
											 
											<div class="form-group">
                                            <label for="inputName" class="control-label">Thumbnail</label>
                                            <input type="file" class="form-control"  name="images" placeholder="Thumbnail" required>
											 </div>									 
											 
											<div class="form-group">
                                            <label for="inputName" class="control-label">Free Status (select)</label>
                                            <select name="frees_status" class="form-control" required >
                                                <option value="">--Select--</option>
                                                <option value="1">Show to free access member</option>
                                                <option selected="selected" value="0">Hide to free access member</option>
                                            </select>    
                                                
											 </div>	 
											 
											
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" style=" background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Add Topic</button>
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
    
</script>
       <?php include"footer.php"; ?>
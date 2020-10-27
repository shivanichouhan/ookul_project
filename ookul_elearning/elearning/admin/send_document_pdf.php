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
                              <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
                            </div>
                            <div class="header-title">
                                <h1>Send Document PDF </h1>
                                <small>Send Document PDF Agent/Sub Agent/Refferal Agent <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="sendpdf_list">Send Document PDF  List</a></li>
                                    <li class="active">Send Document PDF </li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Send Document PDF </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="sendpdf_sub" method="post" enctype="multipart/form-data">
											<div class="form-group">
                                                <label for="exampleSelect1">Agent Type</label>
												
                                                <select class="form-control" id="exampleSelect1" name="agent_type"  onChange="clas(this.value);">
												 <option value="">--Agent Type--</option>
												
                                                    <option value="1">Agent</option>
													 <option value="2">Sub Agent</option>
													  <option value="3">Refferal Agent</option>
												<option value="4">PRO</option>
                                                </select>
														
                                            </div>
											<div class="form-group" >
											 <label for="inputName" class="control-label">Agent</label>
											<select class="form-control" data-placeholder="Choose a subject..." id="agent" name="agent" required>
														 <option value=""> -- Agent --</option>
															</select>
											</div>	
											<div class="form-group">
                                                <label for="inputName" class="control-label">Image </label>
                                                <input type="file" class="form-control"  name="image" placeholder="Topic" required>
											</div>
											                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" style="    background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Send</button>
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
				 $("#agent").load("https://app.bongosikha.com/admin/agents_list.php?id="+a);
				  }
				  </script>
			
	
				  
       <?php include"footer.php"; ?>
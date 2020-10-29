<?php include"header.php";
include"menu.php"; ?>            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <!-- Content Header (Page header) -->
                        <div class="content-header">
                            <div class="header-icon">
                               <i class="fa fa-tags" aria-hidden="true"></i>
                            </div>
                            <div class="header-title">
                                <h1>Coupan </h1>
                                <small>Add Coupan <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="list_coupan">Coupan List</a></li>
                                    <li class="active">Coupan</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
						<form data-toggle="validator" action="coupan_sub" method="post" enctype="multipart/form-data">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add Coupan</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
											 <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" class="form-control"  placeholder="Page Title" name="title" required>
                </div>
               
               <div class="form-group">
                  <label for="exampleInputEmail1">Payment Type</label>
				  <select name="ptype" class="form-control" >
				  <option value="">--Select--</option>
	               <option value="1">Partial (Gov)/Normal(Main App) Payment</option>
	                <option value="0">Full (Gov)/Premium(Main App) Payment</option>
				  
					
				  </select>
				    </div>
               
               <div class="form-group">
                  <label for="exampleInputEmail1"> Class Name</label>
				  <select name="class" class="form-control" onChange="user(this.value);">
				  <option value="">--select--</option>
				   <?php
				
					   $rs77=$obj->fetchAllDetail("class");
					if($rs77)
           {$i=0;
            while($row=mysqli_fetch_assoc($rs77))
            {$i++;
					?>
				  <option value="<?php echo $row['id'];?>"><?php echo $row['class'];?></option>
					<?php }}?>
					 <option value="0">Government Exam</option>
				  </select>
				    </div>
				<div class="form-group">
                  <label for="exampleInputEmail1">Price</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Price" name="price" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Quantity</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Quentity" name="quentitiy" required>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Start Date</label>
                  <input type="date" class="form-control" id="example112" placeholder="Start Date" name="start_date" required>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputEmail1">End Date</label>
                  <input type="date" class="form-control" id="example1121" placeholder="End Date" name="end_date" required>
                </div>
                  
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary" style="    background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);
    border: 1px solid transparent;
    font-weight: 700;">Submit</button>
                                            </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
						</form>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
					
       <?php include"footer.php"; ?>
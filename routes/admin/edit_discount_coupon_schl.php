<?php include"header.php";
include"menu.php"; 

$b=explode('/',$a);
$_GET['id']=$b['5']; 
 
$discount=$obj->fetchById($_GET['id'],"school_discount_code","id");

?> 



<!-- /. main header -->
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
                                <h1>Add Discount Coupon</h1>
                                <small>Add Discount Coupon</small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="<?php echo $base; ?>discount_coupon_schl_list.php">Discount Coupon List</a></li>
                                    <li class="active">Add Discount Coupon</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">

<form data-toggle="validator" action="<?php echo $base; ?>edit_discount_coupon_schl_sub.php" method="post" enctype="multipart/form-data">
                        
       <input type="hidden" value="<?php echo $discount['id']; ?>" name="id" >                         
       
       <div class="panel panel-bd lobidrag">
									
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Edit Discount Coupon </h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
											
        		<div class="form-group">
				<label for="inputName" class="control-label">Coupon Code</label>
			    <input type="text" class="form-control" required="required" name="coupon" value="<?php echo $discount['random']; ?>" >
				</div>
		
				<div class="form-group">
				<label for="inputName" class="control-label">Discount Type</label>
				<select name="type" class="form-control" required>
				<option value="">--Select--</option>
				<option <?php if($discount['flat_id']==2){?> selected="selected" <?php } ?> value="2">Percentage (%)</option>
				<option <?php if($discount['flat_id']==1){?> selected="selected" <?php } ?> value="1">Flat</option>
				</select>    
				</div>
				
				<div class="form-group">
				<label for="inputName" class="control-label">Start Date</label>
			    <input type="date" class="form-control" required="required" value="<?php echo $discount['date']; ?>" name="sdate" >
				</div>
				
				<div class="form-group">
				<label for="inputName" class="control-label">End Date</label>
			    <input type="date" class="form-control" required="required" value="<?php echo $discount['expirydate']; ?>" name="edate" >
				</div>
				
				<div class="form-group">
				<label for="inputName" class="control-label">Amount/Percentage</label>
			    <input type="text" class="form-control" required="required" value="<?php echo $discount['amount']; ?>" name="amount" >
				</div>
				
		
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Edit Coupon</button>
                </div>
                </div>
    
                </div>
                </form>
                </div>
                </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
		 <script>
 function clas(a){
				 //alert(a);
				 $("#subject").load("subjectAjax.php?id="+a);
				  }
				  </script>
			
       <?php include"footer.php"; ?>
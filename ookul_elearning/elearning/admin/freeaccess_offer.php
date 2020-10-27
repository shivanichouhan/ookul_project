<?php include"header.php";
include"menu.php"; ?>            <!-- /.content-wrapper -->
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
                                <h1>Free Access Offer </h1>
                                <small>Add Free Access Offer <a href="price_plan.php" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="free_offerlist">Free Access Offer List</a></li>
                                    <li class="active">Free Access Offer</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Free Access Offer</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="freeaccess_offer_sub.php" method="post"  enctype="multipart/form-data">
                                             <div class="form-group">
                                                <label for="inputName" class="control-label">Select Type</label>
                                               <select class="form-control" name="select_type" onChange="sss(this.value);" required>
                                                    <option value="" none>Select Type</option>
                                                   <option value="1">Text</option>
                                                    <option value="2">Image</option>
                                               </select>
                                               
                                            </div>
                                            <div id="selecttype">
                                                <div class="form-group">
                                                    <label for="inputName" class="control-label">Image</label>
                                                    <input type="file" class="form-control" id="inputName" name="image" placeholder="image" required>
                                                </div>
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
            </div> <!-- /.content-wrapper -->
               <script>
 function sss(a){
				//alert(a);
				 $("#selecttype").load("Offer_Ajax.php?id="+a);
				  }
</script>
		   <script>
       <?php include"footer.php"; ?>
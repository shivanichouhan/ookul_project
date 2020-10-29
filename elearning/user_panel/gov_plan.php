<?php include"header.php";
include"menu.php"; 
$pla=$obj->fetchById($_GET['id'],"gov_plan","id");
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
                                <h1>Plan </h1>
                                <small>Add Plan <a href="https://1000hz.github.io/bootstrap-validator/" target="_blank"></a> </small>
                                <ol class="breadcrumb">
                                    <li><a href="deshabord.php"><i class="pe-7s-home"></i> Home</a></li>
                                    <li><a href="gov_plan_list.php">Plan List</a></li>
                                    <li class="active">Plan</li>
                                </ol>
                            </div>
                        </div> <!-- /. Content Header (Page header) -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="panel panel-bd lobidrag">
                                    <div class="panel-heading">
                                        <div class="panel-title">
                                            <h4>Add Plan</h4>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        <form data-toggle="validator" action="gov_plan_sub.php" method="post">
                                            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
											<div class="form-group">
                                                <label for="inputName" class="control-label">Plan Name </label>
                                                <input type="text" class="form-control" id="plan" name="plan_name" placeholder="Plan Name" value="<?php echo $pla['plan_name']; ?>" required>
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

       <?php include"footer.php"; ?>
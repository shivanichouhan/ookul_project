<?php include"header.php";
include"menu.php";
$b=explode('/',$a);
 $_GET['id']=$b['5'];
	$rep=$obj->fetchById($_GET['id'],"ask_question","id");
 ?>            <!-- /.content-wrapper -->
            <div class="content-wrapper">
                <div class="container">
                    <!-- main content -->
                    <div class="content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="mailbox">
                                    <div class="mailbox-header">
                                        <div class="row">
                                            <div class="col-xs-4">
                                              <h4>  Replay</h4>
                                                    
                                               
                                            </div>
                                            <div class="col-xs-8">
                                                <div class="inbox-toolbar btn-toolbar">
                                                    <div class="btn-group">
                                                        <a href="mailbox" class="btn btn-default"><span class="fa fa-long-arrow-left"></span></a>
                                                        <a href="#" class="hidden-xs hidden-sm btn btn-default"><span class="fa fa-reply-all"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mailbox-body">
                                        <div class="row m-0">
                                       <form data-toggle="validator" action="<?php echo $base1; ?>replay_sub.php" method="post" enctype="multipart/form-data">
                                            <div class="col-xs-12 col-sm-12 col-md-9 p-0 inbox-mail p-20">
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-md-2 col-form-label text-right">To :</label>
                                                    <div class="col-sm-9 col-md-10">
													 <input class="form-control" name="user_id" type="hidden"  id="to" value="<?php echo $rep['user_id']; ?>">
                                                        <input class="form-control" type="text"  id="to" value="<?php echo $rep['email']; ?>" name="email">
                                                    </div>
                                                </div>
                                                <!--<div class="form-group row">
                                                    <label class="col-sm-3 col-md-2 col-form-label text-right">Cc :</label>
                                                    <div class="col-sm-9 col-md-10">
                                                        <input class="form-control" type="text" id="cc">
                                                    </div>
                                                </div>-->
                                                <div class="form-group row">
                                                    <label class="col-sm-3 col-md-2 col-form-label text-right">Subject :</label>
                                                    <div class="col-sm-9 col-md-10">
                                                        <input class="form-control" type="text" id="subjejct" value="<?php echo $rep['question']; ?>" name="questions">
                                                    </div>
                                                </div>
                                                 <div class="form-group row">
                                                    <label class="col-sm-3 col-md-2 col-form-label text-right">Subject :</label>
                                                    <div class="col-sm-9 col-md-10">
                                                        <input class="form-control" type="file"  value="" name="img">
                                                    </div>
                                                </div>
                                                <!-- summernote -->
                                                <textarea id="summernote" name="answer"></textarea>
                                                <!--<div class="hidden-xs hidden-sm btn-group">
                                                    <button type="button" class="text-center btn btn-default">DISCARD</button>
                                                    <button type="button" class="btn btn-default">SAVE</button>
                                                </div>-->
                                                <div class="btn-group pull-right">
                                                    <button type="submit" class="btn btn-success">SEND</button>
                                                </div>
                                            </div>
											</form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- /.main content -->
                </div> <!-- /.container -->
            </div> <!-- /.content-wrapper -->
            <!-- start footer -->
       <?php include"footer.php"; ?>
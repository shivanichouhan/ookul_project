<?php 
 include"../include/database.php";
 include"../include/session.php";
  $obj=new database();
  $web_info=$obj->fetchByIdTable("website_details");
   
?>
<!DOCTYPE html>
<html lang="en">
    
<!-- Mirrored from thememinister.com/bootstrap-admin-template/template/theme/adminpage_v1.0/forget_password.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Aug 2018 05:46:28 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php $web_info['web_title']; ?></title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="upload/<?php $web_info['favicon']; ?>" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="assets/dist/img/ico/apple-touch-icon-57-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="assets/dist/img/ico/apple-touch-icon-144-precomposed.png">

        <!-- Bootstrap -->
        <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
        <!-- pe-icon-7-stroke -->
        <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
        <!-- font-awesome -->
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style -->
        <link href="assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/component_ui_rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- Custom css -->
        <link href="assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper" style=" background: -webkit-linear-gradient(left, #ff771c 0%, #ea00ca 50%,#9d09e9 90%);">
            <div class="container-center">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-refresh-2"></i>
                            </div>
                            <div class="header-title">
							<img src="upload/<?php echo $web_info['logo'];?>" style="width: 100px;
					height: 79px; text-align:center; ">
					</br></br>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="forgot_sub.php" method="post" >
                           
                            <div class="form-group">
                                <label class="control-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                    <input id="email" class="form-control" name="email" placeholder="Please enter you email adress" type="email">
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-success btn-block" style="    border-color: #f64565;">Reset password</button>
                            </div>
                        </form>
                    </div><div id="bottom_text">
                   <!-- Don't have an account? <a href="register.html">Sign Up</a><br>-->
                     <a href="index.php">Login</a>
                </div>

            </div>
             </br>
            </br>
            </br>
            </br>
            </br>
            </br></br>
            </br>
            </br>
            </br>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    </body>

<!-- Mirrored from thememinister.com/bootstrap-admin-template/template/theme/adminpage_v1.0/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 09 Aug 2018 05:43:56 GMT -->
</html>
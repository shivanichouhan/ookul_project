<?php 
 include"../include/database.php";
 include"../include/session.php";
 include"isValid.php";
 $obj=new database();
 $admin=$obj->fetchById($_SESSION['admin_id'], "admin","id");
   $web_info=$obj->fetchByIdTable("website_details");
   
 $base="http://educationdisha.in/elearning/admin/";
 $base1="http://educationdisha.in/elearning/admin/";
  $a="http://".$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];
?>

<!DOCTYPE html>
<html lang="en">
    
<head>
        <meta charset="utf-8">
        
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $web_info['web_title']; ?></title>

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="upload/<?php echo $web_info['favicon']; ?>" type="image/x-icon">
        <link rel="apple-touch-icon" type="image/x-icon" href="upload/<?php echo $web_info['favicon']; ?>">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="<?php echo $base1;?>assets/dist/img/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="<?php echo $base1;?>assets/dist/img/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="<?php echo $base1;?>assets/dist/img/ico/apple-touch-icon-144-precomposed.png">

        <!-- Start Global Mandatory Style
        =====================================================================-->
        <link href="<?php echo $base1;?>assets/dist/css/base.css" rel="stylesheet" type="text/css"/>
        <!-- End Global Mandatory Style
        =====================================================================-->
        <!-- Start page Label Plugins 
        =====================================================================-->
        <!-- summernote css -->
        <link href="<?php echo $base1;?>assets/plugins/summernote/summernote.css" rel="stylesheet" type="text/css"/>
        <!-- End page Label Plugins 
        =====================================================================-->
        <!-- Start Theme Layout Style
        =====================================================================-->
        <!-- Theme style -->
        <link href="<?php echo $base1;?>assets/dist/css/component_ui.min.css" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/component_ui_rtl.css" rel="stylesheet" type="text/css"/>-->
        <!-- Custom css -->
        <link href="<?php echo $base1;?>assets/dist/css/custom.css" rel="stylesheet" type="text/css"/>
        <!-- End Theme Layout Style
        =====================================================================-->
    </head>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


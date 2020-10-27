<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];
$heading=$_POST['heading'];
$contant=$_POST['contant'];
$path="upload/";
 if($_FILES['video']['name']=="") { $img=$_POST['limg']; } else { $img=$_FILES['video']['name']; move_uploaded_file($_FILES['video']['tmp_name'],$path.$img); }



$rs=$obj->updatefrount($heading,$contant,$img,$id);
if($rs)
{

		 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Profile Update Success Full');
          window.location.href='https://app.bongosikha.com/admin/front_video_list';
       </script>");
}
else
{

	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Video not update');
          window.location.href='https://app.bongosikha.com/admin/front_video_list';
       </script>");
}
?>
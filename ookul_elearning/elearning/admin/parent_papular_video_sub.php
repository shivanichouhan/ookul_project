<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");


$heading=$_POST['heading'];

$path="upload/";
$thumbnail=$_FILES['thumbnail']['name']; move_uploaded_file($_FILES['thumbnail']['tmp_name'],$path.$thumbnail);


$path2="upload/";
$vedio1=$_FILES['video']['name']; move_uploaded_file($_FILES['video']['tmp_name'],$path2.$vedio1);

$rs=$obj->parent_papular_video($heading,$thumbnail,$vedio1);
if($rs)
{
	
	//$_SESSION['msg']=" Insert  User Success Full";
	//header("location:parent_papular_video.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Insert Success');
          window.location.href='parent_papular_video';
       </script>");
}
else
{
	//$_SESSION['msg']="Insert user  Not Success Full";
//	header("location:parent_papular_video.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Not Success');
          window.location.href='parent_papular_video';
       </script>");
}
?>
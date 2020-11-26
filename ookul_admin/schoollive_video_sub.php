<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");


echo $title=$_POST['title'];


$path="upload/";
$video=$_FILES['video']['name']; move_uploaded_file($_FILES['video']['tmp_name'],$path.$video);
$path1="upload/";
$thumbnail=$_FILES['thumbnail']['name']; move_uploaded_file($_FILES['thumbnail']['tmp_name'],$path1.$thumbnail);
$fstatus="0";

$rs=$obj->insertschoollive($title,$thumbnail,$video,$fstatus);
if($rs)
{
	
//	$_SESSION['msg']=" Insert  User Success Full";
//	header("location:papular_video.php");
		 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Insert   Success Full');
          window.location.href='schoollive_video';
       </script>");
}
else
{
		 echo ("<script LANGUAGE='JavaScript'>
          window.alert('not insert');
          window.location.href='schoollive_video';
       </script>");
}
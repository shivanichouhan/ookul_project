<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");



$days=$_POST['days'];
$topic=$_POST['topic'];
$description=$_POST['description'];

$path2="gov_upload/";
$thumbnail=$_FILES['thumbnail']['name']; move_uploaded_file($_FILES['thumbnail']['tmp_name'],$path2.$thumbnail);


$path1="gov_upload/";
$video=$_FILES['video']['name']; move_uploaded_file($_FILES['video']['tmp_name'],$path1.$video);



$rs=$obj->insert_video_class($days,$topic,$description,$thumbnail,$video);

if($rs)
{
    $assign=1;
	$dayss=$obj->updatedaysss($days,$assign);
	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Insert success');
          window.location.href='video_class.php';
       </script>");
}
else
{
	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Not insert');
          window.location.href='video_class.php';
       </script>");
}



?>
<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");


$subject=$_POST['subject'];
$days=$_POST['days'];
$topic=$_POST['topic'];
$title=$_POST['title'];

$path2="gov_upload/";
$thumbnail=$_FILES['thumbnail']['name']; move_uploaded_file($_FILES['thumbnail']['tmp_name'],$path2.$thumbnail);


$path5="gov_upload/";
 $video=$_FILES['video']['name']; move_uploaded_file($_FILES['video']['tmp_name'],$path5.$video);
// echo $video;
// die();

$rs=$obj->insert_gover_topic($subject,$days,$topic,$thumbnail,$video,$title);

if($rs)
{
	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Insert success');
          window.location.href='gove_assing_list.php';
       </script>");
}
else
{
	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Not insert');
          window.location.href='gove_subject.php';
       </script>");
}



?>
<?php
include"../include/database.php";
$obj=new database();
//$web=$obj->fetchByIdTable("`website_details`");

$id=$_POST['id'];
$subject_id=$_POST['subject_id'];
$chapter_id=$_POST['chapter_id'];
$video_name=$_POST['video_name'];





$path1="optional_upload/";
 if($_FILES['thumbnail']['name']=="") { $thumbnail=$_POST['limg']; } else { $thumbnail=$_FILES['thumbnail']['name']; move_uploaded_file($_FILES['thumbnail']['tmp_name'],$path1.$thumbnail); }

$path11="optional_upload/";
//$vedio1=$_FILES['vedio1']['name']; move_uploaded_file($_FILES['vedio1']['tmp_name'],$path11.$vedio1);
 if($_FILES['video']['name']=="") { $video=$_POST['limg11']; } else { $video=$_FILES['video']['name']; move_uploaded_file($_FILES['video']['tmp_name'],$path11.$video); }

$rs=$obj->update_opt_video($subject_id,$chapter_id,$video_name,$thumbnail,$video,$id);
if($rs)
{
	
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('update success');
          window.location.href='https://app.bongosikha.com/admin/video_list';
       </script>");
}
else
{
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('update not success');
          window.location.href='https://app.bongosikha.com/admin/video_list';
       </script>");
}
?>



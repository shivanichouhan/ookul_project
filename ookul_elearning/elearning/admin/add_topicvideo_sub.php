<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");

$class=$_POST['class'];
$subject=$_POST['subject'];
$chapter=$_POST['chapter'];
$topic=$_POST['topic'];
$video_name=$_POST['video_name'];


$path1="upload/";
$thaminal1=$_FILES['thaminal1']['name']; move_uploaded_file($_FILES['thaminal1']['tmp_name'],$path1.$thaminal1);
$path11="upload/";
$vedio1=$_FILES['vedio1']['name']; move_uploaded_file($_FILES['vedio1']['tmp_name'],$path11.$vedio1);

$rs=$obj->insert_topicwise_video($class,$subject,$chapter,$topic,$video_name,$thaminal1,$vedio1);
if($rs)
{
	
//	$_SESSION['msg']=" Insert  User Success Full";
	//header("location:topic_wise_video.php");
			 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Insert success');
          window.location.href='topic_wise_video.php';
       </script>");
	
}
else
{
//	$_SESSION['msg']="Insert user  Not Success Full";
//	header("location:topic_wise_video.php");
		 echo ("<script LANGUAGE='JavaScript'>
          window.alert('Insert not success');
          window.location.href='topic_wise_video.php';
       </script>");
}
?>


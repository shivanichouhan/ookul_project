<?php
include"../include/database.php";
$obj=new database();
$web=$obj->fetchByIdTable("`website_details`");

 $id=$_POST['id'];
 $class=$_POST['class'];
 $subject=$_POST['subject'];
 $chapter=$_POST['chapter'];
 $topic=$_POST['topic'];
 $contant=$_POST['contant'];


$path2="upload/";

 if($_FILES['topic_pic']['name']=="") { $topic_pic=$_POST['limg2']; } else { $topic_pic=$_FILES['topic_pic']['name']; move_uploaded_file($_FILES['topic_pic']['tmp_name'],$path2.$topic_pic); }

$path="upload/";

 if($_FILES['doucment']['name']=="") { $img=$_POST['limg']; } else { $img=$_FILES['doucment']['name']; move_uploaded_file($_FILES['doucment']['tmp_name'],$path.$img); }
 
 
$path1 = "upload/";
 if($_FILES['video']['name']=="") { $video_path=$_POST['limg1']; } else { $video_path=$_FILES['video']['name']; move_uploaded_file($_FILES['video']['tmp_name'],$path1.$video_path); }


$rs=$obj->demo_update_topic($class,$subject,$chapter,$topic,$topic_pic,$img,$video_path,$contant,$id);

if($rs)
{
	//$_SESSION['msg']=" Topic uploaded ";
//	header("location:demo_topic_list.php");
	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('update Success Full');
          window.location.href='demo_topic_list';
       </script>");
}
else
{
//	$_SESSION['msg']=" Not insert";
//	header("location:demo_topic_list.php");
	 echo ("<script LANGUAGE='JavaScript'>
          window.alert('update Success Full');
          window.location.href='demo_topic_list';
       </script>");



}


?>
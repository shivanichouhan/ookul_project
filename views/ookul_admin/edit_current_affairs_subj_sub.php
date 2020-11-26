<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];
 $subject_name=$_POST['subject_name']; 
  $path1="gov_upload/";
$image=$_FILES['image']['name']; move_uploaded_file($_FILES['image']['name'],$path1.$image); 

$rs=$obj->update_current_affairs_subj($subject_name,$image,$id);
if($rs)
{
	$_SESSION['msg']=" Insert Success Full";
	header("location:current_affairs_subj_list.php");
}
else
{
	$_SESSION['msg']=" Not Insert";
	header("location:current_affairs_subj_list.php");
}
?>
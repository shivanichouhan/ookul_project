<?php
include"../include/database.php";
$obj=new database();

$id=$_POST['id'];

$class_id=$_POST['class_id'];
$contant=$_POST['contant'];

$path="upload/";
 if($_FILES['video']['name']=="") { $img=$_POST['limg']; } else { $img=$_FILES['video']['name']; move_uploaded_file($_FILES['video']['tmp_name'],$path.$img); }



$rs=$obj->updatecontant($class_id,$contant,$img,$id);
if($rs)
{
	$_SESSION['msg']="Profile Update Success Full";
	header("location:contant_list.php");
}
else
{
	$_SESSION['msg']="Profile  Not Update";
	header("location:contant_list.php");
}
?>
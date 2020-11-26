<?php
include"../include/database.php";
$obj=new database();
 $id=$_POST['id'];
$class=$_POST['class'];
$subject=$_POST['subject'];
$path="upload/Virtual_lab/";
// $img=$_FILES['image']['name']; move_uploaded_file($_FILES['image']['tmp_name'],$path.$img);

 if($_FILES['image']['name']=="") { $image=$_POST['limg2']; } else { $image=$_FILES['image']['name']; move_uploaded_file($_FILES['image']['tmp_name'],$path.$image); }

$rs=$obj->virtual_lab_subject_update($class,$subject,$image,$id);
if($rs)
{
//	$_SESSION['msg']=" Insert Success Full";
//	header("location:add_subject.php");
	
		echo ("<script LANGUAGE='JavaScript'>
          window.alert('Update Success Full');
          window.location.href='virtual_subject_list.php';
       </script>");
}
else
{
//	$_SESSION['msg']=" Not Insert";
//	header("location:add_subject.php");
	echo ("<script LANGUAGE='JavaScript'>
          window.alert('Not Success Full');
          window.location.href='virtual_subject_list.php';
       </script>");
}
?>